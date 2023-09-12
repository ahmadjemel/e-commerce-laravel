<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class FrontController extends Controller
{
    public Function index(){
        return view('front.welcome');
    }
    public Function products(int $category_id){
        $products=Product::where(["category_id"=>$category_id])->get();//au lieu de ::all on fait::where(["category_id"=>$category_id])->get()route param. pour fait le choit de category
       return view('front.products',compact("products"));
    }
    /**
     * Summary of checkout
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public Function checkout(){
        $products=Product::all('');
       return view('front.list',compact("products"));
    }
    public Function store(Request $request){
 //rafraichir la session
       // session()->flush();
//enregistrer un produit dansle panier dans la session
if(!session()->has('panier'))
session()->put('panier',[]);
$panier=session()->get('panier');
$trouve=0;
foreach($panier as $indice=> $product){
if($product['id']==$request->id)
{
    $trouve==1;
    $product["qty"]+=$request->qty;
    $panier[$indice]=$product;
   session()->put('panier',$panier);
}
if($trouve==0)
session()->push('panier',["id"=>$request->id,"name"=> $request->name,"qty"=>$request->qty,"photo"=> $request->photo]);
$panier=session()->get('panier');
return response()->json($panier);
}
}
public function list() {
    $panier=session()->get("panier");
return view("front.list",compact("panier"));

    }
}
