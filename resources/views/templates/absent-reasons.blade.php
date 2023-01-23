@include("partials.header")
@include("partials.sidebar")
<div class="nk-content">
                    <div class="container">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">


                                <div class="nk-block">
                            <div class="card h-100">
                               <div class="card-body">
<div class="container">
    <form action="" class="row gy-3 mt-2">
        <div class="form-control-wrap col-md-6">
            <?php createLabel("name", "", "Name") ?>
            <?php createInput("text", "name", "name", "form-label", "", "", "Name") ?>
        </div>
        <div class="form-control-wrap col-md-6">
            <?php createLabel("designation", "", "Designation") ?>
            <?php createInput("text", "designation", "designation", "form-label", "", "", "Designation") ?>
        </div>

        <div class="form-control-wrap col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        
                            <th>
                                <?php createLabel("", "", "Date") ?>
                            </th>
                            <th>
                                <?php createLabel("", "", "Absence for - Day") ?>
                            </th>

                            <th>
                                <?php createLabel("", "", "Approved By") ?>
                            </th>
                            <th>
                                <?php createLabel("", "", "Reason for Absence") ?>
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                         
                            <td>
                                <?php createInput("date", "dateAbsence", "dateAbsence", "", "", "", ""); ?>
                            </td>
                            <td>
                                <?php createInput("text", "dayAbsence", "dayAbsence", "", "", "", ""); ?>
                            </td>
                            <td>
                                <?php createInput("text", "approvedBy", "approvedBy", "", "", "", ""); ?>
                            </td>
                            <td>
                                <?php createTextarea("","reasonAbsence","3",""); ?>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="7">
                                <?php createLabel("","","REMARKS : ")?>
                                <?php createTextarea("","remarks","","")?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="form-control-wrap col-md-4">
            <?php createLabel("submittedBy", "", "Submitted By") ?>
            <?php createInput("text", "submittedBy", "submittedBy", "form-label", "", "", "Submitted By") ?>
        </div>
        <div class="form-control-wrap col-md-4">
            <?php createLabel("checkedBy", "", "Checked By") ?>
            <?php createInput("text", "checkedBy", "checkedBy", "form-label", "", "", "Checked By") ?>
        </div>
        <div class="form-control-wrap col-md-4">
            <?php createLabel("approvedBy", "", "Approved By") ?>
            <?php createInput("text", "approvedBy", "approvedBy", "form-label", "", "", "Approved By") ?>
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
</div>
@include("partials.footer")