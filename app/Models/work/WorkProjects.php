<?php
        namespace App\Models\work;

        use App\Models\User;
        use Illuminate\Database\Eloquent\Casts\Attribute;
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        use App\Traits\CreatedUpdatedBy;
use Illuminate\Support\Facades\DB;

        class WorkProjects extends Model
        {
            use HasFactory, CreatedUpdatedBy;

            protected $table = 'tbl_workprojects';
            protected $primaryKey = 'workProject_id';
            public $timestamps = true;
            protected $fillable =[
                'projectTitle',
'projectStartClient',
'projectStartDate',
'projectEndDate',
'projectPriority',
'project_documents',
'companyName_id',
'department_id',
'assignedEmployees',
'projectDescription',
'workProject_status',
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

    public function projectEmployee()
    {
        return $this->hasMany(ProjectEmployee::class,'workProject_id','workProject_id');
    }

    public function tasks()
    {
        return $this->hasMany(Tasks::class,'workProject_id','workProject_id')->where('tasks_status','pending');
    }

    // public function tasks()
    // {
    //     $tasks = DB::table('tbl_tasks')
    //         ->join('tbl_workProjects', 'tbl_workProjects.workProject_id', 'tbl_tasks.workProject_id')
    //         ->select('tbl_tasks.tasks_id')
    //         ->where('tbl_tasks.tasks_status','pending')
    //         ->first();

    //     return $tasks;
    // }
}
