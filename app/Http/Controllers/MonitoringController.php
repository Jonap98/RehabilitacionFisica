<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exercise;
use App\Assignment;
use App\Access;
use DB;
use App\Playback;
use Illuminate\Support\Facades\Auth;

class MonitoringController extends Controller
{
    public function index($id){
        $user = User::where('id', '=', $id)->get();
        $assignment = Exercise::select('exercise.id as exercise_id',
        'exercise.name as exercise_name',
        'assignment.id as assignment_id')
        ->join('assignment', 'assignment.id_exercise', '=', 'exercise.id')
        ->where('assignment.id_user', '=', $id)
        ->distinct()
        ->get();

        $assignment2 = Exercise::select('exercise.id as exercise_id',
        'exercise.name as exercise_name',
        'therapy.id as therapy_id',
        'therapy.name as therapy_name',
        'assignment.id as assignment_id',
        'assignment.favorite as favorite',
        'assignment.created_at as assigned_at',
        'exercise.created_at as created_at')
        ->join('assignment', 'assignment.id_exercise', '=', 'exercise.id')
        ->join('therapy', 'therapy.id', '=', 'assignment.id_therapy')
        ->where('assignment.id_user', '=', $id)
        ->distinct()
        ->get();

        $assignment3 = Exercise::select('exercise.id as exercise_id',
        'exercise.name as exercise_name',
        'therapy.id as therapy_id',
        'therapy.name as therapy_name',
        'workout.initial_date as initial_date',
        'workout.end_date as end_date',
        'exercise.created_at as created_at')
        ->join('workout', 'workout.id_exercise', '=', 'exercise.id')
        ->join('therapy', 'therapy.id', '=', 'exercise.id_therapy')
        ->where('workout.id_user', '=', $id)
        ->distinct()
        ->get();

        $playB = Playback::select('playback.id as playback_id',
        'playback.id_user as user_id',
        'playback.id_exercise as exercise_id',
        'playback.id_access as access_id',
        'playback.created_at as playback_created_at',
        'access.id as access_id',
        'access.created_at as access_created_at',
        'exercise.name as exercise_name')
        ->join('access', 'access.id', '=', 'playback.id_access')
        ->join('exercise', 'exercise.id', '=', 'playback.id_exercise')
        ->where('playback.id_user', '=', $id)
        ->orderBy('active', 'ASC')
        ->get();

        //$last = Access:select('created_at')

        $count = DB::table('access')->where('id_user', '=', $id)->count();
        $assignments = DB::table('assignment')->where('id_user', '=', $id)->count();
        $workouts = DB::table('workout')->where('id_user', '=', $id)->count();
        $playbacks = DB::table('playback')->where('id_user', '=', $id)->count();

        return view('monitoring', array(
            'user' => $user,
            'assignment' => $assignment,
            'count' => $count,
            'assignments' => $assignments,
            'workouts' => $workouts,
            'playbacks' => $playbacks,
            'assignment2' => $assignment2,
            'assignment3' => $assignment3,
            'playB' => $playB
        ));
    }
}
