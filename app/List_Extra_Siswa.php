<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_Extra_Siswa extends Model
{
    public function Siswa()
    {
        return $this->belongsToMany ('App\Siswa');
    }

    public function Extra()
    {
        return $this->belongsToMany('App\Extra' );
    }
}
