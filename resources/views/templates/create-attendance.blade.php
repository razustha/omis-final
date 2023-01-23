@include("partials.header")
@include("partials.sidebar")

<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="container">
                        <div class="row">


                        <div class="form-control-wrap col-md-4">
                            <?php createLabel("employeeName", "", "Employee Name") ?>
                            <?php createInput("text", "employeeName", "employeeName", "form-label", "", "", "Employee Name") ?>
                        </div>

                        <div class="form-control-wrap col-md-4">
                            <?php createLabel("employeePosition", "", "Employee Position") ?>
                            <?php createInput("text", "employeePosition", "employeePosition", "form-label", "", "", "Employee Position") ?>
                        </div>

                        <div class="form-control-wrap col-md-4">
                            <?php createLabel("todayDate", "", "Date") ?>
                            <?php createInput("date", "todayDate", "todayDate", "form-label", "", "", "Date") ?>
                        </div>

                            <div class="col-md-6"> <label for="timePicker1" class="form-label">Clock In</label>
                                <div class="form-control-wrap"> <input placeholder="hh:mm" type="text"
                                        class="form-control js-timepicker" autocomplete="off" id="timePicker1"> 
                                </div>
                            </div>

                            <div class="col-md-6"> <label for="timePicker1" class="form-label">Clock Out</label>
                                <div class="form-control-wrap"> <input placeholder="hh:mm" type="text"
                                        class="form-control js-timepicker" autocomplete="off" id="timePicker1"> 
                                </div>
                            </div>

                            <div class="form-control-wrap col-md-12 mt-3">
                                <?php createButton("btn-primary","","Submit")?>
                            </div>

                            </div>
         

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                            @include("partials.footer")