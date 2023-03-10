@extends("doctor.base")
@section("content")
<div class="container profile-area">
    <div class="profile">
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
        <div class="media media-100">
            <!--<img src="{{ public_path().'/assets/images/message/pic6.jpg' }}" alt="/">-->
            <img src="https://dockket.in/public/storage/doctor/photo/{{ ($user->doctor && $user->doctor->photo) ? $user->doctor->photo : 'avatar.png' }}" alt="/">
            <svg class="progress-style" height="100" width="100">
                <circle id="round-1" cx="60" cy="60" r="50" stroke="#E8EFF3" stroke-width="7" fill="none" />
                <circle id="round-2" cx="60" cy="60" r="50" stroke="#C3AC58" stroke-width="7" fill="none" />
            </svg>
        </div>
        <div class="mb-2">
            <h4>{{ $user->name }}</h4>
            <a href="/logout" class="btn-link">Logout</a>
        </div>
    </div>    
    <div class="contact-section">
        <div class="d-flex justify-content-between align-item-center">
            <h5 class="title">Profile</h5>
            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="modal" data-bs-target="#profileModal">Edit Profile</a>
        </div>
        <ul>
            <li>
                <a href="javascript:void(0)">
                    <div class="icon-box">
                        <i class="fa-solid fa-phone"></i>
                    </div> 
                    <div class="ms-3">
                        <div class="light-text">Mobile Phone</div>
                        <p class="mb-0">{{ ($user->doctor) ? $user->doctor->mobile : $user->mobile }}</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <div class="icon-box">
                        <i class="fa-solid fa-envelope"></i>
                    </div> 
                    <div class="ms-3">
                        <div class="light-text">Email Address</div>
                        <p class="mb-0">{{ $user->email }}</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <div class="icon-box">
                        <i class="fa-solid fa-location-dot"></i>
                    </div> 
                    <div class="ms-3">
                        <div class="light-text">Primary Address</div>
                        <p class="mb-0">{{ ($user->doctor) ? $user->doctor->consultation_address : '' }}</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="modal fade" id="profileModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="post" action="{{ route('doctor.profile.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Update Profile</h5>
                    <button class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group input-mini mb-3">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $user->name }}">
                        @error('name')
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 input-group input-mini">
                        <span class="input-group-text"><i class="fa fa-at"></i></span>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $user->email }}">
                        @error('email')
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 input-group input-mini">
                        <span class="input-group-text"><i class="fa fa-mobile"></i></span>
                        <input type="text" class="form-control" placeholder="Mobile" name="mobile" maxlength="10" value="{{ ($user->doctor) ? $user->doctor->mobile : $user->mobile }}">
                        @error('mobile')
                        <small class="text-danger">{{ $errors->first('mobile') }}</small>
                        @enderror
                    </div>
                    <a href="javascript:pickmylocation()">Pick My Location</a>
                    <div class="mb-3 input-group input-mini">
                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                        <input type="text" class="form-control" placeholder="Address" id="address" name="consultation_address" value="{{ ($user->doctor) ? $user->doctor->consultation_address : '' }}">
                        <input type="hidden" name="con_latitude" id="latitude" value="{{ ($user->doctor) ? $user->doctor->con_latitude : '' }}" />
                        <input type="hidden" name="con_longitude" id="longitude" value="{{ ($user->doctor) ? $user->doctor->con_longitude : '' }}" />
                        @error('address')
                        <small class="text-danger">{{ $errors->first('address') }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 input-group input-mini">
                        <span class="input-group-text"><i class="fa fa-file"></i></span>
                        <select class="form-control" name="spec">
                            <option value="">Select</option>
                            @forelse($specs as $key => $spec)
                                <option value="{{ $spec->id }}" {{ ($user->doctor && $user->doctor->spec == $spec->id) ? 'selected' : '' }}>{{ $spec->name }}</option>
                            @empty
                            @endforelse
                        </select>
                        @error('spec')
                        <small class="text-danger">{{ $errors->first('spec') }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 input-group input-mini">
                        <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                        <input type="file" class="form-control" placeholder="Profile Photo" name="photo" title="Profile Photo">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection