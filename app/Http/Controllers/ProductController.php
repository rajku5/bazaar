<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){
        $data['products'] = product::all();
        return view('home',$data);

    }
    public function insert(){
        return view('insert');
        
    }
    public function store($req){
        $req->validate([
            'title'=>'required',
            'brand'=>'required',
            'category'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);
        $filename = $req->image->getClientOriginalName();
        $req->image->move(public_path("product_image"),$filename);

        $pro = new Product();
        $pro->title = $req->title;
        $pro->brand = $req->brand;
        $pro->category = $req->category;
        $pro->price = $req->price;
        $pro->image = "default.jpg";
        $pro->discount_price = $req->discount_price;
        $pro->description = $req->description;
        $pro->save();
        return redirect()->route("homepage");
    }
}
