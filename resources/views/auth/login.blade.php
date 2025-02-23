@extends('layouts.todo')

@section('title', 'Вход')

@section('content')
<div class="container animate__animated animate__fadeIn">
    <section class="vertical-75 mt-5 mt-lg-0 form-wrapper mx-auto">
            <div class="card border-0 w-100">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h5>Вход</h5>

                        <label for="username" class="small text-muted mb-0">Имя пользователя:</label>
                        <input class="form-control form-control-sm @error('username') is-invalid @enderror" type="username" id="username" name="username" placeholder="Имя пользователя" value="{{ old('username') }}">

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <label for="password" class="small text-muted mb-0 mt-3">Пароль:</label>
                        <input class="form-control form-control-sm @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Пароль" value="">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <button class="btn btn-primary btn-sm btn-120 mt-4 float-right" type="submit" name="button">Войти</button>
                    </form>
                </div>
            </div>
        
    </section>
</div>
@endsection

@include('blocks.footer')
