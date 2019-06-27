@extends('layouts.card')
@section('cardBody')
@section('title', 'Registrar empresa')
<form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
    @csrf
    @method("POST")
    <div class="form-group row">
        <label for="name" class="col-md-3 col-form-label text-md-right">Nome</label>
        <div class="col-md-9">
            <input id="name" class="form-control" type="text" name="name" required value="{{ old("name") }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-md-3 col-form-label text-md-right">Endereço</label>
        <div class="col-md-9">
            <input id="address" class="form-control" type="text" name="address" required value="{{ old("address") }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-md-3 col-form-label text-md-right">Telefone</label>
        <div class="col-md-9">
            <input id="phone" class="form-control" type="text" name="phone" required value="{{ old("phone") }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>
        <div class="col-md-9">
            <input id="email" class="form-control" type="email" name="email" required value="{{ old("email") }}" />
        </div>
    </div>
    <div class="form-group row">
        <label for="cnpj" class="col-md-3 col-form-label text-md-right">CNPJ</label>
        <div class="col-md-9">
            <input id="cnpj" class="form-control" type="text" name="cnpj" required value="{{ old("cnpj") }}" />
        </div>
    </div>   
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </div>
    </div>
</form>
@endsection