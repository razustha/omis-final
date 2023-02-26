<?php

namespace App\Models\Log;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    use HasFactory;

    protected $table = 'tbl_error_logs';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'controller_name',
        'method_name',
        'errors',
        'created_at',
        'updated_at',

    ];


    protected $appends = [];


}