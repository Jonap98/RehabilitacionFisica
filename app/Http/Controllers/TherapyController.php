<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Therapy;

use Illuminate\Support\Facades\Storage;

class TherapyController extends Controller
{
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
