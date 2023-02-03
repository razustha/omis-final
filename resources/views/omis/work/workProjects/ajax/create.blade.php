<form action="{{ route('work.workprojects.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{ createText('projectTitle', 'projectTitle', 'Project Title') }}
        </div>
        <div class="col-lg-6">{{ createText('projectStartClient', 'projectStartClient', 'Project Client') }}
        </div>
        <div class="col-lg-6">{{ createDate('projectStartDate', 'projectStartDate', 'Project Start Date') }}
        </div>
        <div class="col-lg-6">{{ createDate('projectEndDate', 'projectEndDate', 'Project End Date') }}
        </div>
        <div class="col-lg-6">{{ createText('projectPriority', 'projectPriority', 'Project Priority') }}
        </div>
        <div class="col-lg-6">{{ createText('companyName_id', 'companyName_id', 'Company Id') }}
        </div>
        <div class="col-lg-6">{{ createText('assignedEmployees', 'assignedEmployees', 'Assigned Employees') }}
        </div>
        <div class="col-lg-6">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
        </div>
        <div class="col-lg-6">
            {{ createLabel('projectDescription', 'for-label col-form-label', 'Description') }}{{ createTextArea('projectDescription', 'projectDescription', 'ProjectDescription', '', '') }}

        </div>
        <div class="col-lg-6">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'Remarks', '', '') }}
        </div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>
