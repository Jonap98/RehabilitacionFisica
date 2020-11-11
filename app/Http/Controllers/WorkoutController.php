<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exercise;
use App\Therapy;
use App\Assignment;

class WorkoutController extends Controller
{
    public function index($id)
    {
        $usr = User::where("id", "=", $id)->get();
        $exercises = Exercise::where("active", "=", "1")->orderBy('active', 'ASC')->get();
        //dd($exercises);
        return view("workout", array(
            "users" => $usr,
            "exercises" => $exercises,
            "action" => action('AssignmentController@storeAssignment', $id)
        ));
    }
}
