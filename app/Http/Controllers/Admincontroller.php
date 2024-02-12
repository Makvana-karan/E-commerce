<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\catagory;

class Admincontroller extends Controller
{
   public function view_catagory(){
      $data = catagory::all();

        return view('admin.catagory',compact('data'));
   }

   public function add_catagory(Request $req){
      $data= new Catagory();

      $data->catagory_name = $req->catagory;
      $data->save();

      return redirect()->back()->with('message','Catagory Added successfully...');

   }
   public function delete_catagory($id){

      $data= catagory::find($id);
      $data->delete();
      return redirect()->back()->with('message','catagory delete successfully...');

   }

   public function view_product(){
      return view('admin.product');
   }
}
