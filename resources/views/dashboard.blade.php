<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>OSMS</title>
<meta name="description" content="" />

<!-- Favicon -->
<link rel="shortcut icon" href="public/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="public/apple-touch-icon.png">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<!-- Web Fonts  -->

<!-- Vendor CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="{{ asset('fontassets/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('fontassets/css/all.min.css')}}">
<link rel="stylesheet" href="{{ asset('fontassets/css/simple-line-icons.min.css')}}">
<link rel="stylesheet" href="{{ asset('fontassets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('fontassets/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{ asset('fontassets/css/magnific-popup.min.css')}}">
<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('fontassets/css/theme.css')}}">
<link rel="stylesheet" href="{{ asset('fontassets/css/theme-elements.css')}}">
<link rel="stylesheet" href="{{ asset('fontassets/css/theme-blog.css')}}">
<link rel="stylesheet" href="{{ asset('fontassets/css/theme-shop.css')}}">

<!-- Demo CSS -->
<link rel="stylesheet" href="{{ asset('fontassets/css/demo.css')}}">
<!-- Skin CSS -->
<link id="skinCSS" rel="stylesheet" href="{{ asset('fontassets/css/skin.css')}}">
</head>
<style type="text/css">
.apexcharts-canvas {
	position: relative;
	user-select: none;/* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}


/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
 -webkit-appearance: none;
 width: 6px;
}
 .apexcharts-canvas ::-webkit-scrollbar-thumb {
 border-radius: 4px;
 background-color: rgba(0, 0, 0, .5);
 box-shadow: 0 0 1px rgba(255, 255, 255, .5);
 -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}
.apexcharts-inner {
	position: relative;
}
.apexcharts-text tspan {
	font-family: inherit;
}
.legend-mouseover-inactive {
	transition: 0.15s ease all;
	opacity: 0.20;
}
.apexcharts-series-collapsed {
	opacity: 0;
}
.apexcharts-tooltip {
	border-radius: 5px;
	box-shadow: 2px 2px 6px -4px #999;
	cursor: default;
	font-size: 14px;
	left: 62px;
	opacity: 0;
	pointer-events: none;
	position: absolute;
	top: 20px;
	display: flex;
	flex-direction: column;
	overflow: hidden;
	white-space: nowrap;
	z-index: 12;
	transition: 0.15s ease all;
}
.apexcharts-tooltip.apexcharts-active {
	opacity: 1;
	transition: 0.15s ease all;
}
.apexcharts-tooltip.apexcharts-theme-light {
	border: 1px solid #e3e3e3;
	background: rgba(255, 255, 255, 0.96);
}
.apexcharts-tooltip.apexcharts-theme-dark {
	color: #fff;
	background: rgba(30, 30, 30, 0.8);
}
.apexcharts-tooltip * {
	font-family: inherit;
}
.apexcharts-tooltip-title {
	padding: 6px;
	font-size: 15px;
	margin-bottom: 4px;
}
.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
	background: #ECEFF1;
	border-bottom: 1px solid #ddd;
}
.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
	background: rgba(0, 0, 0, 0.7);
	border-bottom: 1px solid #333;
}
.apexcharts-tooltip-text-y-value, .apexcharts-tooltip-text-goals-value, .apexcharts-tooltip-text-z-value {
	display: inline-block;
	font-weight: 600;
	margin-left: 5px;
}
.apexcharts-tooltip-text-y-label:empty, .apexcharts-tooltip-text-y-value:empty, .apexcharts-tooltip-text-goals-label:empty, .apexcharts-tooltip-text-goals-value:empty, .apexcharts-tooltip-text-z-value:empty {
	display: none;
}
.apexcharts-tooltip-text-y-value, .apexcharts-tooltip-text-goals-value, .apexcharts-tooltip-text-z-value {
	font-weight: 600;
}
.apexcharts-tooltip-text-goals-label, .apexcharts-tooltip-text-goals-value {
	padding: 6px 0 5px;
}
.apexcharts-tooltip-goals-group, .apexcharts-tooltip-text-goals-label, .apexcharts-tooltip-text-goals-value {
	display: flex;
}
.apexcharts-tooltip-text-goals-label:not(:empty), .apexcharts-tooltip-text-goals-value:not(:empty) {
 margin-top: -6px;
}
.apexcharts-tooltip-marker {
	width: 12px;
	height: 12px;
	position: relative;
	top: 0px;
	margin-right: 10px;
	border-radius: 50%;
}
.apexcharts-tooltip-series-group {
	padding: 0 10px;
	display: none;
	text-align: left;
	justify-content: left;
	align-items: center;
}
.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
	opacity: 1;
}
.apexcharts-tooltip-series-group.apexcharts-active, .apexcharts-tooltip-series-group:last-child {
	padding-bottom: 4px;
}
.apexcharts-tooltip-series-group-hidden {
	opacity: 0;
	height: 0;
	line-height: 0;
	padding: 0 !important;
}
.apexcharts-tooltip-y-group {
	padding: 6px 0 5px;
}
.apexcharts-tooltip-box, .apexcharts-custom-tooltip {
	padding: 4px 8px;
}
.apexcharts-tooltip-boxPlot {
	display: flex;
	flex-direction: column-reverse;
}
.apexcharts-tooltip-box>div {
	margin: 4px 0;
}
.apexcharts-tooltip-box span.value {
	font-weight: bold;
}
.apexcharts-tooltip-rangebar {
	padding: 5px 8px;
}
.apexcharts-tooltip-rangebar .category {
	font-weight: 600;
	color: #777;
}
.apexcharts-tooltip-rangebar .series-name {
	font-weight: bold;
	display: block;
	margin-bottom: 5px;
}
.apexcharts-xaxistooltip {
	opacity: 0;
	padding: 9px 10px;
	pointer-events: none;
	color: #373d3f;
	font-size: 13px;
	text-align: center;
	border-radius: 2px;
	position: absolute;
	z-index: 10;
	background: #ECEFF1;
	border: 1px solid #90A4AE;
	transition: 0.15s ease all;
}
.apexcharts-xaxistooltip.apexcharts-theme-dark {
	background: rgba(0, 0, 0, 0.7);
	border: 1px solid rgba(0, 0, 0, 0.5);
	color: #fff;
}
.apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
	left: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}
.apexcharts-xaxistooltip:after {
	border-color: rgba(236, 239, 241, 0);
	border-width: 6px;
	margin-left: -6px;
}
.apexcharts-xaxistooltip:before {
	border-color: rgba(144, 164, 174, 0);
	border-width: 7px;
	margin-left: -7px;
}
.apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
	bottom: 100%;
}
.apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
	top: 100%;
}
.apexcharts-xaxistooltip-bottom:after {
	border-bottom-color: #ECEFF1;
}
.apexcharts-xaxistooltip-bottom:before {
	border-bottom-color: #90A4AE;
}
.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
	border-bottom-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
	border-bottom-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-top:after {
	border-top-color: #ECEFF1
}
.apexcharts-xaxistooltip-top:before {
	border-top-color: #90A4AE;
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
	border-top-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
	border-top-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip.apexcharts-active {
	opacity: 1;
	transition: 0.15s ease all;
}
.apexcharts-yaxistooltip {
	opacity: 0;
	padding: 4px 10px;
	pointer-events: none;
	color: #373d3f;
	font-size: 13px;
	text-align: center;
	border-radius: 2px;
	position: absolute;
	z-index: 10;
	background: #ECEFF1;
	border: 1px solid #90A4AE;
}
.apexcharts-yaxistooltip.apexcharts-theme-dark {
	background: rgba(0, 0, 0, 0.7);
	border: 1px solid rgba(0, 0, 0, 0.5);
	color: #fff;
}
.apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
	top: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}
.apexcharts-yaxistooltip:after {
	border-color: rgba(236, 239, 241, 0);
	border-width: 6px;
	margin-top: -6px;
}
.apexcharts-yaxistooltip:before {
	border-color: rgba(144, 164, 174, 0);
	border-width: 7px;
	margin-top: -7px;
}
.apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
	left: 100%;
}
.apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
	right: 100%;
}
.apexcharts-yaxistooltip-left:after {
	border-left-color: #ECEFF1;
}
.apexcharts-yaxistooltip-left:before {
	border-left-color: #90A4AE;
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
	border-left-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
	border-left-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-right:after {
	border-right-color: #ECEFF1;
}
.apexcharts-yaxistooltip-right:before {
	border-right-color: #90A4AE;
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
	border-right-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
	border-right-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip.apexcharts-active {
	opacity: 1;
}
.apexcharts-yaxistooltip-hidden {
	display: none;
}
.apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
	pointer-events: none;
	opacity: 0;
	transition: 0.15s ease all;
}
.apexcharts-xcrosshairs.apexcharts-active, .apexcharts-ycrosshairs.apexcharts-active {
	opacity: 1;
	transition: 0.15s ease all;
}
.apexcharts-ycrosshairs-hidden {
	opacity: 0;
}
.apexcharts-selection-rect {
	cursor: move;
}
.svg_select_boundingRect, .svg_select_points_rot {
	pointer-events: none;
	opacity: 0;
	visibility: hidden;
}
.apexcharts-selection-rect + g .svg_select_boundingRect, .apexcharts-selection-rect + g .svg_select_points_rot {
	opacity: 0;
	visibility: hidden;
}
.apexcharts-selection-rect + g .svg_select_points_l, .apexcharts-selection-rect + g .svg_select_points_r {
	cursor: ew-resize;
	opacity: 1;
	visibility: visible;
}
.svg_select_points {
	fill: #efefef;
	stroke: #333;
	rx: 2;
}
.apexcharts-svg.apexcharts-zoomable.hovering-zoom {
	cursor: crosshair
}
.apexcharts-svg.apexcharts-zoomable.hovering-pan {
	cursor: move
}
.apexcharts-zoom-icon, .apexcharts-zoomin-icon, .apexcharts-zoomout-icon, .apexcharts-reset-icon, .apexcharts-pan-icon, .apexcharts-selection-icon, .apexcharts-menu-icon, .apexcharts-toolbar-custom-icon {
	cursor: pointer;
	width: 20px;
	height: 20px;
	line-height: 24px;
	color: #6E8192;
	text-align: center;
}
.apexcharts-zoom-icon svg, .apexcharts-zoomin-icon svg, .apexcharts-zoomout-icon svg, .apexcharts-reset-icon svg, .apexcharts-menu-icon svg {
	fill: #6E8192;
}
.apexcharts-selection-icon svg {
	fill: #444;
	transform: scale(0.76)
}
.apexcharts-theme-dark .apexcharts-zoom-icon svg, .apexcharts-theme-dark .apexcharts-zoomin-icon svg, .apexcharts-theme-dark .apexcharts-zoomout-icon svg, .apexcharts-theme-dark .apexcharts-reset-icon svg, .apexcharts-theme-dark .apexcharts-pan-icon svg, .apexcharts-theme-dark .apexcharts-selection-icon svg, .apexcharts-theme-dark .apexcharts-menu-icon svg, .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
	fill: #f3f4f5;
}
.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg, .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg, .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
	fill: #008FFB;
}
 .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg, .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg, .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg, .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg, .apexcharts-theme-light .apexcharts-reset-icon:hover svg, .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
 fill: #333;
}
.apexcharts-selection-icon, .apexcharts-menu-icon {
	position: relative;
}
.apexcharts-reset-icon {
	margin-left: 5px;
}
.apexcharts-zoom-icon, .apexcharts-reset-icon, .apexcharts-menu-icon {
	transform: scale(0.85);
}
.apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
	transform: scale(0.7)
}
.apexcharts-zoomout-icon {
	margin-right: 3px;
}
.apexcharts-pan-icon {
	transform: scale(0.62);
	position: relative;
	left: 1px;
	top: 0px;
}
.apexcharts-pan-icon svg {
	fill: #fff;
	stroke: #6E8192;
	stroke-width: 2;
}
.apexcharts-pan-icon.apexcharts-selected svg {
	stroke: #008FFB;
}
 .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
 stroke: #333;
}
.apexcharts-toolbar {
	position: absolute;
	z-index: 11;
	max-width: 176px;
	text-align: right;
	border-radius: 3px;
	padding: 0px 6px 2px 6px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
.apexcharts-menu {
	background: #fff;
	position: absolute;
	top: 100%;
	border: 1px solid #ddd;
	border-radius: 3px;
	padding: 3px;
	right: 10px;
	opacity: 0;
	min-width: 110px;
	transition: 0.15s ease all;
	pointer-events: none;
}
.apexcharts-menu.apexcharts-menu-open {
	opacity: 1;
	pointer-events: all;
	transition: 0.15s ease all;
}
.apexcharts-menu-item {
	padding: 6px 7px;
	font-size: 12px;
	cursor: pointer;
}
.apexcharts-theme-light .apexcharts-menu-item:hover {
	background: #eee;
}
.apexcharts-theme-dark .apexcharts-menu {
	background: rgba(0, 0, 0, 0.7);
	color: #fff;
}
 @media screen and (min-width: 768px) {
 .apexcharts-canvas:hover .apexcharts-toolbar {
 opacity: 1;
}
}
.apexcharts-datalabel.apexcharts-element-hidden {
	opacity: 0;
}
.apexcharts-pie-label, .apexcharts-datalabels, .apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value {
	cursor: default;
	pointer-events: none;
}
.apexcharts-pie-label-delay {
	opacity: 0;
	animation-name: opaque;
	animation-duration: 0.3s;
	animation-fill-mode: forwards;
	animation-timing-function: ease;
}
.apexcharts-canvas .apexcharts-element-hidden {
	opacity: 0;
}
.apexcharts-hide .apexcharts-series-points {
	opacity: 0;
}
.apexcharts-gridline, .apexcharts-annotation-rect, .apexcharts-tooltip .apexcharts-marker, .apexcharts-area-series .apexcharts-area, .apexcharts-line, .apexcharts-zoom-rect, .apexcharts-toolbar svg, .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-radar-series path, .apexcharts-radar-series polygon {
	pointer-events: none;
}
/* markers */

.apexcharts-marker {
	transition: 0.15s ease all;
}
 @keyframes opaque {
 0% {
 opacity: 0;
}
 100% {
 opacity: 1;
}
}


/* Resize generated styles */

@keyframes resizeanim {
 from {
 opacity: 0;
}
to {
	opacity: 0;
}
}
.resize-triggers {
	animation: 1ms resizeanim;
	visibility: hidden;
	opacity: 0;
}
.resize-triggers, .resize-triggers>div, .contract-trigger:before {
	content: " ";
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	overflow: hidden;
}
.resize-triggers>div {
	background: #eee;
	overflow: auto;
}
.contract-trigger:before {
	width: 200%;
	height: 200%;
}
</style>
<body style="margin-bottom: 385px;">
<div class="body">
  <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 70, 'stickyHeaderContainerHeight': 70}" style="height: 147px;">
    <div class="header-body header-body-bottom-border border-top-0" style="position: fixed; top: 0px;">
      <div class="header-top bg-light border-0" style="height: 47px; min-height: 0px; overflow: visible;">
        <div class="container">
          <div class="header-row">
            <div class="header-column justify-content-start">
              <div class="header-row">
                <ul class="list list-unstyled list-inline mb-0">
                  <li class="list-inline-item text-color-dark me-md-4 mb-0 d-none d-md-inline-block"> <span class="text-color-default text-2">Any Questions?</span> </li>
                  <li class="list-inline-item me-4 mb-0"> <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+1234567890" class="text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-none text-2"> (880) 1711-936219 </a> </li>
                  <li class="list-inline-item me-4 mb-0 d-none d-md-inline-block"> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@geniuseducationbd.com" class="text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-none text-2"> info@geniuseducationbd.com </a> </li>
                </ul>
              </div>
            </div>
            <div class="header-column justify-content-end">
              <div class="header-row">
                <div class="header-nav header-nav-links">
                  <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                    <nav class="collapse">
                      <ul class="nav nav-pills" id="mainNav">
                        <li> <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true">Sign In</i></a></li>
                        <li> <a class="nav-link" href="{{ route('registration') }}"><i class="fa fa-user-plus" aria-hidden="true">Sign Up</i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-container container" style="height: 100px; min-height: 0px;">
        <div class="header-row">
          <div class="header-column">
            <div class="header-row">
              <div class="header-logo" style="width: 251px; height: 49px;"> <a href=""> <img src="{{ asset('fontassets/image/logo_genius.png')}}" class="img-fluid h-40px" alt="" style="top: 0px;"> </a> </div>
            </div>
          </div>
          <div class="header-column justify-content-end">
            <div class="header-row">
              <div class="header-nav header-nav-links">
                <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                  <nav class="collapse">
                    <ul class="nav nav-pills" id="mainNav">
                      <li> <a href="" class="nav-link active current-page-active">Home</a> </li>
                      <li> <a href="online-admission" class="nav-link ">Online Admission</a> </li>
                      <li> <a href="about-us" class="nav-link ">About Us</a> </li>
                      <li> <a href="contact-us" class="nav-link ">Contact Us</a> </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"> <i class="fas fa-bars"></i> </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div role="main" class="main">
    <div class="custom-bg-color-grey-1">
      <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-arrows-thin nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}" data-dynamic-height="['calc(100vh - 135px)','calc(100vh - 135px)','calc(100vh - 161px)','calc(100vh - 161px)','calc(100vh - 161px)']" style="height: calc(-135px + 100vh); opacity: 1;">
        <div class="owl-stage-outer">
          <div class="owl-stage"> 
            <!-- Carousel Slide 1 -->
            <div class="owl-item position-relative overflow-hidden removing animated active fadeIn">
              <div class="background-image-wrapper custom-bg-color-grey-1 position-absolute top-0 left-0 right-0 bottom-0 appear-animation animated kenBurnsToLeft appear-animation-visible" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show="" style="background-image: url({{ asset('fontassets/image/slide-1-bg.jpg')}}); background-size: cover; background-position: 100% 100%; animation-duration: 30s; animation-delay: 100ms;"> </div>
              <img src="{{ asset('fontassets/image/slider_01.png')}}" class="img-fluid position-absolute bottom-0 d-none d-lg-block custom-slider-el-1 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" alt="" style="animation-delay: 600ms;">
              <div class="container h-100">
                <div class="row h-100 align-items-center">
                  <div class="col">
                    <div class="text-end float-lg-start custom-slider-text-block">
                      <h2 class="text-color-secondary font-weight-extra-bold mb-4 custom-slider-text-1 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;"> online school</h2>
                      <h2 class="text-color-default font-weight-semi-bold mb-3 text-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;"> Complete Solution For Your Education Needs!</h2>
                      <a href="contact-us" data-hash="" data-hash-offset="70" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">GET STARTED</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Carousel Slide 2 -->
            <div class="owl-item position-relative overflow-hidden animated removing fadeOut">
              <div class="background-image-wrapper custom-bg-color-grey-1 position-absolute top-0 left-0 right-0 bottom-0 appear-animation animated kenBurnsToLeft appear-animation-visible" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show="" style="background-image: url({{ asset('fontassets/image/slide-2-bg.jpg')}}); background-size: cover; background-position: 100% 100%; animation-duration: 30s; animation-delay: 100ms;"> </div>
              <img src="{{ asset('fontassets/image/slider_02.png')}}" class="img-fluid position-absolute bottom-0 d-none d-lg-block custom-slider-el-2 appear-animation animated fadeInUpShorter appear-animation-visible invisible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" alt="" style="animation-delay: 600ms;">
              <div class="container h-100">
                <div class="row h-100 align-items-center">
                  <div class="col">
                    <div class="float-lg-end custom-slider-text-block text-end">
                      <h2 class="text-color-secondary font-weight-extra-bold mb-4 custom-slider-text-1 appear-animation animated fadeInUpShorter appear-animation-visible invisible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;"> future school</h2>
                      <h2 class="text-color-default font-weight-semi-bold mb-3 text-5 appear-animation animated fadeInUpShorter appear-animation-visible invisible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;"> Complete Solution For Your Education Needs!</h2>
                      <a href="contact-us" data-hash="" data-hash-offset="70" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 appear-animation animated fadeInUpShorter appear-animation-visible invisible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">GET STARTED</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="owl-nav">
          <button type="button" role="presentation" class="owl-prev"></button>
          <button type="button" role="presentation" class="owl-next"></button>
        </div>
      </div>
    </div>
    <div class="bg-light">
      <div class="container py-4">
        <div class="row pb-2 mb-1">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-box feature-box-steps">
              <div class="feature-box-step-number appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="250" style="animation-delay: 250ms;"> </div>
              <div class="feature-box-icon bg-color-quaternary feature-box-icon-extra-large appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="250" style="animation-delay: 250ms;">
                <div class="animated-icon animated fadeIn svg-fill-color-primary"> <img src="{{ asset('fontassets/image/aply_online.png')}}"> </div>
              </div>
              <div class="feature-box-info appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="150" style="animation-delay: 150ms;">
                <p class="mt-2 pt-1 mb-0 text-1 p-relative top-5 text-uppercase">Online Admission System</p>
                <h4 class="mb-0 text-color-secondary">Admission</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-box feature-box-steps">
              <div class="feature-box-step-number appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500" style="animation-delay: 500ms;"> </div>
              <div class="feature-box-icon bg-color-quaternary feature-box-icon-extra-large appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                <div class="animated-icon animated fadeIn svg-fill-color-primary ms-2"> <img src="{{ asset('fontassets/image/osms.png')}}"> </div>
              </div>
              <div class="feature-box-info appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                <p class="mt-2 pt-1 mb-0 text-1 p-relative top-5 text-uppercase">School Management System </p>
                <h4 class="mb-0 text-color-secondary">School Management</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box feature-box-steps">
              <div class="feature-box-step-number appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="750" style="animation-delay: 750ms;"> </div>
              <div class="feature-box-icon bg-color-quaternary feature-box-icon-extra-large appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="750" style="animation-delay: 750ms;">
                <div class="animated-icon animated fadeIn svg-fill-color-primary ms-2" style="margin-left: 0.5rem !important;"><!--?xml version="1.0" encoding="iso-8859-1"?--> 
                  <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  --> 
                  <img src="{{ asset('fontassets/image/sch_manag.png')}}"> </div>
              </div>
              <div class="feature-box-info appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="450" style="animation-delay: 450ms;">
                <p class="mt-2 pt-1 mb-0 text-1 p-relative top-5 text-uppercase">Messaging With Users</p>
                <h4 class="mb-0 text-color-secondary">Messaging System</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="section custom-bg-color-grey-1 border-0 m-0">
      <div class="container">
        <div class="row mt-5 mb-5 pt-3 pb-3">
          <div class="col-md-8">
            <h2 class="font-weight-semibold mb-0">Who we are</h2>
            <p class="lead font-weight-normal">We are Leaders in Online Real Time Education</p>
            <p>Genius Education serves the society by providing world-class educational opportunities to every
              single individual. We are the promoter of innovation as well as the protector of tradition. In
              an increasingly uncertain and volatile world it is both: A dynamic change-agent creating new... </p>
            <a href="about-us" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 mb-4 mb-md-0 font-weight-bold">read
            more</a> </div>
          <div class="col-md-4"> <img src="{{ asset('fontassets/image/about_info.png')}}" alt="" class="img-fluid box-shadow-custom"> </div>
        </div>
      </div>
    </section>
    <section class="section position-relative overflow-hidden border-0 m-0" style="background: none !important;">
      <div class="container pt-5-5 pb-5 mb-3">
        <div class="row mb-5-5">
          <div class="col">
            <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300" style="animation-delay: 300ms;">Our Services</h2>
            <p class="text-4 font-weight-light appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="500" style="animation-delay: 500ms;">Function Of Genius Education</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="550" style="animation-delay: 550ms;">
            <div class="d-flex">
              <div class="animated-icon animated fadeIn svg-stroke-color-dark" style="opacity: 1;"> 
                <!--?xml version="1.0" encoding="utf-8"?--> 
                <img src="{{ asset('fontassets/image/dream.png')}}" class="img-fluid rounded-circle" alt=""> </div>
              <div class="ps-4">
                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Online
                  Admission</h3>
                <p class="font-weight-light text-3-5 mb-3-5">We provide online admission for schools </p>
                <a href="contact-us" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none"> View More
                <div class="animated-icon animated fadeIn svg-fill-color-primary ms-2"> 
                  <!--?xml version="1.0" ?-->
                  <svg version="1.1" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" id="icon_11632544381767" data-filename="arrow-right.svg" width="27" height="27">
                    <polygon points="1,26 44.586,26 38.293,32.293 39.707,33.707 48.414,25 39.707,16.293 38.293,17.707 44.586,24 1,24  "> </polygon>
                  </svg>
                </div>
                </a> </div>
            </div>
          </div>
          <div class="col-md-6 mb-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="750" style="animation-delay: 750ms;">
            <div class="d-flex">
              <div class="animated-icon animated fadeIn svg-stroke-color-dark" style="opacity: 1;"> 
                <!--?xml version="1.0" encoding="utf-8"?--> 
                <img src="{{ asset('fontassets/image/study.png')}}" class="img-fluid rounded-circle" alt=""> </div>
              <div class="ps-3">
                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Result and
                  Academic Transcript</h3>
                <p class="font-weight-light text-3-5 mb-3-5">You will get result and academic transcript </p>
                <a href="contact-us" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none"> View More
                <div class="animated-icon animated fadeIn svg-fill-color-primary ms-2"> 
                  <!--?xml version="1.0" ?-->
                  <svg version="1.1" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" id="icon_171632544381782" data-filename="arrow-right.svg" width="27" height="27">
                    <polygon points="1,26 44.586,26 38.293,32.293 39.707,33.707 48.414,25 39.707,16.293 38.293,17.707 44.586,24 1,24  "> </polygon>
                  </svg>
                </div>
                </a> </div>
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-md-0 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="950" style="animation-delay: 950ms;">
            <div class="d-flex">
              <div class="animated-icon animated fadeIn svg-stroke-color-dark" style="opacity: 1;"> 
                <!--?xml version="1.0" encoding="utf-8"?--> 
                <img src="{{ asset('fontassets/image/programs.png')}}" class="img-fluid rounded-circle" alt=""> </div>
              <div class="ps-4">
                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Online Payment </h3>
                <p class="font-weight-light text-3-5 mb-3-5">Online Payment through Cards/bKash </p>
                <a href="contact-us" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none"> View More
                <div class="animated-icon animated fadeIn svg-fill-color-primary ms-2"> 
                  <!--?xml version="1.0" ?-->
                  <svg version="1.1" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" id="icon_181632544382125" data-filename="arrow-right.svg" width="27" height="27">
                    <polygon points="1,26 44.586,26 38.293,32.293 39.707,33.707 48.414,25 39.707,16.293 38.293,17.707 44.586,24 1,24  "> </polygon>
                  </svg>
                </div>
                </a> </div>
            </div>
          </div>
          <div class="col-md-6 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1150" style="animation-delay: 1150ms;">
            <div class="d-flex">
              <div class="animated-icon animated fadeIn svg-stroke-color-dark" style="opacity: 1;"> 
                <!--?xml version="1.0" encoding="utf-8"?--> 
                <img src="{{ asset('fontassets/image/skills.png')}}" class="img-fluid rounded-circle" alt=""> </div>
              <div class="ps-4">
                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Attendance
                  System</h3>
                <p class="font-weight-light text-3-5 mb-3-5">Attendance systems is used to track and
                  monitor</p>
                <a href="contact-us" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none"> View More
                <div class="animated-icon animated fadeIn svg-fill-color-primary ms-2"> 
                  <!--?xml version="1.0" ?-->
                  <svg version="1.1" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" id="icon_211632544382126" data-filename="arrow-right.svg" width="27" height="27">
                    <polygon points="1,26 44.586,26 38.293,32.293 39.707,33.707 48.414,25 39.707,16.293 38.293,17.707 44.586,24 1,24  "> </polygon>
                  </svg>
                </div>
                </a> </div>
            </div>
          </div>
          <p></p>
          <p></p>
          <div class="col-md-12 text-center"> <a href="/about-us" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 mb-4 mb-md-0 font-weight-bold">read
            more</a> </div>
        </div>
      </div>
      <div class="position-absolute transform3dy-n50 right-0 pe-5 me-4">
        <div class="appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1700" data-appear-animation-duration="750ms" style="animation-delay: 1700ms;">
          <div class="custom-square-1 bg-primary mb-5"></div>
        </div>
      </div>
      <div class="position-absolute transform3dy-n50 right-15 pe-5 me-5">
        <div class="appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1500" data-appear-animation-duration="750ms" style="animation-delay: 1500ms;">
          <div class="custom-square-1 bg-dark pe-5 me-5 mt-4 mb-5"></div>
        </div>
      </div>
    </section>
    <section class="section custom-bg-color-grey-1 border-0 m-0">
      <div class="container">
        <div class="row mt-5 mb-5 pt-3 pb-3">
          <div class="col-lg-8">
            <div class="overflow-hidden">
              <h2 class="font-weight-bold text-color-dark line-height-3 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="250" style="animation-delay: 250ms;">School Software Features</h2>
            </div>
            <div class="custom-divider divider divider-primary divider-small pt-1 mb-3 mt-2">
              <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600" style="animation-delay: 600ms;">
            </div>
            <p class="font-weight-light text-3-5 pb-3 pe-5 me-md-5 me-lg-4 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">We provide following features for yours institute.</p>
            <div class="row">
              <div class="col-5 col-lg-4 order-1 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750" style="animation-delay: 750ms;">
                <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
                  <li class="font-weight-semibold text-color-dark"> <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> Result Management </li>
                  <li class="font-weight-semibold text-color-dark"> <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> Fees Management </li>
                  <li class="font-weight-semibold text-color-dark"> <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> Reports </li>
                </ul>
              </div>
              <div class="col-lg-4 order-3 order-lg-2 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
                  <li class="font-weight-semibold text-color-dark"> <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> Attendance System </li>
                  <li class="font-weight-semibold text-color-dark"> <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> Library Management </li>
                  <li class="font-weight-semibold text-color-dark"> <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> Online Admission </li>
                </ul>
              </div>
              <div class="col-6 col-lg-4 order-2 order-lg-3 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1250" style="animation-delay: 1250ms;">
                <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
                  <li class="font-weight-semibold text-color-dark"> <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> Students/teacher Login </li>
                  <li class="font-weight-semibold text-color-dark"> <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> Students Information </li>
                  <li class="font-weight-semibold text-color-dark"> <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> Transport </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4"> <img src="{{ asset('fontassets/image/feature.png')}}" alt="" class="img-fluid box-shadow-custom"> </div>
        </div>
      </div>
    </section>
    <section class="section section-background custom-section-background-2 bg-color-light border-0 m-0" style="background-image: url({{ asset('fontassets/image/awards.png')}}); background-position: 0 100%; background-repeat: no-repeat; background-size: contain;">
      <div class="container position-relative my-4">
        <div class="custom-element custom-element-pos-3 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="200">
          <div class="opacity-2" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 3000}" style="bottom: 0px; transition: transform 3000ms ease-out 0ms;"> <img class="icon-animated" width="157" height="157" src="{{ asset('fontassets/element-1.svg')}}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}"> </div>
        </div>
        <div class="row justify-content-end mb-4">
          <div class="col-lg-6 py-4">
            <div class="row">
              <div class="col">
                <div class="feature-box feature-box-style-5">
                  <div class="feature-box-icon appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="100" style="animation-delay: 100ms;"> &nbsp; </div>
                  <div class="feature-box-info">
                    <div class="overflow-hidden">
                      <h1 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="100" style="animation-delay: 100ms;">
                        <mark class="text-white bg-color-primary">Why Choose Us</mark>
                      </h1>
                      <br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="feature-box feature-box-style-5">
                  <div class="feature-box-icon appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="100" style="animation-delay: 100ms;">
                    <div class="animated-icon animated fadeIn svg-fill-color-primary"> <img src="{{ asset('fontassets/image/smartmanagement.png')}}"> </div>
                  </div>
                  <div class="feature-box-info">
                    <div class="overflow-hidden">
                      <h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="100" style="animation-delay: 100ms;">Smart
                        Management</h2>
                    </div>
                    <p class="text-3-5 line-height-9 mb-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100" style="animation-delay: 100ms;"> We provide smart management to your school such as student management, student
                      fees, account management etc.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="feature-box feature-box-style-5">
                  <div class="feature-box-icon appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="animated-icon animated fadeIn svg-fill-color-primary"> <img src="{{ asset('fontassets/image/osms.png')}}"> </div>
                  </div>
                  <div class="feature-box-info">
                    <div class="overflow-hidden">
                      <h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">Ease of
                        use</h2>
                    </div>
                    <p class="text-3-5 line-height-9 mb-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;"> Quick accessible and useful option to your dashboard. Our system is so easy for
                      accessible all panels.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="feature-box feature-box-style-5">
                  <div class="feature-box-icon appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                    <div class="animated-icon animated fadeIn svg-fill-color-primary"> <img src="{{ asset('fontassets/image/attendance_notification_system.png')}}"> </div>
                  </div>
                  <div class="feature-box-info">
                    <div class="overflow-hidden">
                      <h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="300" style="animation-delay: 300ms;"> Attendance &amp; Notification System</h2>
                    </div>
                    <p class="text-3-5 line-height-9 mb-0 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300" style="animation-delay: 300ms;"> We provide Real Time Attendance system. Parents received SMS within 10 seconds
                      his/her child attend or absent. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section custom-bg-color-grey-1 border-0 m-0" id="courses">
      <div class="container position-relative my-4">
        <div class="custom-element custom-element-pos-1 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="200">
          <div class="opacity-2" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 3000}" style="bottom: 0px; transition: transform 3000ms ease-out 0ms;"> <img class="icon-animated" width="157" height="157" src="{{ asset('fontassets/element-1.svg')}}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"> </div>
        </div>
        <div class="row mb-4">
          <div class="col text-center">
            <div class="overflow-hidden">
              <h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-3-5 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="300" style="animation-delay: 300ms;">Our Schools</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col appear-animation animated fadeInLeftShorterPlus appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500" style="animation-delay: 500ms;">
            <div class="owl-carousel owl-theme nav-style-1 nav-outside nav-font-size-lg custom-nav-secondary mb-0 owl-carousel-init owl-loaded owl-drag" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 2}, '1200': {'items': 3}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}" style="height: auto;">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1136px, 0px, 0px); transition: all 0s ease 0s; width: 3787px;">
                  <div class="owl-item cloned" style="width: 358.667px; margin-right: 20px;">
                    <div>
                      <div class="card custom-card-courses border-radius-0">
                        <div class="p-relative"> <a href="contact-us" class="text-color-secondary" title=""> <img class="card-img-top border-radius-0" src="{{ asset('fontassets/image/school_2.jpg')}}" alt=""> </a> </div>
                        <div class="card-body">
                          <h4 class="mb-3 text-color-secondary"><a href="contact-us" class="text-color-secondary" title="">Shahid Shamim High School</a> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 358.667px; margin-right: 20px;">
                    <div>
                      <div class="card custom-card-courses border-radius-0">
                        <div class="p-relative"> <a href="contact-us" class="text-color-secondary" title=""> <img class="card-img-top border-radius-0" src="{{ asset('fontassets/image/school_3.jpg')}}" alt=""> </a> </div>
                        <div class="card-body">
                          <h4 class="mb-3 text-color-secondary"><a href="contact-us" class="text-color-secondary" title="">F R Khan High School</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 358.667px; margin-right: 20px;">
                    <div>
                      <div class="card custom-card-courses border-radius-0">
                        <div class="p-relative"> <a href="contact-us" class="text-color-secondary" title=""> <img class="card-img-top border-radius-0" src="{{ asset('fontassets/image/school_4.jpg')}}" alt=""> </a> </div>
                        <div class="card-body">
                          <h4 class="mb-3 text-color-secondary"><a href="contact-us" class="text-color-secondary" title="">Jamiur Rahman High School</a> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 358.667px; margin-right: 20px;">
                    <div>
                      <div class="card custom-card-courses border-radius-0">
                        <div class="p-relative"> <a href="contact-us" class="text-color-secondary" title=""> <img class="card-img-top border-radius-0" src="{{ asset('fontassets/image/school_1.jpg')}}" alt=""> </a> </div>
                        <div class="card-body">
                          <h4 class="mb-3 text-color-secondary"><a href="contact-us" class="text-color-secondary" title="">North Reading High School</a> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 358.667px; margin-right: 20px;">
                    <div>
                      <div class="card custom-card-courses border-radius-0">
                        <div class="p-relative"> <a href="contact-us" class="text-color-secondary" title=""> <img class="card-img-top border-radius-0" src="{{ asset('fontassets/image/school_2.jpg')}}" alt=""> </a> </div>
                        <div class="card-body">
                          <h4 class="mb-3 text-color-secondary"><a href="contact-us" class="text-color-secondary" title="">Shahid Shamim High School</a> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 358.667px; margin-right: 20px;">
                    <div>
                      <div class="card custom-card-courses border-radius-0">
                        <div class="p-relative"> <a href="contact-us" class="text-color-secondary" title=""> <img class="card-img-top border-radius-0" src="{{ asset('fontassets/image/school_3.jpg')}}" alt=""> </a> </div>
                        <div class="card-body">
                          <h4 class="mb-3 text-color-secondary"><a href="contact-us" class="text-color-secondary" title="">F R Khan High School</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 358.667px; margin-right: 20px;">
                    <div>
                      <div class="card custom-card-courses border-radius-0">
                        <div class="p-relative"> <a href="contact-us" class="text-color-secondary" title=""> <img class="card-img-top border-radius-0" src="{{ asset('fontassets/image/school_4.jpg')}}" alt=""> </a> </div>
                        <div class="card-body">
                          <h4 class="mb-3 text-color-secondary"><a href="contact-us" class="text-color-secondary" title="">Jamiur Rahman High School</a> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 358.667px; margin-right: 20px;">
                    <div>
                      <div class="card custom-card-courses border-radius-0">
                        <div class="p-relative"> <a href="contact-us" class="text-color-secondary" title=""> <img class="card-img-top border-radius-0" src="{{ asset('fontassets/image/school_1.jpg')}}" alt=""> </a> </div>
                        <div class="card-body">
                          <h4 class="mb-3 text-color-secondary"><a href="contact-us" class="text-color-secondary" title="">North Reading High School</a> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 358.667px; margin-right: 20px;">
                    <div>
                      <div class="card custom-card-courses border-radius-0">
                        <div class="p-relative"> <a href="contact-us" class="text-color-secondary" title=""> <img class="card-img-top border-radius-0" src="{{ asset('fontassets/image/school_2.jpg')}}" alt=""> </a> </div>
                        <div class="card-body">
                          <h4 class="mb-3 text-color-secondary"><a href="contact-us" class="text-color-secondary" title="">Shahid Shamim High School</a> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 358.667px; margin-right: 20px;">
                    <div>
                      <div class="card custom-card-courses border-radius-0">
                        <div class="p-relative"> <a href="contact-us" class="text-color-secondary" title=""> <img class="card-img-top border-radius-0" src="{{ asset('fontassets/image/school_3.jpg')}}" alt=""> </a> </div>
                        <div class="card-body">
                          <h4 class="mb-3 text-color-secondary"><a href="contact-us" class="text-color-secondary" title="">F R Khan High School</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav"> </div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
        <div class="row pt-2">
          <div class="col text-center"> <a href="contact-us" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 mt-4 mb-2 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350" style="animation-delay: 350ms;">VIEW ALL</a> </div>
        </div>
      </div>
    </section>
    <section class="section position-relative overflow-hidden border-0 m-0" style="background: none !important;">
      <div class="container position-relative my-4">
        <div class="custom-element custom-element-pos-2 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="200">
          <div class="opacity-2" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 3000}"> <img class="icon-animated" width="157" height="157" src="{{ asset('fontassets/element-1.svg')}}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"> </div>
        </div>
        <div class="row mb-4">
          <div class="col text-center">
            <div class="overflow-hidden">
              <h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-3-5 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="300" style="animation-delay: 300ms;">Happy Institute Say</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350" style="animation-delay: 350ms;">
            <div class="owl-carousel owl-theme nav-style-1 nav-outside nav-font-size-lg custom-nav-secondary mb-0 owl-carousel-init owl-loaded owl-drag" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}" style="height: auto;">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-2272px, 0px, 0px); transition: all 0s ease 0s; width: 6816px;">
                  <div class="owl-item cloned" style="width: 1116px; margin-right: 20px;">
                    <div class="px-lg-5 mx-lg-5">
                      <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-primary mb-0">
                        <div class="testimonial-author"> <img src="{{ asset('fontassets/image/student_2.jpg')}}" class="img-fluid rounded-circle" alt=""> </div>
                        <blockquote>
                          <p class="mb-0 custom-font-1 fst-italic text-4 line-height-7">A wonderful
                            experience and a handy school. The school are great with a very nice way on
                            interacting. Thank you for all your cooperation. Hope to see more of you in
                            future. Thank you once again.</p>
                        </blockquote>
                        <div class="testimonial-author">
                          <p><strong class="font-weight-bold">Sayem Reza</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 1116px; margin-right: 20px;">
                    <div class="px-lg-5 mx-lg-5">
                      <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-primary mb-0">
                        <div class="testimonial-author"> <img src="{{ asset('fontassets/image/student_1.jpg')}}" class="img-fluid rounded-circle" alt=""> </div>
                        <blockquote>
                          <p class="mb-0 custom-font-1 fst-italic text-4 line-height-7">Well organised and
                            very useful school for online teaching beginners. One very useful feature is
                            that timelines can be reset which allows for assignments to be submitted later
                            if necessary. </p>
                        </blockquote>
                        <div class="testimonial-author">
                          <p><strong class="font-weight-bold">Sharmin Sultana</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 1116px; margin-right: 20px;">
                    <div class="px-lg-5 mx-lg-5">
                      <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-primary mb-0">
                        <div class="testimonial-author"> <img src="{{ asset('fontassets/image/student_2.jpg')}}" class="img-fluid rounded-circle" alt=""> </div>
                        <blockquote>
                          <p class="mb-0 custom-font-1 fst-italic text-4 line-height-7">A wonderful
                            experience and a handy school. The school are great with a very nice way on
                            interacting. Thank you for all your cooperation. Hope to see more of you in
                            future. Thank you once again.</p>
                        </blockquote>
                        <div class="testimonial-author">
                          <p><strong class="font-weight-bold">Sayem Reza</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 1116px; margin-right: 20px;">
                    <div class="px-lg-5 mx-lg-5">
                      <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-primary mb-0">
                        <div class="testimonial-author"> <img src="{{ asset('fontassets/image/student_1.jpg')}}" class="img-fluid rounded-circle" alt=""> </div>
                        <blockquote>
                          <p class="mb-0 custom-font-1 fst-italic text-4 line-height-7">Well organised and
                            very useful school for online teaching beginners. One very useful feature is
                            that timelines can be reset which allows for assignments to be submitted later
                            if necessary. </p>
                        </blockquote>
                        <div class="testimonial-author">
                          <p><strong class="font-weight-bold">Sharmin Sultana</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 1116px; margin-right: 20px;">
                    <div class="px-lg-5 mx-lg-5">
                      <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-primary mb-0">
                        <div class="testimonial-author"> <img src="{{ asset('fontassets/image/student_2.jpg')}}" class="img-fluid rounded-circle" alt=""> </div>
                        <blockquote>
                          <p class="mb-0 custom-font-1 fst-italic text-4 line-height-7">A wonderful
                            experience and a handy school. The school are great with a very nice way on
                            interacting. Thank you for all your cooperation. Hope to see more of you in
                            future. Thank you once again.</p>
                        </blockquote>
                        <div class="testimonial-author">
                          <p><strong class="font-weight-bold">Sayem Reza</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 1116px; margin-right: 20px;">
                    <div class="px-lg-5 mx-lg-5">
                      <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-primary mb-0">
                        <div class="testimonial-author"> <img src="{{ asset('fontassets/image/student_1.jpg')}}" class="img-fluid rounded-circle" alt=""> </div>
                        <blockquote>
                          <p class="mb-0 custom-font-1 fst-italic text-4 line-height-7">Well organised and
                            very useful school for online teaching beginners. One very useful feature is
                            that timelines can be reset which allows for assignments to be submitted later
                            if necessary. </p>
                        </blockquote>
                        <div class="testimonial-author">
                          <p><strong class="font-weight-bold">Sharmin Sultana</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"></button>
                <button type="button" role="presentation" class="owl-next"></button>
              </div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-color-tertiary border-0 m-0">
      <div class="container my-4">
        <div class="row mb-4">
          <div class="col text-center">
            <div class="overflow-hidden">
              <h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-3-5 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="300" style="animation-delay: 300ms;">Latest News</h2>
            </div>
          </div>
        </div>
        <div class="row pb-3">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <article class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">
              <div class="card border-0 border-radius-0 box-shadow-1">
                <div class="card-body p-3 z-index-1"> <a href="contact-us"> <img class="card-img-top border-radius-0 mb-2" src="{{ asset('fontassets/image/news_3.jpg')}}" alt="Card Image"> </a>
                  <p class="text-uppercase text-color-default text-1 my-2">
                    <time pubdate="" datetime="2021-01-10">10 Nov 2021</time>
                    <span class="opacity-3 d-inline-block px-2">|</span> Sharif Mahmud </p>
                  <div class="card-body p-0">
                    <h4 class="card-title text-5 font-weight-semi-bold pb-1 mb-2"><a class="text-color-secondary text-decoration-none" href="contact-us">Genius Education - Smart Management
                      System</a></h4>
                    <p class="card-text mb-2">School is an integral part of any child's life. Maximum
                      portion of a child's schoolhood is spent in school...</p>
                    <a href="contact-us" class="btn btn-link font-weight-semibold text-decoration-none text-2 ps-0">READ
                    MORE</a> </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <article class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">
              <div class="card border-0 border-radius-0 box-shadow-1">
                <div class="card-body p-3 z-index-1"> <a href="contact-us"> <img class="card-img-top border-radius-0 mb-2" src="{{ asset('fontassets/image/news_4.jpg')}}" alt="Card Image"> </a>
                  <p class="text-uppercase text-color-default text-1 my-2">
                    <time pubdate="" datetime="2021-01-10">25 Aug 2021</time>
                    <span class="opacity-3 d-inline-block px-2">|</span> John Doe </p>
                  <div class="card-body p-0">
                    <h4 class="card-title text-5 font-weight-semi-bold pb-1 mb-2"><a class="text-color-secondary text-decoration-none" href="contact-us">How Genius Education can save your
                      money?</a></h4>
                    <p class="card-text mb-2">Digitalization has become common phenomenon worldwide;
                      going fully automated is nowadaysa widespread...</p>
                    <a href="contact-us" class="btn btn-link font-weight-semibold text-decoration-none text-2 ps-0">READ
                    MORE</a> </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <article class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">
              <div class="card border-0 border-radius-0 box-shadow-1">
                <div class="card-body p-3 z-index-1"> <a href="contact-us"> <img class="card-img-top border-radius-0 mb-2" src="{{ asset('fontassets/image/news_5.jpg')}}" alt="Card Image"> </a>
                  <p class="text-uppercase text-color-default text-1 my-2">
                    <time pubdate="" datetime="2021-01-10">19 Jan 2021</time>
                    <span class="opacity-3 d-inline-block px-2">|</span> John Doe </p>
                  <div class="card-body p-0">
                    <h4 class="card-title text-5 font-weight-semi-bold pb-1 mb-2"><a class="text-color-secondary text-decoration-none" href="contact-us">Benefits of Student Management System</a> </h4>
                    <p class="card-text mb-2">Most of the significant institutes in today'sdate have
                      turned todigitalization of the system as a whole...</p>
                    <a href="contact-us" class="btn btn-link font-weight-semibold text-decoration-none text-2 ps-0">READ
                    MORE</a> </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <section class="call-to-action call-to-action-default call-to-action-big content-align-center mb-0 mt-3position-relative overflow-hidden border-0 m-0" style="background: none !important;">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-lg-8">
            <div class="call-to-action-content">
              <h3>Genius Education - The complete school management software</h3>
              <p class="mb-0">Contact us or give us a call to discover how we can help.</p>
            </div>
          </div>
          <div class="col-sm-3 col-lg-4">
            <div class="call-to-action-btn"> <a href="contact-us" class="btn btn-lg btn-primary">Contact Us</a> </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer id="footer" class="footer-reveal bg-color-secondary border-0 mt-0">
    <div class="container py-5">
      <div class="row py-5">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0"> <a href="" class="d-inline-block mb-3"> <img alt="Genius Education" class="h-30px logo" src="{{ asset('fontassets/image/logo_footer.png')}}"> </a>
          <ul class="social-icons social-icons-clean social-icons-icon-light">
            <li> <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a> </li>
            <li> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> </li>
            <li> <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> </li>
          </ul>
          <p class="text-3 mt-4 mb-0 line-height-8 text-color-tertiary opacity-6">Genius Education. ©
            2023.<br>
            All Rights Reserved.</p>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <h4 class="font-weight-bold text-5">About Us</h4>
          <ul class="list list-unstyled text-color-tertiary opacity-6">
            <li class="mb-1"> Genius Education </li>
            <li class="mb-1"> GP- KA, 30/1/B, Shouth Para </li>
            <li class="mb-1"> Mohakali,Dhaka </li>
            <li class="mb-1"> Phone: <a href="tel:8801711936219" class="text-decoration-none text-color-tertiary text-color-hover-primary">01711-936219</a> </li>
            <li> Email: <a href="mailto:info@geniuseducationbd.com" class="text-decoration-none text-color-tertiary text-color-hover-primary">info@geniuseducationbd.com</a> </li>
          </ul>
        </div>
        <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
          <h4 class="font-weight-bold text-5">Navigation</h4>
          <ul class="list list-unstyled opacity-6">
            <li class="mb-1"> <a href="" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
              Home</a> </li>
            <li class="mb-1"> <a href="about-us" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
              About Us</a> </li>
            <li class="mb-1"> <a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
              Blog</a> </li>
            <li> <a href="contact-us" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
              Contact Us</a> </li>
          </ul>
        </div>
        <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
          <h4 class="font-weight-bold text-5">Support</h4>
          <ul class="list list-unstyled opacity-6">
            <li class="mb-1"> <a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
              Documentation</a> </li>
            <li class="mb-1"> <a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
              Forums</a> </li>
            <li class="mb-1"> <a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
              Open a Ticket</a> </li>
            <li> <a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
              FAQ's</a> </li>
          </ul>
        </div>
        <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
          <h4 class="font-weight-bold text-5">More</h4>
          <ul class="list list-unstyled opacity-6">
            <li class="mb-1"> <a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
              Courses</a> </li>
            <li class="mb-1"> <a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">-
              Instructors</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>

<!-- Vendor --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<script src="{{ asset('fontassets/js/jquery.min.js')}}"></script> 
<script src="{{ asset('fontassets/js/bootstrap.bundle.min.js')}}"></script> 
<script src="{{ asset('fontassets/js/jquery.gmap.min.js')}}"></script> 
<script src="{{ asset('fontassets/js/jquery.isotope.min.js')}}"></script> 
<script src="{{ asset('fontassets/js/owl.carousel.min.js')}}"></script> 

<!-- Theme Base, Components and Settings --> 
<script src="{{ asset('fontassets/js/theme.js')}}"></script> 

<!-- Theme Initialization Files --> 
<script src="{{ asset('fontassets/js/theme.init.js"></script><a class="scroll-to-top hidden-mobile" href="#"><i class="fas fa-chevron-up"></i></a>
<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xlink="http://www.w3.org/1999/xlink" svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
  <defs id="SvgjsDefs1002"></defs>
  <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
  <path id="SvgjsPath1004" d="M0 0 "></path>
</svg>
</body>
</html>