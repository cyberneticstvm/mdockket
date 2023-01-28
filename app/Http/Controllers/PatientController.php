<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use Session;
use DB;

class PatientController extends Controller
{
    public function profile(){
        $patient = User::find(Auth::user()->id);
        return view('patient.profile', compact('patient'));
    }

    public function doctorapp(){
        $specs = DB::table('specializations')->where('category', 1)->orderBy('name')->get();
        $apps = []; $input = [];
        return view('patient.doctor', compact('specs', 'apps', 'input'));
    }

    public function doctorappointment(Request $request){
        $this->validate($request, [
            'spec' => 'required',
            'location' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'radius' => 'required|numeric',
            'date' => 'required',
        ]);
        $specs = DB::table('specializations')->where('category', 1)->orderBy('name')->get();
        $input = array($request->spec, $request->location, $request->latitude, $request->longitude, $request->radius, $request->date);
        $apps = DB::select("SELECT u.name AS docname, d.id, d.doctor_id AS docid, d.photo, d.designation, d.con_latitude, d.con_longitude, z.name AS spec, d.consultation_address, b.name AS bname, DATE_ADD(CURRENT_DATE(), INTERVAL s.appointment_open_days DAY) AS next_available, s.fee, s.slots, s.time_per_appointment, TIME_FORMAT(s.appointment_end_time, '%H:%i') AS etime, CASE WHEN ? = CURRENT_DATE() AND TIME_FORMAT(s.appointment_start_time, '%H:%i') < TIME_FORMAT(?, '%H:%i') THEN TIME_FORMAT(DATE_ADD(?, INTERVAL 60 MINUTE), '%H:00') ELSE TIME_FORMAT(s.appointment_start_time, '%H:%i') END AS stime, s.break_start_time AS bstime, s.break_end_time AS betime, 6371 * acos( cos( radians(?) ) * cos( radians( d.con_latitude ) ) * cos( radians( d.con_longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( d.con_latitude ) ) ) AS distance_km FROM doctors d JOIN users u ON u.id=d.user_id JOIN doctor_settings s ON d.id = s.doctor_id LEFT JOIN specializations as z ON z.id = d.spec LEFT JOIN branches AS b ON b.id = d.branch WHERE d.status = 'A' AND s.available_for_appointment = 1 AND IF(? = 0, 1, d.spec = ?) AND d.id NOT IN(SELECT DISTINCT(doctor_id) FROM doctor_leaves WHERE leave_date=?) HAVING next_available <= ? AND distance_km <= ? ORDER BY distance_km ASC", [$request->date, Carbon::now(), Carbon::now(), $request->latitude, $request->longitude, $request->latitude, $request->spec, $request->spec, $request->date, $request->date, $request->radius]);
        return view('patient.doctor', compact('apps', 'input', 'specs'));
    }

    public function clinicapp(){
        $specs = DB::table('specializations')->where('category', 2)->orderBy('name')->get();
        $apps = []; $input = [];
        return view('patient.clinic', compact('specs', 'apps', 'input'));
    }

    public function clinicappointment(Request $request){

    }
}
