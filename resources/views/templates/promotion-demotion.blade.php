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
                <?php createLabel("Company", "", "Select Company") ?>
                <?php createSelect("company", "company", "", "", array('Bibhuti', 'leapfrog', 'infoDev')); ?>

            </div>
        <div class="form-control-wrap col-md-6">
                <?php createLabel("employeeName", "", "Employee") ?>
                <?php createInput("text", "employeeName", "employeeName", "form-label", "", "", "Employee") ?>
            </div>
        <div class="form-control-wrap col-md-6">
                <?php createLabel("title", "", "Title") ?>
                <?php createInput("text", "title", "title", "form-label", "", "", "Title") ?>
            </div>
        <div class="form-control-wrap col-md-6">
                <?php createLabel("promotionDate", "", "Promotion Date") ?>
                <?php createInput("date", "promotionDate", "promotionDate", "form-label", "", "", "") ?>
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