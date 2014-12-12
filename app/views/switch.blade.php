@section("switch")
<!-- Switch Section -->
<div class="switch-section">
    <p class="switch-section-cont">
        <a href="{{ URL::route('index') }}" class="section-home">
            <span class="icon-home"></span>
        </a>
        <a href="#" class="section-about">
            <span class="icon-smile"></span>
        </a>
        <a href="#" class="section-services">
            <span class="icon-cog"></span>
        </a>
        <a href="#" class="section-folio">
            <span class="icon-briefcase"></span>
        </a>
        <a href="#" class="{{ URL::route('image') }}">
            <span class="icon-comments"></span>
        </a>
        <a href="#" class="section-contact">
            <span class="icon-envelope-alt"></span>
        </a>
    </p>
</div>
<a href="#" class="section-close">×</a>
@show