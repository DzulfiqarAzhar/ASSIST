<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role_id',
        'locked',
        'created_by',
        'updated_by',
    ];

    public function user() {
        return $this->hasMany(User::class, 'group_id')
            ->withDefault(function () {
                return new User();
            });
    }

    public function role() {
        return $this->belongsTo(Role::class)
            ->withDefault(function () {
                return new Role();
            });
    }
}
