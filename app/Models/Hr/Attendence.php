<?php

namespace App\Models\Hr;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;

class Attendence extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_attendence';
    protected $primaryKey = 'attendence_id';
    public $timestamps = true;
    protected $fillable = [
        'employeePosition',
        'employee_id',
        'location',
        'todayDate',
        'timePicker1',
        'timePicker2',
        'createdOn',
        'createdBy',
        'alias',
        'status',
        'remarks',
        'workFrom',
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
}
