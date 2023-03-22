@extends("patient.base")
@section("content")
<!-- Header -->
<header class="header">
    <div class="main-bar">
        <div class="container">
            <div class="header-content">
                <div class="left-content">
                    <a href="javascript:void(0);" class="back-btn">
                        <svg width="18" height="18" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z" fill="#a19fa8"/>
                        </svg>
                    </a>
                    <h5 class="mb-0 ms-2">Appointments</h5>
                </div>
                <div class="mid-content">
                </div>
                <div class="right-content">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<div class="page-content">
    <div class="container fb">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">My Appointments</h5>    
                </div>
                <div class="card-body">
                    <div class="dz-tab">
                        <div class="tab-slide-effect">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="tab-active-indicator"></li>
                                <li class="nav-item active" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Upcoming</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Completed</button>
                                </li>
                            </ul>
                        </div>    
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <h6>Upcoming Appointments</h6>
                                <ul class="dz-list message-list">
                                    @forelse($upsa as $key => $val)
                                    <li>
                                        <a href="https://maps.google.com/maps?daddr={{ $val->doctor->con_latitude }},{{ $val->doctor->con_longitude }}&11=" target="_blank">
                                            <div class="media media-45 rounded-circle">
                                                <img src="{{ public_path().'/assets/dockket/Happy-Patient-300x300.png' }}" alt="/">
                                            </div>
                                            <div class="media-content">
                                                <div>
                                                    <h6 class="name">{{ $val->patient_name }}</h6>
                                                    <p class="my-1">
                                                        <i class="fa-solid fa-check text-primary me-1"></i>
                                                        {{ date('d-M-Y', strtotime($val->appointment_date)) }}, {{ date('h:i a', strtotime($val->appointment_time)) }}
                                                    </p>
                                                    <p>Doctor: {{ $val->user->find($val->doctor->user_id)->name }}</p>
                                                </div>
                                                <span class="time"><i class="fa fa-location-dot text-info fa-xl"></i></span>
                                            </div>
                                        </a>
                                    </li>
                                    @empty
                                    @endforelse
                                    
                                    @forelse($upsc as $key => $val)
                                    <li>
                                        <a href="https://maps.google.com/maps?daddr={{ $val->clinic->latitude }},{{ $val->clinic->longitude }}&11=" target="_blank">
                                            <div class="media media-45 rounded-circle">
                                                <img src="{{ public_path().'/assets/dockket/Happy-Patient-300x300.png' }}" alt="/">
                                            </div>
                                            <div class="media-content">
                                                <div>
                                                    <h6 class="name">{{ $val->patient_name }}</h6>
                                                    <p class="my-1">
                                                        <i class="fa-solid fa-check text-primary me-1"></i>
                                                        {{ date('d-M-Y', strtotime($val->service_date)) }}
                                                    </p>
                                                    <p>Clinic: {{ $val->user->find($val->clinic->user_id)->name }}</p>
                                                </div>
                                                <span class="time"><i class="fa fa-location-dot text-info fa-xl"></i></span>
                                            </div>
                                        </a>
                                    </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <h6>Completed Appointments</h6>
                                <ul class="dz-list message-list">
                                    @forelse($comsa as $key => $val)
                                    <li>
                                        <a href="https://maps.google.com/maps?daddr={{ $val->doctor->con_latitude }},{{ $val->doctor->con_longitude }}&11=" target="_blank">
                                            <div class="media media-45 rounded-circle">
                                                <img src="{{ public_path().'/assets/dockket/Happy-Patient-300x300.png' }}" alt="/">
                                            </div>
                                            <div class="media-content">
                                                <div>
                                                    <h6 class="name">{{ $val->patient_name }}</h6>
                                                    <p class="my-1">
                                                        <i class="fa-solid fa-check text-primary me-1"></i>
                                                        {{ date('d-M-Y', strtotime($val->appointment_date)) }}, {{ date('h:i a', strtotime($val->appointment_time)) }}
                                                    </p>
                                                    <p>Doctor: {{ $val->user->find($val->doctor->user_id)->name }}</p>
                                                </div>
                                                <span class="time"><i class="fa fa-location-dot text-info fa-xl"></i></span>
                                            </div>
                                        </a>
                                    </li>
                                    @empty
                                    @endforelse
                                    
                                    @forelse($comsc as $key => $val)
                                    <li>
                                        <a href="https://maps.google.com/maps?daddr={{ $val->clinic->latitude }},{{ $val->clinic->longitude }}&11=" target="_blank">
                                            <div class="media media-45 rounded-circle">
                                                <img src="{{ public_path().'/assets/dockket/Happy-Patient-300x300.png' }}" alt="/">
                                            </div>
                                            <div class="media-content">
                                                <div>
                                                    <h6 class="name">{{ $val->patient_name }}</h6>
                                                    <p class="my-1">
                                                        <i class="fa-solid fa-check text-primary me-1"></i>
                                                        {{ date('d-M-Y', strtotime($val->service_date)) }}
                                                    </p>
                                                    <p>Clinic: {{ $val->user->find($val->clinic->user_id)->name }}</p>
                                                </div>
                                                <span class="time"><i class="fa fa-location-dot text-info fa-xl"></i></span>
                                            </div>
                                        </a>
                                    </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
<!-- Page Content End-->
@endsection