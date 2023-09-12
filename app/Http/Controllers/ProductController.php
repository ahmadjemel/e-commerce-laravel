<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view("product.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view("product.create",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //traitement photo
        $inputs=$request->all();
        if($photo = $request->file("photo")){
          $newfile=time().".".$photo->getClientOriginalExtension();
          $photo->move('images/products/',$newfile);
          $inputs['photo']=$newfile;
        }
         Product::create($inputs);
        return redirect()->route("product.index")->with('success','un nouveau produit est ajouté avec success!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("product.edit",compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
       $request->validate(["name"=>"required|max:80",
       "photo"=>"image|required|mimes:png,jpg,webp,jpeg|max:2048",
       "price"=>"numeric|required",
       "description"=>"required",
       "category_id"=>"required|numeric"
   ]);
$inputs=$request->all();
        //traitemet de photo
if($photo=$request->file("photo")){
    $newfile=time().".".$photo->getClientOriginalExtension();
    //supprimer l'ancien photo s'il existe
    if(file_exists("image/products/".$product->photo))
        unlink("images/product/",$product->photo);
$photo->move('image/products/',$newfile);
$inputs['photo']=$newfile;
}else{
    $inputs['photo']=$product->photo;
}
        $product->update($inputs);
        return redirect()->route("product.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {//unlink il permet de supprimer le fichier image du dossier

        unlink("images/products/".$product->photo);
        $product->delete();
        return redirect()->route("product.index");
    }
}
