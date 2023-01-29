<?php

namespace App\Models\OrganizationSettings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationSettings extends Model
{
    use HasFactory;

    protected $table = 'tbl_organizationsetting';
    protected $primaryKey = 'organizationsetting_id';
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

    public function scopeFetch($query, $slug)
    {
        return $query->whereSlug($slug);
    }

    public function scopeActive($query, $type = true)
    {
        return $query->whereIsActive($type);
    }
}
