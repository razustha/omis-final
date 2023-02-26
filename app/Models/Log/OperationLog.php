<?php

namespace App\Models\Log;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationLog extends Model
{
    use HasFactory;

    protected $table = 'tbl_operation_logs';
    protected $primaryKey = 'operation_id';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'operation_start_no',
        'operation_end_no',
        'model_name',
        'model_id',
        'operation_name',
        'previous_values',
        'new_values',
        'created_at',
        'updated_at',

    ];


    protected $appends = ['operation_by'];

    public function getOperationByAttribute()
    {
        $user = User::find($this->user_id);
        return $user ? $user->name : '';
    }
}