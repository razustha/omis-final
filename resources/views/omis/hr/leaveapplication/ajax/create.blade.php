<form action="{{ route('hr.leaveapplication.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">

        <h4>{{ auth()->user()->name }}</h4>

        {{ createHidden('employee_id', 'employee_id', '', 'employee_id', auth()->user()->employee->employee_id) }}
        <div class="col-lg-4">
            <label class="form-label">Leave Type</label>
            <div class="input-group">
                <select name="leavetype_id" id="leaveType"
                    class="form-control @if ($errors->first('leaveType')) is-invalid @endif">
                    <option disabled selected>--Select--</option>
                    @if ($remainingPaidLeave != 0)
                        <option value="0">Casual/Paid ( {{ $remainingPaidLeave }} )</option>
                    @endif
                    @foreach ($leaves as $data)
                        @if ($data['remainingLeave'] != 0)
                            <option value="{{ $data['leavetype_id'] }}">
                                {{ $data['leaveType'] }} ( {{ $data['remainingLeave'] }} )
                            </option>
                        @endif
                    @endforeach
                </select>
                @can('master-leavetype-index')
                    <button class="btn btn-outline-light" type="button" data-bs-toggle="modal"
                        data-bs-target="#leaveTypeModal">
                        Add</button>
                @endcan

            </div>

        </div>
        <div class="col-lg-4">{{ createDate('leaveStart', 'leaveStart', 'Leave Start Date') }}
        </div>
        <div class="col-lg-4">{{ createDate('leaveEnd', 'leaveEnd', 'Leave End Date') }}
        </div>
        <div class="col-ld-4">
            {{customCreateSelect("type","type",'',"Type",['half'=>'Half Day','full'=>'Full Day'])}}
        </div>
        <div class="col-lg-12">

            {{ createLabel('remarks', 'form-label col-form-label', 'Reason') }}
            {{ createTextArea('remarks', 'remarks', 'Reason', '', '') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>

</form>
