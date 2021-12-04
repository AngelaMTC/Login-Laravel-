<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //GET:
    public function index(){

        $products = ProductModel::all();

        return view('products.index', compact('products'));
    }

    //
    public function create(){
        return view('products.create');
    }

    //POST:
    public function store(Request $request){
        $product = new ProductModel();

        $product->title = $request->title;
        $product->subject = $request->subject;
        $product->delivery = $request->delivery;

        $product->save();

        return redirect()->route('products.index');
    }

        public function edit($id){
            $products =ProductModel::all();
            $product = ProductModel::find($id);
            return view('products.edit', compact('product', 'products'));
            }
    
        
    public function update(Request $request, $id){
        $input = $request->all();

        $product = ProductModel::find($id);
        $product->title =$input['title'];
        $product->subject =$input['subject'];

        $product->save();
        return redirect()->route('products.index');

        }

        //DELETE:
    public function destroy($id){
    ProductModel::find($id)->delete();
    
    return redirect()->route('products.index');

    }
}