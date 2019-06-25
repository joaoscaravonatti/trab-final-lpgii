@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <?php
                        //TODO corrigir isto
                            $array = [
                                'name' => [ 'Nome Completo' ],
                                'nome_pai' => [ 'Nome do Pai' ],
                                'nome_mae' => [ 'Nome da Mãe' ],
                                'data_nascimento' => [ 'Data de Nascimento', 'date' ],
                                'matricula' => [ 'Matrícula' ],
                                'endereco' => [ 'Endereço' ],
                                'cpf' => [ 'CPF' ],
                                'rg' => [ 'RG' ],
                                'contato' => [ 'Contato' ],
                                'email' => [ 'Email', 'email' ],
                                'password' => [ 'Senha', 'password' ],
                                'foto' => [ 'Foto', 'file' ]
                            ];

                            foreach($array as $key => $value): 
                        ?>
                            <div class="form-group row">
                                <label for="<?= $key ?>" class="col-md-4 col-form-label text-md-right"><?= $value[0] ?></label>

                                <div class="col-md-8">
                                    <input 
                                        id="<?= $key ?>" 
                                        class="form-control"
                                        type="<?= $value[1] ?? 'text' ?>" 
                                        name="<?= $value[0] ?>" 
                                        required 
                                        autocomplete="<?= $key ?>"
                                    />
                                </div>
                            </div>
                        <?php endforeach; ?> 

                       <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        -->
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
