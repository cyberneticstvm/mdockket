@extends("base")
@section("content")
<!-- Welcome Start -->
<div class="content-body">
	<div class="container vh-100">
		<div class="welcome-area">
			<div class="welcome-logo">
				<img src="{{ public_path().'/assets/dockket/dockket-logo.png' }}">
				<div class="get-started">Your health care token<div>
			</div>
			<div class="join-area">
				<div class="started">
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
				<a href="/login/P" class="welcome-box h-auto mt-5">
					<div class="d-flex align-items-center">
						<img src="{{ public_path().'/assets/images/welcome/man.png' }}" alt="">
						<div class="ms-2">
							<h5>CLIENT</h5>
							<p>Find a Doctor or Book a Homecare service here easier.</p>
						</div>
					</div>
				</a>
				<div class="row" style="bottom:2%; position:fixed;">
					<div class="col">
						<a href="/login/D" class="welcome-box h-auto">
							<div class="align-items-center">
								<img src="{{ public_path().'/assets/dockket/doctor.png' }}" alt="">
								<div class="ms-2">
									<h5>DOCTOR</h5>
									<p>Manage your appointments.</p>
								</div>
							</div>    
						</a>
					</div>
					<div class="col">
						<a href="/login/C" class="welcome-box h-auto">
							<div class="align-items-center">
								<img src="{{ public_path().'/assets/dockket/homecare.webp' }}" alt="">
								<div class="ms-2">
									<h5>HOMECARE</h5>
									<p>Manage your home services.</p>
								</div>
							</div>    
						</a>
					</div>
				</div>			
			</div>
		</div>
	</div>
</div>
<!-- Welcome End -->
@endsection