<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Access extends Model
{
    protected $table = 'access';

    protected $fillable = ['id_user', 'last_login', 'active'];

    public function saveAccess($request){
        $this->id_user = Auth::user()->id;
        $this->last_login = $reuest->last_login;

        $this->save();
    }
}
