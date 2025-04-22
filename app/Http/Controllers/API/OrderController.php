<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Order;
use Illuminate\Contracts\Validation\Rule as ValidationRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    //AllData
    function index()
    {
        $orders = OrderResource::collection(Order::all());
        $data = [
            "msg" => "Return All Data",
            "status" => 200,
            "data" => $orders,
        ];
        return response()->json($data);
    }


    //ShowOne
    function show($id)
    {
        $orders = Order::find($id);

        if ($orders) {

            $data = [
                "msg" => "Return One Record",
                "status" => 200,
                "data" => new OrderResource($orders),

            ];
            return response()->json($data);
        } else {

            $data = [
                "msg" => "No Such ID",
                "status" => 201,
                "data" => NULL,

            ];
            return response()->json($data);
        }
    }


    //DeleteOne
    function delete(Request $request)
    {

        $id = $request->id;
        $orders = Order::find($id);

        if ($orders) {

            if (File::exists(public_path('orders/img/' . $orders->order_img))) {
                File::delete(public_path('orders/img/' . $orders->order_img));
            }
            $orders->delete();
            $data = [
                "msg" => "Deleted Successfully",
                "status" => 200,
                "data" => NULL,
            ];

            return response()->json($data);
        } else {
            $data = [
                "msg" => "No Such ID",
                "status" => 205,
                "data" => NULL,
            ];

            return response()->json($data);
        }
    }

    //Create
    function store(Request $request)
    {


        $validateData = validator($request->all(), [
            'id' => 'required|unique:orders|max:11',
            'name' => 'required|max:255',
            'email' => 'required|min:5|max:255',
            'order_img' => 'image|max:2048|mimes:jpg,png',

        ]);

        if ($validateData->fails()) {
            $data = [
                "msg" => "Validation Required",
                "status" => 203,
                "data" => $validateData->errors(),

            ];
            return response()->json($data);
        }

        $imageName = "";
        if ($request->hasFile('order_img')) {
            $image = $request->order_img;
            $imageName = rand() . time() . "." . $image->extension();
            $image->move(public_path("orders/img/"), $imageName);
        }

        $newData = Order::create([
            "id" => $request->id,
            "order_img" => $imageName,
            "name" => $request->name,
            "email" => $request->email,
        ]);

        $data = [
            "msg" => "Created Successfully",
            "status" => 200,
            "data" => new OrderResource($newData),

        ];

        return response()->json($data);
    }


    //Update
    function update(Request $request)
    {

        $old_id = $request->old_id;
        $orders = Order::find($old_id);

        $validateData = validator($request->all(), [
            'id' => 'required',
            Rule::unique('orders')->ignore($old_id),
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255',
            'order_img' => 'image|max:2048|mimes:jpeg,png',

        ]);

        if ($validateData->fails()) {
            $data = [
                "msg" => "Validation Required",
                "status" => 203,
                "data" => $validateData->errors(),

            ];
            return response()->json($data);
        }



        if ($orders) {

            $imageName = "";
            if ($request->hasFile('order_img')) {
                $image = $request->order_img;
                $imageName = rand(1, 1000) . time() . "." . $image->extension();
                if (File::exists(public_path('orders/img/' . $orders->order_img))) {
                    File::delete(public_path('orders/img/' . $orders->order_img));
                }
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

            $data = [
                "msg" => "Updated Successfully",
                "status" => 200,
                "data" => new OrderResource($orders),

            ];

            return response()->json($data);
        } else {

            $data = [
                "msg" => "No Such ID",
                "status" => 205,
                "data" => NULL,

            ];

            return response()->json($data);
        }
    }
}
