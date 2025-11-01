<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;


class ProductController extends Controller
{
    public function dashboard(Request $req){

        $products = Product::query()->when($req->search, function ($query, $search) {
            $query->where('product_name', 'like', "%{$search}%")->orWhere('description', 'like', "%{$search}%");
        })->paginate(5)->appends(['search' => $req->search]); 

        return view('welcome', compact('products'));
    }

     public function addproduct(){
        return view('addproduct');
    }

     public function list(){
        $products = Product::all(); 
        return view('table', compact('products'));

    }

    public function addData(Request $req){ 
        if(Auth::check()){
            $user = Auth::user(); 

            $data = $req->validate([
                'product_name'  => 'required|string|max:25',
                'description'   => 'required|string|max:20',
            ]);
            
           $products = Product::create([
                'product_name' => $data['product_name'],
                'description'  => $data['description'],
                'add_by'       => $user->name,
            ]);

            return redirect()->route('dashboard')->with('success','Product Add Successfully');
        }
        else {
            return redirect()->route('login')->with('error', 'Please login');
        }
        
    }
    
    public function Edit($id){
        $data = Product::find($id);
        return view('edit',compact('data'));
    }

    public function updateData(Request $req, $id){

       $data = $req->validate([
         'product_name' => 'required|string|max:25',
         'description'  => 'required|string|max:20',
        ]);

        $product = Product::findOrFail($id);
        $product->update($data);

       return redirect()->route('dashboard')->with('success', 'Product Updated Successfully');

    }

    public function Delete($id){

        $product = Product::find($id);

       if ($product) {
        $product->delete();
        return redirect()->route('dashboard')->with('success', 'Product Deleted Successfully');
       }else {
        return redirect()->route('dashboard')->with('error', 'Product Not Found');
       }
   }
}
