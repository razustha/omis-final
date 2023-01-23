<?php
        namespace App\Models\Travelfleet;

        use App\Models\User;
        use Illuminate\Database\Eloquent\Casts\Attribute;
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        use App\Traits\CreatedUpdatedBy;

        class Fleetmanagement extends Model
        {
            use HasFactory, CreatedUpdatedBy;

            protected $table = 'tbl_fleetmanagement';
            protected $primaryKey = 'fleetmanagement_id';
            public $timestamps = true;
            protected $fillable =[
                'lesseeName',
'lesseeAddress',
'lessorName',
'lessorContact',
'vehicleType_id',
'vehicleNumber',
'driverName',
'driverContact',
'driverAddress',
'organizationName',
'staff_Id',
'staffName',
'staffIdentity',
'totalPeople',
'travelDateFrom',
'travelDateTo',
'NumerOfDays',
'travelPlaceFrom',
'travelPlaceTo',
'costPerDay',
'tax',
'remainingAmount',
'HCIName',
'HCIDate',
'HCIAddress',
'vehileCompany_id',
'vehileCompanyName',
'vehicleCompanyDate',
'vehicleCompanyAddress',
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
        }