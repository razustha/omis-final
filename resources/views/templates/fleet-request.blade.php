@include("partials.header")
@include("partials.sidebar")

<div class="nk-content">
                        <div class="nk-content-inner">
    <div class="nk-content-body">
                            <div class="card h-100">
                       <div class="card-body">
        <div class="container">
        <form action="" class="row gy-3 mt-2">

            <div class="form-group col-md-6">
                <?php createLabel("ownerName", "", "Owner Name")?>
                  <div class="form-control-wrap">
                  <?php createInput("text","ownerName", "ownerName", "", "form-control", "", "Owner Name")?>
              
                  </div>
              </div>
            <div class="form-group col-md-6">
                <?php createLabel("fleetName", "", "Fleet Name")?>
                  <div class="form-control-wrap">
                  <?php createInput("text","fleetName", "fleetName", "", "form-control", "", "Fleet Name")?>
              
                  </div>
              </div>
            <div class="form-group col-md-4">
                <?php createLabel("modelNumber", "", "Model Number")?>
                  <div class="form-control-wrap">
                  <?php createInput("number","modelNumber", "modelNumber", "", "form-control", "", "Model Number")?>
              
                  </div>
              </div>
            <div class="form-group col-md-4">
                <?php createLabel("numberPlate", "", "Number Plate")?>
                  <div class="form-control-wrap">
                  <?php createInput("text","numberPlate", "numberPlate", "", "form-control", "", "Number Plate")?>
              
                  </div>
              </div>
            <div class="form-group col-md-4">
                <?php createLabel("rootPermit", "", "Root Permit")?>
                  <div class="form-control-wrap">
                  <?php createInput("text","rootPermit", "rootPermit", "", "form-control", "", "Root Permit")?>
              
                  </div>
              </div>
            <div class="form-group col-md-6">
                <?php createLabel("issueDate", "", "Issude Date")?>
                  <div class="form-control-wrap">
                  <?php createInput("date","issueDate", "issueDate", "", "form-control", "", "")?>
              
                  </div>
              </div>
            <div class="form-group col-md-6">
                <?php createLabel("expireDate", "", "Expire Date")?>
                  <div class="form-control-wrap">
                  <?php createInput("date","expireDate", "expireDate", "", "form-control", "", "")?>
              
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