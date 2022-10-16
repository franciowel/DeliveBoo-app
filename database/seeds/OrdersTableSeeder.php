<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach($orders as $order){
            $new_order = new Order();
            $new_order->name = $order['name'];
            $new_order->lastname = $order['lastname'];
            $new_order->address = $order['address'];
            $new_order->total_price = $order['total_price'];
            $new_order->email = $order['email'];  
            $new_order->user_id = $order['user_id'];          

            $new_order->save();
        }

    }
}
