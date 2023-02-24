<form action="{{ route('hr.promotiondemotion.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
    <div class="col-lg-9">{{ createText('promotionTitle', 'promotionTitle', ' Title') }}
        </div>
        <div class="col-lg-3">{{ createDate('promotionDate', 'promotionDate', ' Date', '', '', '') }}
        </div>
        <div class="col-lg-6">
            {{ customCreateSelect('employee_id','employee_id','','Employee',getEmployees()->pluck('full_name', 'employee_id')->toArray()) }}
        </div>
        <div class="col-lg-6">{{ customCreateSelect('type', 'type', '', 'Promotion/Demotion Type', ['promotion' => 'Promotion', 'demotion' => 'Demotion']) }}
        </div>
       

        
        <div class="col-lg-4">
            {!! getSelectForForeignColumn('tbl_department', 'department_id', 'departmentName', '', '', 'Department Name') !!}
        </div>
        <div class="col-lg-4">{{ customCreateSelect('updated_designation_id', 'updated_designation_id', '', 'Select Designation',) }}
        </div>
       
        <div class="col-lg-4">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-6">
            {{ createLabel('description', 'form-label col-form-label', 'Description') }}{{ createTextArea('description', 'description', 'Description', '', '') }}
        </div>
        <div class="col-lg-6">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'remarks', '', '') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>

<script>


    // Fetch Designation
    $('#employee_id').on('change',function(e){
        e.preventDefault();
        var employee_id = $(this).val();
        var type = $('#type').val();
            $.ajax({
                type: "GET",
                url: "{{route('hr.promotiondemotion.getEmployeeDesignation')}}",
                data: {
                    'employee_id': employee_id,
                    'type': type,
                },
                dataType: "json",
                success: function(response){
                    $('#updated_designation_id').html('<option value="#" selected disabled>Select Designation</option>');
                    $.each(response.message, function(key,value){
                        $('#updated_designation_id').append('<option value='+value.designation_id+'>'+value.designationName+'</option>');
                        $("#department_id").val(value.department_id)
                    });

                }
            });
    });

    $('#type').on('change',function(e){
        e.preventDefault();
        var type = $(this).val();
        var employee_id = $('#employee_id').val();
            $.ajax({
                type: "GET",
                url: "{{route('hr.promotiondemotion.getEmployeeDesignation')}}",
                data: {
                    'employee_id': employee_id,
                    'type': type,
                },
                dataType: "json",
                success: function(response){
                    $('#updated_designation_id').html('<option value="#" selected disabled>Select Designation</option>');
                    $.each(response.message, function(key,value){
                        $('#updated_designation_id').append('<option value='+value.designation_id+'>'+value.designationName+'</option>');
                    });
                }
            });
    });
</script>
