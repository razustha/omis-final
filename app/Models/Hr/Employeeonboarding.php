<?php

namespace App\Models\Hr;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;

class Employeeonboarding extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_employeeonboarding';
    protected $primaryKey = 'employeeonboarding_id';
    public $timestamps = true;
    protected $fillable = [
        'employee_id',
        'department_id',
        'designation_id',
        'workingShift',
        'workingHour',
        'workingMode',
        'joinDate',
        'dayFrom',
        'dayTo',
        'departmentLogo',
        'createdOn',
        'createdBy',
        'updatedBy',
        'alias',
        'status',
        'remarks',
        'created_at',
        'updated_at',

    ];

    protected $appends = ['status_name','employee_name'];

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

//     protected function EmployeeId(): Attribute
//     {
//         return Attribute::make(
//             get: fn ($value) =>  Employee::find($value) ? Employee::find($value)->full_name : '',
//         );
//     }
protected function getEmployeeNameAttribute()
    {
        $employee=Employee::find($this->employee_id);
        return $employee ? $employee->full_name:'';
    }
}
