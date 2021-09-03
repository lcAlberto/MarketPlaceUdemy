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

    public function __construct()
    {
        $this->middleware('user.store')->only(['create', 'store']);
    }

    public function index()
    {
        $store = auth()->user()->store;

        return view('admin.stores.index', compact('store'));
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

    public function edit(Store $store)
    {
        return view('admin.stores.edit', compact('store'));
    }

    public function update(StoreRequest $request, Store $store)
    {
        try {
            $data = $request->all();

            $store->user()->update($data);
//            $currentUser = auth()->user();
//            $currentUser->update($data);

            flash('Loja Atualizada!')->success();
        } catch (Exception $e) {
            flash('Erro ao Atualizar Loja!')->error();
        }

        return redirect()->route('admin.stores.index');
    }

    public function destroy(Store $store)
    {
        try {
            $store->delete();

            flash('Loja Removida com sucesso')->success();

        } catch (Exception $e) {
            flash('Erro ao Remover Loja')->error();
        }

        return redirect()->route('admin.stores.index');

    }
}
