<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productAll()
    {
        $products = Product::oldest()->paginate(5);
        return view('productAll',compact('products'))->with('i',(request()->input('page',1)-1)*5);
    }
    public function productAdd()
    {
        return view('productAdd');
    }

    public function pstore(Request $request)
    {
        $request->validate([
            'sku_code'=>'required',
            'sku_name'=>'required',
            'mrp'=>'required',
            'price'=>'required',
            'weight'=>'required',
            'volume'=>'required',
        ]);

        $input = $request->all();

        Product::create($input);
        return redirect()->route('productAll');
    }

    public function productEdit(Product $product)
    {
        return view('productEdit',compact('product'));
    }

    public function pupdate(Request $request, Product $product)
    {
        $request->validate([
            'sku_code'=>'required',
            'sku_name'=>'required',
            'mrp'=>'required',
            'price'=>'required',
            'weight'=>'required',
            'volume'=>'required',
        ]);

        $input = $request->all();
        $product->update($input);
        return redirect()->route('productAll');
    }

    public function pdestroy(Product $product)
    {
        $product->delete();
        return redirect()->route('productAll');
    }
}
