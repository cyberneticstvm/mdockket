@extends("patient.base")
@section("content")
<!-- Page Content -->
<div class="page-content">
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
                            @forelse($specs as $key => $spec)
                            <option value="{{ $spec->id }}" {{ ($input && $input[0] == $spec->id) ? 'selected' : '' }}>{{ $spec->name }}</option>
                            @empty
                            @endforelse
                        </select>
                        @error('name')
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                        @enderror
                    </div>
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
                        <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">FIND DOCTOR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Page Content End -->
@endsection