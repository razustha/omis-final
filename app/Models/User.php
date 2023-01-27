<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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

    public function todayAttendance()
    {
        $attendance = DB::table('tbl_attendence')
        ->join('users', 'users.id','tbl_attendence.employee_id')
        ->select('users.id as user_id','users.name','tbl_attendence.attendence_id')
        ->where('tbl_attendence.todayDate',date('Y-m-d'))
        ->where('tbl_attendence.timePicker2',null)
        ->first();
        return $attendance;
    }

    public function getAllAttendence($user_id)
    {
        $attendance = DB::table('tbl_attendence')
        ->join('users', 'users.id','tbl_attendence.employee_id')
        ->select('users.id as user_id','users.name','tbl_attendence.attendence_id','tbl_attendence.todayDate')
        ->where('tbl_attendence.employee_id',$user_id)
        ->groupBy('todayDate','user_id','name','attendence_id')
        ->get();
        $attendance = $attendance->groupBy('todayDate');
        $today = today();
        $dates = [];

        for($i=1; $i < $today->daysInMonth + 1; ++$i) {
            $dates[Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d')] = Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
        }

        $array_Attendence = $attendance->toArray();
        $norecord = (array_diff($dates, array_keys($array_Attendence)));

        $attendance = array_merge( $norecord,$array_Attendence);
        ksort($attendance);
        return $attendance;


    }

    
}
