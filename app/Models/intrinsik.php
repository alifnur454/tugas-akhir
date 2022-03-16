<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class intrinsik extends Model
{
    protected $table = 'intrinsiks';
    protected $fillable = ['tema','penokohan','latar','alur_cerita','created_at','updated_at'];

}
