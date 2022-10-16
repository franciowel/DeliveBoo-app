@extends('layouts.dashboard')
@section('content')
    @if ($created_message)
        <div class="alert alert-info" role="alert">
            Piatto Creato 
       </div>
    @endif

    @if ($updated_message)
        <div class="alert alert-info" role="alert">
            Piatto Modificato
        </div>
    @endif
    
    <h1>{{$dish->name}}</h1>
    @if ($dish->dish_cover)
        <img class="w-25" src="{{ asset('storage/' . $dish->dish_cover )}}" alt="{{$dish->name}}">
    @endif
        <div class="info-dish">Data creazione: {{$dish->created_at->format('D d-m-Y')}}</div>
        <div class="info-dish">Ultimo aggiornamento: {{$dish->updated_at->format('D d-m-Y / H.i' )}}</div>

        @if ($dish->available)
            <h2 class="available">Disponibile</h2>
        @else
            <h2 class="not-available">Non Disponibile</h2>
        @endif

        <h2 class="title-sec">Ingredienti:</h2>
        <p>{{$dish->ingredients}}</p>

        <h2 class="title-sec">Prezzo</h2>
        <div>{{$dish->price}}€</div>

        <h3 class="title-sec">Descrizione:</h3>
        <p>{{$dish->description}}</p>
        
        <div class="d-flex">
            <a class="btn btn-deliveboo mr-3" href="{{ route('admin.dishes.edit', ['dish' => $dish->id]) }}"> Modifica Piatto</a>
            <input class="btn btn-danger mr-3" type="submit" value="Elimina" onClick="document.getElementById('pop-up').style.display='block'">
        </div>

        <div id="pop-up"  >
            <form action="{{route('admin.dishes.destroy', ['dish' => $dish->id ])}}" method="post">
                @csrf
                @method('DELETE')
                
                <div>
                    <h3 class="quest">Vuoi davvero eliminare il piatto?</h3>
                </div>

                <div class="pop-up-action">
                    <button type="button" class="cancelbtn btn btn-mine mr-3" onClick="document.getElementById('pop-up').style.display='none'">Annulla</button>
                    <button type="button submit" class="deletebtn btn btn-danger">Elimina</button>
                </div>

                
            </form>

        </div>
@endsection


<style>
    #pop-up{
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: #f4f4f4;
        border: 2px solid #ffba00;
        border-radius: 25px;
        padding: 30px;
        box-shadow: 10px 14px 10px rgba(116, 116, 116, 0.25)
    }

    .pop-up-action{
        display: flex;
        justify-content: center;
        padding-top: 1.4rem;
    }

    .btn-mine{
        border: 1px solid #3490dc !important;
        color: #3490dc !important;
    }

    .info-dish{
        color: black;
        margin: 0.5rem;
    }

    .title-sec{
        font-weight: 600;
        font-size: 1.2rem;
        margin-top: 1rem;
    }

    .btn-deliveboo{
        background-color: #ffba00;
        color: white;
        padding: 0.5rem 1.2rem;
    }

    .btn-deliveboo:hover{
        background-color: white;
        border: 1px solid #ffba00;
        color: #ffba00;
        padding: 0.5rem 1.2rem;
    }

    .available{
        color: lightgreen;
        margin: 1.4rem 0;
        font-weight: 600;
    }

    .not-available{
        color: #e3342f;
    }
</style>