<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strukturperangkatdesa extends Model
{
    /** @use HasFactory<\Database\Factories\StrukturperangkatdesaFactory> */
    use HasFactory;

    protected $guarded = [
        'id','created_at','updated_at'
    ];

}
