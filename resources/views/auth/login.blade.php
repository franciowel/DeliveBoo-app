@extends('layouts.app')

@section('content')
<div class="container_my">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-padding-top">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header">
                            <a href="/" class="name-head">DeliveBoo</a href="/">
                            <div class="deliveboo-page">{{ __('Login') }}</div>
                        </div>
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn_my">
                                        {{ __('Login') }}
                                    </button>
    
                                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .my-padding-top{
        padding-top: 3.5rem;
    }
    .btn_my{
        background-color: #fbba00;
        color: white;
        border: 1px solid #fbba00;
        border-radius: 20px;
    }
    .btn_my:hover{
        background-color: white;
        color: #fbba00;
    }
    .name-head{
        font-family: pacifico;
        font-size: 2rem;
    }

    .card-header a{
        text-decoration: none;
        color: inherit;
    }
    .card-header{
        background-color: #fbba00;
        color: white;
        text-align: center;
        border: 0 !important;
    }
</style>
@endsection
