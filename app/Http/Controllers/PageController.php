<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
    public function create_category (Request $request) {
        DB::table('categories')->insert([
            "name" => $request->name,
        ]);
        return redirect('/')->withErrors(["message" => 'Категория создана']);
    }

    public function create_product (Request $request) {
        // dd($request->all());
        $extention = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path() . '/images/items', $extention);
       
        if ($request->new == true) {
           $new = 1;
        } 
        else {
            $new = 0;
        }
        if ($request->hit == true) {
            $hit = 1;
        } 
        else {
            $hit = 0;
        }
        DB::table('products')->insert([
            "name" => $request->name,
            "category_id" => $request->category_id,
            "current_price" => $request->current_price,
            "image" => $extention,
            "weight" => $request->weight,
            "compound" => $request->compound,
            "new" => $new,
            "hit" => $hit,
        ]);
        
        return redirect('/')->withErrors(["message" => 'Продукт создан']);
    }

    public function create_user (Request $request) {
        DB::table('users')->insert([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        return redirect('/')->withErrors(["message" => 'Пользователь создан']);
    }

    public function create_courier (Request $request) {
        DB::table('couriers')->insert([
            "name" => $request->name,
            "phone" => $request->phone,
        ]);
        return redirect('/')->withErrors(["message" => 'Курьер создан']);
    }

}
