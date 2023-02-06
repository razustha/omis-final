<form action="{{ route('work.workprojects.update', [$data->workProject_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{{ createText('projectTitle', 'projectTitle', 'ProjectTitle', '', $data->projectTitle) }}
        </div>

        <div class="col-lg-6">
            {{ createText('projectStartDate', 'projectStartDate', 'ProjectStartDate', '', $data->projectStartDate) }}
        </div>
        <div class="col-lg-6">
            {{ createText('projectEndDate', 'projectEndDate', 'ProjectEndDate', '', $data->projectEndDate) }}
        </div>
        <div class="col-lg-6">
            {{ createText('projectPriority', 'projectPriority', 'ProjectPriority', '', $data->projectPriority) }}
        </div>

        <div class="col-lg-6">
            {!! getSelectForForeignColumn('tbl_department', 'department_id', 'departmentName', '', $data, 'Deapartment') !!}
        </div>


        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
        </div>

        <div class="col-lg-12">
            <div class="col-lg-12">
                {{ createLabel('Assigned Employee', 'form-label col-form-label', 'Assigned Employee') }}
                <select name="employee_id[]" class="form-control employee_id" multiple>
                    @if($data)
                        @foreach ($data->projectEmployee as $key => $employeeData)
                        <option value="{{$employeeData->employee_id}}" selected>{{$employeeData->employee->full_name}}</option>

                        @endforeach
                    @endif
                </select>
            </div>
        </div>

        <div class="col-lg-6">
            {{ createLabel('projectDescription', 'form-label col-form-label', 'Description') }}{{ createTextArea('projectDescription', 'projectDescription', 'ProjectDescription', '', $data->projectDescription) }}

        </div>
        <div class="col-lg-6">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Update'); ?>
        </div>
</form>

<script>

    // Fetch Manager according to department
    $('#department_id').on('change',function(e){
        e.preventDefault();
        var department_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{route('hr.employee.getDepartmentEmployee')}}",
                data: {
                    'department_id': department_id
                },
                dataType: "json",
                success: function(response){
                    // console.log(response);

                    $.each(response.message, function(key,value){
                        $('.employee_id').append('<option value='+value.employee_id+'>'+value.firstName+''+value.middleName+''+value.lastName+'</option>');
                    });
                }
            });
    });

    $('.employee_id').select2({
        tags: true
    });

</script>
