<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'menu_id',
        'created_by',
        'updated_by',
    ];

    public function role() {
        return $this->belongsToMany(Role::class)
            ->withDefault(function () {
                return new Role();
            });
    }
}
