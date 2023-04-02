@extends('templates.base')
@section('page.title', 'Login page')
@section('content')
    <section>
        <x-container>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <x-card>
                        <x-card-header>
                            <x-card-title>
                                {{ __('Вход') }}
                            </x-card-title>
                        </x-card-header>
                        <x-card-body>
                            <form action="">
                                <div class="mb-3">
                                    <label class="required">
                                        {{ __('Email') }}
                                    </label>
                                    <input type="email" name="email" class="form-control" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label class="required">
                                        {{ __('Пароль') }}
                                    </label>
                                    <input type="password" name="password" class="form-control" autofocus>
                                </div>
                                <div class="mb-3">
                                    <input type="checkbox" name="remember" value="1" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Войти') }}
                                </button>
                            </form>
                        </x-card-body>
                    </x-card>
                </div>
            </div>
        </x-container>
    </section>
@endsection
