<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPart extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'user_part_permissions');
    }
    protected $fillable = ['user_part'];
}
