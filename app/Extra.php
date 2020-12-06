<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $table = 'extras';
    protected $primaryKey ='Extra_id';

    public function List_Extra_Siswa()
    {
        return $this->hasMany('App\List_Extra_Siswa');
    }
}
