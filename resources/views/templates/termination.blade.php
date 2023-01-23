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

        <div class="form-control-wrap col-md-6">
                <?php createLabel("Company", "", "Company") ?>
                <?php createSelect("company", "company", "", "", array('Bibhuti', 'leapfrog', 'infoDev')); ?>

            </div>
            <div class="form-control-wrap col-md-6">
                <?php createLabel("terminateTo", "", "Terminate To") ?>
                <?php createInput("text", "terminateTo", "terminateTo", "form-label", "", "", "Terminate To") ?>
            </div>
            <div class="form-control-wrap col-md-4">
                <?php createLabel("terminateType", "", "Termination Type") ?>
                <?php createInput("text", "terminateType", "terminateType", "form-label", "", "", "Termination Type") ?>
            </div>
            <div class="form-control-wrap col-md-4">
                <?php createLabel("terminatedate", "", "Termination Date") ?>
                <?php createInput("date", "terminatedate", "terminatedate", "form-label", "", "", "") ?>
            </div>
            <div class="form-control-wrap col-md-4">
                <?php createLabel("noticeDate", "", "Notice Date") ?>
                <?php createInput("date", "noticeDate", "noticeDate", "form-label", "", "", "") ?>
            </div>

            <div class="form-control-wrap col-12">
                <?php createLabel("description", "", "Descriptions") ?>
<?php createTextarea("form-control", "description", "", "")?>
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