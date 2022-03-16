<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alur extends Model
{
    protected $table = 'alurs';
    protected $fillable = ['pendahuluan','anti_klimaks','klimaks','anti_klimaks2','kesimpulan','created_at','updated_at'];
}
