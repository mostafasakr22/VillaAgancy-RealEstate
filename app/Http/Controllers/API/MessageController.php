<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MessageResource;
use App\Model\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class MessageController extends Controller
{
    //AllData
    function index()
    {
        $Messages = MessageResource::collection(Message::all());
        $data = [
            "msg" => "Return All Data",
            "status" => 200,
            "data" => $Messages,
        ];
        return response()->json($data);
    }


    //ShowOne
    function show($id)
    {
        $Messages = Message::find($id);

        if ($Messages) {

            $data = [
                "msg" => "Return One Record",
                "status" => 200,
                "data" => new MessageResource($Messages),

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
        $Messages = Message::find($id);

        if ($Messages) {

            if (File::exists(public_path('Messages/img/' . $Messages->Message_img))) {
                File::delete(public_path('Messages/img/' . $Messages->Message_img));
            }
            $Messages->delete();
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


    //store
    function store(Request $request)
    {


        $validateData = validator($request->all(), [
            "name" => "required|min:5",
            "email" => "required|email|min:5",
            "message" => "required|min:8",

        ]);

        if ($validateData->fails()) {
            $data = [
                "msg" => "Validation Required",
                "status" => 203,
                "data" => $validateData->errors(),

            ];
            return response()->json($data);
        }


        $newData = Message::create([
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message,
        ]);

        $data = [
            "msg" => "Created Successfully",
            "status" => 200,
            "data" => new MessageResource($newData),

        ];

        return response()->json($data);
    }


    //Update
    function update(Request $request)
    {

        $old_id = $request->old_id;
        $messages = Message::find($old_id);

        $validateData = validator($request->all(), [
            'id' => 'required',
            Rule::unique('messages')->ignore($old_id),
            "name" => "required|min:5",
            "email" => "required|email|min:5",
            "message" => "required|min:8",

        ]);

        if ($validateData->fails()) {
            $data = [
                "msg" => "Validation Required",
                "status" => 203,
                "data" => $validateData->errors(),

            ];
            return response()->json($data);
        }



        if ($messages) {

            $messages->update([
                "id"=>$request->id,
                "name" => $request->name,
                "email" => $request->email,
                "message" => $request->message,

            ]);

            $data = [
                "msg" => "Updated Successfully",
                "status" => 200,
                "data" => new MessageResource($messages),

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
