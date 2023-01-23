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
                    <div class="form-control-wrap col-md-3">
                        <?php createLabel("travelDate", "", "Date of Travel") ?>
                        <?php createInput("text", "travelDate", "travelDate", "form-label", "", "", "Travel Date") ?>
                    </div>
                    <div class="form-control-wrap col-md-3">
                        <?php createLabel("placeVisit", "", "Place visited") ?>
                        <?php createInput("text", "placeVisit", "placeVisit", "form-label", "", "", "Place Visit") ?>
                    </div>
                    <div class="form-control-wrap col-md-3">
                        <?php createLabel("pickupTime", "", "Pickup Time") ?>
                        <?php createInput("time", "pickupTime", "pickupTime", "form-label", "", "", "Pickup Time") ?>
                    </div>
                    <div class="form-control-wrap col-md-3">
                        <?php createLabel("dropTime", "", "Drop Time") ?>
                        <?php createInput("time", "dropTime", "dropTime", "form-label", "", "", "Drop Time") ?>
                    </div>
                    <div class="form-control-wrap col-md-12">
                        <?php createLabel("purpose","","Purpose of visit")?>
                        <!-- <label for="exampleFormControlTextarea8" class="form-label">Subject</label> -->
                        <?php createTextarea("","purpose","","")?>
                    </div>
                    <div class="form-control-wrap col-md-4">
                        <?php createLabel("driverName", "", "Vehicle Driver's Name") ?>
                        <?php createInput("text", "dropTime", "dropTime", "form-label", "", "", "Drop Time") ?>
                    </div>
                    <div class="form-control-wrap col-md-4">
                        <?php createLabel("staffName", "", "Travelling Staff Name") ?>
                        <?php createInput("text", "staffName", "staffName", "form-label", "", "", "Staff Name") ?>
                    </div>
                    <div class="form-control-wrap col-md-4">
                        <?php createLabel("staffPosition", "", "Staff Position") ?>
                        <?php createInput("text", "staffPosition", "staffPosition", "form-label", "", "", "Staff Position") ?>
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