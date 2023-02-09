@extends("patient.base")
@section("content")
<!-- Page Content -->
<div class="page-content fb">
    <!-- Banner -->
    <div class="banner-wrapper">
        <div class="circle-1"></div>
        <div class="container inner-wrapper">
            <h1 class="dz-title">Dockket</h1>
            <p class="mb-0">Doctor Booking App</p>
        </div>
    </div>
    <!-- Banner End -->
    <div class="account-box">
        <div class="container">
            <div class="">
                <h3 class="title text-center mb-3">Book a Home Service</h3>
                <form class="input-style" method="post" action="{{ route('patient.clinicappointment') }}">
                    @csrf
                    <div class="input-group input-mini mb-3">
                        <select class="form-control" name="serv">
                            <option value="">Select Service Type</option>
                            <option value="0">All</option>
                            @forelse($services as $key => $serv)
                            <option value="{{ $serv->id }}" {{ ($input && $input[0] == $serv->id) ? 'selected' : '' }}>{{ $serv->name }}</option>
                            @empty
                            @endforelse
                        </select>
                        @error('name')
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                        @enderror
                    </div>
                    <a href="javascript:pickmylocation()">Pick My Location</a>
                    <div class="mb-3 input-group input-mini">
                        <input type="text" class="form-control" placeholder="Address / Location" id="address" value="{{ ($input && $input[1]) ? $input[1] : old('location') }}" name="location">
                        <input type="hidden" name="latitude" id="latitude" value="{{ ($input && $input[2]) ? $input[2] : '' }}" />
                        <input type="hidden" name="longitude" id="longitude" value="{{ ($input && $input[3]) ? $input[3] : '' }}" />
                        @error('location')
                        <small class="text-danger">{{ $errors->first('location') }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 input-group input-mini">
                        <input type="text" class="form-control" placeholder="Radius" maxlength="2" value="{{ ($input && $input[4]) ? $input[4] : old('radius') }}" name="radius">
                        @error('radius')
                        <small class="text-danger">{{ $errors->first('radius') }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 input-group input-mini">
                        <input type="date" class="form-control" placeholder="Date" value="{{ ($input && $input[5]) ? $input[5] : old('date') }}" name="date">
                        @error('date')
                        <small class="text-danger">{{ $errors->first('date') }}</small>
                        @enderror
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">FIND CLINIC</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container pt-0">
        <ul class="dz-list message-list">
        @forelse($clinics as $key => $clinic)
            <li>
                <a href="https://maps.google.com/maps?daddr={{ $clinic->latitude }},{{ $clinic->longitude }}&11=" target="_blank">
                    <div class="media media-45 rounded-circle">
                        <img src="{{ public_path().'/assets/images/message/pic1.jpg' }}" alt="image">
                    </div>
                    <div class="media-content">
                        <div>
                            <h6 class="name">{{ $clinic->name }}</h6>
                            <p class="my-1">
                                <i class="fa-solid fa-check text-primary me-1"></i>
                                Address: {{ $clinic->address }}, Contact: {{ $clinic->mobile }}, Distance: {{ number_format($clinic->distance_km, 2) }} KMs 
                            </p>
                        </div>
                        <span class="time text-primary">₹xxx</span>
                    </div>                    
                </a>
                <div class="media-content">
                    <button class="btn btn-outline-dark w-100 btn-sm slotBtn" data-bs-toggle="collapse" data-bs-target="#clinic_{{ $clinic->clinic_id }}">BOOK NOW</button>
                </div>
                <form method="post" action="{{ route('service.save') }}">
                    @csrf                   
                    <input type='hidden' name='clinic_id' value="{{ $clinic->clinic_id }}" />                     
                    <input type='hidden' name='service_date' value="{{ $input[5] }}" />                                         
                    <input type='hidden' name='service_id' value="{{ $input[0] }}" />
                    <input type="hidden" name="user_id" value="{{ isset(Auth::user()->id) ? Auth::user()->id : 0 }}" />
                    <div id="clinic_{{ $clinic->clinic_id }}" class="collapse">
                        <p class="text-center text-success mt-3 mb-3">Bookings available on {{ date('d-M-Y', strtotime($input[5])) }}</p>                            
                        <div class="input-group input-mini mb-3">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Full Name" name="patient_name" value="{{ (isset(Auth::user()->user_type) && Auth::user()->user_type == 'P') ? Auth::user()->name : '' }}" required>
                        </div>
                        <div class="input-group input-mini mb-3">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" maxlength="10" value="{{ (isset(Auth::user()->user_type) && Auth::user()->user_type == 'P') ? Auth::user()->mobile : '' }}" required>
                        </div>
                        <div class="input-group input-mini mb-3">
                            <span class="input-group-text"><i class="fa fa-file"></i></span>
                            <textarea class="form-control" placeholder="Special Instruction" name="notes"></textarea>
                        </div>
                        @if(!isset(Auth::user()->id))
                            <div class="input-group input-mini mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="log" name="log" value="1" data-bs-toggle="collapse" data-bs-target="#log_{{ $app->id }}">
                                    <label class="form-check-label" for="log">Remember Details</label>
                                </div>
                            </div>
                            <div class="input-group input-mini mb-3 collapse" id="log_{{ $app->id }}">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                <input type="text" maxlength="4" id="pin" class="form-control" name="pin" placeholder="0000">
                            </div>
                        @endif
                        <div class="input-group">
                            <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">BOOK NOW</button>
                        </div>
                    </div>
                </form>
            </li>
        @empty
        
        @endforelse
        </ul>
    </div>
</div>
<!-- Page Content End -->
@endsection