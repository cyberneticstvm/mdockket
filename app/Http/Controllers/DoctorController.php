<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\DoctorSettings;
use App\Models\Specialization;
use Carbon\Carbon;
use Hash;
use Session;
use DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(){
        $user = User::find(Auth::user()->id);
        $specs = Specialization::where('category', 1)->get();
        return view('doctor.profile', compact('user', 'specs'));
    }

    public function profileupdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:filter|unique:users,email,'.$id,
            'mobile' => 'required|numeric|min:10',
            'consultation_address' => 'required',
            'spec' => 'required',
        ]);
        $input = $request->all();        
        DB::transaction(function() use ($id, $input, $request) {
            $user = User::find($id);
            $user->update($input);
            Doctor::where('user_id', $id)->update(['mobile' => $request->mobile, 'consultation_address' => $request->consultation_address, 'con_latitude' => $request->con_latitude, 'con_longitude' => $request->con_longitude, 'spec' => $request->spec]);
        });        
        return redirect()->route('doctor.profile')->with('success','Profile updated successfully');
    }

    public function settings()
    {
        $start = strtotime("06:00"); $end = strtotime("22:00");
        $doctor = Doctor::where('user_id', Auth::user()->id)->first();        
        if($doctor):
            $settings = DoctorSettings::selectRaw("*, TIME_FORMAT(appointment_start_time, '%h:%i %p') AS stime, TIME_FORMAT(break_start_time, '%h:%i %p') AS bstime, TIME_FORMAT(break_end_time, '%h:%i %p') AS betime")->where('doctor_id', $doctor->id)->first();
            return view('doctor.settings', compact('start', 'end', 'doctor', 'settings'));
        else:
            return redirect()->route('doctor.profile')->with('success','Please update profile first to view settings.');
        endif;
    }

    public function getBreakTime(Request $request){
        $from = strtotime($request->cstart); $dur = $request->dur;
        $mins = $request->slots*$request->dur; //$end = strtotime("22:00");
        $end = Carbon::createFromFormat('h:i A', $request->cstart)->addMinutes($mins)->format('H:i');
        $end = strtotime($end); $bstart = strtotime($request->bstart);
        $op = "<option value=''>Select</option>"; $op1 = "<option value=''>Select</option>";
        while($from <= $end):                                           
            $op .= "<option value='".date('h:i A', $from)."'>".date('h:i A', $from)."</option>";
            $from = strtotime('+'.$dur.' minutes', $from);
        endwhile;
        $bstart = strtotime('+'.$dur.' minutes', $bstart);
        while($bstart <= $end):                                           
            $op1 .= "<option value='".date('h:i A', $bstart)."'>".date('h:i A', $bstart)."</option>";
            $bstart = strtotime('+'.$dur.' minutes', $bstart);
        endwhile;
        echo json_encode(array("bs" => $op, "be" => $op1));
    }

    public function settingsupdate(Request $request, $id){
        $this->validate($request, [
            'fee' => 'required|numeric',
            'slots' => 'required|numeric',
            'time_per_appointment' => 'required|numeric',
            'appointment_start_time' => 'required',
            'appointment_open_days' => 'required',
        ]);
        $pwd = ($request->password) ? Hash::make($request->password) : NULL; $mins = $request->slots*$request->time_per_appointment;
        $input = $request->except(array('_token', 'password'));
        $input['appointment_start_time'] = ($request->appointment_start_time) ? Carbon::createFromFormat('h:i A', $request->appointment_start_time)->format('H:i:s') : '00:00';
        //$input['appointment_end_time'] = Carbon::createFromFormat('h:i A', date('h:i A', strtotime("22:30")))->format('H:i:s');
        $input['appointment_end_time'] = Carbon::createFromFormat('h:i A', $request->appointment_start_time)->addMinutes($mins)->format('H:i:s');
        $input['break_start_time'] = ($request->break_start_time) ? Carbon::createFromFormat('h:i A', $request->break_start_time)->format('H:i:s') : '00:00';
        $input['break_end_time'] = ($request->break_end_time) ? Carbon::createFromFormat('h:i A', $request->break_end_time)->format('H:i:s') : '00:00';
        $input['available_for_appointment'] = isset($request->available_for_appointment) ? $request->available_for_appointment : 0;

        if(($input['break_start_time'] > $input['break_end_time']) || ($input['break_start_time'] < $input['appointment_start_time'])):
            return redirect()->route('doctor.settings')->with('error','Break end time should not be greater than Break start time or Appointment start time')->withInput($request->all());
        else:
            try{
                DoctorSettings::upsert($input, 'doctor_id');
                if($pwd)
                    $upd = DB::table('users')->where('id', Auth::user()->id)->update(['password' => $pwd]);           
            }catch(Exception $e){
                throw $e;
            }
            return redirect()->route('doctor.settings')->with('success','Settings updated successfully');
        endif;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leaves()
    {
        $doctor = Doctor::where('user_id', Auth::user()->id)->first();
        if($doctor):
            $leaves_past = DB::table('doctor_leaves')->selectRaw("DATE_FORMAT(leave_date, '%d/%b/%Y') AS ldate")->where('doctor_id', $doctor->id)->whereDate('leave_date', '<', Carbon::today())->orderByDesc('leave_date')->get();
            $leaves_present = DB::table('doctor_leaves')->selectRaw("DATE_FORMAT(leave_date, '%d/%b/%Y') AS ldate")->where('doctor_id', $doctor->id)->whereDate('leave_date', '>=', Carbon::today())->orderByDesc('leave_date')->get();
            return view('doctor.leaves', compact('doctor', 'leaves_past', 'leaves_present'));
        else:
            return redirect()->route('doctor.profile')->with('success','Please update profile first to view settings.');
        endif;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function leavesupdate(Request $request, $id)
    {
        $this->validate($request, [
            'leave_date' => 'required',
        ]);
        $input = $request->all();
        try{
            $ap = Appointment::whereDate('appointment_date', $request->leave_date)->where('doctor_id', $id)->get();
            $ap1 = DB::table('doctor_leaves')->whereDate('leave_date', $request->leave_date)->where('doctor_id', $id)->first();
            if($ap->isNotEmpty()):
                return redirect()->route('doctor.leaves')->with('error','Oops! You have appointments on provided date.');
            elseif($ap1):
                return redirect()->route('doctor.leaves')->with('error','Oops! You have already leave marked on provided date.');
            else:
                DB::table('doctor_leaves')->insert(['doctor_id' => $id, 'leave_date' => $request->leave_date, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
                return redirect()->route('doctor.leaves')->with('success','Leaves updated successfully');
            endif;      
        }catch(Exception $e){
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function appointments()
    {
        $doctor = Doctor::where('user_id', Auth::user()->id)->first();
        $settings = ($doctor) ? DoctorSettings::where('doctor_id', $doctor->id)->selectRaw("TIME_FORMAT(appointment_start_time, '%H:%i') AS stime, TIME_FORMAT(appointment_end_time, '%H:%i') AS etime, time_per_appointment, slots, break_start_time AS bstime, break_end_time AS betime")->first() : [];
        if($doctor && $settings):
            $apps = Appointment::where('doctor_id', $doctor->id)->selectRaw("TIME_FORMAT(appointment_time, '%h:%i %p') AS appointment_time, patient_name, mobile")->whereDate('appointment_date', Carbon::today())->get();
            return view('doctor.appointments', compact('doctor', 'settings', 'apps'));
        else:
            return redirect()->route('doctor.profile')->with('success','Please update profile and settings first to view settings.');
        endif;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function saveappointments(Request $request)
    {
        $this->validate($request, [
            'appointments' => 'present|array'
        ]);
        $doctor = Doctor::where('user_id', Auth::user()->id)->first();
        foreach($request->appointments as $key => $app):
            $token = Appointment::where('doctor_id', $doctor->id)->whereDate('appointment_date', Carbon::today())->max('token');
            $atime = ($app) ? Carbon::createFromFormat('h:i A', $app)->format('H:i:s') : '00:00';
            $data = [
                'patient_name' => Auth::user()->name,
                'mobile' => $doctor->mobile,
                'branch' => 1,
                'spec' => $doctor->spec,
                'doctor_id' => $doctor->id,
                'appointment_date' => Carbon::today(),
                'appointment_time' => $atime,
                'slot' => 0,
                'token' => ($token > 0) ? $token+1 : 1,
                'user_id' => $doctor->user_id,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
            Appointment::create($data);
        endforeach;
        return redirect()->route('doctor.appointments')->with('success','Slots blocked successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reports(){
        $doctor = Doctor::where('user_id', Auth::user()->id)->first();
        $apps = []; $inputs = [];
        return view('doctor.reports', compact('doctor', 'apps', 'inputs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAppointmentSummary(Request $request){
        $this->validate($request, [
            'from_date' => 'required',
            'to_date' => 'required',
        ]);
        $inputs = array($request->from_date, $request->to_date);
        //$from = (!empty($request->from_date)) ? Carbon::createFromFormat('dd-mm-yyyy', $request->from_date)->format('Y-m-d') : NULL;
        //$to = (!empty($request->to_date)) ? Carbon::createFromFormat('dd-mm-yyyy', $request->to_date)->format('Y-m-d') : NULL;
        $doctor = Doctor::where('user_id', Auth::user()->id)->first();
        $apps = Appointment::selectRaw("patient_name, mobile, DATE_FORMAT(appointment_date, '%d/%b/%Y') AS adate, TIME_FORMAT(appointment_time, '%h:%i %p') AS atime")->where('doctor_id', $doctor->id)->whereBetween('appointment_date', [$request->from_date, $request->to_date])->orderByDesc('appointment_date')->get();
        return view('doctor.reports', compact('doctor', 'apps', 'inputs'));
    }
}
