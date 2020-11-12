<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $table = 'workout';
    //Se agregó el usuario y ejercicio, ya que ya no se referenciará a assignment (por lo pronto)
    //Se eliminó el campo de nombre porque no es muy necesario
    protected $fillable = ['id', 'initial_date', 'end_date', 'id_exercise', 'id_user', 'active'];
}
