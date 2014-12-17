@section("switch")
<!-- Switch Section -->
<div class="switch-section">
    <p class="switch-section-cont">
        <a href="{{ URL::route('index') }}" class="section-home {{ (Route::getCurrentRoute()->getPath() == 'index') ? 'active' : '' }}">
            <span class="icon-home"></span>
        </a>
        <a href="{{ URL::route('profile') }}" class="section-about {{ (Route::getCurrentRoute()->getPath() == 'profile') ? 'active' : '' }}">
            <span class="icon-smile"></span>
        </a>
        <a href="{{ URL::route('manage') }}" class="section-services {{ (Route::getCurrentRoute()->getPath() == 'manage') ? 'active' : '' }}">
            <span class="icon-cog"></span>
        </a>
        <a href="{{ URL::route('surfme') }}" class="section-folio {{ (Route::getCurrentRoute()->getPath() == 'surfme') ? 'active' : '' }}">
            <span class="icon-briefcase"></span>
        </a>
        <a href="{{ URL::route('blog') }}" class="section-blog {{ (Route::getCurrentRoute()->getPath() == 'blog') ? 'active' : '' }}">
            <span class="icon-comments"></span>
        </a>
        <a href="{{ URL::route('register') }}" class="section-contact {{ (Route::getCurrentRoute()->getPath() == 'register') ? 'active' : '' }}">
            <span class="icon-envelope-alt"></span>
        </a>
    </p>
</div>
<a href="#" class="section-close">×</a>
@show