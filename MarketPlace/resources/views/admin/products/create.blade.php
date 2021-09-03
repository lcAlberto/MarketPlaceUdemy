@extends('layouts.app')

@section('content')

    <h1>Criar Produto</h1>

    <form method="post" action="{{route('admin.products.store')}}" enctype="multipart/form-data">
        @csrf
        @include('admin.products.partials.form')

        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">
                <i class="fa fa-save mr-2"></i>
                Enviar
            </button>
        </div>

    </form>

@endsection
