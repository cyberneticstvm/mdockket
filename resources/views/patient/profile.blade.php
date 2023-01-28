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
                    <h5 class="mb-0 ms-2">Profile</h5>
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

<!-- Page Content -->
<div class="page-content bottom-content ">
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
                <img src="{{ public_path().'/assets/images/message/pic6.jpg' }}" alt="/">
                <svg class="progress-style" height="100" width="100">
                    <circle id="round-1" cx="60" cy="60" r="50" stroke="#E8EFF3" stroke-width="7" fill="none" />
                    <circle id="round-2" cx="60" cy="60" r="50" stroke="#C3AC58" stroke-width="7" fill="none" />
                </svg>
            </div>
            <div class="mb-2">
                <h4>{{ $patient->name }}</h4>
                <a href="/logout" class="btn-link">Logout</a>
            </div>
        </div>    
        <div class="contact-section">
            <div class="d-flex justify-content-between align-item-center">
                <h5 class="title">Contacts</h5>
                <a href="javascript:void(0);" class="btn-link">Edit Profile</a>
            </div>
            <ul>
                <li>
                    <a href="javascript:void(0)">
                        <div class="icon-box">
                            <i class="fa-solid fa-phone"></i>
                        </div> 
                        <div class="ms-3">
                            <div class="light-text">Mobile Phone</div>
                            <p class="mb-0"></p>
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
                            <p class="mb-0">{{ $patient->email }}</p>
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
                            <p class="mb-0"></p>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="d-flex justify-content-between align-item-center">
                <h5 class="title">Booking History 🏆</h5>
            </div>
            <div class="swiper-btn-center-lr">
                <div class="swiper-container mt-4 offer-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="offer-bx">
                                <div class="offer-content">
                                    <h6>Order 10 packs French Fries Deluxe</h6>
                                    <small>4 days ago</small>
                                </div>
                                <div class="point">
                                    <h5 class="title">150</h5>
                                    <small class="d-block">Pts</small>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="offer-bx">
                                <div class="offer-content">
                                    <h6>Order 10 packs French Fries Deluxe</h6>
                                    <small>4 days ago</small>
                                </div>
                                <div class="point">
                                    <h5 class="title">150</h5>
                                    <small class="d-block">Pts</small>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="offer-bx">
                                <div class="offer-content">
                                    <h6>Order 10 packs French Fries Deluxe</h6>
                                    <small>4 days ago</small>
                                </div>
                                <div class="point">
                                    <h5 class="title">150</h5>
                                    <small class="d-block">Pts</small>
                                </div>
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