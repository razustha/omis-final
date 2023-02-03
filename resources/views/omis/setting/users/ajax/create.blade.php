<form action="{{ route('setting.users.store') }}" method="post" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            {{ customCreateSelect('user_type', 'user_type', '', 'User Type', ['SUPER ADMIN' => 'SUPER ADMIN', 'COMPANY' => 'COMPANY', 'EMPLOYEE' => 'EMPLOYEE', 'SUPER EMPLOYEE' => 'SUPER EMPLOYEE'], '') }}
        </div>
        <div class="col-lg-6"> {{customCreateSelect('role_id', 'role_id', '', 'User Role', getRoles()->pluck('name','id')->toArray())}}
        </div>

        <div class="col-lg-4">{{ createText('name', 'name', 'Name') }}
        </div>
        <div class="col-lg-4">{{ createText('mobile', 'mobile', 'Mobile') }}
        </div>
        <div class="col-lg-4">{{ createText('email', 'email', 'Email') }}
        </div>

       
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
    </div>
</form>
