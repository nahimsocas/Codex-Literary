<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $userID = auth()->user()->id;
        DB::insert("INSERT INTO stores (`cover`, `title`, `author`, `category`, `users_id`) VALUES (\"$data[0]\", \"$data[1]\", \"$data[2]\", \"$data[3]\", $userID)");

        return redirect()->route('store.index');
    }

    public function destroy($id)
    {
        $delete = Store::where('id', '=', $id)->where('users_id', '=', auth()->user()->id)->delete();

        return redirect()->route('store.cart');
    }
}
