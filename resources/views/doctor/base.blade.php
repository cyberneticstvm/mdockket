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
	<title>Dockket - Doctor Booking App</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ public_path().'/assets/vendor/swiper/swiper-bundle.min.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ public_path().'/assets/css/style.css' }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Roboto+Slab:wght@100;300;500;600;800&display=swap" rel="stylesheet">

</head>   
<body class="bg-white">
<div class="page-wraper">
    
    <!-- Header -->
	<header class="header transparent">
		<div class="main-bar">
			<div class="container">
				<div class="header-content">
					<div class="left-content">
						<a href="javascript:void(0);" class="menu-toggler">
							<svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><path d="M13 14v6c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1zm-9 7h6c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1zM3 4v6c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1zm12.95-1.6L11.7 6.64c-.39.39-.39 1.02 0 1.41l4.25 4.25c.39.39 1.02.39 1.41 0l4.25-4.25c.39-.39.39-1.02 0-1.41L17.37 2.4c-.39-.39-1.03-.39-1.42 0z"/></svg>
						</a>
					</div>
					<div class="mid-content">
					</div>
					<div class="right-content">
                        <a href="javascript:void(0);" class="theme-color" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                            <svg class="color-plate" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000">
								<path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
							</svg>
                        </a>
                        <a href="javascript:void(0);" class="theme-btn">
                            <svg class="dark" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g></g><g><g><g><path d="M11.57,2.3c2.38-0.59,4.68-0.27,6.63,0.64c0.35,0.16,0.41,0.64,0.1,0.86C15.7,5.6,14,8.6,14,12s1.7,6.4,4.3,8.2 c0.32,0.22,0.26,0.7-0.09,0.86C16.93,21.66,15.5,22,14,22c-6.05,0-10.85-5.38-9.87-11.6C4.74,6.48,7.72,3.24,11.57,2.3z"/></g></g></g>
							</svg>
							<svg class="light" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><rect fill="none" height="24" width="24"/><path d="M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S14.76,7,12,7L12,7z M2,13l2,0c0.55,0,1-0.45,1-1s-0.45-1-1-1l-2,0 c-0.55,0-1,0.45-1,1S1.45,13,2,13z M20,13l2,0c0.55,0,1-0.45,1-1s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S19.45,13,20,13z M11,2v2 c0,0.55,0.45,1,1,1s1-0.45,1-1V2c0-0.55-0.45-1-1-1S11,1.45,11,2z M11,20v2c0,0.55,0.45,1,1,1s1-0.45,1-1v-2c0-0.55-0.45-1-1-1 C11.45,19,11,19.45,11,20z M5.99,4.58c-0.39-0.39-1.03-0.39-1.41,0c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06 c0.39,0.39,1.03,0.39,1.41,0s0.39-1.03,0-1.41L5.99,4.58z M18.36,16.95c-0.39-0.39-1.03-0.39-1.41,0c-0.39,0.39-0.39,1.03,0,1.41 l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0c0.39-0.39,0.39-1.03,0-1.41L18.36,16.95z M19.42,5.99c0.39-0.39,0.39-1.03,0-1.41 c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06c-0.39,0.39-0.39,1.03,0,1.41s1.03,0.39,1.41,0L19.42,5.99z M7.05,18.36 c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06c-0.39,0.39-0.39,1.03,0,1.41s1.03,0.39,1.41,0L7.05,18.36z"/></svg>
                        </a>
					</div>
				</div>
			</div>
		</div>
	</header>
    <!-- Header End -->
    
    <!-- Preloader -->
	<div id="preloader">
		<div class="spinner"></div>
	</div>
    <!-- Preloader end-->
    
	<!-- Sidebar -->
    <div class="sidebar">
		<div class="author-box">
			<div class="dz-media">
				<img src="{{ public_path().'/assets/images/message/pic5.jpg' }}" alt="author-image">
			</div>
			<div class="dz-info">
				<span>Hi</span>
				<h5 class="name">{{ Auth::user()->name }}</h5>
			</div>
		</div>
		<ul class="nav navbar-nav">	
			<li class="nav-label">Main Menu</li>
			<li><a class="nav-link" href="/doctor/profile">
				<span class="dz-icon">
					<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
					<path d="M13.35 20.13c-.76.69-1.93.69-2.69-.01l-.11-.1C5.3 15.27 1.87 12.16 2 8.28c.06-1.7.93-3.33 2.34-4.29 2.64-1.8 5.9-.96 7.66 1.1 1.76-2.06 5.02-2.91 7.66-1.1 1.41.96 2.28 2.59 2.34 4.29.14 3.88-3.3 6.99-8.55 11.76l-.1.09z"/></svg>
				</span>
				<span>Welcome</span>
			</a></li>
            <li class="nav-label">Settings</li>
            <li class="nav-color" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                <a href="javascript:void(0);" class="nav-link">
                    <span class="dz-icon">                        
                        <svg class="color-plate" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000">
							<path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
						</svg>
                    </span>					
                    <span>Highlights</span>					
                </a>
            </li>
            <li>
                <div class="mode">
                    <span class="dz-icon">
                        <svg class="dark" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g></g><g><g><g><path d="M11.57,2.3c2.38-0.59,4.68-0.27,6.63,0.64c0.35,0.16,0.41,0.64,0.1,0.86C15.7,5.6,14,8.6,14,12s1.7,6.4,4.3,8.2 c0.32,0.22,0.26,0.7-0.09,0.86C16.93,21.66,15.5,22,14,22c-6.05,0-10.85-5.38-9.87-11.6C4.74,6.48,7.72,3.24,11.57,2.3z"/></g></g></g>
						</svg>
                    </span>					
                    <span class="text-dark">Dark Mode</span>
                    <div class="custom-switch">
                        <input type="checkbox" class="switch-input theme-btn" id="toggle-dark-menu">
                        <label class="custom-switch-label" for="toggle-dark-menu"></label>
                    </div>
                </div>
            </li>
		</ul>
		<div class="sidebar-bottom">
			<h6 class="name">Dockket - Doctor Booking App</h6>
			<p>App Version 1.0</p>
        </div>
    </div>
    <!-- Sidebar End -->
    
    <!-- Page Content -->
    <div class="page-content">
        
        <div class="content-inner pt-0">
			<div class="container fb">
                @yield("content")
			</div>    
		</div>
        
    </div>    
    <!-- Page Content End-->
    
    <!-- Menubar -->
	<div class="menubar-area">
		<div class="toolbar-inner menubar-nav">
            <a href="/doctor/reports" class="nav-link {{ (request()->segment(2) == 'reports') ? 'active' : '' }}">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105.53 122.88" width="35" height="32"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>generate-report</title><path class="cls-1" d="M98.66,87l2.84,2.85a1.9,1.9,0,0,1,0,2.71l-2.28,2.29a15.46,15.46,0,0,1,1.42,3.79h3a1.92,1.92,0,0,1,1.92,1.92v4a1.93,1.93,0,0,1-1.92,1.93h-3.23a15.4,15.4,0,0,1-1.67,3.67l2.09,2.09a1.93,1.93,0,0,1,0,2.72L98,117.86a1.93,1.93,0,0,1-2.72,0L93,115.58A15.88,15.88,0,0,1,89.16,117v3a1.93,1.93,0,0,1-1.92,1.92h-4A1.93,1.93,0,0,1,81.31,120v-3.23a15.32,15.32,0,0,1-3.68-1.68l-2.09,2.1a1.93,1.93,0,0,1-2.72,0L70,114.3a1.91,1.91,0,0,1,0-2.71l2.28-2.29a15.88,15.88,0,0,1-1.42-3.79h-3A1.93,1.93,0,0,1,66,103.59v-4a1.94,1.94,0,0,1,1.92-1.93H71.1A15.43,15.43,0,0,1,72.78,94l-2.1-2.09a1.93,1.93,0,0,1,0-2.72l2.85-2.84a1.91,1.91,0,0,1,2.71,0l2.29,2.28a15.83,15.83,0,0,1,3.79-1.42v-3a1.93,1.93,0,0,1,1.92-1.92h4a1.93,1.93,0,0,1,1.92,1.92v3.23a15,15,0,0,1,3.67,1.68L95.94,87a1.94,1.94,0,0,1,2.72,0ZM60.26,117a3,3,0,0,1,0,5.92H6.89A6.89,6.89,0,0,1,0,116V6.85A6.82,6.82,0,0,1,2,2,6.79,6.79,0,0,1,6.88,0H91.52a6.9,6.9,0,0,1,6.89,6.89V68.23c0,.06,0,.12,0,.18a3,3,0,0,1-5.94,0V6.89h0a1,1,0,0,0-.28-.68,1,1,0,0,0-.68-.29H6.89a.94.94,0,0,0-1,1V116h0a1,1,0,0,0,.28.67,1,1,0,0,0,.69.29H60.26ZM19,102.66V96H47.83v6.63l-28.82,0Zm55.3-42.9v6.11H65.62V59.76ZM58.77,54.38V65.87H50.08V54.38ZM43.24,37.92v28H34.55V37.92ZM27.7,26.41V65.87H19V26.41ZM69,29.31l13.11.05a13.14,13.14,0,0,1-3.91,9.29,13.55,13.55,0,0,1-1.91,1.56L69,29.31Zm-1.34-2.6L67,12.7a.51.51,0,0,1,.48-.53H68A14.56,14.56,0,0,1,82.69,25.67a.52.52,0,0,1-.47.54l-14,1a.49.49,0,0,1-.53-.46.08.08,0,0,0,0,0Zm.83-13.55.65,12.51L80.9,24.61a11.68,11.68,0,0,0-4-7.86c-2.46-2.27-4.74-3.62-8.32-3.58ZM66.1,28.7l7,12.17A14.05,14.05,0,1,1,64.06,14.8l2,13.9ZM19,84.83V78.15H59.86v6.63L19,84.83Zm66.73,9.38a7.89,7.89,0,1,1-7.89,7.89,7.89,7.89,0,0,1,7.89-7.89Z"/></svg>
        </a>
            <a href="/doctor/appointments" class="nav-link {{ (request()->segment(2) == 'appointments') ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 441 512.02" width="35" height="32"><path d="M324.87 279.77c32.01 0 61.01 13.01 82.03 34.02 21.09 21 34.1 50.05 34.1 82.1 0 32.06-13.01 61.11-34.02 82.11l-1.32 1.22c-20.92 20.29-49.41 32.8-80.79 32.8-32.06 0-61.1-13.01-82.1-34.02-21.01-21-34.02-50.05-34.02-82.11s13.01-61.1 34.02-82.1c21-21.01 50.04-34.02 82.1-34.02zM243.11 38.08v54.18c.99 12.93 5.5 23.09 13.42 29.85 8.2 7.01 20.46 10.94 36.69 11.23l37.92-.04-88.03-95.22zm91.21 120.49-41.3-.04c-22.49-.35-40.21-6.4-52.9-17.24-13.23-11.31-20.68-27.35-22.19-47.23l-.11-1.74V25.29H62.87c-10.34 0-19.75 4.23-26.55 11.03-6.8 6.8-11.03 16.21-11.03 26.55v336.49c0 10.3 4.25 19.71 11.06 26.52 6.8 6.8 16.22 11.05 26.52 11.05h119.41c2.54 8.79 5.87 17.25 9.92 25.29H62.87c-17.28 0-33.02-7.08-44.41-18.46C7.08 432.37 0 416.64 0 399.36V62.87c0-17.26 7.08-32.98 18.45-44.36C29.89 7.08 45.61 0 62.87 0h173.88c4.11 0 7.76 1.96 10.07 5l109.39 118.34c2.24 2.43 3.34 5.49 3.34 8.55l.03 119.72c-8.18-1.97-16.62-3.25-25.26-3.79v-89.25zm-229.76 54.49c-6.98 0-12.64-5.66-12.64-12.64 0-6.99 5.66-12.65 12.64-12.65h150.49c6.98 0 12.65 5.66 12.65 12.65 0 6.98-5.67 12.64-12.65 12.64H104.56zm0 72.3c-6.98 0-12.64-5.66-12.64-12.65 0-6.98 5.66-12.64 12.64-12.64h142.52c3.71 0 7.05 1.6 9.37 4.15a149.03 149.03 0 0 0-30.54 21.14H104.56zm0 72.3c-6.98 0-12.64-5.66-12.64-12.65 0-6.98 5.66-12.64 12.64-12.64h86.2c-3.82 8.05-6.95 16.51-9.29 25.29h-76.91zm191.81 13.82c.1-2.48 1.69-4.64 4.03-5.45-.28-4.71-.85-11.81.43-16.35 1.45-4.75 4.63-8.79 8.92-11.32 1.52-.94 3.15-1.72 4.84-2.32 3.08-1.1 1.55-6.27 4.91-6.34 7.85-.2 20.77 6.99 25.79 12.44 3.21 3.54 5.04 8.13 5.14 12.92l-.32 11.51c1.51.31 2.76 1.36 3.31 2.81 1.68 6.77-14.84 22.77-14.84 24.49.04.58.27 1.14.66 1.59 11.45 15.75 42.33 8.72 42.33 40.03H268.19c0-31.32 30.88-24.27 42.32-40.02.56-.82.82-1.28.81-1.63 0-1.54-14.95-16.83-14.95-22.36z"/></svg>
			</a>
			<!--<a href="notification.html" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#bfc9da" xmlns:v="https://vecta.io/nano"><path d="M12 1a7.5 7.5 0 0 0-7.5 7.5v5.85l-1.66 2.5A2.04 2.04 0 0 0 4.535 20h14.93a2.04 2.04 0 0 0 1.695-3.165L19.5 14.35V8.5A7.5 7.5 0 0 0 12 1zm0 22a3 3 0 0 0 2.825-2h-5.65A3 3 0 0 0 12 23z"/></svg>
			</a>-->
            <a href="/doctor/leaves" class="nav-link {{ (request()->segment(2) == 'leaves') ? 'active' : '' }}">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 97.26 122.88" width="35" height="32"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>Leaves</title><path class="cls-1" d="M6.47,13H22v8.16h-9a5.53,5.53,0,0,0-5.47,5.46v82.74a5.51,5.51,0,0,0,5.47,5.46H84.32a5.48,5.48,0,0,0,5.46-5.46V26.58a5.51,5.51,0,0,0-5.46-5.46h-9V13H90.79a6.5,6.5,0,0,1,6.47,6.47v97a6.51,6.51,0,0,1-6.47,6.47H6.47A6.5,6.5,0,0,1,0,116.41v-97A6.49,6.49,0,0,1,6.47,13ZM19,34.69H41.54v4.5H19v-4.5ZM19,46.8h14.8v4.5H19V46.8ZM67.57,31.49h4.37A1.49,1.49,0,0,1,73.43,33v5.55H79A1.49,1.49,0,0,1,80.47,40v4.38A1.5,1.5,0,0,1,79,45.87H73.43V51.3a1.49,1.49,0,0,1-1.49,1.48H67.57a1.49,1.49,0,0,1-1.49-1.48V45.87H60.53a1.48,1.48,0,0,1-1.48-1.48V40a1.48,1.48,0,0,1,1.48-1.48h5.55V33a1.49,1.49,0,0,1,1.49-1.49ZM19,99.49H66.2V104H19v-4.5Zm0-13.57h61.5v4.5H19v-4.5Zm0-15.53H35.24l4.26-5.92L44.72,72l5.72-11.17L56.61,72.9l2.8-2.06,1.33-.45H80.46v4.5h-19L55,79.66l-4.58-9-5.14,10-5.86-8.44-1.91,2.65H19v-4.5ZM31,9h7.33A10,10,0,0,1,48,0a10,10,0,0,1,9.71,8.93L66.3,9a1.08,1.08,0,0,1,1.08,1.08V20.47a1.08,1.08,0,0,1-1.08,1.08H31a1.08,1.08,0,0,1-1.08-1.08V10.12A1.06,1.06,0,0,1,31,9Zm13,4.43a7.14,7.14,0,0,0,2.62,2.27,4.8,4.8,0,0,0,2.55,0,7.12,7.12,0,0,0,3.06-3.25,6.1,6.1,0,0,0,.1-1.08,4.38,4.38,0,1,0-8.74,0,5,5,0,0,0,.41,2Z"/></svg>
			</a>
			
			<a href="/doctor/settings" class="nav-link {{ (request()->segment(2) == 'settings') ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 387.72" width="35" height="32"><path fill-rule="nonzero" d="M150.22 108.7c1.83-4.93 5.06-8.44 9.68-10.55 4.62-2.12 9.42-2.3 14.31-.46l26.66 9.86c6.82-10.84 15.86-20.88 25.22-29.62L213.23 49.9c-2.17-4.72-2.37-9.47-.6-14.24 1.79-4.83 5.02-8.25 9.74-10.41L257.56 9.1c4.5-2.07 9.17-2.28 14.1-.54 4.85 1.74 8.36 4.97 10.52 9.7l11.78 25.66c12.65-2.55 25.71-3.44 38.58-2.52l11.09-29.25c1.6-4.83 4.68-8.31 9.36-10.46 4.62-2.12 9.37-2.23 14.33-.42l35.97 13.37c4.94 1.83 8.45 5.06 10.57 9.68 2.11 4.61 2.29 9.42.45 14.31l-9.86 26.66c10.83 6.82 20.87 15.86 29.62 25.22l28.02-12.86c4.73-2.17 9.48-2.37 14.25-.6 4.83 1.79 8.25 5.02 10.41 9.74l16.15 35.19c2.07 4.51 2.27 9.16.53 14.1-1.73 4.84-4.96 8.36-9.69 10.52l-25.66 11.78c2.59 12.84 3.36 25.83 2.67 38.91l29.1 10.76c4.83 1.61 8.31 4.68 10.46 9.37 2.12 4.61 2.23 9.36.42 14.33l-13.22 36.3c-1.92 4.74-5.22 8.11-9.83 10.22-4.62 2.12-9.35 2.45-14.17.79l-26.81-10.19c-6.96 10.9-15.76 20.79-25.21 29.62l12.86 28.03c2.17 4.72 2.37 9.46.6 14.24-1.79 4.83-5.02 8.25-9.74 10.41l-35.19 16.15c-4.51 2.07-9.17 2.27-14.1.53-4.85-1.74-8.36-4.96-10.53-9.69l-11.77-25.66c-12.85 2.6-25.83 3.36-38.91 2.67l-10.76 29.1c-1.61 4.83-4.75 8.34-9.48 10.51-4.79 2.2-9.5 2.29-14.22.37l-36.3-13.23c-4.75-1.91-8.11-5.21-10.23-9.82-2.12-4.62-2.44-9.35-.78-14.17l10.18-26.8c-3.54-2.23-7-4.7-10.36-7.34l26.49-13.34c6.17-2.96 11.28-3.39 16.08-2.81 3.25 1.6 6.58 3.03 9.99 4.3 13.15 4.88 27.11 7.07 41.81 6.79 44.52-1.39 84.89-30.26 100.39-72.05 10.24-27.62 8.85-57.83-3.4-84.52-18.79-40.93-58.49-65.37-103.67-64.48-29.42.94-58.38 14.24-78.28 35.93-12.77 14.29-21.5 30.83-25.84 48.31-3.74 6.68-7.38 12.01-10.86 13.67l.03.06-28.85 14.16c-.02-3.47.08-6.93.32-10.35l-29.24-11.09c-4.83-1.61-8.31-4.68-10.46-9.37-2.12-4.62-2.23-9.36-.42-14.33l13.37-35.97zM76.47 387.6c-21.09 1.29-42.99-7.8-60.19-23.99 86.39.08 69.92-104.82-16.28-69.23 11.8-42.95 50.13-59.96 91.4-51.04 21.83 4.7 34.79 8.63 55.41-.7l73.31-35.99c39.09-18.59 31.6-88.19 97.31-92.18 21.09-1.3 42.96 7.81 60.2 23.99-86.4-.09-69.93 104.81 16.28 69.22-11.8 42.95-50.14 59.96-91.4 51.04-18.11-3.94-31.98-11.92-58.34.87l-69.29 34.89c-13.73 7.24-18.37 11.98-26 25.4-18.67 32.83-28.28 65.03-72.41 67.72z"/></svg>
			</a>
			<a href="/doctor/profile" class="nav-link {{ (request()->segment(2) == 'profile') ? 'active' : '' }}">
				<svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 469.76" width="35" height="32"><path fill-rule="nonzero" d="M139.64 191.28c3.34-9.28 8.44-12.29 15.16-12.1l-4.43-2.94c-2.4-30.05 4.64-82.18-27.99-92.05 61.74-76.3 132.9-117.79 186.33-49.92 64.37 3.38 90.19 105.67 38.85 148.73l-.3 2.54c2.01-.61 4.02-1 5.95-1.15 3.79-.29 7.42.33 10.51 1.97 3.39 1.81 5.98 4.74 7.31 8.89 1.28 3.97 1.33 9.04-.35 15.27l-8.03 22.78c-1.3 3.7-2.49 6.3-5.08 8.36-2.67 2.11-5.9 2.9-10.9 2.63-.83-.04-1.66-.13-2.47-.28a55.67 55.67 0 0 1-3.68 16.32c-2.77 7.12-6.63 12.93-10.43 18.29-4.3 6.05-8.85 11.53-13.6 16.45 3.7 12.99 8.47 22.56 14.19 29.84 29.04 20.88 107.25 25.79 134.48 40.97 39.31 22 38.23 64.52 46.84 103.88H0c8.53-39.01 7.65-82.23 46.84-103.88 34.52-19.22 107.77-17.99 136.96-42.9 4.2-6.58 7.75-14.46 10.47-23.86-6.23-6.48-12.07-14.18-17.39-23.12l-.36-.57c-4.8-8.06-10.6-17.79-12.42-31.3l-1.56.03c-3.27-.04-6.42-.79-9.37-2.46-4.74-2.7-8.06-7.3-10.3-12.49l-.2-.52c-2.52-6.09-3.67-13.03-3.94-18.28-.1-1.96-.1-5.85.01-9.57v-.05c.08-3.19.25-6.28.49-8.01.08-.53.21-1.03.41-1.5zm182.93 143.68-.63-.75c-6.23-7.49-11.48-16.95-15.64-29.28-6.79 5.55-14.48 10.26-22.75 13.76l-.43.19h-.01c-10.72 4.68-21.79 6.94-32.76 6.69-5.95-.13-11.86-1-17.67-2.61l-.22-.06c-9.51-2.53-18.96-7.09-28-14.06-3.72 10.72-8.55 19.6-14.2 26.93l33.92 82.84 19.93-45.96-9.73-10.63c-7.31-10.69-3.06-23.1 8.75-25.01 5.16-.83 26.04-.95 30.82.33 10.7 2.86 13.89 14.97 7.62 24.68l-9.73 10.63 19.76 45.96 30.97-83.65zm-117.38-42.19.4.34c15.35 14.68 32.36 20.2 48.51 19.57 19.48-.77 37.89-10.37 50.85-23.65.41-.42.88-.8 1.41-1.09 4.8-4.81 9.41-10.29 13.76-16.41 3.34-4.71 6.72-9.78 8.99-15.61 2.21-5.68 3.47-12.33 2.78-20.51-.08-1.32.23-2.68 1.01-3.86a6.112 6.112 0 0 1 8.46-1.75c1.07.7 2.16 1.28 3.25 1.68.94.34 1.85.55 2.68.59 1.75.09 2.54.09 2.65 0 .19-.14.58-1.19 1.16-2.84l7.79-22.06c.99-3.72 1.06-6.4.49-8.18-.29-.9-.8-1.51-1.42-1.84-.92-.49-2.27-.66-3.84-.54-3.42.26-7.42 1.92-10.97 4.61-1.3.98-2.99 1.45-4.72 1.15-3.33-.57-5.58-3.74-5.01-7.07 5.77-33.67 3.13-55.61-4.04-70.57-6.28-13.11-16.3-21.05-27.17-26.98-24.12 18.47-41.1 20.58-58.04 22.67-14.01 1.73-27.99 3.46-46.51 16.27-8.75 6.05-14.58 13.37-17.59 21.87-3.09 8.73-3.33 18.89-.83 30.4.32 1.16.29 2.43-.16 3.65-1.14 3.17-4.66 4.81-7.83 3.67l-5.61-2.03c-7.24-2.53-12.37-3.71-14.35.84-.16 1.47-.27 3.72-.33 6.04v.05c-.09 3.35-.09 6.85-.01 8.61.21 4.15 1.08 9.55 2.97 14.13l.22.45c1.27 2.97 2.96 5.49 5.06 6.68 1.06.6 2.24.88 3.48.89 1.52.02 3.21-.3 5.01-.83.57-.2 1.18-.31 1.82-.32a6.111 6.111 0 0 1 6.26 5.96c.33 14.1 6.38 24.24 11.25 32.41l.34.57c5.44 9.14 11.44 16.81 17.83 23.04z"/></svg>
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
<script  async defer src="https://maps.googleapis.com/maps/api/js?key={{config('app.google_api_key')}}&libraries=places"></script>
<script src="{{ public_path().'/assets/js/jquery.js' }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ public_path().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
<script src="{{ public_path().'/assets/vendor/swiper/swiper-bundle.min.js' }}"></script><!-- Swiper -->
<script src="{{ public_path().'/assets/js/settings.js' }}"></script>
<script src="{{ public_path().'/assets/js/custom.js' }}"></script>

<script>
    function pickmylocation(){
        navigator.geolocation.getCurrentPosition(
            function (position) {
                var addr = getUserAddressBy(position.coords.latitude, position.coords.longitude);
            },
            function errorCallback(error) {
            console.log(error)
            }
        );
    }
    function getUserAddressBy(lat, long) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var address = JSON.parse(this.responseText)
                var addr = address.results[0].formatted_address;
                document.getElementById('address').value = addr;
                $('#latitude').val(lat);
                $('#longitude').val(long);
            }
        };
        xhttp.open("GET", "https://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+","+long+"&key={{config('app.google_api_key')}}", true);
        xhttp.send();
    }
</script>

</body>
</html>