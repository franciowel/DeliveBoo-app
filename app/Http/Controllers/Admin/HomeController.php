<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Admin\Dish;
use App\DishOrder;

class HomeController extends Controller
{
    public function index() {

        $user = Auth::user();

        $orders_user_id = [];
        $dishes_user_id = [];
        $all_dishes = [];

        //Questo è l'utente che ha fatto l'ordine
        $user_info = Order::where('user_id', '=',$user->id)->orderBydesc('created_at')->get();
        foreach($user_info as $data){
            //Mi salvo gli id degli utenti che ci hanno fatto un ordine
            array_push($orders_user_id, $data->id);
        }
        
        //*recuperiamo tutti gli ordini degli utenti
        $all_dishes_ids = DishOrder::all()->whereIn('order_id',$orders_user_id);
        foreach($all_dishes_ids as $data){    
            array_push($dishes_user_id, $data->dish_id);
        }

        $all_dishes_ordered = Dish::all()->whereIn('id',$dishes_user_id);
        foreach($all_dishes_ordered as $data){
            array_push($all_dishes, $data);
        }

        $data = [
            'user' => $user,
            'orders' => $user_info,
            'dishes' => $all_dishes
        ];
        
        return view('admin.home', $data);
    }


    
    public function show($id){

        $all_user_dishes = DishOrder::all()->where('order_id','=',$id);
        foreach($all_dishes_ids as $data){    
            array_push($dishes_user_id, $data->dish_id);
        }

        $all_dishes_ordered = Dish::all()->whereIn('id',$dishes_user_id);
        foreach($all_dishes_ordered as $data){
            array_push($all_dishes, $data);
        }

        return view('admin.home.show');
    }
}
