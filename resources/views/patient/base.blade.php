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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
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
            <a href="/patient/bookings" class="nav-link {{ (request()->segment(2) == 'bookings') ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 441 512.02" width="35" height="32"><path d="M324.87 279.77c32.01 0 61.01 13.01 82.03 34.02 21.09 21 34.1 50.05 34.1 82.1 0 32.06-13.01 61.11-34.02 82.11l-1.32 1.22c-20.92 20.29-49.41 32.8-80.79 32.8-32.06 0-61.1-13.01-82.1-34.02-21.01-21-34.02-50.05-34.02-82.11s13.01-61.1 34.02-82.1c21-21.01 50.04-34.02 82.1-34.02zM243.11 38.08v54.18c.99 12.93 5.5 23.09 13.42 29.85 8.2 7.01 20.46 10.94 36.69 11.23l37.92-.04-88.03-95.22zm91.21 120.49-41.3-.04c-22.49-.35-40.21-6.4-52.9-17.24-13.23-11.31-20.68-27.35-22.19-47.23l-.11-1.74V25.29H62.87c-10.34 0-19.75 4.23-26.55 11.03-6.8 6.8-11.03 16.21-11.03 26.55v336.49c0 10.3 4.25 19.71 11.06 26.52 6.8 6.8 16.22 11.05 26.52 11.05h119.41c2.54 8.79 5.87 17.25 9.92 25.29H62.87c-17.28 0-33.02-7.08-44.41-18.46C7.08 432.37 0 416.64 0 399.36V62.87c0-17.26 7.08-32.98 18.45-44.36C29.89 7.08 45.61 0 62.87 0h173.88c4.11 0 7.76 1.96 10.07 5l109.39 118.34c2.24 2.43 3.34 5.49 3.34 8.55l.03 119.72c-8.18-1.97-16.62-3.25-25.26-3.79v-89.25zm-229.76 54.49c-6.98 0-12.64-5.66-12.64-12.64 0-6.99 5.66-12.65 12.64-12.65h150.49c6.98 0 12.65 5.66 12.65 12.65 0 6.98-5.67 12.64-12.65 12.64H104.56zm0 72.3c-6.98 0-12.64-5.66-12.64-12.65 0-6.98 5.66-12.64 12.64-12.64h142.52c3.71 0 7.05 1.6 9.37 4.15a149.03 149.03 0 0 0-30.54 21.14H104.56zm0 72.3c-6.98 0-12.64-5.66-12.64-12.65 0-6.98 5.66-12.64 12.64-12.64h86.2c-3.82 8.05-6.95 16.51-9.29 25.29h-76.91zm191.81 13.82c.1-2.48 1.69-4.64 4.03-5.45-.28-4.71-.85-11.81.43-16.35 1.45-4.75 4.63-8.79 8.92-11.32 1.52-.94 3.15-1.72 4.84-2.32 3.08-1.1 1.55-6.27 4.91-6.34 7.85-.2 20.77 6.99 25.79 12.44 3.21 3.54 5.04 8.13 5.14 12.92l-.32 11.51c1.51.31 2.76 1.36 3.31 2.81 1.68 6.77-14.84 22.77-14.84 24.49.04.58.27 1.14.66 1.59 11.45 15.75 42.33 8.72 42.33 40.03H268.19c0-31.32 30.88-24.27 42.32-40.02.56-.82.82-1.28.81-1.63 0-1.54-14.95-16.83-14.95-22.36z"/></svg>
			</a>
			<!--<a href="notification.html" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#bfc9da" xmlns:v="https://vecta.io/nano"><path d="M12 1a7.5 7.5 0 0 0-7.5 7.5v5.85l-1.66 2.5A2.04 2.04 0 0 0 4.535 20h14.93a2.04 2.04 0 0 0 1.695-3.165L19.5 14.35V8.5A7.5 7.5 0 0 0 12 1zm0 22a3 3 0 0 0 2.825-2h-5.65A3 3 0 0 0 12 23z"/></svg>
			</a>-->
            <a href="/patient/clinicapp" class="nav-link {{ (request()->segment(2) == 'clinicapp') ? 'active' : '' }}">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 97.26 122.88" width="35" height="32"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>medical report</title><path class="cls-1" d="M6.47,13H22v8.16h-9a5.53,5.53,0,0,0-5.47,5.46v82.74a5.51,5.51,0,0,0,5.47,5.46H84.32a5.48,5.48,0,0,0,5.46-5.46V26.58a5.51,5.51,0,0,0-5.46-5.46h-9V13H90.79a6.5,6.5,0,0,1,6.47,6.47v97a6.51,6.51,0,0,1-6.47,6.47H6.47A6.5,6.5,0,0,1,0,116.41v-97A6.49,6.49,0,0,1,6.47,13ZM19,34.69H41.54v4.5H19v-4.5ZM19,46.8h14.8v4.5H19V46.8ZM67.57,31.49h4.37A1.49,1.49,0,0,1,73.43,33v5.55H79A1.49,1.49,0,0,1,80.47,40v4.38A1.5,1.5,0,0,1,79,45.87H73.43V51.3a1.49,1.49,0,0,1-1.49,1.48H67.57a1.49,1.49,0,0,1-1.49-1.48V45.87H60.53a1.48,1.48,0,0,1-1.48-1.48V40a1.48,1.48,0,0,1,1.48-1.48h5.55V33a1.49,1.49,0,0,1,1.49-1.49ZM19,99.49H66.2V104H19v-4.5Zm0-13.57h61.5v4.5H19v-4.5Zm0-15.53H35.24l4.26-5.92L44.72,72l5.72-11.17L56.61,72.9l2.8-2.06,1.33-.45H80.46v4.5h-19L55,79.66l-4.58-9-5.14,10-5.86-8.44-1.91,2.65H19v-4.5ZM31,9h7.33A10,10,0,0,1,48,0a10,10,0,0,1,9.71,8.93L66.3,9a1.08,1.08,0,0,1,1.08,1.08V20.47a1.08,1.08,0,0,1-1.08,1.08H31a1.08,1.08,0,0,1-1.08-1.08V10.12A1.06,1.06,0,0,1,31,9Zm13,4.43a7.14,7.14,0,0,0,2.62,2.27,4.8,4.8,0,0,0,2.55,0,7.12,7.12,0,0,0,3.06-3.25,6.1,6.1,0,0,0,.1-1.08,4.38,4.38,0,1,0-8.74,0,5,5,0,0,0,.41,2Z"/></svg>
			</a>
			
			<a href="/patient/doctorapp" class="nav-link {{ (request()->segment(2) == 'doctorapp') ? 'active' : '' }}">
				<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.47 122.88" width="35" height="32"><title>doctor</title><path d="M84.58,103.47a4.09,4.09,0,1,1-4.08,4.09,4.08,4.08,0,0,1,4.08-4.09Zm3.61-60.62a3.89,3.89,0,0,1,2.2,1.48c1.08,1.39,1.38,3.64,1.08,6a15.16,15.16,0,0,1-2.21,6.2c-1.31,2-3,3.29-5,3.16-.14,6.51-3.33,9.5-7.49,13.41l-1.59,1.51-.54.51.13.09a14.67,14.67,0,0,1-1.58,1.1,17.71,17.71,0,0,1-4.61,2.47,20.48,20.48,0,0,1-6.84,1.12,21.4,21.4,0,0,1-7.11-1.1l-1-.36a16.18,16.18,0,0,1-3.74-1.66l-.5-.31a21.59,21.59,0,0,1-2.26,4.77L62.65,92.05,77.23,79.9A22.93,22.93,0,0,1,75,75.38c6.43,4.57,7.82,14.11,7.61,21.81,0,1-.06,1.26-.08,1.59a8.91,8.91,0,0,0-4.36,15,8.49,8.49,0,0,0,11.77.7,8.9,8.9,0,0,0,3.42-7,7.94,7.94,0,0,0-1.08-4c-1.5-2.6-3.13-3.36-5.62-4.6-.17-.09,0-.47,0-1.53a47.43,47.43,0,0,0-1.46-14.08,21,21,0,0,0,3.4,1.41c8.9,2.1,19.84,3,23.76,5.2a16,16,0,0,1,5,4.26c3.47,4.58,3.76,17.76,5,23.36-.31,3.28-2.16,5.16-5.82,5.44H5.82C2.17,122.6.31,120.71,0,117.44c1.26-5.6,1.56-18.79,5-23.36a15.58,15.58,0,0,1,5.05-4.26c5.57-3.1,19.22-3.94,28.3-6.46a33.06,33.06,0,0,0-1.58,8c-1,.77-3.64,1.67-4.47,2.66a38.55,38.55,0,0,0-3.86,5.53,2,2,0,0,0-.27,1c0,.28.29.57.17.81l-.19.37c-2.6,5-4.29,10.61-3.49,13A3.64,3.64,0,0,0,27.3,117a12.43,12.43,0,0,0,3.15.41c.31,0,.63,0,.94,0a3.07,3.07,0,0,0,.52.39,4.12,4.12,0,0,0,.67.32,2.58,2.58,0,0,0,.91.17A2.51,2.51,0,0,0,36,115.75a2.54,2.54,0,0,0-.23-1,2.58,2.58,0,0,0-2.38-1.61c-.92,0-2.23.46-2.23,1.38v0l0,.06-.64,0a9.17,9.17,0,0,1-2.33-.28c-.45-.12-.71-.29-.77-.48-.58-1.68,1-6.33,3.29-10.83l.29-.55a2,2,0,0,0,1-.88,34,34,0,0,1,3.41-4.92,7.09,7.09,0,0,1,3.38-1.72H39a10.53,10.53,0,0,1,1.72,1.55,30.64,30.64,0,0,1,3.6,5c.23.41.79.5,1,.89,2.65,4.28,4.14,9.19,3.78,11.06-.08.44-.44.7-1,.88a10.49,10.49,0,0,1-2.62.37,1.74,1.74,0,0,0-.1-.19v0c0-.92-1.32-1.35-2.24-1.38a2.58,2.58,0,0,0-2.38,1.61,2.71,2.71,0,0,0-.23,1,2.51,2.51,0,0,0,2.51,2.51,2.63,2.63,0,0,0,.92-.17,4,4,0,0,0,.66-.32,3.27,3.27,0,0,0,.36-.25h.36A12.22,12.22,0,0,0,49,117a3.88,3.88,0,0,0,2.9-3.05c.44-2.44-1.33-7.82-3.94-12.7a2,2,0,0,0,.16-.81,2.13,2.13,0,0,0-.28-1,36,36,0,0,0-4.1-5.7c-.83-.93-2.66-1.2-2.85-2.44-.5-3.23.9-7.23,3-10.71a15.15,15.15,0,0,0,1.46-2.19l.32-.44a8.32,8.32,0,0,1,3.41-2.08q-.73-.55-1.47-1.2L46.07,73.3l-.1-.09c-4-3.48-7.41-6.43-8-13.56-2.78-.24-4.75-2.88-5.72-6a15.2,15.2,0,0,1-.65-5.14,7.82,7.82,0,0,1,1.51-4.56,4.31,4.31,0,0,1,.63-.65l-.14-.09c-.64-8,1.23-21.82-7.43-24.44C42.51-1.55,60.51-5.27,75.6,7.13,91.28,8,98.85,30.64,88.19,42.85Zm-46-5a14,14,0,0,0-.2,7.6,1.67,1.67,0,0,1-2.67,1.77c-2-1.7-3.21-1.86-3.73-1.24a4.7,4.7,0,0,0-.75,2.6,11.77,11.77,0,0,0,.51,4c.68,2.23,2,4.06,3.58,3.6a1.51,1.51,0,0,1,.48-.08,1.67,1.67,0,0,1,1.71,1.63c.17,7,3.24,9.67,7,12.9l.1.08,1.6,1.4a16.87,16.87,0,0,0,5.82,3.46,17.29,17.29,0,0,0,4.44.87,25,25,0,0,0,3.35-.16,23.69,23.69,0,0,0,4.45-.91,15,15,0,0,0,4.91-3.23l1.62-1.54c4-3.74,6.92-6.5,6.36-13.21a1.67,1.67,0,0,1,2.59-1.53c1.13.75,2.25,0,3.08-1.24a11.63,11.63,0,0,0,1.69-4.78,5.27,5.27,0,0,0-.41-3.52c-.4-.52-1.47-.31-3.53,1.26a1.67,1.67,0,0,1-2.73-1.55c1.46-8.54.73-13.82-1.14-17.34-1.63-3-4.23-4.85-7-6.32-6.15,4.7-10.49,5.23-14.81,5.77-3.57.44-7.12.88-11.83,4.13a11.37,11.37,0,0,0-4.47,5.58Z"/></svg>
			</a>
			<a href="/patient/profile" class="nav-link {{ (request()->segment(2) == 'profile') ? 'active' : '' }}">
				<svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 469.76" width="35" height="32"><path fill-rule="nonzero" d="M139.64 191.28c3.34-9.28 8.44-12.29 15.16-12.1l-4.43-2.94c-2.4-30.05 4.64-82.18-27.99-92.05 61.74-76.3 132.9-117.79 186.33-49.92 64.37 3.38 90.19 105.67 38.85 148.73l-.3 2.54c2.01-.61 4.02-1 5.95-1.15 3.79-.29 7.42.33 10.51 1.97 3.39 1.81 5.98 4.74 7.31 8.89 1.28 3.97 1.33 9.04-.35 15.27l-8.03 22.78c-1.3 3.7-2.49 6.3-5.08 8.36-2.67 2.11-5.9 2.9-10.9 2.63-.83-.04-1.66-.13-2.47-.28a55.67 55.67 0 0 1-3.68 16.32c-2.77 7.12-6.63 12.93-10.43 18.29-4.3 6.05-8.85 11.53-13.6 16.45 3.7 12.99 8.47 22.56 14.19 29.84 29.04 20.88 107.25 25.79 134.48 40.97 39.31 22 38.23 64.52 46.84 103.88H0c8.53-39.01 7.65-82.23 46.84-103.88 34.52-19.22 107.77-17.99 136.96-42.9 4.2-6.58 7.75-14.46 10.47-23.86-6.23-6.48-12.07-14.18-17.39-23.12l-.36-.57c-4.8-8.06-10.6-17.79-12.42-31.3l-1.56.03c-3.27-.04-6.42-.79-9.37-2.46-4.74-2.7-8.06-7.3-10.3-12.49l-.2-.52c-2.52-6.09-3.67-13.03-3.94-18.28-.1-1.96-.1-5.85.01-9.57v-.05c.08-3.19.25-6.28.49-8.01.08-.53.21-1.03.41-1.5zm182.93 143.68-.63-.75c-6.23-7.49-11.48-16.95-15.64-29.28-6.79 5.55-14.48 10.26-22.75 13.76l-.43.19h-.01c-10.72 4.68-21.79 6.94-32.76 6.69-5.95-.13-11.86-1-17.67-2.61l-.22-.06c-9.51-2.53-18.96-7.09-28-14.06-3.72 10.72-8.55 19.6-14.2 26.93l33.92 82.84 19.93-45.96-9.73-10.63c-7.31-10.69-3.06-23.1 8.75-25.01 5.16-.83 26.04-.95 30.82.33 10.7 2.86 13.89 14.97 7.62 24.68l-9.73 10.63 19.76 45.96 30.97-83.65zm-117.38-42.19.4.34c15.35 14.68 32.36 20.2 48.51 19.57 19.48-.77 37.89-10.37 50.85-23.65.41-.42.88-.8 1.41-1.09 4.8-4.81 9.41-10.29 13.76-16.41 3.34-4.71 6.72-9.78 8.99-15.61 2.21-5.68 3.47-12.33 2.78-20.51-.08-1.32.23-2.68 1.01-3.86a6.112 6.112 0 0 1 8.46-1.75c1.07.7 2.16 1.28 3.25 1.68.94.34 1.85.55 2.68.59 1.75.09 2.54.09 2.65 0 .19-.14.58-1.19 1.16-2.84l7.79-22.06c.99-3.72 1.06-6.4.49-8.18-.29-.9-.8-1.51-1.42-1.84-.92-.49-2.27-.66-3.84-.54-3.42.26-7.42 1.92-10.97 4.61-1.3.98-2.99 1.45-4.72 1.15-3.33-.57-5.58-3.74-5.01-7.07 5.77-33.67 3.13-55.61-4.04-70.57-6.28-13.11-16.3-21.05-27.17-26.98-24.12 18.47-41.1 20.58-58.04 22.67-14.01 1.73-27.99 3.46-46.51 16.27-8.75 6.05-14.58 13.37-17.59 21.87-3.09 8.73-3.33 18.89-.83 30.4.32 1.16.29 2.43-.16 3.65-1.14 3.17-4.66 4.81-7.83 3.67l-5.61-2.03c-7.24-2.53-12.37-3.71-14.35.84-.16 1.47-.27 3.72-.33 6.04v.05c-.09 3.35-.09 6.85-.01 8.61.21 4.15 1.08 9.55 2.97 14.13l.22.45c1.27 2.97 2.96 5.49 5.06 6.68 1.06.6 2.24.88 3.48.89 1.52.02 3.21-.3 5.01-.83.57-.2 1.18-.31 1.82-.32a6.111 6.111 0 0 1 6.26 5.96c.33 14.1 6.38 24.24 11.25 32.41l.34.57c5.44 9.14 11.44 16.81 17.83 23.04z"/></svg>
			</a>
		</div>
	</div>
	<!-- Menubar -->
</div> 
<!--**********************************
    Scripts
***********************************-->
<script src="https://maps.googleapis.com/maps/api/js?key={{config('app.google_api_key')}}&libraries=places"></script>
<script src="{{ public_path().'/assets/js/jquery.js' }}"></script>
<script src="{{ public_path().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
<script src="{{ public_path().'/assets/vendor/swiper/swiper-bundle.min.js' }}"></script><!-- Swiper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script><!-- Swiper -->
<script src="{{ public_path().'/assets/js/settings.js' }}"></script>
<script src="{{ public_path().'/assets/js/custom.js' }}"></script>

<script>
	$(function(){
		"use strict"
		pickmylocation();
	});
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
</html>