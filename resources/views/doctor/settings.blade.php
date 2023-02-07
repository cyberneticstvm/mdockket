@extends("doctor.base")
@section("content")
<div class="account-box mt-5">
    <div class="container">
        <div class="account-area">
            <h5 class="title text-center">Settings</h5>
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
            <form class="input-style" method="post" action="{{ route('doctor.settings.update', $doctor->id) }}">
                @csrf
                <input type="hidden" name="doctor_id" value="{{ $doctor->id }}" />
                <div class="row">
                    <div class="col">
                        <label>Consultation Fee</label>
                        <input type="text" class="form-control form-control-sm" name="fee" value="{{ ($settings && $settings['fee']) ? $settings['fee'] : old('fee') }}" placeholder="0.00">
                        @error('fee')
                        <small class="text-danger">{{ $errors->first('fee') }}</small>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Slots</label>
                        <input type="text" class="form-control form-control-sm totslot" name="slots" value="{{ ($settings && $settings['slots']) ? $settings['slots'] : old('slots') }}" placeholder="0">
                        @error('slots')
                        <small class="text-danger">{{ $errors->first('slots') }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label>Time per Cons.</label>
                        <input type="text" class="form-control form-control-sm dur" name="time_per_appointment" value="{{ ($settings && $settings['time_per_appointment']) ? $settings['time_per_appointment'] : old('time_per_appointment') }}" placeholder="0">
                        @error('time_per_appointment')
                        <small class="text-danger">{{ $errors->first('time_per_appointment') }}</small>
                        @enderror
                    </div>
                    <div class="col">
                        @php $from = $start @endphp
                        <label>Consultation Start</label>
                        <select class="form-control cstart" name="appointment_start_time">
                            <option value="">Select</option>
                            @while($from <= $end)                                            
                                <option value="{{ date('h:i A', $from) }}" {{ ($settings && $settings['stime'] == date('h:i A', $from)) ? 'selected' : '' }}>{{ date('h:i A', $from) }}</option>
                                @php $from = strtotime('+60 minutes', $from); @endphp
                            @endwhile
                        </select>
                        @error('appointment_start_time')
                        <small class="text-danger">{{ $errors->first('appointment_start_time') }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        @php $from = ($settings && $settings['bstime']) ? strtotime($settings['bstime']) : $start; @endphp
                        <label>Break Start</label>
                        <select class="form-control bstart" name="break_start_time">
                            <option value="">Select</option>
                            @while($from <= $end)                                            
                                <option value="{{ date('h:i A', $from) }}" {{ ($settings && $settings['bstime'] == date('h:i A', $from)) ? 'selected' : '' }}>{{ date('h:i A', $from) }}</option>
                                @php $from = strtotime('+30 minutes', $from); @endphp
                            @endwhile
                        </select>
                    </div>
                    <div class="col">
                        @php $from = ($settings && $settings['betime']) ? strtotime($settings['betime']) : $start; @endphp
                        <label>Break End</label>
                        <select class="form-control bend" name="break_end_time">
                            <option value="">Select</option>
                            @while($from <= $end)                                            
                                <option value="{{ date('h:i A', $from) }}" {{ ($settings && $settings['betime'] == date('h:i A', $from)) ? 'selected' : '' }}>{{ date('h:i A', $from) }}</option>
                                @php $from = strtotime('+30 minutes', $from); @endphp
                            @endwhile
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label>Appointment Open</label>
                        <select class="form-control" name="appointment_open_days">
                            <option value="">Select</option>
                            <option value="0" {{ ($settings && $settings['appointment_open_days'] == 0) ? 'selected' : '' }}>Always</option>
                            <option value="1" {{ ($settings && $settings['appointment_open_days'] == 1) ? 'selected' : '' }}>1 Day prior</option>
                            <option value="2" {{ ($settings && $settings['appointment_open_days'] == 2) ? 'selected' : '' }}>2 Days prior</option>
                            <option value="3" {{ ($settings && $settings['appointment_open_days'] == 3) ? 'selected' : '' }}>3 Days prior</option>
                        </select>
                        @error('appointment_open_days')
                        <small class="text-danger">{{ $errors->first('appointment_open_days') }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="available_for_appointment" value="1" id="flexCheckChecked" {{ ($settings && $settings['available_for_appointment'] == 1) ? 'checked' : '' }}>
                            <label class="form-check-label" for="flexCheckChecked">
                                Available for Consultation
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label>New Password</label>
                        <input type="password" class="form-control form-control-sm" name="password" placeholder="******">
                    </div>  
                </div>
                <div class="input-group mt-3">
                    <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">UPDATE</button>
                </div>
            </form> 
        </div>
    </div>
</div>
@endsection