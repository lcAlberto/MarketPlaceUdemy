<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Store;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $model;
    private $paginate = 15;

    public function __construct()
    {
        $this->model = new Product();
        $this->stores = new Store();
    }

    public function index(Product $product, Store $store)
    {
        $products = $product->paginate($this->paginate);
        return view('admin.products.index', compact('products'));
    }

    public function create(Store $store)
    {
        $stores = Store::all(['id', 'name']);

        return view('admin.products.create', compact('stores'));
    }

    public function store(ProductRequest $request)
    {
        try {
            $data = $request->all();

            $store = auth()->user()->store;
            $store->products()->create($data);
            flash('Produto criado com sucesso!')->success();
        } catch (Exception $e) {
            flash('Erro ao criar Produto')->error();
        }

        return redirect()->route('admin.products.index');

    }

    public function show($id)
    {
        dd();
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $store = auth()->user()->store;
        return view('admin.products.edit', compact('store', 'product'));
    }

    public function update(ProductRequest $request, $product)
    {
        try {
            $data = $request->all();

            $currentProduct = Product::find($product);
            $currentProduct->update($data);

            flash('Produto atualizado com sucesso!')->success();
        } catch (Exception $e) {
            flash('Erro ao atuaizar Produto')->error();
        }

        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        try {
            $product = Product::find($id);
            $product->delete();

            flash('Produto Removido com sucesso')->success();

        } catch (Exception $e) {
            flash('Erro ao remover o produto')->error();
        }

        return redirect()->route('admin.products.index');
    }

    public function pagination()
    {
        //
    }
}
