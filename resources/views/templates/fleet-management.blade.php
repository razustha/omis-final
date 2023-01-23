
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
            <?php createLabel("lesseeName", "", "Lessee Name") ?>
            <?php createInput("text", "lesseeName", "lesseeName", "form-label", "", "", "Lessee Name") ?>
        </div>
        <div class="form-control-wrap col-md-6">
            <?php createLabel("lesseeAddress", "", "Lessee Address") ?>
            <?php createInput("text", "lesseeAddress", "lesseeAddress", "form-label", "", "", "Lessee Address") ?>
        </div>
        <div class="form-control-wrap col-md-6">
            <?php createLabel("lessorName", "", "Lessor Name") ?>
            <?php createInput("text", "lessorName", "lessorName", "form-label", "", "", "Lessor Name") ?>
        </div>
        <div class="form-control-wrap col-md-6">
            <?php createLabel("lessorContact", "", "Lessor Contact") ?>
            <?php createInput("text", "lessorContact", "lessorContact", "form-label", "", "", "Lessor Contact") ?>
        </div>

        <h5>Vehicle Details</h5>
        <div class="form-control-wrap col-md-6">
            <?php createLabel("vehicleType", "", "Vehicle Type") ?>
            <?php createSelect("vehicleType", "vehicleType", "", "vehicleType", array('Jeep', 'Bus', 'Heavy Truck', 'Micro Van')) ?>
        </div>
        <div class="form-control-wrap col-md-6">
            <?php createLabel("vehicleNo", "", "Vehicle No.") ?>
            <?php createInput("text", "vehicleNo", "vehicleNo", "form-label", "", "", "vehicle No.") ?>
        </div>

        <h5>Driver Details</h5>
        <div class="form-control-wrap col-md-4">
            <?php createLabel("driverName", "", "Name") ?>
            <?php createInput("text", "driverName", "driverName", "form-label", "", "", "Driver Name") ?>
        </div>
        <div class="form-control-wrap col-md-4">
            <?php createLabel("driverContact", "", "Contact") ?>
            <?php createInput("text", "driverContact", "driverContact", "form-label", "", "", "Driver Contact") ?>
        </div>
        <div class="form-control-wrap col-md-4">
            <?php createLabel("driverAddress", "", "Address") ?>
            <?php createInput("text", "driverAddress", "driverAddress", "form-label", "", "", "Driver Address") ?>
        </div>

        <h5>Travelling People/Staff Details</h5>
        <div class="form-control-wrap col-md-3">
            <?php createLabel("orginizationName", "", "Orginization Name") ?>
            <?php createInput("text", "orginizationName", "orginizationName", "form-label", "", "", "Originization Name") ?>
        </div>

        <div class="form-control-wrap col-md-3">
            <?php createLabel("staffName", "", "Staff Name") ?>
            <?php createInput("text", "staffName", "staffName", "form-label", "", "", "Staff Name") ?>
        </div>

        <div class="form-control-wrap col-md-3">
            <?php createLabel("staffIdentity", "", "Staff Identity") ?>
            <?php createInput("file", "staffIdentity", "staffIdentity", "form-label", "", "", "Originization Name") ?>
        </div>

        <div class="form-control-wrap col-md-3">
            <?php createLabel("totalPeople", "", "Total No. of People") ?>
            <?php createInput("text", "totalPeople", "totalPeople", "form-label", "", "", "Total People") ?>
        </div>

        <h5>Travel Date</h5>
        <div class="form-control-wrap col-md-4">
            <?php createLabel("travelDateFrom", "", "From") ?>
            <?php createInput("date", "travelDateFrom", "travelDateFrom", "form-label", "", "", "From") ?>
        </div>

        <div class="form-control-wrap col-md-4">
            <?php createLabel("travelDateTo", "", "To") ?>
            <?php createInput("date", "travelDateTo", "travelDateTo", "form-label", "", "", "To") ?>
        </div>

        <div class="col-md-4">
        <?php createLabel("totalDays", "", "No. of Days") ?>
        <div class="input-group">
        <?php createInput("text","","daysNo","daysNo","","","No. of Days")?>
        <div class="input-group-append">
            <span class="input-group-text">Days</span>
        </div>
        </div>
        </div>

        <h5>Travel Place</h5>
        <div class="form-control-wrap col-md-3">
            <?php createLabel("travelPlaceFrom", "", "From") ?>
            <?php createInput("text", "travelDateFrom", "travelDateFrom", "form-label", "", "", "From") ?>
        </div>

        <div class="form-control-wrap col-md-3">
            <?php createLabel("travelPlaceTo", "", "To") ?>
            <?php createInput("text", "travelDateTo", "travelDateTo", "form-label", "", "", "To") ?>
        </div>

        
        <div class="col-md-2">
        <?php createLabel("costPerDay", "", "Cost Per day") ?>
        <div class="input-group">
        <?php createInput("text","","costPerDay","costPerDay","","","Cost Per Day")?>
        <div class="input-group-append">
            <span class="input-group-text">Rs</span>
        </div>
        </div>
        </div>

        <div class="form-control-wrap col-md-2">
            <?php createLabel("tax", "", "Tax Ammount") ?>
            <div class="input-group">
            <?php createInput("text", "tax", "tax", "form-label", "", "", "Tax") ?>
            <div class="input-group-append">
            <span class="input-group-text">Rs</span>
        </div>
        </div>
        </div>

        <div class="form-control-wrap col-md-2">
            <?php createLabel("lessorAmmount", "", "Remaining Ammount") ?>
            <div class="input-group">
            <?php createInput("text", "lessorAmmount", "lessorAmmount", "form-label", "", "", "Ammount") ?>
            <div class="input-group-append">
            <span class="input-group-text">Rs</span>
        </div>
        </div>
        </div>

        <div class="form-control-wrap col-md-6">
        <h5>On Behalf Of Hci</h5>
        <?php createLabel("HCIName", "", "Name") ?>
            <?php createInput("text", "HCIName", "HCIName", "form-label", "", "", "Name") ?>
            <?php createLabel("HCIDate", "", "Date") ?>
            <?php createInput("date", "HCIDate", "HCIDate", "form-label", "", "", "Date") ?>
            <?php createLabel("HCIAddress", "", "Address") ?>
            <?php createInput("text", "HCIAddress", "HCIAddress", "form-label", "", "", "Address") ?>
        </div>
        <div class="form-control-wrap col-md-6">
        <h5>On behalf of Vehicle Company</h5>
        <?php createLabel("vehiclecompanyName", "", "Name") ?>
            <?php createInput("text", "vehiclecompanyName", "vehiclecompanyName", "form-label", "", "", "Name") ?>
            <?php createLabel("vehiclecompanyDate", "", "Date") ?>
            <?php createInput("date", "vehiclecompanyDate", "vehiclecompanyDate", "form-label", "", "", "Date") ?>
            <?php createLabel("vehiclecompanyAddress", "", "Address") ?>
            <?php createInput("text", "vehiclecompanyAddress", "vehiclecompanyAddress", "form-label", "", "", "Address") ?>
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