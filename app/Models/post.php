<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;


    // mass asigment : $fillabele sebaga properti yang berisi array yang berisi nama kolom yang boleh diisi
    protected $fillable=[
        'image',
        'title',
        'content',
    ];
}
