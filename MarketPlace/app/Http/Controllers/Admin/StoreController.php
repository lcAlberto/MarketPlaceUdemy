<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\User;
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

    public function store(Request $request)
    {
        $data = $request->all();

        $user = User::find($data['user_id']);
        $store = $user->store()->create($data);

        return $store;
    }

    public function edit($store)
    {
        $currentStore = Store::find($store);

        return view('admin.stores.edit', compact('currentStore'));
    }

    public function update(Request $request)
    {
        dd($request->all());
    }
}
