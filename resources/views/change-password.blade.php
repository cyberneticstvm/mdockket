@extends("base")
@section("content")
<div class="page-content">
    
    <!-- Banner -->
    <div class="banner-wrapper shape-1">
        <div class="container inner-wrapper">
            <h2 class="dz-title">Forgot Password</h2>
            <p class="mb-0">Please enter your Password</p>
        </div>
    </div>
    <!-- Banner -->
    <div class="account-box">
        <div class="container">
            <div class="account-area">
                <form method="post" action="{{ route('updatepassword') }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}" />
                    <input type="hidden" name="token" value="{{ $user->email_token }}" />
                    <div class="mb-3 input-group input-mini">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="New Password" name="password">
                        @error('password')
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 input-group input-mini">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                        @error('password_confirmation')
                        <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                        @enderror
                    </div>
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <div class="input-group">
                        <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">SUBMIT</button>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</div>
<!-- Page Content End -->

<!-- Footer -->
<footer class="footer fixed">
    <div class="container">
        <a href="/login/P" class="btn btn-primary light btn-rounded text-primary d-block">SIGN IN</a>
    </div>
</footer>
<!-- Footer End -->
@endsection