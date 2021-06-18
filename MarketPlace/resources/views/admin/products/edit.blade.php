@extends('layouts.app')

@section('content')

    <h1>Editar Produtos</h1>

    <form method="post" action="{{route('admin.products.update', $product)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.products.partials.form')
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-success">
                <i class="fa fa-pencil mr-2"></i>
                Enviar
            </button>
        </div>

    </form>

@endsection
