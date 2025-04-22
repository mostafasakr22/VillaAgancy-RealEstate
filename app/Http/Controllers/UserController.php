<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Model\Villa;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (){
        $users = User::all();
        return view('users',['user'=>$users]);
    }

    
    //Show
    public function show($id)
    {
        $users = User::findOrFail($id);

        return view('users.show', ['use' => $users]);
    }

      //Delete
      public function delete($id)
      {
  
          $users = User::findOrFail($id);
          $users->delete();
          return redirect()->route('user')->with("message", "Deleted Successfully");
      }
  
      
      //Create
      public function create()
      {
          $users = User::all();
          return view('users.create', ["opt" => $users]);
      }
  
      //Store
      public function store(UserRequest $request)
      {
  
          User::create([
              "id" => $request->id,
              "name" => $request->name,
              "email" => $request->email,
              "age" => $request->age,
              "gender" => $request->gender,
              "password" => $request->password,
          ]);
  
          return redirect()->route('user')->with("message", "Created Successfully");
      }
  
      
      //Edit
      public function edit($id)
      {
          $alldata = User::all();
          $users = User::findOrFail($id);
          return view('users.edit', ['ed' => $users, 'alldata' => $alldata]);
      }
  
      //Save
      public function save(UserUpdateRequest $request)
      {
          $old_id = $request->old_id;
          $users = User::findOrFail($old_id);
  
          $users->update([
              "id" => $request->id,
              "name" => $request->name,
              "email" => $request->email,
              "age" => $request->age,
              "gender" => $request->gender,
              "password" => $request->password,
  
          ]);
  
          return redirect()->route('user')->with("message", "Updated Successfully");
      }
}
