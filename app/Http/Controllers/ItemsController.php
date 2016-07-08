<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use Session;

class ItemsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $items = Item::all();

        return view('items.index')->withItems($items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view("items.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
//
//        $this->validate($request, [
//            "item_name" => "required|max:255",
//            "serial_number" => "required|max:255",
//            "prie" => "required"
//        ]);

        $item = new Item();

        $item->item_name = $request->item_name;
        $item->vendor_id = $request->vendor_id;
        $item->type_id = $request->type_id;
        $item->serial_number = $request->serial_number;
        $item->price = $request->price;
        $item->weight = $request->weight;
        $item->color = $request->color;
        $item->release_date = $request->release_date;
        $item->photo = $request->photo;
        $item->tags = $request->tags;

        $item->save();

        Session::flash("success", "Item Successfuly saved");

        return redirect()->route("items.show", $item->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $item = Item::find($id);
        return view('items.show')->with("item", $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $item = Item::find($id);

        return view('items.edit')->withItem($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //        $this->validate($request, [
//            "item_name" => "required|max:255",
//            "serial_number" => "required|max:255",
//            "prie" => "required"
//        ]);
        $item = item::find($id);
        $item->item_name = $request->input('item_name');
        $item->vendor_id = $request->input('vendor_id');
        $item->type_id = $request->input('type_id');
        $item->serial_number = $request->input('serial_number');
        $item->price = $request->input('price');
        $item->weight = $request->input('weight');
        $item->color = $request->input('color');
        $item->release_date = $request->input('release_date');
        $item->photo = $request->input('photo');
        $item->tags = $request->input('tags');
        $item->save();
        
        Session::flash("success", "Item Successfuly updated");

        return redirect()->route("items.show", $item->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
