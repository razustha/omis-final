<form action="{{ route('work.tasks.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">


        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_workprojects', 'workProject_id', 'projectTitle', '', '', 'Projects') !!}
        </div>
        {{-- <div class="col-lg-6">{{ createText('tasksAssignedTo', 'tasksAssignedTo', 'Assigned To') }}
        </div> --}}

        <div class="col-lg-6">

            {{ createLabel('Assigned Employee For Task', 'form-label col-form-label', 'Assigned Employee for Task') }}
            <select name="employee_id[]" class="form-control employee_id" multiple>

            </select>


        </div>
        <div class="col-lg-6">{{ createText('tasksName', 'tasksName', 'Tasks Title') }}
        </div>
        <div class="col-lg-3">{{ createDate('tasksStartDate', 'tasksStartDate', 'Start Date') }}
        </div>
        <div class="col-lg-3">{{ createDate('tasksEndDate', 'tasksEndDate', 'End Date') }}
        </div>
        {{-- <div class="col-lg-6">{{ createText('companyName', 'companyName', 'Company Name') }}
        </div> --}}
        <div class="col-lg-12">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-12">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'Remarks', '', '') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
    </div>
</form>

<script>
    // Fetch Manager according to department
    $('#workProject_id').on('change', function(e) {
        e.preventDefault();
        var project_id = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('work.tasks.getAssignedEmployee') }}",
            data: {
                'project_id': project_id
            },
            dataType: "json",
            success: function(response) {
                // console.log(response);
                $('.employee_id').html('<option value="#" disabled>Select Employee</option>');
                $.each(response.message, function(key, value) {
                    $('.employee_id').append('<option value=' + value.employee_id + '>' +
                        value.employee.full_name + '</option>');
                });
            }
        });
    });

    $('.employee_id').select2({
        tags: true
    });
</script>
