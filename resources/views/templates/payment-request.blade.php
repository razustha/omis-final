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
    <h5>Payment To</h5>
    <div class="form-control-wrap col-md-3">
            <?php createLabel("name", "", "Name") ?>
            <?php createInput("text", "name", "name", "form-label", "", "", "Name") ?>
        </div>
        <div class="form-control-wrap col-md-3">
            <?php createLabel("address", "", "Address") ?>
            <?php createInput("text", "address", "address", "form-label", "", "", "Address") ?>
        </div>
        <div class="form-control-wrap col-md-3">
            <?php createLabel("contactNo", "", "Contact No") ?>
            <?php createInput("text", "contactNo", "contactNo", "form-label", "", "", "Contact No.") ?>
        </div>
        <div class="form-control-wrap col-md-3">
            <?php createLabel("panNo", "", "PAN No.") ?>
            <?php createInput("text", "panNo", "panNo", "form-label", "", "", "PAN No.") ?>
        </div>
        <div class="form-control-wrap col-md-3">
            <?php createLabel("ammountNRS", "", "Ammount in NRS") ?>
            <?php createInput("text", "ammountNRS", "ammountNRS", "form-label", "", "", "Ammount in NRS") ?>
        </div>
        <div class="form-control-wrap col-md-5">
            <?php createLabel("ammountWords", "", "Ammount in words") ?>
            <?php createInput("text", "ammountWords", "ammountWords", "form-label", "", "", "Ammount in words") ?>
        </div>
        <div class="form-control-wrap col-md-4">
            <?php createLabel("paymentPurpose", "", "Purpose of payment") ?>
            <?php createInput("text", "paymentPurpose", "paymentPurpose", "form-label", "", "", "Purpose of payment") ?>
        </div>

        <div class="form-control-wrap col-md-4">
            <?php createLabel("invoiceDate", "", "Invoice Date") ?>
            <?php createInput("date", "invoiceDate", "invoiceDate", "form-label", "", "", "Invoice Date") ?>
        </div>

        <div class="form-control-wrap col-md-5">
            <?php createLabel("invoiceReceive", "", "Invoice received date") ?>
            <?php createInput("date", "invoiceReceive", "invoiceReceive", "form-label", "", "", "Invoice received date") ?>
        </div>

        <div class="form-control-wrap col-md-3">
            <?php createLabel("invoiceNo", "", "Invoice No.") ?>
            <?php createInput("text", "invoiceNo", "invoiceNo", "form-label", "", "", "Invoice No.") ?>
        </div>

        <div class="form-control-wrap col-md-6">
            <?php createLabel("contractOrderno", "", "Contract Order No.") ?>
            <?php createInput("text", "contractOrderno", "contractOrderno", "form-label", "", "", "Contract Order No.") ?>
        </div>

        <div class="form-control-wrap col-md-6">
            <?php createLabel("contractDate", "", "Contract Date") ?>
            <?php createInput("text", "contractDate", "contractDate", "form-label", "", "", "Contract Date") ?>
        </div>
        
      

        <div class="form-control-wrap col-md-3">
            <?php createLabel("accountHolder", "", "Account holder name") ?>
            <?php createInput("text", "accountHolder", "accountHolder", "form-label", "", "", "Account holder name") ?>
        </div>

        <div class="form-control-wrap col-md-3">
            <?php createLabel("bankAccountNumber", "", "Bank account number") ?>
            <?php createInput("text", "bankAccountNumber", "bankAccountNumber", "form-label", "", "", "Bank account number") ?>
        </div>

        <div class="form-control-wrap col-md-3">
            <?php createLabel("bankName", "", "Bank Name") ?>
            <?php createInput("text", "bankName", "bankName", "form-label", "", "", "Bank Name") ?>
        </div>

     
        <div class="form-control-wrap col-md-3">
        <?php createLabel("paymentMethod", "", "Mode of payment") ?> 
        <?php createCheck("","cheque","Cheque","","","")?>
        <?php createCheck("","bankTransfer","Bank Transfer","","","")?>
        </div>

        <div class="form-control-wrap col-md-12">
            <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Account Name</th>
                    <th>Account Code</th>
                    <th>Project Code</th>
                    <th>Ammount</th>
                    <th>Deduction</th>
                    <th>Net Payment</th>
                    <th>Deduction Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php createInput("text","accountName","accountName","","","","Account Name")?></td>
                    <td><?php createInput("text","accountCode","accountCode","","","","Account Code")?></td>
                    <td><?php createInput("text","projectCode","projectCode","","","","Project Code")?></td>
                    <td><?php createInput("text","ammount","ammount","","","","Ammount")?></td>
                    <td><?php createInput("text","deduction","deduction","","","","Deduction")?></td>
                    <td><?php createInput("text","netPayment","netPayment","","","","Net Payment")?></td>
                    <td><?php createInput("text","deductionDes","deductionDes","","","","Deduction Description")?></td>
                </tr>

                <tr>
                    <td colspan="3"><?php createLabel("","","Total")?></td>
                    <td colspan="1"><?php createLabel("","","Total")?></td>
                    <td colspan="5"></td>
                </tr>
            </tbody>
           
        </table>
        </div>
        </div>

        <div class="form-control-wrap col-md-12">
        <?php createLabel("remarks","","Remarks if any")?>
        <?php createTextarea("","remarks","","")?>
        </div>

        <div class="form-control-wrap col-md-3">
            <?php createLabel("requested", "", "Requested By") ?>
            <?php inputwithbottommargin("text", "requestedName", "requestedName", "form-label", "", "", "Name") ?>
            <?php inputwithbottommargin("text", "requestedDesignation", "requestedDesignation", "form-label", "", "", "Designation") ?>
            <?php inputwithbottommargin("date", "requestedDesignation", "requestedDate", "form-label", "", "", "Date") ?>
        </div>

        <div class="form-control-wrap col-md-3">
            <?php createLabel("checked", "", "Checked By") ?>
            <?php inputwithbottommargin("text", "checkedName", "checkedName", "form-label", "", "", "Name") ?>
            <?php inputwithbottommargin("text", "checkedDesignation", "checkedDesignation", "form-label", "", "", "Designation") ?>
            <?php inputwithbottommargin("date", "checkedDesignation", "checkedDate", "form-label", "", "", "Date") ?>
        </div>

            <div class="form-control-wrap col-md-3">
            <?php createLabel("reviewed", "", "Reviewed By") ?>
            <?php inputwithbottommargin("text", "reviewedName", "reviewedName", "form-label", "", "", "Name") ?>
            <?php inputwithbottommargin("text", "reviewedDesignation", "reviewedDesignation", "form-label", "", "", "Designation") ?>
            <?php inputwithbottommargin("date", "reviewedDesignation", "reviewedDate", "form-label", "", "", "Date") ?>
        </div>

        <div class="form-control-wrap col-md-3">
            <?php createLabel("approved", "", "Approved By") ?>
            <?php inputwithbottommargin("text", "approvedName", "approvedName", "form-label", "", "", "Name") ?>
            <?php inputwithbottommargin("text", "approvedDesignation", "approvedDesignation", "form-label", "", "", "Designation") ?>
            <?php inputwithbottommargin("date", "approvedDesignation", "approvedDate", "form-label", "", "", "Date") ?>
        </div>

        <div class="form-control-wrap col-md-12">
        <div class="alert alert-success" role="alert">
        NOTE : Please attach key supporting documents (original invoice/s, contract/s, purchase order, goods received note (GRN), approved requisition , comparative charts, copy of issued cheque/s and other  relevant documents) while submitting the payment request  form. 
        </div>  
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