<form action="{{ route('setting.users.update', [$data->id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-lg-6">
            {{ customCreateSelect('user_type', 'user_type', '', 'User Type', ['SUPER ADMIN' => 'SUPER ADMIN', 'COMPANY' => 'COMPANY', 'EMPLOYEE' => 'EMPLOYEE', 'SUPER EMPLOYEE' => 'SUPER EMPLOYEE'], $data->user_type) }}
        </div>
        <div class="col-lg-6">
            {{ customCreateSelect('role_id','role_id','','User Role',getRoles()->pluck('name', 'id')->toArray()) }}
        </div>

        <div class="col-lg-4">{{ createText('name', 'name', 'Name', '', $data->name) }}
        </div>
        <div class="col-lg-4">{{ createText('mobile', 'mobile', 'Mobile', '', $data->mobile) }}
        </div>
        <div class="col-lg-4">{{ createText('email', 'email', 'Email', '', $data->email) }}
        </div>
        
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Submit'); ?>
        </div>
</form>
