@extends('layouts.app')

@section('content')

    <h1>Criar Produto</h1>

    <form method="post" action="{{route('admin.products.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-6 float-left">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <input type="text" id="description" name="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Corpo</label>
                <input type="text" id="body" name="body" class="form-control">
            </div>
        </div>

        <div class="col-6 float-right">
            <div class="form-group">
                <label for="price">Preço</label>
                <input type="text" id="price" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control">
            </div>
            <div class="form-group">
                <label for="thumbnail">Imagem</label>
                <input type="text" id="thumbnail" name="thumbnail" class="form-control">
            </div>
            <div class="form-group">
                <label for="store_id">Loja</label>
                <select id="store_id" name="store_id" class="form-control">
                    @foreach($stores as $store)
                        <option value="{{$store->id}}">{{'[ ' . $store->id . ' ]' . ' - ' . $store->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">
                <i class="fa fa-save mr-2"></i>
                Enviar
            </button>
        </div>

    </form>

@endsection
