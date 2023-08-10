<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('product.list', [
            'products' => Product::all()
        ]);
    }

    public function create(): View
    {
        return view('product.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Product::create($request->all());

        return redirect()->route('product.list');
    }

    public function edit(string $id): View
    {
        return view('product.edit', [
            'product' => Product::find($id)
        ]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('product.list');
    }

    public function destroy(string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.list');
    }
}
