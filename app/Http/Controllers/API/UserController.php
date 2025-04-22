<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //AllData
    function index()
    {
        $Users = UserResource::collection(User::all());
        $data = [
            "msg" => "Return All Data",
            "status" => 200,
            "data" => $Users,
        ];
        return response()->json($data);
    }


    //ShowOne
    function show($id)
    {
        $Users = User::find($id);

        if ($Users) {

            $data = [
                "msg" => "Return One Record",
                "status" => 200,
                "data" => new UserResource($Users),

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
        $Users = User::find($id);

        if ($Users) {

            if (File::exists(public_path('Users/img/' . $Users->User_img))) {
                File::delete(public_path('Users/img/' . $Users->User_img));
            }
            $Users->delete();
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
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255',
            'password' => 'required|min:5|max:50',

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
        if ($request->hasFile('User_img')) {
            $image = $request->User_img;
            $imageName = rand() . time() . "." . $image->extension();
            $image->move(public_path("Users/img/"), $imageName);
        }

        $newData = User::create([
            "id" => $request->id,
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);

        $data = [
            "msg" => "Created Successfully",
            "status" => 200,
            "data" => new UserResource($newData),

        ];

        return response()->json($data);
    }


    //Update
    function update(Request $request)
    {

        $old_id = $request->old_id;
        $Users = User::find($old_id);

        $validateData = validator($request->all(), [
            'id' => 'required',
            Rule::unique('users')->ignore($old_id),
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255',
            'password' => 'required|min:5|max:50',

        ]);

        if ($validateData->fails()) {
            $data = [
                "msg" => "Validation Required",
                "status" => 203,
                "data" => $validateData->errors(),

            ];
            return response()->json($data);
        }



        if ($Users) {

            $imageName = "";
            if ($request->hasFile('User_img')) {
                $image = $request->User_img;
                $imageName = rand(1, 1000) . time() . "." . $image->extension();
                if (File::exists(public_path('Users/img/' . $Users->User_img))) {
                    File::delete(public_path('Users/img/' . $Users->User_img));
                }
                $image->move(public_path("Users/img/"), $imageName);
            } else {
                $imageName = $Users->User_img;
            }

            $Users->update([
                "id" => $request->id,
              "name" => $request->name,
              "email" => $request->email,
              "password" => $request->password,

            ]);

            $data = [
                "msg" => "Updated Successfully",
                "status" => 200,
                "data" => new UserResource($Users),

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
