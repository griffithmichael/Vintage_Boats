<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Membership;
//use Illuminate\Foundation\Auth\File;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use File;

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
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'postalcode' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

     

        $user = User::create([
            //'name' => $data['name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'postalcode' => $data['postalcode'],
            'phone' => $data['phone'],

        ]);

        $end = date('Y-m-d', strtotime('+1 year'));


        $membership = Membership::create([
            'member_id' => $user->id,
            'expiration_date' => $end,
            'paid' => 1,
        
        ]);

/*        $makeDir = \Storage::makeDirectory('database/users/'.$user->id , 0775,true);
        $makeDir = \Storage::makeDirectory('database/users/'.$user->id.'/classifieds' , 0775,true);
        $makeDir = \Storage::makeDirectory('database/users/'.$user->id.'/galleries' , 0775,true);*/



        $makeDir = File::makeDirectory(public_path().'/database/users/'.$user->id , 0775,true);
        $makeDir = File::makeDirectory(public_path().'/database/users/'.$user->id.'/classifieds' , 0775,true);
        $makeDir = File::makeDirectory(public_path().'/database/users/'.$user->id.'/galleries' , 0775,true);


        return $user;
    }
}
