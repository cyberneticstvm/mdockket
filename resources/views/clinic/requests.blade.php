@extends("clinic.base")
@section("content")
<div class="account-box mt-5">
    <div class="container">
        <h5 class="title text-center mb-3">Today's Requests</h5>
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
        <div class="row">
            <ul class="dz-list message-list">
                @forelse($requests as $key => $val)
                <li>                    
                    <div class="media media-45 rounded-circle">
                        <i class="fa fa-user text-success"></i>
                    </div>
                    <div class="media-content">
                        <div>
                            <h6 class="name">{{ $val->patient_name }}</h6>
                            @if($val->document)
                            <p><a href="https://dockket.in/public/storage/clinic/docs/{{$val->document}}" target="_blank">Attachment</a></p>
                            @endif
                            <p class="my-1">
                                {{ $val->sname }}
                            </p>
                            <p>Contact: {{ $val->mobile }}, Notes: {{ $val->notes }}</p>                                                            
                        </div>                
                        <span class="time"><a href="https://maps.google.com/maps?daddr={{ $val->latitude }},{{ $val->longitude }}&11=" target="_blank"><i class="fa fa-location-dot text-info fa-xl"></i></a></span>
                        <span class="time">{{ $val->st }}<br><input type="checkbox" class="chkClinicStatus" data-rid="{{ $val->id }}" value="{{ $val->status }}" {{ ($val->status == 'C') ? 'checked' : '' }} /></span>                            
                    </div>                    
                </li>
                @empty
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection