<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class TestController extends Controller
{
    public function index(Request $request){
        // $data=Test::get();
        if($request->post()){
            return redirect(route('category'));
        }
        $data=DB::table('product')->get();
        $category=DB::table('category')->get();
        $products = product::with('category')->get();
        return view('home', compact('data','category','products'));
    }

    public function category(Request $request){
        // $data=Test::get();
        if($request->post()){
            return redirect(route('index'));
        }
        $category=DB::table('category')->get();
        return view('category', compact('category'));
    }

    public function addpr(Request $request ){
        $category=DB::table('category')->get();
        $idloai = $request->input('idloai_hidden');
        if($request->post()){
            // return view('add');
            // dd($request->all());
            $product=new product();
            $product->name=$request->name;
            $product->idloai=$idloai;
            $product->save();
            return redirect(route('index'));
        }


        return view('addPR',compact('category'));
    }

    public function addct(Request $request ){
        if($request->post()){
            // return view('add');
            // dd($request->all());
            $category=new category();
            $category->name=$request->name;
         
            $category->save();
            return redirect(route('category'));
        }
        return view('addCate');
    }


    public function delete($id,Request $request)
    {
        // Thực hiện xóa sản phẩm với id được chuyển đến từ route
        $product=DB::table('product')->get();
        if($request->post()){
            product::find($id)->delete();
            return redirect(route('index'));
        }
        // Chuyển hướng đến trang danh sách sản phẩm sau khi xóa
        return view('deletePR',compact('product'));
    }

    public function deleteCate($id,Request $request)
    {
        // Thực hiện xóa sản phẩm với id được chuyển đến từ route
        // $product=DB::table('product')->get();
        if($request->post()){
            category::find($id)->delete();
            return redirect(route('category'));
        }
        // Chuyển hướng đến trang danh sách sản phẩm sau khi xóa
        return view('deleteCate');
    }

    public function update(Request $request,$id){
        $data=product::find($id);
        $category=DB::table('category')->get();
        $idloai = $request->input('idloai_hidden');
        if($request->post()){
            $data->name=$request->name;
            $data->idloai=$idloai;
            $data->save();
            return redirect(route('index'));
        }
        return view('update' , compact('data','category'));
    }

    public function updateCate(Request $request,$id){
        $data=category::find($id);
        if($request->post()){
            $data->name=$request->name;
            $data->save();
            return redirect(route('category'));
        }
        return view('updateCate' , compact('data'));
    }


}
