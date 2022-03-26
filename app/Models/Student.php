<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'surname',
        'firstname',
        'age'
    ];
    public $timestamps = false;
    protected $table = 'students';
    protected $guarded = false;
}
