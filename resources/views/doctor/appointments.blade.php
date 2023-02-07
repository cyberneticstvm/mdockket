@extends("doctor.base")
@section("content")
<div class="account-box mt-5">
    <div class="container">
        <h5 class="title text-center mb-3">Today's Appointments</h5>
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
        <form class="input-style" method="post" action="{{ route('doctor.appointments.save') }}">
            @csrf
            <div class="row">
                @php 
                    $from = strtotime($settings->stime); $end = strtotime($settings->etime); $dur = $settings->time_per_appointment; $bstime = strtotime($settings->bstime); $betime = strtotime($settings->betime); $c = 0; $index = '';
                    $atimes = $apps->pluck('appointment_time')->toArray(); 
                @endphp
                @while($from <= $end)
                    @if($c == $settings->slots) @break; @endif
                    <div class="col-md-3 slot1 {{ (in_array(date('h:i A', $from), $atimes)) ? 'bg-success text-white no-app' : '' }}">
                        {{ date('h:i A', $from) }}<br>
                        @if(in_array(date('h:i A', $from), $atimes) || (date('h:i A', $from) >= date('h:i A', $bstime) && date('h:i A', $from) <= date('h:i A', $betime)))
                            @php $index = array_search(date('h:i A', $from), $atimes); @endphp
                            Patient Name: {!! ($index != '') ? $apps[$index]->patient_name : "<span class='fw-bold text-danger'>Break Time</span>" !!}<br>
                            Contact No: {{ ($index != '') ? $apps[$index]->mobile : '' }}
                        @else
                            <input type="checkbox" name="appointments[]" value="{{ date('h:i A', $from) }}" />
                        @endif
                    </div>
                    @php $from = strtotime('+'.$dur.' minutes', $from); $c++; @endphp
                @endwhile
                @error('appointments')
                <small class="text-danger">{{ $errors->first('appointments') }}</small>
                @enderror
            </div>
            <div class="input-group mt-3">
                <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">BLOCK SLOTS</button>
            </div>
        </form>
    </div>
</div>
@endsection