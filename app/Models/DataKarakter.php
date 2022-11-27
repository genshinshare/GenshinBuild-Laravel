<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKarakter extends Model
{
    use HasFactory;
    protected $table = 'DataKarakter';
    protected $primaryKey = 'id_karakter';
    protected $guarded = [];
}
