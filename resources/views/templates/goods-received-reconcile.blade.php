
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
            <?php createLabel("title", "", "Title") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "title", "title", "", "form-control", "", "Title") ?>
            </div>
        </div>
    <div class="form-group col-md-6">
            <?php createLabel("address", "", "Address") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "address", "address", "", "form-control", "", "Address") ?>
            </div>
        </div>
    <div class="form-group col-md-6">
            <?php createLabel("purchaseNumber", "", "Purchase Order Number") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "purchaseNumber", "purchaseNumber", "", "form-control", "", "Purchase Order Number") ?>
            </div>
        </div>
    <div class="form-group col-md-6">
            <?php createLabel("receiptNumber", "", "Receipt Number") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "receiptNumber", "receiptNumber", "", "form-control", "", "Receipt Number") ?>
            </div>
        </div>
<table class="table table-bordered">
<thead>
<tr>
<th>
    <?php createLabel("sn", "", "S.N")?>

</th>
<th>
    <?php createLabel("goodsDetails", "", "Goods Details")?>

</th>
<th>
    <?php createLabel("unit", "", "Unit")?>

</th>
<th>
    <?php createLabel("quantity", "", "Quantity")?>

</th>
</tr>
</thead>
<tr>
    <td>
        <?php createInput("text/number", "sn", "sn", "", "form-control", "", "")?>
    </td>
    <td>
        <?php createInput("text", "goodsDetails", "goodsDetails", "", "form-control", "", "")?>
    </td>
    <td>
        <?php createInput("text/number", "unit", "unit", "", "form-control", "", "")?>
    </td>
    <td>
        <?php createInput("text/number", "quantity", "quantity", "", "form-control", "", "")?>
    </td>

</tr>




</table>
<div class="form-group col-md-6">
            <?php createLabel("", "", "Goods Checked And Received In Good Condition") ?>
            <div class="form-control-wrap">
        <?php createCheck("yes", "yes", "Yes", "", "", "")?>
        <?php createCheck("no", "no", "No", "", "", "")?>
        
        
        </div>
        </div>
        <div class="form-group col-md-6">
<?php createLabel("comments", "", "Comments")?>
<div class="form-control-wrap">
    <?php createTextarea("form-textarea", "comments", "3", "")?>
</div>

        </div>
<h5>Received By </h5>
<div class="form-group col-md-6">
<?php createLabel("receivedName", "", "Full Name")?>
<div class="form-control-wrap">
<?php createInput("text", "receivedName", "receivedName", "", "form-control", "", "Full Name")?>
</div>
        </div>
<div class="form-group col-md-6">
<?php createLabel("receivedPosition", "", "Position")?>
<div class="form-control-wrap">
<?php createInput("text", "receivedPosition", "receivedPosition", "", "form-control", "", "Position")?>
</div>
        </div>
<div class="form-group col-md-6">
<?php createLabel("receivedDate", "", "Date")?>
<div class="form-control-wrap">
<?php createInput("date", "receivedDate", "receivedDate", "", "form-control", "", "")?>
</div>
        </div>
<div class="form-group col-md-6">
<?php createLabel("receivedAddress", "", "Address")?>
<div class="form-control-wrap">
<?php createInput("text", "receivedAddress", "receivedAddress", "", "form-control", "", "Address")?>
</div>
        </div>
<h5>Delivered By </h5>
<div class="form-group col-md-6">
<?php createLabel("organization", "", "Organization Name")?>
<div class="form-control-wrap">
<?php createInput("text", "organization", "organization", "", "form-control", "", "Organization Name")?>
</div>
        </div>
        <div class="form-group col-md-6">
<?php createLabel("organizationDate", "", "Date")?>
<div class="form-control-wrap">
<?php createInput("date", "organizationDate", "organizationDate", "", "form-control", "", "")?>
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