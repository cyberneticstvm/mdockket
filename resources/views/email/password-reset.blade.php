<h1>Dockket Password Reset Link</h1>

Dear {{ $user->name }},<br>
Please verify your email by clicking below link: <br>
<a href="{{ route('resetpassword', $user->email_token) }}">Reset Password</a><br><br>
<p>Team Dockket</p>