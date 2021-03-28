@extends('layouts.app')

@section('content')

    <h1>Criar Loja</h1>

    <form method="post" action="{{route('admin.store.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nome da Loja</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" id="description" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" id="phone" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control">
        </div>
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="text" id="logo" name="logo" class="form-control">
        </div>
        <div class="form-group">
            <label for="user_id">Usuário</label>
            <select id="user_id" name="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{'[ ' . $user->id . ' ]' . ' - ' . $user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">
                <i class="fa fa-save mr-2"></i>
                Enviar
            </button>
        </div>

    </form>

@endsection
