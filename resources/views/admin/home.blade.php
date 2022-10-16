@extends('layouts.dashboard')
@section('content')

    <h1 class="mb-4">Benvenuto {{$user->name}}</h1>
    <div class="row">

        <div class="col-lg-6 col-sm-12">
            <div class="card w-50 my-w-90">
                @if ($user->user_cover)
                    <img src="{{asset('storage/' . $user->user_cover)}}" alt="Foto profilo">
                @endif
                <div class="card-body">
                <p class="card-text"><b>Indirizzo:</b> {{$user->address}}</p>
                <p class="card-text"><b>Partita IVA:</b> {{$user->VAT_number}}</p>
                <p class="card-text"><b>Email:</b> {{$user->email}}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12">
            <h2 class="order-title">Ultimi 3 ordini ricevuti:</h2>
            <ul>
                @foreach ($orders->take(3) as $order)
                    <div class="mb-4 my-orders">
                        <div>Cliente: {{$order->name}}</div>
                        <div>Totale: {{$order->total_price}}</div>
                        <div>Data e ora: {{ $order->created_at }}</div>
                           
    
                    </div>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
