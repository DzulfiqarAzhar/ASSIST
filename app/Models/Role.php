<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_by',
        'updated_by',
    ];

    public function user() {
        return $this->hasMany(User::class, 'role_id')
            ->withDefault(function () {
                return new User();
            });
    }

    public function group() {
        return $this->hasMany(Group::class, 'role_id')
            ->withDefault(function () {
                return new Group();
            });
    }

    public function permission() {
        return $this->belongsToMany(Permission::class, 'role_id')
            ->withDefault(function () {
                return new Permission();
            });
    }
}
