<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playback extends Model
{
    protected $table = 'playback';

    protected $fillable = ['id', 'id_user', 'id_exercise', 'id_access', 'active'];
}
