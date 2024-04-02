<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
        {{ config('app.name') }}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav nav-pills">
        <li class="nav-item {{ setActive('home') }}">
            <a class="nav-link" href="{{ route('home') }}">
                @lang('Home')
            </a>
        </li>
        <li class="nav-item {{ setActive('about') }}">
            <a class="nav-link" href="{{ route('about') }}">
                @lang('About')
            </a>
        </li>
        <li class="nav-item {{ setActive('projects.*') }}">
            <a class="nav-link" href="{{ route('projects.index') }}">
                @lang('Projects')
            </a>
        </li>
        <li class="nav-item {{ setActive('contact') }}">
            <a class="nav-link"  href="{{ route('contact') }}">
                @lang('Contact')
            </a>
        </li>
        @guest
            <li class="nav-item {{ setActive('login') }}">
                <a class="nav-link"  href="{{ route('login') }}">
                    @lang('Login')
                </a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>
            </li>
        @endguest
    </ul>
    </div>
</div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
