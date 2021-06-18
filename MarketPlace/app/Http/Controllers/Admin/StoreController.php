<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Store;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    private $paginate = 15;

    public function index()
    {
        $stores = Store::paginate($this->paginate);

        return view('admin.stores.index', compact('stores'));
    }

    public function create()
    {
        $users = User::all(['id', 'name']);

        return view('admin.stores.create', compact('users'));
    }

    public function store(StoreRequest $request)
    {
        try {
            $data = $request->all();

            $currentUser = auth()->user();
            $store = $currentUser->store()->create($data);

            flash('Loja criada com sucesso')->success();
        } catch (Exception $e) {
            flash('Erro ao criar Loja')->error();
        }

        return redirect()->route('admin.stores.index');
    }

    public function edit($store)
    {
        $currentStore = Store::find($store);
        $users = User::all();

        return view('admin.stores.edit', compact('currentStore', 'users'));
    }

    public function update(StoreRequest $request, $store)
    {
        try {
            $data = $request->all();

            $currentUser = auth()->user();
            $currentUser->update($data);

            flash('Loja Atualizada!')->success();
        } catch (Exception $e) {
            flash('Erro ao Atualizar Loja!')->error();
        }

        return redirect()->route('admin.stores.index');
    }

    public function destroy($store)
    {
        try {
            $currentStore = Store::find($store);
            $currentStore->delete();

            flash('Loja Removida com sucesso')->success();

        } catch (Exception $e) {
            flash('Erro ao Remover Loja')->error();
        }

        return redirect()->route('admin.stores.index');

    }
}
