<?php

namespace App\Http\Controllers;

use App\Product;
use App\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $products = Product::orderBy('id','asc')->paginate(10);
        return view ('admin.products.index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.products.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array (
            'name' => 'required',
            'order' => 'required',
            'date'   => 'required|date',
            'description'   => 'required',
            'quantity' => 'integer|required',
            'price' => 'integer|required',
            'cost' => 'integer|required',
            'image' => 'required'
        ));

        $product = new Product;
        $product->name = $request->name;
        $product->order = $request->order;
        $product->date = $request->date;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->cost = $request->cost;
        $product->image = $request->image;

        $product->save();

        Session::flash('success', 'Product Added!');

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view ('admin/products/show')->withProduct($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view ('admin/products/edit')->withProduct($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array (
            'name' => 'required',
            'order' => 'required',
            'date'   => 'required|date',
            'description'   => 'required',
            'quantity' => 'integer|required',
            'price' => 'integer|required',
            'cost' => 'integer|required',
            'image' => 'required'
        ));

        $product = Product::find($id);

        $product->name = $request->input('name');
        $product->order = $request->input('order');
        $product->date = $request->input('date');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->cost = $request->input('cost');
        $product->image = $request->input('image');

        $product->save();

        Session::flash('success', 'Product Updated');

        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        Session::flash('success', 'Featured product Item Successfully Deleted!');

        return redirect()->route('products.index', $product->id);
    }
}
