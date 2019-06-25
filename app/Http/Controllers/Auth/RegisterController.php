<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;

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
            'name' => ['required', 'string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'mother_name' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['date'],
            'register' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'numeric', 'min:11'],
            'rg' => ['required', 'numeric', 'min:7'],
            'contact' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'photo' => ['file'],
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
        $path = Storage::putFile('photos', $data['photo']);
        
        return User::create([
            'name' => $data['name'],
            'father_name' => $data['father_name'],
            'mother_name' => $data['mother_name'],
            'date_of_birth' => $data['date_of_birth'],
            'register' => $data['register'],
            'address' => $data['address'],
            'cpf' => $data['cpf'],
            'rg' => $data['rg'],
            'contact' => $data['contact'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'photo' => $path,
            'role_FK' => 1
        ]);
    }
}
