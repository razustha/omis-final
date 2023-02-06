<form action="{{ route('work.workprojects.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{ createText('projectTitle', 'projectTitle', 'Project Title') }}
        </div>
        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_department', 'department_id', 'departmentName', '','','Department') !!}
        </div>
        {{-- <div class="col-lg-6">{{ createText('projectStartClient', 'projectStartClient', 'Project Client') }}
        </div> --}}
        <div class="col-lg-6">
            {{ createLabel('Assigned Employee', 'form-label col-form-label', 'Assigned Employee') }}
            <select name="employee_id[]" class="form-control employee_id" multiple>

            </select>
        </div>
        <div class="col-lg-3">{{ createDate('projectStartDate', 'projectStartDate', 'Start Date') }}
        </div>
        <div class="col-lg-3">{{ createDate('projectEndDate', 'projectEndDate', 'End Date') }}
        </div>
        <div class="col-lg-6">{{ createText('projectPriority', 'projectPriority', 'Project Priority') }}
        </div>
        {{-- <div class="col-lg-6">{{ createText('companyName_id', 'companyName_id', 'Company Id') }}
        </div> --}}





        <div class="col-lg-6">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>

        <div class="col-lg-12">
            {{ createLabel('projectDescription', 'for-label col-form-label', 'Description') }}{{ createTextArea('projectDescription', 'projectDescription', 'ProjectDescription', '', '') }}

        </div>
        <div class="col-lg-12">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'Remarks', '', '') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
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
                    $('.employee_id').html('<option value="#" disabled>Select Employee</option>');
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
