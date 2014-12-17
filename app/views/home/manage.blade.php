@extends('layout')
@section('content')
<!-- Services Section -->
<div id="services" class="section section-expand">
    <div class="section-title"><i class="icon-cog"></i><strong>Services</strong>
        <p>some text <span>here</span></p>
    </div>

    <!-- Services Content -->
    <div class="container">
        <hr />
        <h1 class="main-title">Our <span>Services</span></h1>
        <p class="lead">we are specialized in web</p>
        <div class="flexslider">

            <!-- Services List Carousel -->
            <ul class="thumbnails slides">

                <!-- Service Detail -->
                <li>
                    <div class="thumbnail"><i class="icon-coffee"></i>
                        <h3><span>Responsive</span> Design</h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn">Learn more</a></div>
                </li>

                <!-- Service Detail -->
                <li>
                    <div class="thumbnail"><i class="icon-calendar"></i>
                        <h3><span>Responsive</span> Design</h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn">Learn more</a></div>
                </li>
                <!-- Service Detail -->
                <li>
                    <div class="thumbnail"><i class="icon-camera"></i>
                        <h3><span>Responsive</span> Design</h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn">Learn more</a></div>
                </li>

                <!-- Service Detail -->
                <li>
                    <div class="thumbnail"><i class="icon-dashboard"></i>
                        <h3><span>Responsive</span> Design</h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn">Learn more</a></div>
                </li>

                <!-- Service Detail -->
                <li>
                    <div class="thumbnail"><i class="icon-desktop"></i>
                        <h3><span>Responsive</span> Design</h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn">Learn more</a></div>
                </li>

                <!-- Service Detail -->
                <li>
                    <div class="thumbnail"><i class="icon-lightbulb"></i>
                        <h3><span>Responsive</span> Design</h3>
                        <h5>Subtitle here</h5>
                        <p>Sed augue lorem, <strong>dignissim eget</strong> bibendum vitae, scelerisque eget justo</p>
                        <a href="#" class="btn">Learn more</a></div>
                </li>
            </ul>
        </div>
        <hr />

        <!-- Service Slogan -->
        <h2>Why <span>Choose Us</span></h2>
        <p class="lead">Lorem ipsum dolor sit amet, <span>consectetuer</span> adipiscing elit.<br />
            Sed diam <span>nonummy nibh</span> euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        <!-- Service ADV -->
        <div class="hero-unit text-center">
            <h2>efficiency and <span>reliability</span></h2>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention</p>
            <a class="btn btn-large">Ask your Question</a></div>
    </div>
</div>
@include('switch')
@stop