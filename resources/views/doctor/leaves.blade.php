@extends("doctor.base")
@section("content")
<div class="account-box mt-5">
    <div class="container">
        <div class="account">
            <h5 class="title text-center">Leaves</h5>
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
            <form class="input-style" method="post" action="{{ route('doctor.leaves.update', $doctor->id) }}">
                @csrf
                <input type="hidden" name="doctor_id" value="{{ $doctor->id }}" />
                <div class="row">
                    <div class="col">
                        <label>Leave Date</label>
                        <div id="datepicker" class="input-group date" data-date-format="dd-M-yyyy">
                            <input class="form-control" type="text" name="leave_date" />
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </span>
                        </div>
                        @error('leave_date')
                        <small class="text-danger">{{ $errors->first('leave_date') }}</small>
                        @enderror
                    </div>
                </div>
                <div class="input-group mt-3">
                    <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">UPDATE</button>
                </div>
            </form> 
        </div>
    </div>
</div>
<div class="page-content">
    <div class="container fb">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">My Leaves</h5>    
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
                                <h6>Upcoming Leaves</h6>
                                <ul class="dz-list message-list">
                                    @forelse($leaves_present as $key => $val)
                                    <li>
                                        <a href="#" target="_blank">
                                            <div class="media media-45 rounded-circle">
                                                <img src="{{ public_path().'/assets/images/message/pic1.jpg' }}" alt="image">
                                            </div>
                                            <div class="media-content">
                                                <div>
                                                    <h6 class="name">{{ $val->ldate }}</h6>
                                                    
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <h6>Completed Leves</h6>
                                <ul class="dz-list message-list">
                                    @forelse($leaves_past as $key => $val)
                                    <li>
                                        <a href="#" target="_blank">
                                            <div class="media media-45 rounded-circle">
                                                <img src="{{ public_path().'/assets/images/message/pic1.jpg' }}" alt="image">
                                            </div>
                                            <div class="media-content">
                                                <div>
                                                    <h6 class="name">{{ $val->ldate }}</h6>
                                                </div>
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
@endsection