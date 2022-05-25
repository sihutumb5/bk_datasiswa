<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    // use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'image';
    protected $primaryKey = 'images_id';
}
