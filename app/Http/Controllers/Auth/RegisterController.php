<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {        
        if($data['role'] == 'provider'){
            return Validator::make($data, [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'service_type'=>['required'],
                'service'=>['required']
            ]);
        }else{
            return Validator::make($data, [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'country_of_citizenship'=>['required'],
                'service_type'=>['required'],
                'service'=>['required']
            ]);
        }
       

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        if($data['service_type'] == 'single'){
            $service = $data['service_single'];
        }else{
            $service = $data['service'];
        }
        if($data['role'] == 'provider'){
            $country_of_citizenship = "no";
        }
        else{
            $country_of_citizenship = $data['country_of_citizenship'];
        }


        return User::create([
            'country' => $data['country'],
            'country_of_citizenship' => $country_of_citizenship,
            'email' => $data['email'],
            'service_type' => $data['service_type'],
            'role' => $data['role'],
            'service' => $service,
            'password' => Hash::make($data['password']),
        ]);
        return redirect(route('candidate_workexperience'));
    }
}
