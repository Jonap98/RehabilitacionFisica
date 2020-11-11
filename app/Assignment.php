<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $table = 'assignment';

    protected $fillable = ['id', 'id_exercise', 'id_user', 'id_therapy', 'active'];
    /*
    public function storeAssignment($data, $id)
    {
        $assignment = $this->find($id);
        $this->id_exercise = $data['id_exercise'];
        $this->id_user = $data['id_user'];
        $this->id_therapy = $data['id_therapy'];

        $assignment->active = $active;
        $assignment->save();
        return $assignment->id;
    }*/
}
