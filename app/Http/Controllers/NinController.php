<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NinController extends Controller
{
    //
    public function showForm()
        {
            return view('nin.verify');
        }

        public function verify(Request $request)
        {
             $request->validate ([
                'nin' => 'required'
             ]);

             $id = rand(1, 10);
             $response = Http::withoutVerifying()->get("https://jsonplaceholder.typicode.com/users/{$id}");
             $user = $response->json();

             return view('nin.verify', compact('user'));
        }
}
