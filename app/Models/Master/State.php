<?php

namespace App\Models\Master;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master\Country;
use App\Traits\CreatedUpdatedBy;

class State extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_state';
    protected $primaryKey = 'state_id';
    public $timestamps = true;
    protected $fillable = [
        'country_id',
        'stateName',
        'createdOn',
        'createdBy',
        'alias',
        'status',
        'remarks',

    ];

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? '<span class="badge text-bg-warning-soft"> Active </span>' : '<span class="badge text-bg-secondary-soft">Inactive</span>',
        );
    }

    protected function countryId(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  Country::find($value) ? Country::find($value)->countryName : '',
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

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public static function getStates()
    {
        return self::select('state_id','stateName')->where('status','1')->get();
    }

    public static function getStatesByCountryId($country_id)
    {
        return self::select('state_id','stateName')->where('status','1')->where('country_id',$country_id)->get();
    }
}
