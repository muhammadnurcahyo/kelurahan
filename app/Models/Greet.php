<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greet extends Model
{
    use HasFactory;
    protected $fillable =['position','name','slug','img','greeting'];
}
