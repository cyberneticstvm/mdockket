<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
	<meta name="theme-color" content="#2196f3">
	<meta name="author" content="DexignZone" /> 
    <meta name="keywords" content="" /> 
    <meta name="robots" content="" /> 
	<meta name="description" content=""/>
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="https://makaanlelo.com/tf_products_007/foodia/xhtml/social-image.png"/>
	<meta name="format-detection" content="telephone=no">
    
    <!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ public_path().'/assets/images/favicon.png' }}" />
    
    <!-- Title -->
	<title>Doccket - Doctor Booking App</title>
	
    
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ public_path().'/assets/css/style.css' }}">
    <link rel="stylesheet" href="{{ public_path().'/assets/vendor/swiper/swiper-bundle.min.css' }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Roboto+Slab:wght@100;300;500;600;800&display=swap" rel="stylesheet">

</head>   
<body class="bg-white">
<div class="page-wraper">
    
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader end-->
    
	@yield("content")
    
    <!-- Menubar -->
	<div class="menubar-area">
		<div class="toolbar-inner menubar-nav">
            <a href="index.html" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" xmlns:v="https://vecta.io/nano"><path d="M21.44 11.035a.75.75 0 0 1-.69.465H18.5V19a2.25 2.25 0 0 1-2.25 2.25h-3a.75.75 0 0 1-.75-.75V16a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0-.75.75v4.5a.75.75 0 0 1-.75.75h-3A2.25 2.25 0 0 1 3.5 19v-7.5H1.25a.75.75 0 0 1-.69-.465.75.75 0 0 1 .158-.818l9.75-9.75A.75.75 0 0 1 11 .246a.75.75 0 0 1 .533.222l9.75 9.75a.75.75 0 0 1 .158.818z" fill="#bfc9da"/></svg>
			</a>
			<!--<a href="notification.html" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#bfc9da" xmlns:v="https://vecta.io/nano"><path d="M12 1a7.5 7.5 0 0 0-7.5 7.5v5.85l-1.66 2.5A2.04 2.04 0 0 0 4.535 20h14.93a2.04 2.04 0 0 0 1.695-3.165L19.5 14.35V8.5A7.5 7.5 0 0 0 12 1zm0 22a3 3 0 0 0 2.825-2h-5.65A3 3 0 0 0 12 23z"/></svg>
			</a>-->
            <a href="/patient/clinicapp" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#bfc9da" xmlns:v="https://vecta.io/nano"><path d="M17.5.625h-15a2.25 2.25 0 0 0-2.25 2.25v14.25a2.25 2.25 0 0 0 2.25 2.25h15a2.25 2.25 0 0 0 2.25-2.25V2.875A2.25 2.25 0 0 0 17.5.625zM4.056 8.414a.75.75 0 0 1 .165-.817l2.25-2.25a.75.75 0 0 1 1.018.039.75.75 0 0 1 .039 1.018l-.967.971h8.314a.75.75 0 0 1 .75.75.75.75 0 0 1-.75.75H4.75a.75.75 0 0 1-.694-.461zm12.097 4.365l-2.25 2.25a.75.75 0 0 1-.243.187c-.093.045-.194.07-.298.074a.75.75 0 0 1-.559-.219.75.75 0 0 1-.219-.559c.004-.103.029-.205.074-.298a.75.75 0 0 1 .187-.243l.967-.971H5.5a.75.75 0 0 1-.75-.75.75.75 0 0 1 .75-.75h10.125a.75.75 0 0 1 .694.461.75.75 0 0 1-.165.817z" fill="#bfc9da"/></svg>
			</a>
			
			<a href="/patient/doctorapp" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#bfc9da" xmlns:v="https://vecta.io/nano"><path d="M15 15.75a.75.75 0 1 0 0-1.5.75.75 0 1 0 0 1.5zm-6-6a.75.75 0 1 0 0-1.5.75.75 0 1 0 0 1.5zm13.5 0a.75.75 0 0 0 .75-.75V4.5a.75.75 0 0 0-.75-.75h-21a.75.75 0 0 0-.75.75V9a.75.75 0 0 0 .75.75c1.241 0 2.25 1.009 2.25 2.25s-1.01 2.25-2.25 2.25a.75.75 0 0 0-.75.75v4.5a.75.75 0 0 0 .75.75h21a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75c-1.241 0-2.25-1.009-2.25-2.25s1.009-2.25 2.25-2.25zM6.75 9c0-1.24 1.01-2.25 2.25-2.25S11.25 7.76 11.25 9 10.241 11.25 9 11.25 6.75 10.241 6.75 9zM9 15.75a.75.75 0 0 1-.53-1.28l6-6a.75.75 0 0 1 1.06 1.06l-6 6a.75.75 0 0 1-.53.22zm6 1.5c-1.241 0-2.25-1.009-2.25-2.25s1.009-2.25 2.25-2.25 2.25 1.009 2.25 2.25-1.009 2.25-2.25 2.25z"/></svg>
			</a>
			<a href="/patient/profile" class="nav-link active">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="21" fill="#bfc9da" xmlns:v="https://vecta.io/nano"><path d="M8 7.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 1 0 0 7.5zm7.5 9v1.5c-.002.199-.079.39-.217.532C13.61 20.455 8.57 20.5 8 20.5s-5.61-.045-7.282-1.718C.579 18.64.501 18.449.5 18.25v-1.5a7.5 7.5 0 1 1 15 0z"/></svg>
			</a>
		</div>
	</div>
	<!-- Menubar -->
	
    <!-- Theme Color Settings -->
	<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
        <div class="offcanvas-body small">
            <ul class="theme-color-settings">
                <li>
                    <input class="filled-in" id="primary_color_8" name="theme_color" type="radio" value="color-primary" />
					<label for="primary_color_8"></label>
                    <span>Default</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_2" name="theme_color" type="radio" value="color-green" />
					<label for="primary_color_2"></label>
                    <span>Green</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_3" name="theme_color" type="radio" value="color-blue" />
					<label for="primary_color_3"></label>
                    <span>Blue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_4" name="theme_color" type="radio" value="color-pink" />
					<label for="primary_color_4"></label>
                    <span>Pink</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_5" name="theme_color" type="radio" value="color-yellow" />
					<label for="primary_color_5"></label>
                    <span>Yellow</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_6" name="theme_color" type="radio" value="color-orange" />
					<label for="primary_color_6"></label>
                    <span>Orange</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_7" name="theme_color" type="radio" value="color-purple" />
					<label for="primary_color_7"></label>
                    <span>Purple</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_1" name="theme_color" type="radio" value="color-red" />
					<label for="primary_color_1"></label>
                    <span>Red</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_9" name="theme_color" type="radio" value="color-lightblue" />
					<label for="primary_color_9"></label>
                    <span>Lightblue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_10" name="theme_color" type="radio" value="color-teal" />
					<label for="primary_color_10"></label>
                    <span>Teal</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_11" name="theme_color" type="radio" value="color-lime" />
					<label for="primary_color_11"></label>
                    <span>Lime</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_12" name="theme_color" type="radio" value="color-deeporange" />
					<label for="primary_color_12"></label>
                    <span>Deeporange</span>
                </li>
            </ul>
        </div>
    </div>
	<!-- Theme Color Settings End -->
</div> 
<!--**********************************
    Scripts
***********************************-->
<script src="https://maps.googleapis.com/maps/api/js?key={{config('app.google_api_key')}}&libraries=places"></script>
<script src="{{ public_path().'/assets/js/jquery.js' }}"></script>
<script src="{{ public_path().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
<script src="{{ public_path().'/assets/js/dz.carousel.js' }}"></script><!-- Swiper -->
<script src="{{ public_path().'/assets/vendor/swiper/swiper-bundle.min.js' }}"></script><!-- Swiper -->
<script src="{{ public_path().'/assets/js/settings.js' }}"></script>
<script src="{{ public_path().'/assets/js/custom.js' }}"></script>
</html>