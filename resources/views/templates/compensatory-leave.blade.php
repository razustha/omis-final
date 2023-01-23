
@include("partials.header")
@include("partials.sidebar")
<div class="nk-content">
               
                        <div class="nk-content-inner">
    <div class="nk-content-body">
                            <div class="card h-100">
                  <div class="card-body">
        <div class="container">
            <form action="" class="row gy-3 mt-2">

                <div class="form-group col-md-4">
                    <?php
 createLabel("fullName", "", "Full Name")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("text", "fullName", "fullName", "", "form-control", "", "Full Name") ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <?php
 createLabel("position", "", "Position")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("text", "position", "position", "", "form-control", "", "position") ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <?php
 createLabel("Department", "", "Department")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("text", "Department", "Department", "", "form-control", "", "Department") ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <?php
 createLabel("workingDay", "", "Working Day")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("text/number", "workingDay", "workingDay", "", "form-control", "", "Working Day") ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <?php
 createLabel("workingDate", "", "Working Date")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("date", "workingDate", "workingDate", "", "form-control", "", "Working Date") ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <?php
 createLabel("holidayReason", "", "Reason Of Holiday")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("text", "holidayReason", "holidayReason", "", "form-control", "", "Reason Of Holiday") ?>
                    </div>
                </div>
                <h5>Working Time</h5>
                <div class="form-group col-md-6">
                    <?php
 createLabel("from", "", "From")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("text/number", "from", "from", "", "form-control", "", "From") ?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <?php
 createLabel("to", "", "To")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("text/number", "to", "to", "", "form-control", "", "To") ?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <?php
 createLabel("workReason", "", "Reason For Work")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("text", "workReason", "workReason", "", "form-control", "", "Reason For Work") ?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <?php
 createLabel("recommendation", "", "Recommendation")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("text", "recommendation", "recommendation", "", "form-control", "", "Recommendation") ?>
                    </div>
                </div>
                <h5>Verified By</h5>
                <div class="form-group col-md-6">
                    <?php
 createLabel("VerificationUnit", "", "Full Name")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("text", "VerificationUnit", "VerificationUnit", "", "form-control", "", "Full Name") ?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <?php
 createLabel("verifiedDate", "", "Date")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("date", "verifiedDate", "verifiedDate", "", "form-control", "", "") ?>
                    </div>
                </div>
                <h5>Approved By</h5>
                <div class="form-group col-md-6">
                    <?php
 createLabel("approvedBy", "", "Full Name")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("text", "approvedBy", "approvedBy", "", "form-control", "", "Full Name") ?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <?php
 createLabel("approvedDate", "", "Date")
     ?>
                    <div class="form-control-wrap">
                        <?php createInput("date", "approvedDate", "approvedDate", "", "form-control", "", "") ?>
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
@include("partials.footer")