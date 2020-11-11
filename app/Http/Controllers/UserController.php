<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where("active", "=", "1")->orderBy('active', 'ASC')->get();
        return view('userList', array(
            "users" => $users
        ));
    }
}
