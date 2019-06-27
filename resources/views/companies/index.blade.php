@extends('layouts.card')
@section('cardBody')
@section('title', 'Empresas')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">CNPJ</th>
            <th scope="col">E-mail</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($companies as $company)
        <tr>
            <th scope="row">{{ $company->id }}</th>
            <td>{{ $company->name }}</td>
            <td>{{ $company->cnpj }}</td>
            <td>{{ $company->email }}</td>
            <td>
                <div class="row">
                    <a class="btn btn-warning" href="{{ route('companies.edit', $company->id) }}">
                        <i class="fas fa-edit"></i>
                    </a>
                    &nbsp;
                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST"
                        onsubmit="return confirm('Tem certeza que deseja excluir essa empresa')">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                            </a>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection