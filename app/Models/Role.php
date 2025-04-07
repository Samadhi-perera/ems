<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'id',
        'name',
        'guard_name',
        'created_at',
        'updated_at',
    ];

    // Define the many-to-many relationship with Permission
    public function permission(){
        return $this->belongsToMany(Permission::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}


