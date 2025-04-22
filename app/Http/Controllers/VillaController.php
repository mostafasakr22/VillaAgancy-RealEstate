<?php

namespace App\Http\Controllers;

use App\Http\Requests\VillaRequest;
use App\Http\Requests\VillaUpdateRequest;
use App\Model\Villa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VillaController extends Controller
{
    public function index(){
        $villas = Villa::all();
        return view('villas',['villa'=>$villas]);
    }

     //Show
     public function show($id)
     {
         $villas = Villa::findOrFail($id);
 
         return view('villas.show', ['vill' => $villas]);
     }
 
     //Delete
     public function delete($id)
     {
 
         $villas = Villa::findOrFail($id);
         if (File::exists(public_path('villas/img/' . $villas->villa_img))) {
             File::delete(public_path('villas/img/' . $villas->villa_img));
         }
         $villas->delete();
         return redirect()->route('villa')->with("message", "Deleted Successfully");
     }
 
     
     //Create
     public function create()
     {
         $villas = Villa::all();
         return view('villas.create', ["opt" => $villas]);
     }
 
     //Store
     public function store(VillaRequest $request)
     {
 
         $imageName="";
         if ($request->hasFile('villa_img')) {
             $image = $request->villa_img;
             $imageName = rand() . time() . "." . $image->extension();
             $image->move(public_path("villas/img/"), $imageName);
         }
 
         Villa::create([
             "id" => $request->id,
             "villa_img" => $imageName,
             "price" => $request->price,
             "space" => $request->space,
             "bedrooms" => $request->bedrooms,
             "bathrooms" => $request->bathrooms,
             "floor" => $request->floor,
         ]);
 
         return redirect()->route('villa')->with("message", "Created Successfully");
     }
 
     
     //Edit
     public function edit($id)
     {
         $alldata = Villa::all();
         $villas = Villa::findOrFail($id);
         return view('villas.edit', ['ed' => $villas, 'alldata' => $alldata]);
     }
 
     //Save
     public function save(VillaUpdateRequest $request)
     {
         $old_id = $request->old_id;
         $villas = Villa::findOrFail($old_id);
 
         $imageName = "";
         if ($request->hasFile('villa_img')) {
             $image = $request->villa_img;
             $imageName = rand(1, 1000) . time() . "." . $image->extension();
             $image->move(public_path("villas/img/"), $imageName);
         } else {
             $imageName = $villas->order_img;
         }
 
         $villas->update([
             "id" => $request->id,
             "villa_img" => $imageName,
             "price" => $request->price,
             "space" => $request->space,
             "bedrooms" => $request->bedrooms,
             "bathrooms" => $request->bathrooms,
             "floor" => $request->floor,
 
         ]);
 
         return redirect()->route('villa')->with("message", "Updated Successfully");
     }
}
