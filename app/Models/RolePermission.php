<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class RolePermission extends Model
{
    use HasFactory;
    protected $table = 'roles_permissions';
    public $timestamps = false;
    protected $fillable = [
        'role_id',
        'permission_id',
    ];
}
