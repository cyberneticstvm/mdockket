<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Hash;
use Session;
use DB;
use Mail;

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
        $token = Str::random(64);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['email_token'] = $token;
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

    public function forgot(){
        return view('forgot');
    }

    public function forgotemail(Request $request){
        $this->validate($request, [
            'email' => 'required|email:filter',
        ]);
        $user = User::where('email', $request->email)->first();
        if($user):
            Mail::send('email.password-reset', ['user' => $user], function($message) use($request){
                $message->to($request->email);
                $message->subject('Dockket - Password Reset Link');
            });        
            return redirect()->route('forgot')->with('success','Password chnage link has been sent to your registered email successfully. Please check your inbox/spam folder and click the password change link.');
        else:
            return redirect()->route('forgot')->with('error','Provided email id could not found in the records. Please try with another email id.')->withInput($request->all());
        endif;
    }

    public function resetpassword($token){
        $user = User::where('email_token', $token)->first();
        if($user):
            return view('change-password', compact('user'));
        else:
            return view('error');
        endif;
    }

    public function updatepassword(Request $request){
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
            'token' => 'required',
        ]);
        $password = Hash::make($request->password);
        try{
            User::where('email_token', $request->token)->where('id', $request->user_id)->update(['password' => $password]);
        }catch(Exception $e){
            throw $e;
        }
        return redirect()->back()
                        ->with('success', "You've successfully updated your password. Please Login to continue.");
    }

    public function error(){
        return view('error');
    }
}
