<?php

namespace App\Models\Settings;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;


class NotificationSettings extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_organizationnotification';
    protected $primaryKey = 'organizationnotification_id';
    protected $fillable = [
        'organization_id','key', 'value','createdOn',
        'createdBy',
        'alias',
        'status',
        'remarks',
        'created_at',
        'updated_at',
        'updatedBy',
    ];

    public function scopeFetch($query, $key)
    {
        return $query->where('key',$key);
    }

    public function scopeActive($query, $type = true)
    {
        return $query->whereIsActive($type);
    }

    protected function createdBy(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  User::find($value) ? User::find($value)->name : '',
        );
    }

    protected function updatedBy(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => User::find($value) ? User::find($value)->name : '',
        );
    }
}
