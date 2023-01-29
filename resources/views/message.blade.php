@extends("base")
@section("content")
<!-- Page Content -->
<div class="page-content">
    <div class="container fb">    
        <!-- Banner -->
        <div class="banner-wrapper">
            <div class="circle-1"></div>
            <div class="container inner-wrapper">
                <h1 class="dz-title">Dockket</h1>
                <p class="mb-0">Doctor Booking App</p>
            </div>
        </div>
        <!-- Banner End -->
        <div class="row mt-3">
            <div class="col-12">
                <div class="card bg-light">
                    <div class="card-header">
                        <h5 class="card-title">Success!</h5>
                    </div>
                    <div class="card-body mb-0">
                        @if($type == 'A')
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Appointment Details</h4>
                            <p class="card-text mb-2">Hi {{ $app->patient_name }}, Thank you for choosing <a target="_blank" href='https://dockket.in'>Dockket</a>. Your Appintment Details as follows. Please keep this details in a safe place.</p>
                            <p><strong>Doctor Name:</strong> {{ $user->name }} <br>
                            <strong>Doctor Address/Location:</strong> {{ $doctor->consultation_address }} <br>
                            <strong>Appointment Date:</strong> {{ date('d, M Y', strtotime($app->appointment_date)) }} <br>
                            <strong>Appointment Time:</strong> {{ date('h:i A', strtotime($app->appointment_time)) }} *</p>

                            <small>* time may vary depends on consultation time taken for a patient.</small>
                        @elseif($type == 'S')
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Service Details</h4>
                            <p class="card-text mb-2">Hi {{ $service->patient_name }}, Thank you for choosing <a target="_blank" href='https://dockket.in'>Dockket</a>. Your Service Details as follows. Please keep this details in a safe place.</p>
                            <p><strong>Service Name:</strong> {{ $sname }} <br>
                            <strong>Clinic Name:</strong> {{ $user->name }} <br>
                            <strong>Clinic Address/Location:</strong> {{ $clinic->address }} <br>
                            <strong>Contact Number:</strong> {{ $clinic->mobile }} <br>
                            <strong>Service Date:</strong> {{ date('d, M Y', strtotime($service->service_date)) }} <br>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content End -->
<!-- Footer -->
<footer class="footer fixed">
    <div class="container">
        <a href="/patient/doctorapp" class="btn btn-transparent btn-rounded d-block">MAKE ANOTHER APPOINTMENT</a>
    </div>
</footer>
<!-- Footer End -->
@endsection