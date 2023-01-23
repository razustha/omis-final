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
                        <?php createLabel("riderName", "", "Name") ?>
                        <?php createInput("text", "riderName", "riderName", "form-label", "", "", "Rider Name") ?>
                    </div>
                    <div class="form-control-wrap col-md-4">
                        <?php createLabel("vehicleNumber", "", "Vehicle Number") ?>
                        <?php createInput("text", "vehicleNumber", "vehicleNumber", "form-label", "", "", "Vehicle Number") ?>
                    </div>
                    <div class="form-control-wrap col-md-4">
                        <?php createLabel("vehicleModel ", "", "Vehicle Model") ?>
                        <?php createInput("text", "vehicleModel", "vehicleModel", "form-label", "", "", "Vehicle Model") ?>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-sm-1">Date</th>
                                    <th scope="col" class="col">In-Time</th>
                                    <th scope="col" class="col">Out-Time</th>
                                    <th scope="col" class="col-sm-2">From</th>
                                    <th scope="col" class="col-sm-2">To</th>
                                    <th scope="col" class="col">Start km</th>
                                    <th scope="col" class="col">End km</th>
                                    <th scope="col" class="col">Difference km</th>
                                    <th scope="col" class="col-sm-2">Purpose</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
                                        <?php createInput("date","date","date","form-control","","","Date")?>
                                    </th>
                                    <th>
                                        <?php createInput("time","arrivalTime","arrivalTime","form-control","","","")?>
                                    </th>
                                    <th>
                                        <?php createInput("time","departureTime","departureTime","form-control","","","")?>
                                    </th>
                                    <th>
                                        <?php createInput("text","from","from","form-control","","","From")?>
                                    </th>
                                    <th>
                                        <?php createInput("text","to","to","form-control","","","To")?>
                                    </th>
                                    <th>
                                        <?php createInput("text","startKm","startKm","form-control","","","")?>
                                    </th>
                                    <th>
                                        <?php createInput("text","endKm","endKm","form-control","","","")?>
                                    </th>
                                    <th>
                                        <?php createInput("text","diffKm","diffKm","form-control","","","")?>
                                    </th>
                                    <th>
                                        <?php createInput("text","purpose","purpose","form-control","","","Purpose")?>
                                    </th>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <?php createLabel("totalKm","","Total KM")?>
                                    </td>
                                    <td colspan="2">
                                        <?php createInput("text","totalKm","totalKM","form-control","","","Total KM")?>
                                    </td>
                                </tr>
                            </tbody>
                   
                    </table>
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