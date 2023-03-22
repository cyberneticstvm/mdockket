@extends("base")
@section("content")
    <!-- Page Content -->
    <div class="page-content">
        
        <!-- Banner -->
        <div class="banner-wrapper">
            <div class="circle-1"></div>
            <div class="container inner-wrapper">
                <div class="welcome-logo">
                    <img src="{{ public_path().'/assets/dockket/dockket-icon.png' }}" class="img-fluid">
                    <div class="get-started">Your health care token<div>
                </div>
            </div>
        </div>
        <!-- Banner End -->
        <div class="account-box">
            <div class="container">
                <div class="account-area">
                    <h3 class="title">Welcome back</h3>
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
					<form method="post" action="{{ route('authenticate') }}">
                        @csrf
						<div class="input-group input-mini mb-3">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>
							<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                            @enderror
						</div>
						<div class="mb-3 input-group input-mini">
							<span class="input-group-text"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control dz-password" name="password" placeholder="Password">
							<span class="input-group-text show-pass"> 
								<i class="fa fa-eye-slash"></i>
								<i class="fa fa-eye"></i>
							</span>
                            @error('password')
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                            @enderror
						</div>
                        <div class="d-flex justify-content-between align-items-center">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="remember" value="1" id="flexCheckChecked">
								<label class="form-check-label" for="flexCheckChecked">
									Keep Sign In
								</label>
							</div>
						</div>
						<div class="input-group">
                            <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">SIGN IN</button>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<a href="/forgot" class="btn-link">Forgot password?</a>
						</div>
					</form>  
                    <div class="text-center mb-auto p-tb20">
                        <a href="/signup/{{$type}}" class="saprate">Don’t have an account?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content End -->
    
    <!-- Footer -->
    <footer class="footer fixed">
        <div class="container">
            <a href="/signup/{{$type}}" class="btn btn-transparent btn-rounded d-block">CREATE AN ACCOUNT</a>
        </div>
    </footer>
    <!-- Footer End -->
@endsection