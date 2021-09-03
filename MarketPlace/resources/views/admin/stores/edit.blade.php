@extends('layouts.app')

@section('content')

    <h1>Editar Loja</h1>

    <form method="post" action="{{route('admin.stores.update', $store->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.stores.partials.form')
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-success">
                <i class="fa fa-pencil mr-2"></i>
                Enviar
            </button>
        </div>

    </form>

@endsection
