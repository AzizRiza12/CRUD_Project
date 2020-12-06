<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey ='Kelas_id';

    public function Siswa()
    {
        return $this->hasMany(Siswa::class, 'Kelas_id' );
    }
}
