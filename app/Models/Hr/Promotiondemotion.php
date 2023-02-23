<?php
        namespace App\Models\Hr;

        use App\Models\User;
        use Illuminate\Database\Eloquent\Casts\Attribute;
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        use App\Traits\CreatedUpdatedBy;
        use App\Models\Hr\Employee;

        class Promotiondemotion extends Model
        {
            use HasFactory, CreatedUpdatedBy;

            protected $table = 'tbl_promotiondemotion';
            protected $primaryKey = 'promotiondemotion_id';
            public $timestamps = true;
            protected $fillable =[
                'company_id',
'employee_id',
'promotionTitle',
'updated_designation_id',
'updated_department_id',
'type',
'promotionDate',
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
    protected function getEmployeeNameAttribute()
    {
        $employee=Employee::find($this->employee_id);
        return $employee ? $employee->full_name:'';
    }
        }
