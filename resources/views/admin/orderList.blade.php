@extends('layouts.dashboard')
@section('content')

<h1>Cronologia Ordini:</h1>

<div >

    <ul>
        <li class="container-order_my">
            @foreach ($orders as $order)
            
                <div class="mb-4 my-orders">
                    {{$order['name']}} {{$order['lastname']}} <br>
                    <div class="order_my">
                        Indirizzo:
                        {{$order['address']}}
                    </div>
                    <div class="order_my">
                        Email:
                        {{$order['email']}}
                    </div>
                    <div>
                        Tootale:
                        {{$order['total_price']}}€
                    </div>
                    <div class="order_my">
                        Data e ora:
                        {{ $order['created_at'] }}
                    </div>

                    @foreach ($all_dishes_ids as $dish_info)

                        @if($order['id'] == $dish_info['order_id'])

                            @foreach ($dishes as $dish)

                                @if($dish_info['dish_id'] == $dish['id'])
                                    {{$dish['name']}}
                                    {{$dish_info['qty']}}
                                @endif

                            @endforeach


                        @endif

                    @endforeach
                </div>
            
            @endforeach 
        </li>
    </ul>

    <div class="mt-3">
        {{ $orders->links() }}
    </div>

</div>

<style scped>
ul{
    list-style-type: none;
}
.container-order_my{
    display: flex;
    flex-wrap: wrap;
    
}
.page-item.active .page-link{
            background-color:#fbba00 !important;
            color: white !important;
            border-color: #fbba00  !important;
        }
        .page-link {

         color: #fbba00 !important;
    }
    .page-link:hover{
        background-color:#ffe8ab !important;
        color: white !important;
        border-color: #ffe8ab  !important;
    }

</style>

@endsection


