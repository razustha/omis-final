<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Hr\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;
use App\Permissions\HasPermissionsTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Settings\Organization;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_type',
        'company_id',
        'branch_id',
        'name',
        'email',
        'mobile',
        'created_by',
        'updated_by',
        'status',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['status_name'];


    protected function getStatusNameAttribute()
    {
        return $this->status == 1 ? '<span class="badge text-bg-success-soft"> Active </span>' : '<span class="badge text-bg-danger-soft">Inactive</span>';
    }



    public function todayAttendance()
    {
        $auth = auth()->user()->id;
        $attendance = DB::table('tbl_attendence')
            ->join('users', 'users.id', 'tbl_attendence.employee_id')
            ->select('users.id as user_id', 'users.name', 'tbl_attendence.attendence_id')
            ->where('tbl_attendence.todayDate', date('Y-m-d'))
            ->where('tbl_attendence.timePicker2', null)
            ->where('tbl_attendence.employee_id', $auth)
            ->first();
        return $attendance;
    }

    public function attendence()
    {
        $auth = auth()->user()->id;
        $attendance = DB::table('tbl_attendence')
            ->join('users', 'users.id', 'tbl_attendence.employee_id')
            ->select('users.id as user_id', 'users.name', 'tbl_attendence.attendence_id')
            ->where('tbl_attendence.todayDate', date('Y-m-d'))
            ->where('tbl_attendence.employee_id', $auth)
            ->first();
        return $attendance;
    }

    public function getAllAttendence($user_id)
    {
        $attendance = DB::table('tbl_attendence')
            ->join('users', 'users.id', 'tbl_attendence.employee_id')
            ->select('users.id as user_id', 'users.name', 'tbl_attendence.attendence_id', 'tbl_attendence.todayDate')
            ->where('tbl_attendence.employee_id', $user_id)
            ->groupBy('todayDate', 'user_id', 'name', 'attendence_id')
            ->get();
        $attendance = $attendance->groupBy('todayDate');
        $today = today();
        $dates = [];

        for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
            $dates[Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d')] = Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
        }

        $array_Attendence = $attendance->toArray();
        $norecord = (array_diff($dates, array_keys($array_Attendence)));

        $attendance = array_merge($norecord, $array_Attendence);
        ksort($attendance);
        return $attendance;
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'email', 'emailAddress');
    }

    public function userOrganization()
    {
        return $this->hasOne(Organization::class,'user_id');
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'email', 'emailAddress');
    }
}
