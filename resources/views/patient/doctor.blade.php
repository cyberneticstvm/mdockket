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
                <h3 class="title text-center mb-3">Book a Doctor</h3>
                <form class="input-style" method="post" action="{{ route('patient.doctorappointment') }}">
                    @csrf
                    <div class="input-group input-mini mb-3">
                        <select class="form-control" name="spec">
                            <option value="">Select Specialization</option>
                            <option value="0">All</option>
                            @forelse($specs as $key => $spec)
                            <option value="{{ $spec->id }}" {{ ($input && $input[0] == $spec->id) ? 'selected' : '' }}>{{ $spec->name }}</option>
                            @empty
                            @endforelse
                        </select>
                        @error('spec')
                        <small class="text-danger">{{ $errors->first('spec') }}</small>
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
                        <div id="datepicker" class="input-group date" data-date-format="dd-M-yyyy">
                            <input class="form-control" type="text" value="{{ ($input && $input[5]) ? $input[5] : old('date') }}" name="date" readonly />
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </span>
                        </div>
                        @error('date')
                        <small class="text-danger">{{ $errors->first('date') }}</small>
                        @enderror
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">FIND DOCTOR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container pt-0">
        <ul class="dz-list message-list">
        @forelse($apps as $key => $app)
            <li>
                <a href="https://maps.google.com/maps?daddr={{ $app->con_latitude }},{{ $app->con_longitude }}&11=" target="_blank">
                    <div class="media media-45 rounded-circle">
                        <img src="{{ public_path().'/assets/images/message/pic1.jpg' }}" alt="image">
                    </div>
                    <div class="media-content">
                        <div>
                            <h6 class="name">{{ $app->docname }}</h6>
                            <p class="my-1">
                                <i class="fa-solid fa-check text-primary me-1"></i>
                                {{ $app->designation }} ({{ $app->spec}}), Branch: {{ $app->bname }}, Address: {{ $app->consultation_address }}, Distance: {{ number_format($app->distance_km, 2) }} KMs
                            </p>
                        </div>
                        <span class="time text-primary">₹{{ $app->fee }}</span>
                    </div>                    
                </a>
                <div class="media-content">
                    <button class="btn btn-outline-dark w-100 btn-sm slotBtn" data-bs-toggle="collapse" data-bs-target="#slot_{{ $app->id }}">SHOW AVAILABLE SLOTS</button>
                </div>
                <form method="post" action="{{ route('appointment.save') }}">
                    @csrf                   
                    <input type='hidden' name='doctor_id' value="{{ $app->id }}" />                     
                    <input type='hidden' name='appointment_date' value="{{ $input[5] }}" />                     
                    <input type='hidden' name='branch' value='1' />                     
                    <input type='hidden' name='spec' value="{{ $input[0] }}" />
                    <input type="hidden" name="user_id" value="{{ isset(Auth::user()->id) ? Auth::user()->id : 0 }}" />
                    <div id="slot_{{ $app->id }}" class="collapse">
                        <p class="text-center text-success mt-3 mb-3">Available Slots on {{ date('d-M-Y', strtotime($input[5])) }}</p>                            
                        @php 
                            $from = strtotime($app->stime);
                            $end = strtotime($app->etime); $dur = $app->time_per_appointment; $bg = ''; $bstime = strtotime($app->bstime); $betime = strtotime($app->betime); $c = 0;
                            $apps = DB::table('appointments')->selectRaw("TIME_FORMAT(appointment_time, '%h:%i %p') AS appointment_time")->where('doctor_id', $app->id)->whereDate('appointment_date', $input[5])->pluck('appointment_time')->toArray();
                        @endphp
                        <div class="row">
                            @while($from <= $end)
                                @if($c == $app->slots) @break; @endif
                                <div class="col slot text-center {{ (in_array(date('h:i A', $from), $apps) || (date('h:i A', $from) >= date('h:i A', $bstime) && date('h:i A', $from) <= date('h:i A', $betime))) ? 'bg-secondary text-white no-app' : '' }}">
                                    {{ date('h:i A', $from) }}
                                </div>
                                <input type="hidden" name="slot" value="{{ $c }}" />
                                @php $from = strtotime('+'.$dur.' minutes', $from); $c++; @endphp
                            @endwhile                            
                        </div>
                        <div class="input-group input-mini mb-3 mt-3">
                            <span class="input-group-text"><i class="fa fa-clock"></i></span>
                            <input type="text" class="form-control atime" name="appointment_time" placeholder="Selected Time" readonly required/>
                        </div>
                        <div class="input-group input-mini mb-3">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Full Name" name="patient_name" value="{{ (isset(Auth::user()->user_type) && Auth::user()->user_type == 'P') ? Auth::user()->name : '' }}" required>
                        </div>
                        <div class="input-group input-mini mb-3">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" maxlength="10" value="{{ (isset(Auth::user()->user_type) && Auth::user()->user_type == 'P') ? Auth::user()->mobile : '' }}" required>
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