<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Admin\Dish;

class UserController extends Controller
{
    public function show($slug) {

        $user = User::where('slug', '=', $slug)->with(['categories'])->first();
        $user_id = $user->id;

        $dishes = Dish::where('user_id', '=', $user_id)->get();

        if($user) {
            $data =  [
                'success' => true,
                'results' => $dishes,
                'user' => $user,
            ];
        } else {
            $data = [
                'success' => false
            ];
        }
        return response()->json($data);
    }
}
