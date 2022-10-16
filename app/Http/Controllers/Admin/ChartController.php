<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index() {

        $user = Auth::user();
        // prendo tuttiglim ordini per mese  
        $monthly_orders = 'SELECT COUNT(id) as orders_month, created_at FROM orders 
         WHERE user_id = ' . $user->id . '
         GROUP BY month(created_at) ORDER BY created_at DESC';
        // importo tutte le entrate per mese 
        $monthly_revenue = 'SELECT  SUM(total_price) as revenue_month, created_at FROM orders 
        WHERE user_id = '  . $user->id . ' 
        GROUP BY month(created_at) ORDER BY created_at DESC';

        $user_orders = DB::select($monthly_orders);
        $user_revenues = DB::select($monthly_revenue);

        $orders = [];
        $time_stamp = [];
        $revenues = [];

        foreach($user_orders as $order) {
            $orders[] = $order->orders_month;
            $time_stamp[] = Carbon::create($order->created_at)->format('m/Y');
        }

        foreach($user_revenues as $revenue) {
            $revenues[] = $revenue->revenue_month;
        }

        $data = [
            'orders' => $orders,
            'revenues' => $revenues,
            'time_stamp' => $time_stamp,
        ];

        return view('admin.chart', $data);
    }
}
