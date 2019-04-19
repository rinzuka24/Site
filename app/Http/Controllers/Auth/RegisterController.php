<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Jobs\SendWelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Classes\ActivationService;
use App\UserActivation;
use App\Mail\UserActivationEmail;

use App\Admin;
use Illuminate\Support\Facades\Hash;
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    protected $activationService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ActivationService $activationService)
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->activationService = $activationService;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'                 => 'required|max:255',
            'email'                => 'required|email|max:255|unique:users',
            'password'             => 'required|min:6|confirmed'
            // 'g-recaptcha-response' => 'required|recaptcha'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        
        //event(new Registered($user = $this->create($request->all())));
        //$this->guard()->login($user);
        //return $this->registered($request, $user)?: redirect($this->redirectPath());

        $user = $this->create($request->all());
        event(new Registered($user));
        // $this->guard()->login($user);

        $this->activationService->sendActivationMail($user);
        
        return redirect('/login')->with('status', 'Bạn hãy kiểm tra email và thực hiện xác thực theo hướng dẫn.');
    }

    public function authenticated(Request $request, $user)
    {
        if (!$user->activated) {
           $this->activationService->sendActivationMail($user);
           auth()->logout();
           return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
         }
    return redirect()->intended($this->redirectPath());
    }
    
    public function activateUser($token)
    {
        if ($user = $this->activationService->activateUser($token)) {
            auth()->login($user);
            return redirect('/login');
        }
        abort(404);
    }
}