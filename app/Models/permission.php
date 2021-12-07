<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;
    protected $fillable = ['permission', 'section_id'];
    public $dates = ['deleted_at'];
    public function component()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}

