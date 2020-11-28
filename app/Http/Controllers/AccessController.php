<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Access;
use App\Events\UserLogin;
use Illuminate\Support\Facades\Auth;
use DateTime;

class AccessController extends Controller
{
    public function storeAccess()
    {
        $acess = new Access();

        $access->save();
        //event(new UserLogin(Auth::user()->id));
    }
}
