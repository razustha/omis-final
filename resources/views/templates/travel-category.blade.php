
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
        <div class="form-control-wrap col-md-4">
            <?php createLabel("date", "", "Date") ?>
            <?php createInput("date", "date", "date", "form-label", "", "", "Date") ?>
        </div>
        <div class="form-control-wrap col-md-4">
            <?php createLabel("type", "", "Type") ?>
            <?php createInput("text", "type", "type", "form-label", "", "", "Type") ?>
        </div>
        <div class="form-control-wrap col-md-4">
            <?php createLabel("details", "", "Purpose / Details") ?>
            <?php createInput("text", "details", "details", "form-label", "", "", "Details") ?>
        </div>
        <div class="form-control-wrap col-md-3">
            <?php createLabel("ammount", "", "Ammount") ?>
            <div class="input-group mb-3">
            <?php createInput("text", "ammount", "ammount", "form-label", "", "", "Ammount") ?>
                <span class="input-group-text" id="basic-addon2">Rs Only</span>
            </div>
        </div>
        <div class="form-control-wrap col-md-9">
            <?php createLabel("ammountWords", "", "Ammount in Words") ?>
            <div class="input-group mb-3">
            <?php createInput("text", "ammountWords", "ammountWords", "form-label", "", "", "Ammount in words") ?>
                <span class="input-group-text" id="basic-addon2">Rupees</span>
            </div>
        </div>

        <div class="form-control-wrap col-md-4">
            <?php createLabel("claimedBy", "", "Claimed By ") ?>
            <?php createInput("text", "claimedBy", "claimedBy", "form-label", "", "", "Claimed By") ?>
        </div>
        <div class="form-control-wrap col-md-4">
            <?php createLabel("verifiedBy", "", "Verified By") ?>
            <?php createInput("text", "verifiedBy", "verifiedBy", "form-label", "", "", "Verified By") ?>
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
                @include("partials.footer")