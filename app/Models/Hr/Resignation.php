<?php

namespace App\Models\Hr;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;

class Resignation extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_resignation';
    protected $primaryKey = 'resignation_id';
    public $timestamps = true;
    protected $fillable = [
        'department_id',
        'employee_id',
        'resignationDate',
        'description',
        'createdOn',
        'createdBy',
        'alias',
        'status',
        'remarks',
        'created_at',
        'updated_at',
        'updatedBy',

    ];

    protected $appends = ['status_name'];

    protected function getStatusNameAttribute()
    {
        return $this->status == 1 ? '<span class="badge text-bg-success-soft"> Active </span>' : '<span class="badge text-bg-danger-soft">Inactive</span>';
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
    protected function EmployeeId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  Employee::find($value) ? Employee::find($value)->full_name : '',
        );
    }
    protected function departmentId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  Department::find($value) ? Department::find($value)->departmentName : '',
        );
    }
}
