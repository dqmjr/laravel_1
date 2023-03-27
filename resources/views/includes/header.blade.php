<header class="py-1 border-bottom">
<div class="container">
    <div class="d-flex justify-content-between">
        <ul class="list-unstyled d-flex">
            <li class="me-3">
                <a href="{{ route('home') }}">
                    Главная
                </a>
            </li>
            <li class="me-3">
                <a href="{{ route('blog.index') }}">
                    Blog
                </a>
            </li>
        </ul>
        <ul class="list-unstyled d-flex">
            <li class="ms-3">
                <a href="{{ route("login.index") }}">Login</a>
            </li>
            <li class="ms-3">
                <a href="{{ route('register.index') }}">Registration</a>
            </li>
        </ul>
    </div>
</div>
</header>
