<?php
        namespace App\Models\Officemanagement;

        use App\Models\User;
        use Illuminate\Database\Eloquent\Casts\Attribute;
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        use App\Traits\CreatedUpdatedBy;

        class Purchaseservice extends Model
        {
            use HasFactory, CreatedUpdatedBy;

            protected $table = 'tbl_purchaseservice';
            protected $primaryKey = 'prchaseService_id';
            public $timestamps = true;
            protected $fillable =[
                'purchaseTitle',
'contractName',
'referenceNumber',
'date',
'vatNumber',
'address',
'contact',
'serialNumber',
'descriptions',
'units',
'quantity',
'rate',
'amount',
'createdOn',
'createdBy',
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