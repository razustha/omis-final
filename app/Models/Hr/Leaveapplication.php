<?php

namespace App\Models\Hr;

use App\Models\Master\Leavetype;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Support\Facades\DB;

class Leaveapplication extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_leaveapplication';
    protected $primaryKey = 'leaveApplication_id';
    public $timestamps = true;
    protected $fillable = [
        'leaveRequestedBy',
        'employee_id',
        'chooseDepartment_id',
        'leavetype_id',
        'leaveStart',
        'leaveEnd',
        'type',
        'sub_total',
        'leaveApprovalBy',
        'leaveApprovedDate',
        'createdOn',
        'createdBy',
        'alias',
        'status',
        'leaveApplication_status',
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
    public function employee()
    {
        return $this->belongsTo(Employee::class,'employee_id','employee_id');
    }

    public function leavetype()
    {
        return $this->belongsTo(Leavetype::class,'leavetype_id','leavetype_id');
    }

    public function attendence()
    {
        $auth = auth()->user()->id;
        $attendance = DB::table('tbl_employee')
            ->join('tbl_leaveapplication', 'tbl_leaveapplication.employee_id', 'tbl_attendence.employee_id')
            ->select('users.id as user_id', 'users.name', 'tbl_attendence.attendence_id')
            ->where('tbl_attendence.todayDate', date('Y-m-d'))
            ->where('tbl_attendence.employee_id', $auth)
            ->first();
        return $attendance;
    }

}
