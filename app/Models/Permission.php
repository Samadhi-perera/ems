<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'id',
        'name',
        'guard_name',
        'created_at',
        'updated_at',
        
    ];

    

    public function role(){
        return $this->belongsToMany(Role::class, 'role_id');
    }
}


