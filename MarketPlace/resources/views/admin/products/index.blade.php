@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="col-9 float-left">
                Lojas
            </div>
            <div class="col-3 float-right">
                <a
                    href="{{ route('admin.products.create') }}"
                    class="btn btn-block btn-primary">
                    <i class="fa fa-plus mr-2"></i>
                    Criar novo Produto
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>thumbnail</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Id da Loja</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->thumbnail ? $product->thumbnail : 'Default.jpg' }}</td>
                        <td>{{$product->name}}</td>
{{--                        <td>{{number_format($product->price, 2, ',', '.')}}</td>--}}
                        <td>{{$product->price}}</td>
                        <td>{{$product->store_id}}</td>
                        <td class="btn-group">
                            <form action="{{ route('admin.products.destroy', $product) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a
                                    href="{{ route('admin.products.edit', $product->id) }}"
                                    class="btn btn-success">
                                    <i class="fa fa-pencil mr-2"></i>
                                    Editar
                                </a>
                                <button
                                    type="submit"
                                    class="btn btn-danger">
                                    <i class="fa fa-trash mr-2"></i>
                                    Excluir
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{$products->links()}}
        </div>
    </div>

@endsection
