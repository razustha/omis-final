<form action="{{ route('setting.permission.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{ createText('name', 'name', 'Permission') }}
        </div>
        
        <div class="col-lg-6">{{ createText('guard_name', 'guard_name', 'Guard Name') }}
        </div>
        <div class="col-lg-6">{{ createText('group_name', 'group_name', 'Group Name') }}
        </div>
        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        
        <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>
