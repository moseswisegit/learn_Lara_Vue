<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function affichage(){
    //    return response()->json([
    //        'msg' => 'un message en json'
    //    ]);
    // }

    public function index(){
        return view('welcome');
    }
}
