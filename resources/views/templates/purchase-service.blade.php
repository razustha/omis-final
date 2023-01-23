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
            <?php createLabel("title", "", "Title") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "title", "title", "", "form-control", "", "Title") ?>
            </div>
        </div>
    <div class="form-group col-md-6">
            <?php createLabel("contractName", "", "Contractor Name") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "contractName", "contractName", "", "form-control", "", "Contractor Name") ?>
            </div>
        </div>
    <div class="form-group col-md-6">
            <?php createLabel("refNumber", "", "Ref. Number") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "refNumber", "refNumber", "", "form-control", "", "Ref. Number") ?>
            </div>
        </div>
    <div class="form-group col-md-6">
            <?php createLabel("date", "", "Date") ?>
            <div class="form-control-wrap">
                <?php createInput("date", "date", "date", "", "form-control", "", "") ?>
            </div>
        </div>
    <div class="form-group col-md-4">
            <?php createLabel("vatNumber", "", "Vat Number") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "vatNumber", "vatNumber", "", "form-control", "", "Vat Number") ?>
            </div>
        </div>
    <div class="form-group col-md-4">
            <?php createLabel("address", "", "Address") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "address", "address", "", "form-control", "", "Address") ?>
            </div>
        </div>
    <div class="form-group col-md-4">
            <?php createLabel("contact", "", "Contact") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "contact", "contact", "", "form-control", "", "Contact") ?>
            </div>
        </div>

    <div class="table-responsive">
<table class="table table-bordered">
<tr>
    <th>
    <?php createLabel("sn", "", "S.N") ?>
    </th>
    <th>
    <?php createLabel("descriptions", "", "Descriptions") ?>

    </th>
    <th>
    <?php createLabel("unit", "", "Unit") ?>
    </th>
    <th>
    <?php createLabel("quantity", "", "Quantity") ?>
    </th>
    <th>
    <?php createLabel("rate", "", "Rate") ?>
    </th>
    <th>
    <?php createLabel("amount", "", "Amount") ?>
    </th>
</tr>
<tr>
<td>
<?php createInput("text", "sn", "sn", "", "form-control", "", "") ?>

</td>
<td>
<?php createInput("text", "descriptions", "descriptions", "", "form-control", "", "") ?>

</td>
<td>
<?php createInput("text", "unit", "unit", "", "form-control", "", "") ?>

</td>
<td>
<?php createInput("text", "quantity", "quantity", "", "form-control", "", "") ?>

</td>
<td>
<?php createInput("text", "rate", "rate", "", "form-control", "", "") ?>

</td>
<td>
<?php createInput("text", "amount", "amount", "", "form-control", "", "") ?>

</td>
</tr>

<tr>
    <td colspan="5">

    <?php createLabel("taxableAmount", "", "Taxable Amount") ?>

    </td>
    <td>
<?php createInput("text", "taxableAmount", "taxableAmount", "", "form-control", "", "") ?>

    </td>
</tr>
<tr>
    <td colspan="5">

    <?php createLabel("vatThirteen", "", "13% Vat") ?>

    </td>
    <td>
<?php createInput("text", "vatThirteen", "vatThirteen", "", "form-control", "", "") ?>

    </td>
</tr>
<tr>
    <td colspan="5">

    <?php createLabel("totalAmount", "", "Total Amount") ?>

    </td>
    <td>
<?php createInput("text", "totalAmount", "totalAmount", "", "form-control", "", "") ?>

    </td>
</tr>
<tr>
    <td colspan="5">

    <?php createLabel("taxableAmountWords", "", "Taxable Amount In Words") ?>

    </td>
    <td>
<?php createInput("text", "taxableAmountWords", "taxableAmountWords", "", "form-control", "", "") ?>

    </td>
</tr>
</table>
</div>
<h5>Administration:-</h5>
<div class="form-group col-md-4">
            <?php createLabel("administrationName", "", "Name") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "administrationName", "administrationName", "", "form-control", "", "Name") ?>
            </div>
        </div>
<div class="form-group col-md-4">
            <?php createLabel("administrationDesignation", "", "Designation") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "administrationDesignation", "administrationDesignation", "", "form-control", "", "Designation") ?>
            </div>
        </div>
<div class="form-group col-md-4">
            <?php createLabel("administrationDate", "", "Date") ?>
            <div class="form-control-wrap">
                <?php createInput("date", "administrationDate", "administrationDate", "", "form-control", "", "") ?>
            </div>
        </div>
        <h5>Vendor's</h5>
        <div class="form-group col-md-4">
            <?php createLabel("vendorName", "", "Name") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "vendorName", "vendorName", "", "form-control", "", "Name") ?>
            </div>
        </div>
<div class="form-group col-md-4">
            <?php createLabel("vendorDesignation", "", "Designation") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "vendorDesignation", "vendorDesignation", "", "form-control", "", "Designation") ?>
            </div>
        </div>
<div class="form-group col-md-4">
            <?php createLabel("vendorDate", "", "Date") ?>
            <div class="form-control-wrap">
                <?php createInput("date", "vendorDate", "vendorDate", "", "form-control", "", "") ?>
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