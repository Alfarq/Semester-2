<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customers;

class TokoController extends Controller
{

//products
    public function index(){
        return view('toko/index');
    }
    public function detail(){
        return view('toko/detail');
    
    }

    public function admin(){
        $products = Product::all();
        return view('toko/products/admin', compact('products'));
    }


    public function create(){
        return view('toko/products/create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);
        Product::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product created Successfully');
    }

    public function edit(Product $product){
        return view('toko/products/edit', compact('product'));
    }

    public function destroy(Product $product){
        //        dd($product);
        $product->delete();
        return redirect()->route('produk.admin')->with('success', 'Product deleted Successfully');
    }
    
    public function update(Request $request, Product $product){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);
        $product->update($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product updated Successfully');
    }




//customers
    public function customers(){
        $customers = Customers::all();
        return view('toko/customers/customers', compact("customers"));
    }

    public function createpelanggan(){
        return view('toko/customers/create');
    }

    public function storepelanggan(Request $request){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required',

        ]);
        Customers::create($request->all());
        return redirect()->route('customers.admin')->with('success', 'Customers created Successfully');
    }

    public function editpelanggan(Customers $customers){
        return view('toko/customers/edit', compact('customers'));
    }

    public function destroypelanggan(Customers $customers){
        //        dd($product);
        $customers->delete();
        return redirect()->route('customers.admin')->with('success', 'Customers deleted Successfully');
    }
    
    public function updatepelanggan(Request $request, Customers $customers){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required',

        ]);
        $customers->update($request->all());
        return redirect()->route('customers.admin')->with('success', 'Customers updated Successfully');
    }
}
