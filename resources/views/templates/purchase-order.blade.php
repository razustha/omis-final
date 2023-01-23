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
                <?php createLabel("date", "", "Date") ?>
                <?php createInput("date", "date", "date", "form-label", "", "", "Date") ?>
            </div>
            <div class="form-control-wrap col-md-4">
                <?php createLabel("refNo", "", "REF NO.") ?>
                <?php createInput("number", "date", "date", "form-label", "", "", "REF NO.") ?>
            </div>
            <div class="form-control-wrap col-md-4">
                <?php createLabel("telePhone", "", "Telephone") ?>
                <?php createInput("number", "telePhone", "telePhone", "form-label", "", "", "Telepohone") ?>
            </div>
            <div class="form-control-wrap col-md-4">
                <?php createLabel("vendorName", "", "Contractor / vendor Name") ?>
                <?php createInput("text", "vendorName", "vendorName", "form-label", "", "", "Contractor / vendor Name") ?>
            </div>
            <div class="form-control-wrap col-md-4">
                <?php createLabel("contractorPAN", "", "Contractor / vendor PAN.") ?>
                <?php createInput("number", "contractorPAN", "contractorPAN", "form-label", "", "", "Contractor PAN") ?>
            </div>
            <div class="form-control-wrap col-md-4">
                <?php createLabel("address", "", "Address") ?>
                <?php createInput("text", "address", "address", "form-label", "", "", "Address") ?>
            </div>
            <div class="form-control-wrap col-md-6">
                <?php createLabel("projectCode", "", "Project Code") ?>
                <?php createInput("text", "projectCode", "projectCode", "form-label", "", "", "Project Code") ?>
            </div>
            <div class="form-control-wrap col-md-6">
                <?php createLabel("fundingSource", "", "Funding Source") ?>
                <?php createInput("text", "fundingSource", "fundingSource", "form-label", "", "", "Funding Source") ?>
            </div>

            <div class="form-control-wrap col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                <?php createLabel("goodDes", "", "Description of goods") ?>
                            </th>
                            <th>
                                <?php createLabel("unit", "", "Unit") ?>
                            </th>
                            <th>
                                <?php createLabel("totalUnit", "", "Total Unit") ?>
                            </th>
                            <th>
                                <?php createLabel("unitRate", "", "Unit Rate") ?>
                            </th>
                            <th>
                                <?php createLabel("ammount", "", "Ammount") ?>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <?php createInput("text","goodDes", "goodDes","","","", "Description of goods") ?>
                            </th>
                            <th>
                                <?php createInput("text","unit", "unit"," ","","","Unit") ?>
                            </th>
                            <th>
                                <?php createInput("text","totalUnit", "totalUnit", "","","","Total Unit") ?>
                            </th>
                            <th>
                                <?php createInput("text","unitRate", "unitRate"," ","","","Unit Rate") ?>
                            </th>
                            <th>
                                <?php createInput("text","ammount", "ammount", "","","","Ammount") ?>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <?php createLabel("grandTotal","","Total Amount")?>
                            </td>
                            <td>
                                <?php createInput("text","totalAmmount", "totalAmmount", "","","","Total Amount") ?>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="form-control-wrap col-md-12">
                <?php createLabel("specialReq","","Special Request")?>
                <?php createTextarea("","specialReq","","")?>
            </div>

            <div class="form-control-wrap col-md-4">
                <h5>Administration Program</h5>
                <?php createLabel("adminName", "", "Name") ?>
                <?php createInput("text", "adminName", "adminName", "form-label", "", "", "") ?>
                <?php createLabel("admindesignation", "", "Designation") ?>
                <?php createInput("text", "admindesignation", "admindesignation", "form-label", "", "", "") ?>
                <?php createLabel("adminDate", "", "Date") ?>
                <?php createInput("date", "adminDate", "adminDate", "form-label", "", "", "") ?>
            </div>
            <div class="form-control-wrap col-md-4">
                <h5>Operational Program</h5>
                <?php createLabel("operationalName", "", "Name") ?>
                <?php createInput("text", "operationalName", "operationalName", "form-label", "", "", "") ?>
                <?php createLabel("operationaldesignation", "", "Designation") ?>
                <?php createInput("text", "operationaldesignation", "operationaldesignation", "form-label", "", "", "") ?>
                <?php createLabel("operationalDate", "", "Date") ?>
                <?php createInput("date", "operationalDate", "operationalDate", "form-label", "", "", "") ?>
            </div>
            <div class="form-control-wrap col-md-4">
                <h5>Vendor</h5>
                <?php createLabel("vendorName", "", "Contractor / vendor Name") ?>
                <?php createInput("text", "vendorName", "vendorName", "form-label", "", "", "Contractor / vendor Name") ?>
                <?php createLabel("vendorDesignation", "", "Designation") ?>
                <?php createInput("text", "vendorName", "vendorName", "form-label", "", "", "Contractor / vendor Name") ?>
                <?php createLabel("vendorDate", "", "Date") ?>
                <?php createInput("text", "vendorName", "vendorName", "form-label", "", "", "Contractor / vendor Name") ?>
            </div>

            <div class="form-control-wrap col-md-12">
                <?php createButton("btn-primary","","Submit")?>
            </div>

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