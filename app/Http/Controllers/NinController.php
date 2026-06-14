<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\NinVerification;

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

             NinVerification::create([
                'nin' => $request->nin,
                'name' => $user['name'],
                'email' => $user['email'],
                'phone' => $user['phone'],
                'status' => 'verified',
                'api_response' => $user,
            ]);

             return view('nin.verify', compact('user'));
        }

        public function history()
        {
            $verifications = NinVerification::latest()->get();

            return view('nin.history', compact('verifications'));
        }
}
