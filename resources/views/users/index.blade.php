@extends('layouts.card')
@section('cardBody')
    @section('title', 'Usuários')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Cargo</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <div class="row">
                        <a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        &nbsp;
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esse usuário')">
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