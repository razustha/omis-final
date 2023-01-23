<?php

namespace App\Models\Master;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;

class District extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_district';
    protected $primaryKey = 'district_id';
    public $timestamps = true;
    protected $fillable = [
        'country_id',
        'state_id',
        'districtName',
        'createdOn',
        'createdBy',
        'updatedBy',
        'alias',
        'status',
        'remarks',
        'created_at',
        'updated_at',

    ];

    protected $appends = ['status_name'];

    protected function getStatusNameAttribute()
    {
        return $this->status == 1 ? '<span class="badge text-bg-success-soft"> Active </span>' : '<span class="badge text-bg-danger-soft">Inactive</span>';
    }

    protected function countryId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  Country::find($value) ? Country::find($value)->countryName : '',
        );
    }

    protected function stateId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  State::find($value) ? State::find($value)->stateName : '',
        );
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
