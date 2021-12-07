<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animal extends Model
{
    use HasFactory;
    protected $fillable=['id','category_id','organization_id','name','color','height','weight','length','breed'];
}
