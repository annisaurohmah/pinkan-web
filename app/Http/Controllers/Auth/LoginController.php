<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        try {
            $response = Http::withHeaders([
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json'
                        ])->post(env('API_URL') . '/login', [
                            'email' => $request->email,
                            'password' => $request->password
            ]);

            $data = json_decode($response->getBody(), true);

            if ($response->status() === 200 && isset($data['token'])) {
                // Simpan token di sesi
                session(['api_token' => $data['token']]);
                session()->flash('success', 'Login berhasil!');
                return redirect()->to(route('home'));
            }

            return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Email tidak valid'])->withInput();
        }
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    protected function redirectTo()
    {
        session()->flash('success', 'Login berhasil!');
        return $this->redirectTo;
    }


    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $token = session('api_token');

        $response = Http::withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $token])->post(
                        env('API_URL') . '/logout'
                    );
        
        if ($response->status() === 200) {
            session()->forget('api_token');
            session()->flash('success', 'Logout berhasil!');
            return redirect()->to(route('login'));
        }
    }
}
