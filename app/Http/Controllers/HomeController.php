<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth-api');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $token = session('api_token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token])->get(env('API_URL') . '/user');
        
        $response2 = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token])->get(env('API_URL') . '/dashboard');

        $data = json_decode($response->getBody(), true);
        $data2 = json_decode($response2->getBody(), true);

        if ($response->status() === 200 && isset($data) && $response2->status() === 200 && isset($data2)) {
            $user = $data;
            $dashboard = $data2;
            return view('home', compact('user', 'dashboard'));
        }

       

        return redirect()->route('login')->with('error', 'Akun tidak ditemukan!');
    }
}
