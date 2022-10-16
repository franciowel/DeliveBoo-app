<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Gateway;
use App\Http\Requests\Orders\OrderRequest;
use App\Order;
use App\DishOrder;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmedPaymentToUserEmail;
use App\Mail\ConfirmedPaymentToCostumerEmail;


class OrderController extends Controller
{
    public function generate(Request $request, Gateway $gateway) {
        $token= $gateway->clientToken()->generate();

        $data= [
            'success' => true,
            'token' => $token
        ];

        return response()->json($data, 200);
    }

    public function makePayment(OrderRequest $request, Gateway $gateway) {

        $order_to_add = $request->all();
        
        $result = $gateway->transaction()->sale([
            'amount' => $request->price,
            'paymentMethodNonce' => 'fake-valid-nonce',
            'options' =>[
                'submitForSettlement'=> true
            ]
        ]);

        if($result) {

            $data= [
                'success' => true,
                'message' => 'Transazione esegita con successo'
            ];

            return response()->json($data, 200);
            
        } else {
            $data= [
                'success' => false,
                'message' => 'Transazione FALLITA'
            ];

            return response()->json($data, 401);
        }
    }

    public function addOrderToRestaurant(Request $request){

        $data = $request->all();

            $order = $data['user_info'];
            $risto_id = $data['cart'][0]['risto_id'];
            $total_price = 0;

            foreach ($data['cart'] as $cart){
                $total_price = $total_price + $cart['price'] * $cart['qty'];
            }

            $new_order = new Order();
            $new_order->name = $order['name'];
            $new_order->lastname = $order['lastname'];
            $new_order->address = $order['address'];
            $new_order->email = $order['email'];
            $new_order->total_price = $total_price;
            $new_order->user_id = $risto_id;

            $new_order->save();


            $dishes_id = [];
            foreach($data['cart'] as $dish){
                array_push($dishes_id, $dish['id']);
            }
            
            $dishes_qty = [];
            foreach($data['cart'] as $dish){
                array_push($dishes_qty, $dish['qty']);
            }
           
            for ($i=0; $i < count($dishes_id); $i++) { 
                $new_order_dish = new DishOrder();
                $new_order_dish->order_id = $new_order->id;
                $new_order_dish->dish_id = $dishes_id[$i];
                $new_order_dish->qty = $dishes_qty[$i];
                $new_order_dish->timestamps = false;
                $new_order_dish->save();

            };

        // mail di conferma per lo user
        Mail::to('admin@boolpress.it')->send(new ConfirmedPaymentToUserEmail($new_order));

        // mail di conferma per il guest
        Mail::to($order['email'])->send(new ConfirmedPaymentToCostumerEmail());

        return response()->json($data, 200);
    }

}

