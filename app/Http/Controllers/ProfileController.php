<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth-api');
    }

    public function index()
    {   
        $token = session('api_token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token])->get(env('API_URL') . '/user');
        
        $data = json_decode($response->getBody(), true);

        if ($response->status() === 200 && isset($data)) {
            $user = $data;
            return view('profile', compact('user'));
        }


        return view('profile');
    }

    public function update(Request $request)
    {
        $token = session('api_token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token])->put(env('API_URL') . '/update-profile', [
                'first_name' => $request->name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'date_of_birth' => $request->date_of_birth, 
                'password' => $request->password,
                'new_password' => $request->new_password,
                'password_confirmation' => $request->password_confirmation

            ]);

        $data = json_decode($response->getBody(), true);

        if ($response->status() === 200 && isset($data)) {
            return redirect()->route('profile')->withSuccess('Profile berhasil diupdate.');
        } else {
            return redirect()->route('profile')->withError('Profile gagal diupdate.');
        }

    }
}
