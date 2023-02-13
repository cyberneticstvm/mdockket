<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clinic;
use App\Models\Specialization;
use Carbon\Carbon;
use Hash;
use Session;
use DB;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(){
        $user = User::find(Auth::user()->id);
        return view('clinic.profile', compact('user'));
    }

    public function profileupdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:filter|unique:users,email,'.$id,
            'mobile' => 'required|numeric|min:10',
            'address' => 'required',
        ]);
        $input = $request->except(array('_token', 'email', 'name'));       
        DB::transaction(function() use ($id, $input, $request) {            
            User::where('id', $id)->update(['name' => $request->name, 'email' => $request->email, 'mobile' => $request->mobile]);
            Clinic::upsert($input, 'user_id');
        });        
        return redirect()->route('clinic.profile')->with('success','Profile updated successfully');
    }

    public function requests()
    {
        $clinic = Clinic::where('user_id', Auth::user()->id)->first();
        if($clinic):
            $requests = DB::table('service_requests as sr')->leftJoin('specializations as s', 's.id', '=', 'sr.service_id')->selectRaw("sr.*, s.name as sname, CASE WHEN sr.status = 'P' THEN 'Pending' ELSE 'Completed' END AS st")->whereDate('service_date', Carbon::today())->where('clinic_id', $clinic->id)->orderByDesc('status')->get();
            $inputs = [];
            return view('clinic.requests', compact('requests', 'inputs', 'clinic'));
        else:
            return redirect()->route('clinic.profile')->with('success','Please update profile first to view requests.');
        endif;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function services(){
        $clinic = Clinic::where('user_id', Auth::user()->id)->first();
        $services = Specialization::where('category', 2)->get();
        $clinic_services = ($clinic) ? DB::table('clinic_services')->where('clinic_id', $clinic->id)->get() : [];
        if($clinic):
            return view('clinic.services', compact('services', 'clinic_services', 'clinic'));
        else:
            return redirect()->route('clinic.profile')->with('success','Please update profile first to view services.');
        endif;
    }

    public function servicesUpdate(Request $request){
        $clinic = Clinic::where('user_id', Auth::user()->id)->first();
        $this->validate($request, [
            'service' => 'present|array',
        ]);
        $services = $request->service;
        try{
            foreach($services as $key => $service):
                $data[] = [
                    'clinic_id' => $clinic->id,
                    'service_id' => $services[$key],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            endforeach;
            DB::transaction(function() use ($data, $clinic) {
                DB::table("clinic_services")->where('clinic_id', $clinic->id)->delete();
                DB::table('clinic_services')->insert($data);
            });
            return redirect()->route('clinic.services')->with('success','Services updated successfully.');        
        }catch(Exception $e){
            throw $e;
        }        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reports(){
        $inputs = []; $requests = [];
        return view('clinic.reports', compact('inputs', 'requests'));
    }

    public function fetchreports(Request $request){
        $clinic = Clinic::where('user_id', Auth::user()->id)->first();
        $this->validate($request, [
            'from_date' => 'required',
            'to_date' => 'required',
        ]);
        $inputs = array($request->from_date, $request->to_date);
        if($clinic):
            $apps = DB::table('service_requests as sr')->leftJoin('specializations as s', 's.id', '=', 'sr.service_id')->selectRaw("sr.*, s.name as sname, CASE WHEN sr.status = 'P' THEN 'Pending' ELSE 'Completed' END AS st, DATE_FORMAT(sr.service_date, '%d/%b/%Y') AS serdate")->whereBetween('service_date', [$request->from_date, $request->to_date])->where('clinic_id', $clinic->id)->orderByDesc('status')->get();
            return view('clinic.reports', compact('requests', 'inputs'));
        else:
            return redirect()->route('clinic.profile')->with('success','Please update profile first to view reports.');
        endif;       
    }

    public function updateClinicRequestStatus(Request $request){
        $rid = $request->rid; $val = $request->val;
        DB::table('service_requests')->where('id', $rid)->update(['status' => $val]);
        echo "Status Updated Successfully!";
    }
}
