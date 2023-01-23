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
                <?php createLabel("titleName", "", "Title")?>
                  <div class="form-control-wrap">
                  <?php createInput("text","titleName", "titleName", "", "form-control", "", "Title")?>
              
                  </div>
              </div>
              <div class="form-group col-md-6">
                <?php createLabel("startDate", "", "Start Date")?>
                  <div class="form-control-wrap">
                  <?php createInput("date","startDate", "startDate", "", "form-control", "", "")?>
              
                  </div>
              </div>
              <div class="form-group col-md-6">
                <?php createLabel("expireDate", "", "End Date")?>
                  <div class="form-control-wrap">
                  <?php createInput("date","expireDate", "expireDate", "", "form-control", "", "")?>
              
                  </div>
              </div>
                
              <div class="form-group col-md-6">
                <?php createLabel("applicantName", "", "Applicant Name")?>
                  <div class="form-control-wrap">
                  <?php createInput("text","applicantName", "applicantName", "", "form-control", "", "Applicant Name")?>
              
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