@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card my_form">
                <div class="card-header">
                    <div class="name-head">
                      <a href="/"> DeliveBoo</a> 
                    </div>
                    <div class="deliveboo-page">{{ __('Register') }}</div>
                </div>

                <div class="card-body">
                    <div class="mb-4">I campi contrassegnati con * sono obbligatori</div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" onsubmit="return validationCheck()" oninput='password_confirmation.setCustomValidity(password_confirmation.value != password.value ? "Password di conferma ERRATA!" : "")'>
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome ristorante') }}*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}*</label>

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
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}*</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VAT_number" class="col-md-4 col-form-label text-md-right">{{ __('Partita IVA (es.12345678910)') }}*</label>

                            <div class="col-md-6">
                                {{-- <input id="VAT_number" type="number" min="11" pattern="[0-9]{11}" class="form-control @error('VAT_number') is-invalid @enderror" name="VAT_number" value="{{ old('VAT_number') }}" required autocomplete="VAT_number" onKeyPress="if(this.value.length===11) return false;"> --}}
                                <input id="VAT_number" pattern="[0-9]{11}" type="text" inputmode="numeric" maxlength="11" minlength="11" class="form-control @error('VAT_number') is-invalid @enderror" name="VAT_number" value="{{ old('VAT_number') }}" required autocomplete="VAT_number">
                                @error('VAT_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_cover" class="col-md-4 col-form-label text-md-right">{{ __('Immagine') }}</label>

                            <div class="col-md-6">
                                <input id="user_cover" type="file" class="form-control @error('user_cover') is-invalid @enderror" name="user_cover" value="{{ old('user_cover') }}" autocomplete="user_cover">
                                @error('user_cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        Categorie: *      
                        <div class="needs-validation deliveboo-list">
                            @foreach($categories as $category)
                            <div class="form-check deliveboo-category">
                                <ul>
                                    <li  class="check_my">
                                        <input class="form-check-input my-input-check" type="checkbox" value="{{ $category->id }}" id="category-{{ $category->id }}" name="categories[]" >
                                        <label class="form-check-label" for="category-{{ $category->id }}">
                                            {{ $category->name }}
                                        </label>
                                    </li>
                                </ul>
                      
                                
                            </div>
                            @endforeach     
                            <span id="error-check-category" >
                                    
                            </span>  
                            @error('categories')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                            @enderror        
                        </div> 

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}*</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}*</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn_my">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

        function validationCheck() {
                    let check_category = new FormData(document.querySelector("form"));
                    let categoryError = document.getElementById('error-check-category');
                    if(!check_category .has("categories[]")) {
                        categoryError.innerHTML = 'Seleziona almeno una categoria';
                        return false;
                    } else {
                        return true;
                    }
                }
            
        </script>
</div>

<style>

#error-check-category{
        background-color: red;
        border-radius: 30px;
        color: white;
        margin: 0.2rem;
        line-height: 38px
    }
    /* LAYOUT */
    .my-input-check{
        border: none !important;
    }
    .my_form{
        border-radius: 30px;
    }

    .name-head{
        font-family: pacifico;
        font-size: 2rem;
    }

    .name-head a{
        text-decoration: none;
        color: inherit
    }

    .deliveboo-page{
        font-size: 0.8rem;
    }
    ul{
        list-style-type: none;
        margin: 0 !important;
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
    .card-header{
        background-color: #fbba00;
        color: white;
        font-size: 20px;
        text-align: center;
    }

    /* NEW STYLE */
    .deliveboo-list{
        display: flex;
        width: 90%;
        padding-bottom: 10px;
        flex-wrap: wrap;
    }

    .deliveboo-category{
        text-align: center;
        border: 1px solid #ffba00;
        background-color: #fbba00;
        color: white;
        border-radius: 20px;
        padding: 0.4rem 1.4rem !important;
        margin: 0.3rem;
    }
</style>
@endsection