<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Login extends Component
{
    public $herlan = "Violas";
    public $message ="hai";
    public $email;
    public $password;
    public $response;
    public $name;

    public function login()
    {
        $response = Http::post('https://api.pawly.my.id/login', [
            'Username' => $this->name,
            'Password' => $this->email,
        ]);
       
        return var_dump($response->json());
       
    }

    public function render()
    {
       

        return view('livewire.login');
    }
}
