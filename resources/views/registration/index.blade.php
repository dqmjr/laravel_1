@extends('templates.auth')
@section('page.title', 'Регистрация')
@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>
                {{ __('Регистрация') }}
            </x-card-title>
        </x-card-header>
        <x-card-body>
            <x-form action="{{ route('login.store') }}" method="POST">
                <x-form-item>
                    <x-label required>
                        {{ __('ФИО') }}
                    </x-label>
                    <x-input name="name" autofocus />
                </x-form-item>
                <x-form-item>
                    <x-label required>
                        {{ __('Email') }}
                    </x-label>
                    <x-input type="email" name="email" />
                </x-form-item>
                <x-form-item>
                    <x-label required>
                        {{ __('Пароль') }}
                    </x-label>
                    <x-input type="password" name="password" />
                </x-form-item>
                <x-form-item>
                    <x-label required>
                        {{ __('Подтверждение пароля') }}
                    </x-label>
                    <x-input type="password" name="confirm_password" />
                </x-form-item>
                <x-form-item>
                    <x-checkbox type="checkbox" name="approve">
                        {{ __('Я соглашаюсь на обработку персональных данных') }}
                    </x-checkbox>
                </x-form-item>
                <x-button type="submit" color="primary">
                    {{ __('Войти') }}
                </x-button>
            </x-form>
        </x-card-body>
    </x-card>
@endsection
