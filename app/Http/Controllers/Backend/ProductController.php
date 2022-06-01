<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
//use App\Http\Controllers\Backend\ProductController\update;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $product =  product::orderby('id','asc')->get();
       return view('backend.pages.products.productmanage', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.products.product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $all)
    {
        $all->validate([
              'pname'=>'required',
              'description'=>'required|min:10', 
        ]);
        
        $product = new Product();
        $product ->name = $all-> pname;
        $product ->description = $all-> description;
        $product ->category = $all-> category;
        $product ->size = $all-> size;
        $product ->costPrice = $all-> costPrice;
        $product ->saletPrice = $all-> salePrice;
        $product ->quantity = $all-> quantity;
        $product ->status = $all-> status;
        $product ->save();
        return redirect()->route('manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $product =  product::find($id);
        return view('backend.pages.products.editproduct',compact('product')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $all, $id)
    {
        $product = Product::find($id);
        $product ->name = $all-> pname;
        $product ->description = $all-> description;
        $product ->category = $all-> category;
        $product ->size = $all-> size;
        $product ->costPrice = $all-> costPrice;
        $product ->saletPrice = $all-> salePrice;
        $product ->quantity = $all-> quantity;
        $product ->status = $all-> status;
        $product ->update();
        return redirect()->route('manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  product::find($id);
        $product->delete();
        return redirect()->route('manage');
    }
}
