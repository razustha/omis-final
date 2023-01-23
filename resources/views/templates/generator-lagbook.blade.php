
@include("partials.header")
@include("partials.sidebar")
<div class="nk-content">
               
                        <div class="nk-content-inner">
    <div class="nk-content-body">
                            <div class="card h-100">
                  <div class="card-body">
        <div class="container">
            <form action="" class="row gy-3 mt-2">



<div class="form-group col-12">
            <?php createLabel("title", "", "Title") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "title", "title", "", "form-control", "", "Title") ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <?php createLabel("subTitle", "", "Sub Title") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "subTitle", "subTitle", "", "form-control", "", "Sub Title") ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <?php createLabel("pageNumber", "", "Page Number") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "pageNumber", "pageNumber", "", "form-control", "", "Page Number") ?>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>

                <tr>


                    <th class="text-center">
                        <?php createLabel("checkedDate", "", "Date Of Checked") ?>

                    </th>
                    <th class="text-center">
                        <?php createLabel("fullName", "", "Full Name") ?>


                    </th>
                    <th class="text-center">
                        <?php createLabel("purpose", "", "Purpose") ?>

                    </th>
                    <th class="text-center">
                        <table class="table table-bordered">
                            <tr class="text-center">
                                <td colspan="2">
                                    <?php createLabel("", "", "Time") ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php createLabel("from", "", "From") ?>
                                </td>
                                <td>
                                    <?php createLabel("to", "", "To") ?>
                                </td>
                            </tr>

                        </table>

                    </th>
                    <th class="text-center">
                        <?php createLabel("totalTime", "", "Total Time") ?>


                    </th>
                    <th class="text-center">
                        <?php createLabel("dieselConsumed", "", "Diesel Consumed") ?>

                    </th>
                    <th>
                        <?php createLabel("mobileConsumed", "", "Mobile Consumed") ?>

                    </th>
                    <th class="text-center">
                        <?php createLabel("userSign", "", "User Sign") ?>

                    </th>
                    <th class="text-center">
                        <?php createLabel("servicingDate", "", "Servicing Date") ?>

                    </th>
                    <th class="text-center">
                        <?php createLabel("remarks", "", "Remarks") ?>

                    </th>
                </tr>
                <tr>

                    <td>
                        <?php createInput("date", "checkedDate", "date", "", "form-control", "", "") ?>
                    </td>
                    <td>
                        <?php createInput("text", "fullName", "fullName", "", "form-control", "", "") ?>

                    </td>
                    <td>
                        <?php createInput("text", "purpose", "purpose", "", "form-control", "", "") ?>

                    </td>
                    <td>
                        <table>
                            <tr class="d-flex">
                                <td>
                                    <?php createInput("text", "from", "from", "", "form-control", "", "") ?>
                                </td>

                                <td>
                                    <?php createInput("text", "to", "to", "", "form-control", "", "") ?>
                                </td>

                        </table>
                    </td>
                    <td>
                        <?php createInput("text", "totalTime", "totalTime", "", "form-control", "", "") ?>

                    </td>
                    <td>
                        <?php createInput("text/number", "dieselConsumed", "dieselConsumed", "", "form-control", "", "") ?>

                    </td>
                    <td>
                        <?php createInput("text/number", "mobileConsumed", "mobileConsumed", "", "form-control", "", "") ?>

                    </td>
                    <td>
                        <?php createInput("text", "userSign", "userSign", "", "form-control", "", "") ?>

                    </td>
                    <td>
                        <?php createInput("date", "servicingDate", "servicingDate", "", "form-control", "", "") ?>

                    </td>
                    <td>
                        <?php createInput("text", "remarks", "remarks", "", "form-control", "", "") ?>

                    </td>
                </tr>
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