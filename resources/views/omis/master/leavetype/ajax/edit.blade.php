        <form action="{{ route('master.leavetype.update', [$data->leavetype_id]) }}" id="updateCustomForm">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">{{ createText('leaveType', 'leaveType', 'Leave Type', '', $data->leaveType) }}
                </div>

                <div class="col-lg-6">
                    {{ createText('leaveCount', 'leaveCount', 'Number Of Leave(Annually)', '', $data->leaveCount) }}
                </div>
                {{-- <div class="col-lg-6">
                    {{ createText('monthlyLimit', 'monthlyLimit', 'Monthly Limit', '', $data->monthlyLimit) }}
                </div> --}}
                <div class="col-lg-6">{{ createText('colorCode', 'colorCode', 'Color Code', '', $data->colorCode) }}
                </div>
                {{-- <div class="col-lg-4">
                    {{ createText('assignEmployee', 'assignEmployee', 'Assign Employee', '', $data->assignEmployee) }}
                </div> --}}
                <div class="col-lg-6">
                    {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
                </div>
                <div class="col-lg-12">
                    {{ createLabel('remarks', 'form-label col-from-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'remarks', '', $data->remarks) }}
                </div>
                <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Update'); ?>
                </div>
        </form>
