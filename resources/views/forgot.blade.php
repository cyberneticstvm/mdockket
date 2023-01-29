@extends("base")
@section("content")
<!-- Page Content -->
<div class="page-content">
    
    <!-- Banner -->
    <div class="banner-wrapper shape-1">
        <div class="container inner-wrapper">
            <h2 class="dz-title">Forgot Password</h2>
            <p class="mb-0">Please enter your Email ID registered with us. We will send a password reset link to your email.</p>
        </div>
    </div>
    <!-- Banner -->
    <div class="account-box">
        <div class="container">
            <div class="account-area">
                <form method="post" action="{{ route('forgot') }}">
                    @csrf
                    <div class="mb-3 input-group input-mini">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                        @enderror
                    </div>
                    <div>
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
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">SEND EMAIL</button>
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
        <a href="/login/p" class="btn btn-primary light btn-rounded text-primary d-block">SIGN IN</a>
        </div>
</footer>
<!-- Footer End -->
 @endsection