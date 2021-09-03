@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="col-9 float-left">
                Lojas
            </div>
            <div class="col-3 float-right">
                <a
                    href="{{ route('admin.stores.create') }}"
                    class="btn btn-block btn-primary">
                    <i class="fa fa-plus mr-2"></i>
                    Criar nova Loja
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>thumbnail</th>
                    <th>Loja</th>
                    <th>Descrição</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($stores as $store)
                    <tr>
                        <td>{{$store->id}}</td>
                        <td>{{$store->thumbnail ? $store->thumbnail : 'Default.jpg' }}</td>
                        <td>{{$store->name}}</td>
                        <td>{{$store->description}}</td>
                        <td>{{$store->phone}}</td>
                        <td class="btn-group">
                            <form action="{{ route('admin.stores.destroy', $store->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a
                                    href="{{ route('admin.stores.edit', $store->id) }}"
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

            {{$stores->links()}}
        </div>
    </div>

@endsection
