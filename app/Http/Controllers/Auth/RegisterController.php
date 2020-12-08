<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use function dd;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'ditta' => 'required|string|max:255',
            'piva' => 'required|string|max:11|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'logo' => 'mimes:jpg,jpeg,png,gif',
            'password' => 'required|string|min:6|confirmed',
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
        $fileNamedb = '';
        if($data->hasFile('logo')){
            dd($data->file('cv'));
            $file = $data->file('cv');
            if(!$file->isValid()){
                return false;
            }
            $fileName = $data['piva'].'.'.$file->extension();

            $file->storeAs('loghi', $fileName);
            $fileNamedb = 'loghi/'.$fileName;
        }

        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'ditta' => $data['ditta'],
            'piva' => $data['piva'],
            'email' => $data['email'],
            'logo' => $fileNamedb,
            'password' => Hash::make($data['password']),
        ]);
    }
}
