<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

   
    protected function validator(Request $request)
    {
        $request->validate([
            'first_name' => 'required', 'string', 'max:255',
            'last_name' => 'required', 'string', 'max:255',
            'username' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255',
            'date_of_birth' => 'required', 'date', 'date_format:Y-m-d',
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request);

        try {
            $response = Http::withHeaders([
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json'
                        ])->post(env('API_URL') . '/register', [
                            'email' => $request->email,
                            'password' => $request->password,
                            'first_name' => $request->first_name,
                            'last_name' => $request->last_name,
                            'username' => $request->username,
                            'date_of_birth' => $request->date_of_birth,
                            'password' => $request->password,
                            'password_confirmation' => $request->password_confirmation,
            ]);

            $data = json_decode($response->getBody(), true);



            if ($response->status() === 200 && isset($data['token'])) {
                // Simpan token di sesi
                session(['api_token' => $data['token']]);
                session()->flash('success', 'Register berhasil!');
                return redirect()->to(route('home'));
            }

            return back()->withErrors(['email' => 'Data tidak valid']);
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Data tidak valid']);
        }
    }

}
