@extends('layout')
@section('content')
<!-- Contact Section -->
<div id="contact" class="section section-expand">
    <div class="section-title"><i class="icon-envelope-alt"></i><strong>Contact</strong>
        <p>some text <span>here</span></p>
    </div>

    <!-- Contact Content -->
    <div class="container">
        <hr />
        <h1 class="main-title"><span>Contact</span> Us</h1>
        <p class="lead">we are specialized in web</p>
        <div class="row">
            <div class="span6 offset3">
                <p class="text-center margin-bottom">Lorem ipsum dolor sit amet, consectetuer <a href="#">adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <strong>commodo consequat</strong>. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
            </div>
        </div>
        <div class="row">
            <div class="span12">

                <!-- Contact address -->
                <h2>We Are <span>Here</span></h2>
                <address>
                    795 Folsom Ave, Suite 600<br />
                    (123) 456-7890<br />
                    <a href="mailto:#">first.last@example.com</a>
                </address>

                <!-- Contact form -->
                <h2>Email <span>Us</span></h2>
                <form action="contact" class="contact-form">
                    <fieldset>
                        <input type="text" placeholder="Name" class="span4" />
                        <input type="text" placeholder="Mail" class="span4" />
                        <button type="submit" class="btn btn-large">Send Message</button>
                    </fieldset>
                </form>
            </div>
        </div>

        <!-- Google Map -->
        <h2>On the <span>Map</span></h2>
        <div id="map-canvas"></div>
    </div>
</div>

@include('switch')

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    /* --- Google Map --- */
    var mapOptions = {
        center: new google.maps.LatLng(40.751126,-73.993399),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);

    var image = "img/marker.png";
    var marker = new google.maps.Marker({
        position: mapOptions.center,
        map: map,
        icon: image
    });
</script>
<script type="text/javascript" src="js/functions.js"></script>

@stop