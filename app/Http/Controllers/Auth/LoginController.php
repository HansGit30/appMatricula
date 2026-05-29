<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function redirectToGoogle(){
        //return Socialite::driver('google')->redirect();
        return Socialite::driver('google')
        ->stateless()
        ->with(['prompt' => 'select_account']) // 🌟 ESTA ES LA CLAVE
        ->redirect();
    }
    
    public function handleGoogleCallback(){
        //$user = Socialite::driver('google')->user();
        try {
            // Obtenemos los datos desde Google usando stateless para evitar el error de estado
            $googleUser = Socialite::driver('google')->stateless()->user();
            
            // Buscamos si ya tienes un usuario registrado con ese correo
            $user = \App\Models\User::where('email', $googleUser->getEmail())->first();
    
            // Si el correo no existe en tu base de datos, creamos el usuario automáticamente
            if (!$user) {
                $user = \App\Models\User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => bcrypt(\Illuminate\Support\Str::random(16)), // Contraseña aleatoria
                ]);
            }
    
            // Iniciamos la sesión del usuario en Laravel
            Auth::login($user, true);
    
            // Guardamos el agente de usuario (dispositivo) en tu tabla nativa 'sessions'
            DB::table('sessions')
                ->where('id', session()->getId())
                ->update([
                    'user_id' => $user->id,
                    'user_agent' => request()->header('User-Agent')
                ]);
    
            // 🌟 CAMBIO AQUÍ: Forzamos la redirección directa a la ruta que creamos en web.php
            return redirect('/dashboard');
    
        } catch (\Exception $e) {
            // Si algo truena internamente, te regresará al login con un aviso
            return redirect('/login')->with('error', 'Hubo un problema al conectar con Google.');
        }
    }

    public function authenticated(Request $request, User $user){
        $device = $request->header('User-Agent');
        //$user->sessions()->create(['device'=> $device]);
        return redirect()->intended('/dashboard');
    }
}
