<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
            'name' => ['required', 'string', 'max:255'],
            'nome_pai' => ['required', 'string', 'max:255'],
            'nome_mae' => ['required', 'string', 'max:255'],
            'data_nascimento' => ['required', 'date'],
            'matricula' => ['required', 'string', 'max:255'],
            'endereco' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'max:255'],
            'rg' => ['required', 'string', 'max:255'],
            'contato' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'foto' => ['file'],
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
        return User::create([
            'name' => $data['name'],
            'nome_pai' => $data['nome_pai'],
            'nome_mae' => $data['nome_mae'],
            'data_nascimento' => $data['data_nascimento'],
            'matricula' => $data['matricula'],
            'endereco' => $data['endereco'],
            'cpf' => $data['cpf'],
            'rg' => $data['rg'],
            'contato' => $data['contato'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'foto' => $data['foto'],
            'role_FK' => 1
        ]);
    }
}
