<form action="{{ route('setting.users.store') }}" method="post" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            {{ customCreateSelect('employee_id', 'employee_id', '', 'Select Employee', getEmployeeHasNoLogin()->pluck('full_name','employee_id')->toArray(), '') }}
        </div>
        <div class="col-lg-6">
            {{ customCreateSelect('role_id','role_id','','User Role',getRoles()->pluck('name', 'id')->toArray()) }}
        </div>

        <div class="col-lg-4">{{ createPassword('password', 'password', 'password') }}
        </div>

        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
    </div>
</form>
