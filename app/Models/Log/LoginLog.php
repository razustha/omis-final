<?php

namespace App\Models\Log;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginLog extends Model
{
    use HasFactory;

    protected $table = 'tbl_login_logs';
    protected $primaryKey = 'login_id';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'ip',
        'user_agent',
        'type',
        'login_at',
        'logout_at',
        'created_at',
        'updated_at',

    ];


    protected $appends = ['user_name'];

    public function getUserNameAttribute()
    {
        $user = User::find($this->user_id);
        return $user ? $user->name : '';
    }
}