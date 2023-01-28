<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use Session;
use DB;

class AuthController extends Controller
{

    public function login($type){
        $type = $type;
        if(Auth::user()):
            $user = User::find(Auth::user()->id);
            if($user->user_type == 'A'):
                return redirect()->route('admin.profile')->with("success", "You are logged in successfully.");
            endif;
            if($user->user_type == 'P'):
                return redirect()->route('patient.profile')->with("success", "You are logged in successfully.");
            endif;
            if($user->user_type == 'D'):
                return redirect()->route('doctor.profile')->with("success", "You are logged in successfully.");
            endif;
            if($user->user_type == 'C'):
                return redirect()->route('clinic.profile')->with("success", "You are logged in successfully.");
            endif;
        else:
            return view('login', compact('type'));
        endif;
    }

    public function authenticate(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email', 'password');
        if(!Auth::validate($credentials)):
            return back()->with('error','Your Email and Password combination is wrong.')->withInput($request->all());
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user, $request->get('remember'));
        if($user->user_type == 'A'):
            return redirect()->route('admin.profile')->with("success", "You are logged in successfully.");
        endif;
        if($user->user_type == 'P'):
            return redirect()->route('patient.profile')->with("success", "You are logged in successfully.");
        endif;
        if($user->user_type == 'D'):
            return redirect()->route('doctor.profile')->with("success", "You are logged in successfully.");
        endif;
        if($user->user_type == 'C'):
            return redirect()->route('clinic.profile')->with("success", "You are logged in successfully.");
        endif;
    }

    public function signup($type){
        $type = $type;
        if(Auth::user()):
            $this->redirectuser();
        else:
            return view('signup', compact('type'));
        endif;
    }

    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:filter|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'terms' => 'required',
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        Auth::login($user);
        if($user->user_type == 'A'):
            return redirect()->route('admin.profile')->with("success", "Congrats. Your registration was successful!");
        endif;
        if($user->user_type == 'P'):
            return redirect()->route('patient.profile')->with("success", "Congrats. Your registration was successful!");
        endif;
        if($user->user_type == 'D'):
            return redirect()->route('doctor.profile')->with("success", "Congrats. Your registration was successful!");
        endif;
        if($user->user_type == 'C'):
            return redirect()->route('clinic.profile')->with("success", "Congrats. Your registration was successful!");
        endif;
    }

    public function logout(){
        Session::flush();
        Auth::logout();  
        return redirect('/')->with("success", "You've logged out successfully!");
    }
}
