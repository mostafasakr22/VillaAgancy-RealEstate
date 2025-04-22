<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Requests\OrderUpdateRequest;
use App\Order;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\File as FacadesFile;

class OrderController extends Controller
{
    public function index (){
        $orders = Order::all();
        return view('orders',['order'=>$orders]);
    }

    
    //Show
    public function show($id)
    {
        $orders = Order::findOrFail($id);
        return view('orders.show', ['ord' => $orders]);
    }

    //Delete
    public function delete($id)
    {

        $orders = Order::findOrFail($id);
        if (FacadesFile::exists(public_path('orders/img/' . $orders->order_img))) {
            FacadesFile::delete(public_path('orders/img/' . $orders->order_img));
        }
        $orders->delete();
        return redirect()->route('order')->with("message", "Deleted Successfully");
    }

    
    //Create
    public function create()
    {
        $orders = Order::all();
        return view('orders.create', ["opt" => $orders]);
    }

    //Store
    public function store(OrderRequest $request)
    {

        $imageName="";
        if ($request->hasFile('order_img')) {
            $image = $request->order_img;
            $imageName = rand() . time() . "." . $image->extension();
            $image->move(public_path("orders/img/"), $imageName);
        }

        Order::create([
            "id" => $request->id,
            "order_img" => $imageName,
            "name" => $request->name,
            "email" => $request->email,
        ]);

        return redirect()->route('order')->with("message", "Created Successfully");
    }

    
    //Edit
    public function edit($id)
    {
        $alldata = Order::all();
        $orders = Order::findOrFail($id);
        return view('orders.edit', ['ed' => $orders, 'alldata' => $alldata]);
    }

    //Save
    public function save(OrderUpdateRequest $request)
    {
        $old_id = $request->old_id;
        $orders = Order::findOrFail($old_id);

        $imageName = "";
        if ($request->hasFile('order_img')) {
            $image = $request->order_img;
            $imageName = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path("orders/img/"), $imageName);
        } else {
            $imageName = $orders->order_img;
        }

        $orders->update([
            "id" => $request->id,
            "order_img" => $imageName,
            "name" => $request->name,
            "email" => $request->email,

        ]);

        return redirect()->route('order')->with("message", "Updated Successfully");
    }
}






