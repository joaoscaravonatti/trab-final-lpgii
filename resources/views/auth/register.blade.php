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
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Nome Completo</label>
                            <div class="col-md-7">
                                <input id="name" class="form-control" type="text" name="name" required
                                    value="{{ old("name") }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>
                            <div class="col-md-7">
                                <input id="email" class="form-control" type="email" name="email" required
                                    value="{{ old("email") }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="father_name" class="col-md-3 col-form-label text-md-right">Nome do Pai</label>
                            <div class="col-md-7">
                                <input id="father_name" class="form-control" type="text" name="father_name" required
                                    value="{{ old("father_name") }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mother_name" class="col-md-3 col-form-label text-md-right">Nome da Mãe</label>
                            <div class="col-md-7">
                                <input id="mother_name" class="form-control" type="text" name="mother_name" required
                                    value="{{ old("mother_name") }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-3 col-form-label text-md-right">Data de
                                Nascimento</label>
                            <div class="col-md-7">
                                <input id="date_of_birth" class="form-control" type="date" name="date_of_birth" required
                                    value="{{ old("date_of_birth") }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="register" class="col-md-3 col-form-label text-md-right">Matrícula</label>
                            <div class="col-md-7">
                                <input id="register" class="form-control" type="text" name="register" required
                                    value="{{ old("register") }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-3 col-form-label text-md-right">Endereço</label>
                            <div class="col-md-7">
                                <input id="address" class="form-control" type="text" name="address" required
                                    value="{{ old("address") }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cpf" class="col-md-3 col-form-label text-md-right">CPF</label>
                            <div class="col-md-7">
                                <input id="cpf" class="form-control" type="text" name="cpf" required
                                    value="{{ old("cpf") }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rg" class="col-md-3 col-form-label text-md-right">RG</label>
                            <div class="col-md-7">
                                <input id="rg" class="form-control" type="text" name="rg" required
                                    value="{{ old("rg") }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact" class="col-md-3 col-form-label text-md-right">Contato</label>
                            <div class="col-md-7">
                                <input id="contact" class="form-control" type="text" name="contact" required
                                    value="{{ old("contact") }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">Senha</label>
                            <div class="col-md-7">
                                <input id="password" class="form-control" type="password" name="password" required
                                    value="{{ old("password") }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="photo" class="col-md-3 col-form-label text-md-right">Foto</label>
                            <div class="col-md-7">
                                <input id="photo" class="btn" type="file" name="photo" required
                                    value="{{ old("photo") }}" />
                            </div>
                        </div>
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