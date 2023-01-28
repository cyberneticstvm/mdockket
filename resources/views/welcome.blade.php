@extends("base")
@section("content")
<!-- Welcome Start -->
<div class="content-body">
	<div class="container vh-100">
		<div class="welcome-area">
			<div class="welcome-logo">
				<img src="{{ public_path().'/assets/dockket/stethoscope.jpg' }}">
				<div class="get-started">
					<h1 class="dz-title">Dockket</h1>
				</div>
			</div>
			<div class="join-area">
				<div class="started">
					<h2>Continue as</h2>
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
				<a href="/login/P" class="welcome-box h-auto">
					<div class="d-flex align-items-center">
						<img src="{{ public_path().'/assets/images/welcome/man.png' }}" alt="">
						<div class="ms-2">
							<h5>CUSTOMER</h5>
							<p>Find a Doctor or Book a Homecare service here easier.</p>
						</div>
					</div>
				</a>
				<a href="/login/D" class="welcome-box h-auto">
					<div class="d-flex align-items-center">
						<img src="{{ public_path().'/assets/dockket/doctor.png' }}" alt="">
						<div class="ms-2">
							<h5>DOCTOR</h5>
							<p>Create an account and manage appointments & slots.</p>
						</div>
					</div>    
				</a>
				<a href="/login/C" class="welcome-box h-auto">
					<div class="d-flex align-items-center">
						<img src="{{ public_path().'/assets/dockket/homecare.webp' }}" alt="">
						<div class="ms-2">
							<h5>HOMECARE / CLINIC</h5>
							<p>Create an account and manage service requests.</p>
						</div>
					</div>    
				</a>
			</div>
		</div>
	</div>
</div>
<!-- Welcome End -->
@endsection