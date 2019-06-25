@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <?php
                        //TODO corrigir isto
                            $array = [
                                'name' => [ 'Nome Completo' ],
                                'father_name' => [ 'Nome do Pai' ],
                                'mother_name' => [ 'Nome da Mãe' ],
                                'date_of_birth' => [ 'Data de Nascimento', 'date' ],
                                'register' => [ 'Matrícula' ],
                                'address' => [ 'Endereço' ],
                                'cpf' => [ 'CPF' ],
                                'rg' => [ 'RG' ],
                                'contact' => [ 'Contato' ],
                                'email' => [ 'Email', 'email' ],
                                'password' => [ 'Senha', 'password' ],
                                'photo' => [ 'Foto', 'file' ]
                            ];

                            foreach($array as $key => $value): 
                        ?>
                            <div class="form-group row">
                                <label for="<?= $key ?>" class="col-md-3 col-form-label text-md-right">{{ $value[0] }}</label>
                                <div class="col-md-9">
                                    <input 
                                        id="{{ $key }}" 
                                        class="form-control"
                                        type="{{ $value[1] ?? 'text' }}" 
                                        name="{{ $key }}" 
                                        required 
                                    />
                                </div>
                            </div>   
                        @endforeach
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
