<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Model\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('messages', ['message' => $messages]);
    }


    //Show
    public function show($id)
    {
        $messages = Message::findOrFail($id);

        return view('messages.show', ['mess' => $messages]);
    }

    //Delete
    public function delete($id)
    {

        $messages = Message::findOrFail($id);
        $messages->delete();
        return redirect()->route('message')->with("message", "Deleted Successfully");
    }

   
    public function store(MessageRequest $request)
    {
        Message::create([
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message,
        ]);

        return redirect()->route('contact')->with('success', "Created Successfully");
    }
}
