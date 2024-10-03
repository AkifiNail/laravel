<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model    
{
    use HasFactory;

    protected $casts = [
        'debut' => 'datetime',
        'fin' => 'datetime',
    ];


    public function groupe() {
        return $this->belongsTo(Groupe::class);
    }

    public function formation() {
        return $this->belongsTo(Formation::class);
    }


    public function students() {
        $students = Student::where('formation_id','=',$this->formation_id)
        ->whereHas('groupes', fn($query) =>$query->where('id','=',$this->groupe_id))
        ->orderBy('lastname')
        ->orderBy('firstname')
        ->get();
        return $students;
    }


}
