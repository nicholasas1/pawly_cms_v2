<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebController extends Controller
{
    public function index(){
        return view ('dashboard');
    }

    public function login(){
        return view ('login');
    }

    public function tes()
    {
        $response = Http::post('https://api.pawly.my.id/login', [
            'Username' => 'admin',
            'Password' => 'P@wlyaja4',
        ]);

        return dd($response->json());
       
    }
}
