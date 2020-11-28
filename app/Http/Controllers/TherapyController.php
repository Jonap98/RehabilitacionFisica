<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Therapy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TherapyController extends Controller
{
    /*
    public function selectionTherapy()
    {
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
    }
    */

    public function index()
    {
        return view("therapy");
    }
    
    public function storeTherapy(Request $request)
    {
        $therapy = new Therapy();

        $therapy->name = $request->name;
        $therapy->image = $request->image;
        
        $request->validate([
            'image' => 'required|image|max:102400'
        ]);

        $images = $request->file('image')->store('public/images');

        $url = Storage::url($images);
        

        Therapy::create([
            'name' => $therapy->name,
            'image' => $url
        ]);

        return back();

    }
}
