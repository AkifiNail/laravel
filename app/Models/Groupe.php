<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;


    public final function students() {
        return $this->belongsToMany(Student::class);
    }

    public final function cours() {
        return $this->belongsToMany(Cour::class);
    }
}
