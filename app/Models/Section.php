<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Section extends Model
{
    use HasFactory;
    protected $fillable = ['section'];
    public $timestamps = false;

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
