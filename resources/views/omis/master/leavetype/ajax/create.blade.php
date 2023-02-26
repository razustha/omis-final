                <form action="{{ route('master.leavetype.store') }}" id="storeCustomForm">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">{{ createText('leaveType', 'leaveType', 'Leave Type') }}
                        </div>

                        <div class="col-lg-6">{{ createText('leaveCount', 'leaveCount', 'Number Of Leave(Annually)') }}
                        </div>
                        {{-- <div class="col-lg-6">{{ createText('monthlyLimit', 'monthlyLimit', 'Monthly Limit') }}
                        </div> --}}
                        <div class="col-lg-6">
                            {{ createColor('colorCode', 'colorCode', 'Color Code') }}

                            {{-- </div><div class="col-lg-4">{{createText("assignEmployee","assignEmployee","Assign Employee")}} --}}
                        </div>
                        <div class="col-lg-6">
                            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
                        </div>
                        <div class="col-lg-12">
                            {{ createLabel('remarks', 'form-label col-from-label', 'Remarks') }}{{ createTextArea('remarks', '', 'remarks', '', '') }}
                        </div> <br>
                        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
                        </div>
                    </div>
                </form>
