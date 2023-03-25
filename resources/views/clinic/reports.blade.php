@extends("clinic.base")
@section("content")
<div class="account-box mt-5">
    <div class="container">
        <h5 class="title text-center mb-3">Service Requests Report</h5>
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
        <form class="input-style" method="post" action="{{ route('clinic.reports.fetch') }}">
            @csrf
            <div class="row">
                <div class="col">
                    <label>From Date</label>
                    <input class="form-control" type="date" value="{{ ($inputs && $inputs[0]) ? $inputs[0] : '' }}" name="from_date">
                    @error('from_date')
                    <small class="text-danger">{{ $errors->first('from_date') }}</small>
                    @enderror
                </div>
                <div class="col">
                    <label>To Date</label>
                    <input class="form-control" type="date" value="{{ ($inputs && $inputs[1]) ? $inputs[1] : '' }}" name="to_date">
                    @error('to_date')
                    <small class="text-danger">{{ $errors->first('to_date') }}</small>
                    @enderror
                </div>
            </div>
            <div class="input-group mt-3">
                <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">FETCH</button>
            </div>
        </form>
        <div class="row">
            <ul class="dz-list message-list">
                @forelse($requests as $key => $val)
                <li>
                    <a href="#" target="_blank">
                        <div class="media media-45 rounded-circle">
                            <img src="{{ public_path().'/assets/images/message/pic1.jpg' }}" alt="image">
                        </div>
                        <div class="media-content">
                            <div>
                                <h6 class="name">{{ $val->patient_name }}</h6>
                                <p class="my-1">
                                    <i class="fa-solid fa-check text-primary me-1"></i>
                                    {{ $val->sname }}
                                </p>
                                <p>Contact: {{ $val->mobile }}, Notes: {{ $val->notes }}</p>
                            </div>
                            <span class="time">{{ $val->st }}<br><small>{{ $val->serdate }}</small></span>
                        </div>
                    </a>
                </li>
                @empty
                @endforelse
            </ul>
        </div> 
    </div>
</div>
@endsection