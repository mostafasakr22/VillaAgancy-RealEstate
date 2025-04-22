<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\VillaResource;
use App\Model\Villa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class VillaController extends Controller
{

    //AllData
    function index()
    {
        $Villas = VillaResource::collection(Villa::all());
        $data = [
            "msg" => "Return All Data",
            "status" => 200,
            "data" => $Villas,
        ];
        return response()->json($data);
    }


    //ShowOne
    function show($id)
    {
        $Villas = Villa::find($id);

        if ($Villas) {

            $data = [
                "msg" => "Return One Record",
                "status" => 200,
                "data" => new VillaResource($Villas),

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
        $Villas = Villa::find($id);

        if ($Villas) {

            if (File::exists(public_path('Villas/img/' . $Villas->Villa_img))) {
                File::delete(public_path('Villas/img/' . $Villas->Villa_img));
            }
            $Villas->delete();
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
            'price' => 'required',
            'space' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'floor' => 'required',
            'villa_img' => 'image|max:2048|mimes:jpg,png,gif',

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
        if ($request->hasFile('Villa_img')) {
            $image = $request->Villa_img;
            $imageName = rand() . time() . "." . $image->extension();
            $image->move(public_path("Villas/img/"), $imageName);
        }

        $newData = Villa::create([
            "id" => $request->id,
            "villa_img" => $imageName,
            "price" => $request->price,
            "space" => $request->space,
            "bedrooms" => $request->bedrooms,
            "bathrooms" => $request->bathrooms,
            "floor" => $request->floor,
        ]);

        $data = [
            "msg" => "Created Successfully",
            "status" => 200,
            "data" => new VillaResource($newData),

        ];

        return response()->json($data);
    }


    //Update
    function update(Request $request)
    {

        $old_id = $request->old_id;
        $Villas = Villa::find($old_id);

        $validateData = validator($request->all(), [
            'id' => 'required',
            Rule::unique('villas')->ignore($old_id),
            'price' => 'required',
            'space' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'floor' => 'required',
            'villa_img' => 'image|max:2048|mimes:jpeg,png,gif',

        ]);

        if ($validateData->fails()) {
            $data = [
                "msg" => "Validation Required",
                "status" => 203,
                "data" => $validateData->errors(),

            ];
            return response()->json($data);
        }



        if ($Villas) {

            $imageName = "";
            if ($request->hasFile('Villa_img')) {
                $image = $request->Villa_img;
                $imageName = rand(1, 1000) . time() . "." . $image->extension();
                if (File::exists(public_path('Villas/img/' . $Villas->Villa_img))) {
                    File::delete(public_path('Villas/img/' . $Villas->Villa_img));
                }
                $image->move(public_path("Villas/img/"), $imageName);
            } else {
                $imageName = $Villas->Villa_img;
            }

            $Villas->update([
                "id" => $request->id,
                "villa_img" => $imageName,
                "price" => $request->price,
                "space" => $request->space,
                "bedrooms" => $request->bedrooms,
                "bathrooms" => $request->bathrooms,
                "floor" => $request->floor,

            ]);

            $data = [
                "msg" => "Updated Successfully",
                "status" => 200,
                "data" => new VillaResource($Villas),

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
