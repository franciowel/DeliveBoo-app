<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Admin\Dish;
use App\DishOrder;

class OrderListController extends Controller
{
    public function index() {

        $user = Auth::user();
    
        $orders_user_id = [];
        $dishes_user_id = [];
        $all_dishes = [];

        $user_info = Order::with('dishes')->where('user_id', '=',$user->id)->orderBydesc('created_at')->paginate(6);

        foreach($user_info as $data){
            //Mi salvo gli id degli utenti che ci hanno fatto un ordine
            array_push($orders_user_id, $data->id);
        }

        //*recuperiamo tutti gli ordini degli utenti
        $all_dishes_ids = DishOrder::whereIn('order_id',$orders_user_id)->paginate(6);
        foreach($all_dishes_ids as $data){    
            array_push($dishes_user_id, $data->dish_id);
        }

        $all_dishes_ordered = Dish::whereIn('id',$dishes_user_id)->paginate(6);
        foreach($all_dishes_ordered as $data){
            array_push($all_dishes, $data);
        }

        $data = [
            'user' => $user,
            'orders' => $user_info,
            'dishes' => $all_dishes,
            'all_dishes_ids' => $all_dishes_ids,
        ];
        
        return view('admin.orderList', $data);

    }
}
