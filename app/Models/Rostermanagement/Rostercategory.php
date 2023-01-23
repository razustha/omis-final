<?php

namespace App\Models\Rostermanagement;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;

class Rostercategory extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_rostercategory';
    protected $primaryKey = 'rostercategory_id';
    public $timestamps = true;
    protected $fillable = [
        'titleName',
        'titleType_id',
        'time',
        'date',
        'officerName',
        'applicants_id',
        'applicantName',
        'createdOn',
        'createdBy',
        'alias',
        'status',
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
}
