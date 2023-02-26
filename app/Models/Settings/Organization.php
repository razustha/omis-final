<?php

namespace App\Models\Settings;

use App\Models\Superadmin\Package;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;
use App\Models\Master\Country;
use App\Models\Master\State;
use App\Models\Master\City;
use App\Models\Master\District;

class Organization extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_organization';
    protected $primaryKey = 'organization_id';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'organizationName',
        'organizatoinCategory',
        'ownerName',
        'phoneNumber',
        'landLineNumber',
        'emailAddress',
        'password',
        'faxAddress',
        'country_id',
        'state_id',
        'city_id',
        'district_id',
        'geoMapLocation',
        'logo',
        'documentType',
        'documentName',
        'documentPath',
        'budgetSize',
        'package_id',
        'workDays',
        'createdOn',
        'createdBy',
        'alias',
        'status',
        'remarks',
        'created_at',
        'updated_at',
        'updatedBy',

    ];

    protected $appends = ['status_name','package_name'];

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
    protected function cityId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  City::find($value) ? City::find($value)->cityName : '',
        );
    }

    protected function districtId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  District::find($value) ? District::find($value)->districtName : '',
        );
    }


    protected function getPackageNameAttribute()
    {
        $package = Package::find($this->package_id);
        return $package ? $package->name : '';
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
