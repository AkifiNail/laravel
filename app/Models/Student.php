<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function formation() {
        return $this->belongsTo(Formation::class);
    }

    public function groupes() {
        return $this->belongsToMany(Groupe::class);
    }

    public function cours() {
        return $this->belongsToMany(Cour::class);
    }
}
