@extends('layouts.dashboard')
@section('content')
  
    <h1>Crea nuovo Piatto</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h6 class="mb-4">I campi contrassegnati con * sono obbligatori</h6>
        <form action="{{route('admin.dishes.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <div class="deliveboo-input">
                    <div class="my-label">
                        <div class="label-text">
                            Nome piatto *
                        </div>
                    </div>
                    <input type="text" placeholder="Inserisci il nome del piatto..." class="my-input" id="name" name="name" value="{{ old('name') }}">
                </div>
            </div>

            <div class="mb-3">
                <div class="deliveboo-input">
                    <div class="my-label">
                        <div class="label-text">
                            Ingredienti *
                        </div>
                    </div>
                    <input type="text" placeholder="Inserisci gli ingredienti..." class="my-input" id="ingredients" name="ingredients" value="{{ old('ingredients') }}">
                </div>
            </div>

            <div class="mb-3">
                <div class="deliveboo-input">
                    <div class="my-label">
                        <div class="label-text">
                            Prezzo *
                        </div>
                    </div>
                    <input type="number" step="0.01" placeholder="Inserisci il prezzo (es. 9,99)" class="my-input" id="price" name="price" value="{{ old('price') }}">
                </div>
            </div>

            <div class="custom-control custom-switch">
                <input class="custom-control-input" type="checkbox" id="available" name="available" value=1 checked>
                <label class="custom-control-label" for="available">Disponibilit??</label>
            </div>

            <div class="mb-3">
                <label for="dish_cover" class="second-label">Immagine</label>

                <div class="deliveboo-input">
                    <input  class="my-input" type="file" id="dish_cover" name="dish_cover">
                </div>
            </div>
        
            <div class="mb-3">
                <label for="description" class="second-label">Descrizione Piatto *</label>
                <textarea placeholder="Descrivi il tuo piatto..." class="my-form" id="description" name="description" rows="6">{{ old('description') }}</textarea>
            </div>
            <input class="btn btn-deliveboo" type="submit" value="Crea Piatto">
        </form>

@endsection

<style>
    .my-label{
        background-color: #ffba00;
        width: 10%;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 25px;
        margin-right: 0.3rem;
        font-weight: 400; 
    }

    .second-label{
        color: #ffba00;
        font-weight: 600;
        font-size: 1.2rem;
        margin: 0.5rem 0;
    }
    
    .my-input{
        border: none;
        outline: none;
        width: 100%;
        padding: 0.35rem 0.75rem;
    }

    .my-form{
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 0.9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

    .my-form:focus {
        color: #495057;
        background-color: #fff;
        border-color: #ffba00;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(255, 186, 0, 0.25);
    }

    .deliveboo-input{
        display: flex;
        border: 1px solid #d0d0d0;
        border-radius: 25px;
        padding: 0.2rem;
        margin-bottom: 1.5rem;
    }

    .deliveboo-input:hover{
        background-color: #fff;
        border-color: #ffba00;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(255, 186, 0, 0.25);
    }

    .custom-control-input:checked ~ .custom-control-label::before {
        color: #fff;
        border-color: #ffba00 !important;
        background-color: #ffba00 !important;
    }

    .custom-control-label:before {
        color: #fff;
        border-color: gray !important;
        background-color: lightgray !important;
    }

    .custom-control-input:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 0.2rem rgba(255, 186, 0, 0.25) !important;
    }

    .custom-switch .custom-control-label::after {
        background-color: white !important;
    }
    

</style>
