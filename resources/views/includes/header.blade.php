@php use Illuminate\Support\Facades\Route; @endphp
<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                        {{ __('Главная') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog.index') }}">
                        {{ __('Блог') }}
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('register.index') ? 'active' : '' }}" aria-current="page" href="{{ route('register.index') }}">
                        {{ __('Регистрация') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('login.index') ? 'active' : '' }}" href="{{ route('login.index') }}">
                        {{ __('Логин') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
