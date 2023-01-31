<form action="{{ route('hr.mangeholiday.update', [$data->mangeHoliday_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{{ createText('companyName_id', 'companyName_id', 'Company Id', '', $data->companyName_id) }}
        </div>

        <div class="col-lg-6">{{ createText('title', 'title', 'Holiday Title', '', $data->title) }}
        </div>
        <div class="col-lg-6">{{ createDate('eventStartDate', 'eventStartDate', 'Start Date', '', $data->eventStartDate) }}
        </div>
        <div class="col-lg-6">{{ createDate('eventEndDate', 'eventEndDate', 'End Date', '', $data->eventEndDate) }}
        </div>
        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
        </div>
        <div class="col-lg-6">
            {{ createLabel('holidayDescription', 'form-label col-form-label', 'Description') }}{{ createTextArea('holidayDescription', 'holidayDescription', 'HolidayDescription', '', $data->holidayDescription) }}

        </div>
        <div class="col-lg-6">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Submit'); ?>
        </div>
</form>
