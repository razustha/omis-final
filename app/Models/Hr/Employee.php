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
        'user_id',
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
        'joiningDate',
        'document_id',
        'documentName',
        'documentPath',
        'profilePhoto',
        'aboutMe',
        'sign',
        'skills',
        'reportingTo',
        'joiningDate',
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

    protected $appends = ['status_name', 'full_name', 'role_name','department_name','designation_name','manager_name'];

    protected function getStatusNameAttribute()
    {
        return $this->status == 1 ? '<span class="badge text-bg-success-soft"> Active </span>' : '<span class="badge text-bg-danger-soft">Inactive</span>';
    }

    protected function firstName(): Attribute
    {
        return Attribute::make(
        get: fn($value) => $value ?? '',
        );
    }

    protected function middleName(): Attribute
    {
        return Attribute::make(
        get: fn($value) => $value ?? '',
        );
    }

    protected function lastName(): Attribute
    {
        return Attribute::make(
        get: fn($value) => $value ?? '',
        );
    }
    protected function createdBy(): Attribute
    {
        return Attribute::make(
        get: fn($value) => User::find($value) ? User::find($value)->name : '',
        );
    }

    protected function updatedBy(): Attribute
    {
        return Attribute::make(
        get: fn($value) => User::find($value) ? User::find($value)->name : '',
        );
    }
    protected function getDepartmentNameAttribute()
    {
        $department = Department::find($this->department_id);
        return $department ? $department->departmentName : '';
    }
    protected function getDesignationNameAttribute()
    {
        $designation = Designation::find($this->designation_id);
        return $designation ? $designation->designationName : '';
    }
    protected function getRoleNameAttribute()
    {
        $role = Role::find($this->role_id);
        return $role ? $role->name : '';
    }

    public function getFullnameAttribute()
    {
        return "{$this->firstName} {$this->middleName} {$this->lastName}";
    }
    public function getManagerNameAttribute(){
        $manager = Employee::find($this->reportingTo);
        return $manager ? $manager->full_name : '';
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class,'designation_id','designation_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','department_id');
    }
}
