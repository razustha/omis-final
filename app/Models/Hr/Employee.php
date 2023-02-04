<?php
namespace App\Models\Hr;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;

class Employee extends Model
{
    use HasFactory, CreatedUpdatedBy;
    protected $table = 'tbl_employee';
    protected $primaryKey = 'employee_id';
    public $timestamps = true;
    protected $fillable = [
        'employeeType_id',
        'firstName',
        'middleName',
        'lastName',
        'gender_id',
        'dateOfBirth',
        'nationality_id',
        'password',
        'temproryAddress',
        'phoneNumber',
        'alternateNumber',
        'emailAddress',
        'country_id',
        'city_id',
        'state_id',
        'district_id',
        'permanentAddress',
        'postalCode',
        'role_id',
        'organization_id',
        'department_id',
        'designation_id',
        'panNo',
        'document_id',
        'documentName',
        'documentPath',
        'profilePhoto',
        'aboutMe',
        'sign',
        'skills',
        'reportingTo',
        'fatherName',
        'motherName',
        'grandFatherName',
        'grandMotherName',
        'spouse',
        'emergencyContact',
        'is_login',
        'is_head',
        'is_email_notification',
        'createdOn',
        'createdBy',
        'updatedBy',
        'alias',
        'status',
        'remarks',
        'created_at',
        'updated_at',

    ];

    protected $appends = ['status_name','full_name'];

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
    protected function departmentId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  Department::find($value) ? Department::find($value)->departmentName : '',
        );
    }
    protected function designationId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  Designation::find($value) ? Designation::find($value)->designationName : '',
        );
    }
    protected function roleId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  Role::find($value) ? Role::find($value)->name : '',
        );
    }

    public function getFullnameAttribute()
    {
        return "{$this->firstName} {$this->middleName} {$this->lastName}";
    }
}
