<form action="{{ route('work.tasks.update', [$data->tasks_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_workprojects', 'workProject_id', 'projectTitle', '', $data, 'Projects') !!}
        </div>
        <div class="col-lg-6">

            {{ createLabel('Assigned Employee For Task', 'form-label col-form-label', 'Assigned Employee for Task') }}
            <select name="employee_id[]" class="form-control employee_id" multiple>
                @if($data)
                    @foreach ($data->taskAssginedEmployee as $key => $employeeData)
                        <option value="{{$employeeData->employee_id}}" selected>{{$employeeData->employee->full_name}}</option>

                    @endforeach
                @endif
            </select>


        </div>
        <div class="col-lg-6">{{ createText('tasksName', 'tasksName', 'Tasks Title','',$data->tasksName) }}
        </div>
        <div class="col-lg-6">
            {{ createDate('tasksStartDate', 'tasksStartDate', 'TasksStartDate', '', $data->tasksStartDate) }}
        </div>
        <div class="col-lg-6">{{ createDate('tasksEndDate', 'tasksEndDate', 'TasksEndDate', '', $data->tasksEndDate) }}
        </div>



        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
        </div>
        <div class="col-lg-12">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Submit'); ?>
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
