<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kelas extends Model {
    public $table = "t_kelas";

    protected $fillable = [
        'id','nama_kelas','jurusan'
    ];

}



?>