<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adoption extends Model
{
    use HasFactory;
    protected $fillable=['id','animal_id','organization_id','date','description','status'];
}
