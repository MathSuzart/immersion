<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;

class ItemAjaxController extends Controller
{
    public function index(Request $request){
        $item = Item::all();
        return response()->json($items);
    }

    public function store(Request $request){
        $create = Item::create($request->all());
        return  reponse()->json($create);
    }

    public function update(Request $request, $id){
        $edit = Item::find($id)->update($request->all());
        return respponse()->json($edit);
    }

    public function destroy($id){
        Item::find($id)->delete();
        return response()->json('done');
    }
}