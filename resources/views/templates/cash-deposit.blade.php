

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

   <div class="form-group col-md-6">
            <?php
 createLabel("mainTitle", "", "Title")
     ?>
            <div class="form-control-wrap">
                <?php createInput("text", "mainTitle", "mainTitle", "", "form-control", "", "Title") ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <?php createLabel("date", "", "Date") ?>
            <div class="form-control-wrap">
                <?php createInput("date", "date", "date", "", "form-control", "", "") ?>
            </div>
        </div>
        <div class="form-group">
            <?php createLabel("amountWords", "", "Amount In Words") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "amountWords", "amountWords", "", "form-control", "", "Amount In Words") ?>
            </div>
        </div>
        <h5>Denomination & Amount</h5>
        <div class="form-group col-md-4">
            <?php createLabel("thousand", "", "1000X") ?>
            <div class="form-control-wrap">
                <?php createInput("text/number", "thousand", "thousand", "", "form-control", "", "1000X") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php createLabel("fiveHundred", "", "500X") ?>
            <div class="form-control-wrap">
                <?php createInput("text/number", "fiveHundred", "fiveHundred", "", "form-control", "", "500X") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php createLabel("hundred", "", "100X") ?>
            <div class="form-control-wrap">
                <?php createInput("text/number", "hundred", "hundred", "", "form-control", "", "100X") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php createLabel("fifty", "", "50X") ?>
            <div class="form-control-wrap">
                <?php createInput("text/number", "fifty", "fifty", "", "form-control", "", "50X") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php createLabel("twenty", "", "20X") ?>
            <div class="form-control-wrap">
                <?php createInput("text/number", "twenty", "twenty", "", "form-control", "", "20X") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php createLabel("ten", "", "10X") ?>
            <div class="form-control-wrap">
                <?php createInput("text/number", "ten", "ten", "", "form-control", "", "10X") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php createLabel("five", "", "5X") ?>
            <div class="form-control-wrap">
                <?php createInput("text/number", "five", "five", "", "form-control", "", "5X") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php createLabel("two", "", "2X") ?>
            <div class="form-control-wrap">
                <?php createInput("text/number", "two", "two", "", "form-control", "", "2X") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php createLabel("one", "", "1X") ?>
            <div class="form-control-wrap">
                <?php createInput("text/number", "one", "one", "", "form-control", "", "1X") ?>
            </div>
        </div>
        <h5>Declared By</h5>
        <div class="form-group col-md-4">
            <?php createLabel("fullName", "", "Full Name") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "fullName", "fullName", "", "form-control", "", "Full Name") ?>

            </div>
        </div>
        <div class="form-group col-md-4">
            <?php createLabel("position", "", "Position") ?>
            <div class="form-control-wrap">
                <!-- <input type="text" class="form-control" id="declaredposition" name="declaredposition" placeholder="declaredposition">  -->
                <?php createInput("text", "position", "position", "", "form-control", "", "Position") ?>

            </div>
        </div>
        <div class="form-group col-md-4">
            <?php createLabel("declaredDate", "", "Date") ?>
            <div class="form-control-wrap">
                <?php createInput("date", "declaredDate", "declaredDate", "", "form-control", "", "") ?>

            </div>
        </div>
        <h5>Approved By</h5>
        <div class="form-group col-md-4">
            <?php createLabel("approvedName", "", "Full Name") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "approvedName", "approvedName", "", "form-control", "", "Full Name") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php createLabel("approvedPosition", "", "Position") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "approvedPosition", "approvedPosition", "", "form-control", "", "Position") ?>
            </div>
        </div>

        <div class="form-group col-md-4">
            <?php createLabel("approvedDate", "", "Date") ?>
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
</div>
@include("partials.footer")