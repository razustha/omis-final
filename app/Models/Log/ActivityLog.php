<?php

namespace App\Models\Log;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $table = 'tbl_activity_logs';
    protected $primaryKey = 'activity_id';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'controllerName',
        'methodName',
        'actionUrl',
        'activity',
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