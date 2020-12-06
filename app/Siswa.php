<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $primaryKey ='Siswa_id';

    public function Kelas()
    {
        return $this->belongsTo(Kelas::class, 'Kelas_id', 'Kelas_id' );
    }

    public function List_Extra_Siswa()
    {
        return $this->hasMany('App\List_Extra_Siswa' );
    }
}
