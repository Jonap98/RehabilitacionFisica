<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
use App\Therapy;
use App\Assignment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ExerciseController extends Controller
{
    public function index()
    {
        $therapies = Therapy::where("active", "=", "1")->orderBy('active', 'ASC')->get();
        return view("exercise", array(
            "therapies" => $therapies
        ));
    }

    public function storeExercise(Request $request)
    {
        $exercise = new Exercise();

        $exercise->name = $request->name;
        $exercise->path = $request->path;
        $exercise->id_therapy = $request->id_therapy;

        $request->validate([
            'path' => 'required|file|max:10240000'
        ]);

        $video = $request->file('path')->store('public/videos');

        $url = Storage::url($video);

        Exercise::create([
            'name' => $exercise->name,
            'path' => $url,
            'id_therapy' => $exercise->id_therapy
        ]);

        return back();
    }

    public function selectionExercise(Request $request)
    {
        $exerc = Exercise::select('exercise.id as exercise_id',
        'exercise.name as exercise_name',
        'exercise.path as exercise_path',
        'exercise.id_therapy as therapy_id')
        ->where('exercise.id_therapy', '=', $request->id_therapy)
        ->distinct()
        ->get();

        return view('selectionE', array(
            "exercise" => $exerc
        ));
        //dd($request);
        /*
        $id = Auth::user()->id;
        $exerc = Exercise::select('exercise.id as exercise_id',
        'exercise.name as exercise_name',
        'exercise.path as exercise_path',
        'exercise.id_therapy as therapy_id')
        ->join('assignment', 'assignment.id_exercise', '=', 'exercise.id')
        ->where('exercise.id_therapy', '=', $request->id_therapy)
        ->where('assignment.id_user', '=', $id)
        ->distinct()
        ->get();

        return view('selectionE', array(
            "exercise" => $exerc
        ));
        */
    }

}
