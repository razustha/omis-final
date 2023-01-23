




@include("partials.header")
@include("partials.sidebar")

<div class="nk-content">
                    <div class="container">
                        <div class="nk-content-inner">
    <div class="nk-content-body">
                            <div class="card h-100">
                       <div class="card-body">
        <div class="container">
        <form action="" class="row gy-3 mt-2">

<div class="form-group col-md-6">
  <?php createLabel("employee", "", "Employee Name")?>
    <div class="form-control-wrap">
    <?php createInput("text","employee", "employee", "", "form-control", "", "Employee Name")?>

    </div></div>
<div class="form-group col-md-6">
  <?php createLabel("leaveType", "", "Leave Type")?>
    <div class="form-control-wrap">
        <?php createInput("text","leaveType", "leaveType", "", "form-control", "", "Leave Type")?>
    </div>
</div>
<div class="form-group col-md-6">
  <?php createLabel("company", "", "Company")?>
    <div class="form-control-wrap">
    <?php createInput("text","company", "company", "", "form-control", "", "Leave Type")?>

    </div>
</div>
<div class="form-group col-md-6">
  <?php createLabel("department", "", "Department")?>
    <div class="form-control-wrap">
    <?php createInput("text","department", "department", "", "form-control", "", "Department")?>

    </div>
</div>


<div class="form-group col-md-4">
  <?php createLabel("startDate", "", "Start Date")?>
    <div class="form-control-wrap">
    <?php createInput("date","startDate", "startDate", "", "form-control", "", "")?>

    </div>
</div>
<div class="form-group col-md-4">
  <?php createLabel("endDate", "", "End Date")?>
    <div class="form-control-wrap">
    <?php createInput("date","endDate", "endDate", "", "form-control", "", "")?>

    </div>
</div>
<div class="form-group col-md-4">
  <?php createLabel("totalDays", "", "Total Days")?>
    <div class="form-control-wrap">
    <?php createInput("text/number","totalDays", "totalDays", "", "form-control", "", "")?>

    </div>
</div>
<div class="form-group col-12">
  <?php createLabel("remarks", "", "Remarks")?>
    <div class="form-control-wrap">
  <?php createTextarea("form-control", "remarks", "", "")?>
    </div>
</div>
<div class="form-control-wrap col-md-12">
        <?php createButton("btn-primary","","Submit")?>
        </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@include("partials.footer")