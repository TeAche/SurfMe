@extends('layout')
@section('content')
<!-- Logo -->
<div class="logo">
    <img src="img/logo.png" alt="Logo" />
</div>

<!-- Slider -->
<div id="slides">
    <ul class="slides-container">

        <!-- Slider Single Item -->
        <li><a href="#"><img src="img/slide1.jpg" alt="Photo" /></a>
            <div class="slides-detail">
                <h1>Main title <span>goes here</span></h1>
                <span class="lead">Cras justo odio, dapibus ac <strong>facilisis in</strong>, egestas eget</span>
            </div>
        </li>

        <!-- Slider Single Item -->
        <li><a href="#"><img src="img/slide2.jpg" alt="Photo" /></a>
            <div class="slides-detail">
                <h1>Other title <span>here</span></h1>
                <span class="lead">Justo odio, dapibus ac <strong>quam in</strong>, egestas eget</span>
            </div>
        </li>

        <!-- Slider Single Item -->
        <li><a href="#"><img src="img/slide3.jpg" alt="Photo" /></a>
            <div class="slides-detail">
                <h1>This is the third <span>title</span></h1>
                <span class="lead">Dapibus ac <strong>Cras in</strong>, egestas justo odio</span>
            </div>
        </li>
    </ul>

    <!-- Slider Navigation -->
    <div class="slides-navigation">
        <a href="#" class="prev"><i class="icon-angle-left"></i></a>
        <a href="#" class="next"><i class="icon-angle-right"></i></a>
    </div>
</div>

<!-- Pages Navigation -->
<div id="about" class="section"><a href="about.html">
        <div class="section-title"><i class="icon-smile"></i><strong>About</strong>
            <p>some text <span>here</span></p>
        </div>
    </a>
</div>
<div id="services" class="section"><a href="services.html">
        <div class="section-title"><i class="icon-cog"></i><strong>Services</strong>
            <p>some text <span>here</span></p>
        </div>
    </a>
</div>
<div id="folio" class="section"><a href="folio.html">
        <div class="section-title"><i class="icon-briefcase"></i><strong>folio</strong>
            <p>some text <span>here</span></p>
        </div>
    </a></div>
<div id="blog" class="section"><a href="blog.html">
        <div class="section-title"><i class="icon-comments"></i><strong>Blog</strong>
            <p>some text <span>here</span></p>
        </div>
    </a>
</div>
<div id="contact" class="section"><a href="contact.html">
        <div class="section-title"><i class="icon-envelope-alt"></i><strong>Contact</strong>
            <p>some text <span>here</span></p>
        </div>
    </a>
</div>
@stop