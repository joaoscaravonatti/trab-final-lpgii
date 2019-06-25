@extends('layouts.card')
@section('cardBody')
@section('title', 'Editar usuário')
<form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="form-group row">
        <label for="name" class="col-md-3 col-form-label text-md-right">Nome Completo</label>
        <div class="col-md-9">
            <input id="name" class="form-control" type="text" name="name" required value="{{ $user->name }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="father_name" class="col-md-3 col-form-label text-md-right">Nome do Pai</label>
        <div class="col-md-9">
            <input id="father_name" class="form-control" type="text" name="father_name" required
                value="{{ $user->father_name }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="mother_name" class="col-md-3 col-form-label text-md-right">Nome da Mãe</label>
        <div class="col-md-9">
            <input id="mother_name" class="form-control" type="text" name="mother_name" required
                value="{{ $user->mother_name }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="date_of_birth" class="col-md-3 col-form-label text-md-right">Data de Nascimento</label>
        <div class="col-md-9">
            <input id="date_of_birth" class="form-control" type="date" name="date_of_birth" required
                value="{{ $user->date_of_birth }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="register" class="col-md-3 col-form-label text-md-right">Matrícula</label>
        <div class="col-md-9">
            <input id="register" class="form-control" type="text" name="register" required
                value="{{ $user->register }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-md-3 col-form-label text-md-right">Endereço</label>
        <div class="col-md-9">
            <input id="address" class="form-control" type="text" name="address" required value="{{ $user->address }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="cpf" class="col-md-3 col-form-label text-md-right">CPF</label>
        <div class="col-md-9">
            <input id="cpf" class="form-control" type="text" name="cpf" required value="{{ $user->cpf }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="rg" class="col-md-3 col-form-label text-md-right">RG</label>
        <div class="col-md-9">
            <input id="rg" class="form-control" type="text" name="rg" required value="{{ $user->rg }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="contact" class="col-md-3 col-form-label text-md-right">Contato</label>
        <div class="col-md-9">
            <input id="contact" class="form-control" type="text" name="contact" required value="{{ $user->contact }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>
        <div class="col-md-9">
            <input id="email" class="form-control" type="email" name="email" required value="{{ $user->email }}" />
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-primary">
                Editar
            </button>
        </div>
    </div>
</form>
@endsection