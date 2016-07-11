<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Item;
use Illuminate\Support\Facades\DB;

class MainController extends Controller {

    public function index() {
        $items = Item::orderBy('items.id', 'DESC')
                ->leftJoin("vendors", 'vendors.id', '=', 'items.vendor_id')
                ->select('items.*','vendors.name as vendor_name','vendors.logo as vendor_logo')->limit(5)->get();
        $itemsCount = Item::all()->count();
        $priceSum = Item::all()->sum("price");
        $itemsCoutByTypes = Item::join("types", 'items.type_id', "=", "types.id")
                ->select('types.name as name', DB::raw('count(*) as count'))
                ->groupBy('type_id')
                ->get();


        return view("main.dashboard", ["items" => $items, "count" => $itemsCount, "countByType" => $itemsCoutByTypes, "priceSum" => $priceSum]);
    }

}
