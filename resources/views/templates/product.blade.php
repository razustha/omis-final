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
           <?php createText("productId", "productId", "Product ID", "form-control", "", "Product ID")?>
 
    </div>
            <div class="form-group col-md-6">
           <?php createText("productName", "productName", "Product Name", "form-control", "", "Product Name")?>
 
    </div>
            <div class="form-group col-md-6">
           <?php createText("productIssue", "productIssue", "Product Issue", "form-control", "", "Product Issue")?>
 
    </div>
            <div class="form-group col-md-6">
           <?php createText("productExpire", "productExpire", "Expire Date", "form-control", "", "Expire Date")?>
 
    </div>
            <div class="form-group col-md-6">
           <?php createText("companyName", "companyName", "Company Name", "form-control", "", "Company Name")?>
 
    </div>
            <div class="form-group col-md-6">
           <?php createText("companyAddress", "companyAddress", "Company Address", "form-control", "", "Company Address")?>
 
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