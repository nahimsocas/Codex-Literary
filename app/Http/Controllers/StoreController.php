<?php

namespace App\Http\Controllers;

use App\Models\Store;

class StoreController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            $items = Store::where('users_id', '=', auth()->user()->id)->get();
            if (count($items)) {
                return view('store.cart', [
                    'items' => $items
                ]);
            } else {
                return view('store.cart');
            }
        }
        return view('store.cart');
    }

    public function store()
    {
        $data =  explode('|', request()->post()['data']);

        if ( Store::where('product_id', '=', $data[0])->where('users_id', '=', auth()->user()->id)->count() ) {
            $amount = Store::where('product_id', '=', $data[0])->where('users_id', '=', auth()->user()->id)->select('quantity')->get();
            Store::where('product_id', '=', $data[0])->where('users_id', '=', auth()->user()->id)->update(['quantity' => ($amount[0]->quantity + 1)]);
        } else {
            Store::insert([
                'product_id' => $data[0],
                'cover' => $data[1],
                'title' => $data[2],
                'author' => $data[3],
                'category' => $data[4],
                'quantity' => 1,
                'users_id' => auth()->user()->id
            ]);
        }

        return redirect()->route('store.index');
    }

    public function destroy($id)
    {
        $delete = Store::where('id', '=', $id)->where('users_id', '=', auth()->user()->id)->delete();

        return redirect()->route('store.cart');
    }
}
