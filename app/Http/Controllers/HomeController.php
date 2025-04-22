<?php

namespace App\Http\Controllers;

use App\Model\Message;
use App\Model\Villa;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    
    public function index()
    {

        $users = User::all();
        $orders = Order::all();
        $villas = Villa::all();
        $messages = Message::all();
        return view('home',["user"=>$users,"order"=>$orders,"villa"=>$villas,"message"=>$messages]);
    }
}
