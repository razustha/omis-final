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
           <?php createText("servciesName", "servciesName", "Services Name", "form-control", "", "Services Name")?>
 
    </div>
            <div class="form-group col-md-6">
           <?php createText("servicesType", "servicesType", "Services Type", "form-control", "", "Services Type")?>
 
    </div>
            <div class="form-group col-md-6">
           <?php createText("issueDate", "issueDate", "Issue Date", "form-control", "", "Issue Date")?>
 
    </div>
            <div class="form-group col-md-6">
           <?php createText("servicesExpire", "servicesExpire", "Expire Date", "form-control", "", "Expire Date")?>
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