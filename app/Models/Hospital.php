<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;


class Hospital extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'specialest',
        'location',

    ];
    public function doctores(){
        return $this->belongsToMany(Doctor::class);
    }

}