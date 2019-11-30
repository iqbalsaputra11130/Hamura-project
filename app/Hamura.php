<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hamura extends Model
{
    protected $table = "film";

    protected $fillable = ['judul_film','sinopsis','tahun_release','description','avatar'];
}
