<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crowd extends Model
{
    protected $table = 'crowd';
    protected $fillable = ['nik','nama','gender','kelas'];
}
