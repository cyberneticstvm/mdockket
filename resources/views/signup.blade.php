@extends("base")
@section("content")
<!-- Page Content -->
<div class="page-content">
    
    <!-- Banner -->
    <div class="banner-wrapper">
        <div class="circle-1"></div>
        <div class="container inner-wrapper">
            <div class="welcome-logo text-center">
                <img src="{{ public_path().'/assets/dockket/dockket-icon-transparent.png' }}" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- Banner End -->
    
    <div class="account-box">
        <div class="container">
            <div class="account-area">
                <h3 class="title">Create your account</h3>
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
                <form class="input-style" method="post" action="{{ route('register') }}">
                    @csrf
                    <input type="hidden" name="user_type" value="{{ $type }}" />
                    <div class="input-group input-mini mb-3">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
                        @error('name')
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 input-group input-mini">
                        <span class="input-group-text"><i class="fa fa-at"></i></span>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 input-group input-mini">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control dz-password" placeholder="Password" name="password">
                        <span class="input-group-text show-pass"> 
                            <i class="fa fa-eye-slash"></i>
                            <i class="fa fa-eye"></i>
                        </span>
                        @error('password')
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 input-group input-mini">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control dz-password" placeholder="Confirm Password" name="password_confirmation">
                        <span class="input-group-text show-pass"> 
                            <i class="fa fa-eye-slash"></i>
                            <i class="fa fa-eye"></i>
                        </span>
                        @error('password_confirmation')
                        <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckChecked" name="terms" value="1">
                            <label class="form-check-label" for="flexCheckChecked">
                                By tapping “Sign Up” you accept our <a href="javascript:void(0);" class="text-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">terms</a> and <a href="javascript:void(0);" class="text-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Condition</a>
                            </label>
                            @error('terms')
                            <small class="text-danger">{{ $errors->first('terms') }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">SIGN UP</button>
                    </div>
                </form>  
                <div class="text-center mb-auto p-tb20">
                    <a href="/login/{{$type}}" class="saprate">Already have account?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content End -->

<!-- Footer -->
<footer class="footer fixed">
    <div class="container">
        <a href="/login/{{$type}}" class="btn btn-transparent btn-rounded d-block">SIGN IN</a>
    </div>
</footer>
<!-- Footer End -->
<!-- CART -->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom2">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
        <i class="fa-solid fa-xmark"></i>
    </button>
    <div class="offcanvas-body">
        <h4 class="title border-bottom pb-2 mb-2">Terms & Condition</h4>
        <p class="mb-0">Lorem ipsum dolor sit amet const Lorem ipsum dolor sit amet const Lorem ipsum dolor sit amet const Lorem ipsum dolor sit amet const.</p>
    </div>
</div>
<!-- CART -->
@endsection