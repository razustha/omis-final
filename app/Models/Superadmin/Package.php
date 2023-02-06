<?php

namespace App\Models\Superadmin;

use App\Models\Master\Module;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;

class Package extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_package';
    protected $primaryKey = 'package_id';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'price',
        'description',
        'feature',
        'loginLimitNo',
        'duration',
        'createdOn',
        'createdBy',
        'updatedBy',
        'alias',
        'status',
        'remarks',
        'created_at',
        'updated_at',

    ];

    protected $appends = ['status_name', 'module_name'];

    protected function getStatusNameAttribute()
    {
        return $this->status == 1 ? '<span class="badge text-bg-success-soft"> Active </span>' : '<span class="badge text-bg-danger-soft">Inactive</span>';
    }

    protected function getModuleNameAttribute()
    {
        $modules = Module::whereIn('module_id', explode(',', $this->feature))->select('moduleName')->get()->pluck('moduleName')->toArray();
        $modules = implode(',', $modules);
        return $modules;
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
