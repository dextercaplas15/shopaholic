<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Order;
use App\Expense;

class PagesController extends Controller
{

    public function getDashboard() 
    {
        $inventory = DB::table('products')->sum(DB::raw('quantity * price'));
        $purchases = DB::table('products')->count();
        $expenditures = DB::table('products')->sum(DB::raw('cost'));
        $quantity = DB::table('products')->sum(DB::raw('quantity'));
        $ords = DB::table('orders')->count();
        $items = DB::table('orders')->sum(DB::raw('quantity'));
        $pending = DB::table('orders')
                ->select('orders.*')
                ->where('status','=', 'pending')
                ->join('products','orders.product_id','=','products.id')
                ->paginate(5);
        $completed = DB::table('orders')
                ->select('orders.*')
                ->where('status','=', 'completed')
                ->count();
        $undelivered = DB::table('orders')
                ->select('orders.*')
                ->where('status','=', 'pending')
                ->count();
        $cancelled = DB::table('orders')
                ->select('orders.*')
                ->where('status','=', 'cancelled')
                ->count();
        $ratio1 = ($undelivered/$ords) * 100;
        $ratio2 = ($completed/$ords) * 100;
        $ratio3 = ($items/$quantity) * 100;
        $ratio4 = ($cancelled/$ords) * 100;
        return view('admin.dashboard')->with('inventory',$inventory)->with('purchases',$purchases)->with('expenditures',$expenditures)->with('quantity',$quantity)->with('ords',$ords)->with('items',$items)->with('pending',$pending)->with('completed',$completed)->with('undelivered',$undelivered)->with('ratio1',$ratio1)->with('ratio2',$ratio2)->with('ratio3',$ratio3)->with('ratio4',$ratio4);
    }
    public function getInventory() 
    {
        $prod = DB::table('products')
                 ->select('products.*', DB::raw('sum(quantity) as total'), DB::raw('sum(cost) as tut'))
                 ->groupBy('name')
                 ->get()->toArray();
        return view('pages.inventory')->with('prod',$prod);
    }
    public function getCompleted()
    {
        $completed = DB::table('orders')
                ->select('orders.*')
                ->where('status','=', 'completed')
                ->paginate(10);
        return view('pages.completed')->with('completed',$completed);
    }
    public function getCancelled()
    {
        $cancelled = DB::table('orders')
                ->select('orders.*')
                ->where('status','=', 'cancelled')
                ->paginate(10);
        return view('pages.cancelled')->with('cancelled',$cancelled);
    }
}
