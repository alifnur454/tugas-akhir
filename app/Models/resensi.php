<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resensi extends Model
{
    protected $table = 'resensis';
    protected $fillable = ['judul','pengarang','penerbit','alur','created_at','updated_at'];
}
