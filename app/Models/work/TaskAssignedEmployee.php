<?php
        namespace App\Models\Work;

use App\Models\Hr\Employee;
use App\Models\User;
        use Illuminate\Database\Eloquent\Casts\Attribute;
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        use App\Traits\CreatedUpdatedBy;

        class TaskAssignedEmployee extends Model
        {
            use HasFactory, CreatedUpdatedBy;

            protected $table = 'tbl_taskassignedemployee';
            protected $primaryKey = 'taskassignedemployee_id';
            public $timestamps = true;
            protected $fillable =[
                'employee_id',
'workProject_id',
'tasks_id',
'createdOn',
'createdBy',
'alias',
'status',
'remarks',
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

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

    public function task()
    {
        return $this->belongsTo(Tasks::class, 'tasks_id', 'tasks_id');
    }
}
