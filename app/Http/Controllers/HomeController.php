<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Therapy;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $therap = Therapy::select('therapy.id as therapy_id',
        'therapy.name as therapy_name',
        'therapy.image as therapy_image')
        ->distinct()
        ->get();

        return view('selectionT', array(
            "therapy" => $therap,
            "action" => action('ExerciseController@selectionExercise')
        ));
        /*
        $id = Auth::user()->id;
        $therap = Therapy::select('therapy.id as therapy_id',
        'therapy.name as therapy_name',
        'therapy.image as therapy_image')
        ->join('assignment', 'assignment.id_therapy', '=', 'therapy.id')
        ->where('assignment.id_user', '=', $id)
        ->distinct()
        ->get();

        return view('selectionT', array(
            "therapy" => $therap,
            "id_user" => $id,
            "action" => action('ExerciseController@selectionExercise', $id)
        ));
        */
        //return view('selectionT');
    }
}
