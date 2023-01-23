@include("partials.header")
@include("partials.sidebar")
<div class="nk-content">
                    <div class="container">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">

                            <div class="card h-100">
                               <div class="card-body">

<div class="container">
    <form class="row g-3">

        <div class="form-group col-md-6">
            <?php
            createLabel("title", "", "Title")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "title", "title", "", "form-control", "", "Title") ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <?php
            createLabel("fullName", "", "Full Name")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "fullName", "fullName", "", "form-control", "", "Full Name") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php
            createLabel("financialYear", "", "Financial Year")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text/number", "financialYear", "financialYear", "", "form-control", "", "Financial Year") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php
            createLabel("currency", "", "Currency")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "currency", "currency", "", "form-control", "", "Currency") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php
            createLabel("exchangeRate", "", "Exchange Rate")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "exchangeRate", "exchangeRate", "", "form-control", "", "Exchange Rate") ?>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        <?php createLabel("date", "", "Date") ?>
                    </th>
                    <th>
                        <?php createLabel("dailyAllowence", "", "Daily Allowence") ?>
                    </th>
                    <th>
                        <?php createLabel("food", "", "Food") ?>
                    </th>
                    <th>
                        <?php createLabel("hotelBill", "", "Hotel Bill") ?>
                    </th>
                    <th>
                        <?php createLabel("officialMeeting", "", "Official Meetings") ?>
                    </th>
                    <th>
                        <?php createLabel("transportation", "", "Transportation") ?>
                    </th>
                    <th>
                        <?php createLabel("consultantAccomodation", "", "Consultant Accomodation") ?>
                    </th>
                    <th>
                        <?php createLabel("remarks", "", "Remarks") ?>
                    </th>
                    <th>
                        <?php createLabel("receiptNumber", "", "Receipt No.") ?>
                    </th>
                    <th>
                        <?php createLabel("total", "", "Total") ?>
                    </th>
                    <th>
                        <?php createLabel("amount", "", "Amount In Currency") ?>
                    </th>
                </tr>


            </thead>

            <tbody>
                <tr>
                    <td>
                        <?php createInput("text", "date", "date", "", "form-control", "", "") ?>
                    </td>
                    <td>
                        <?php createInput("text", "dailyAllowence", "dailyAllowence", "", "form-control", "", "") ?>
                    </td>
                    <td>
                        <?php createInput("text", "food", "food", "", "form-control", "", "") ?>
                    </td>
                    <td>
                        <?php createInput("text", "hotelBill", "hotelBill", "", "form-control", "", "") ?>
                    </td>
                    <td>
                        <?php createInput("text", "officialMeeting", "officialMeeting", "", "form-control", "", "") ?>
                    </td>
                    <td>
                        <?php createInput("text", "transportation", "transportation", "", "form-control", "", "") ?>
                    </td>
                    <td>
                        <?php createInput("text", "consultantAccomodation", "consultantAccomodation", "", "form-control", "", "") ?>
                    </td>
                    <td>
                        <?php createInput("text", "remarks", "remarks", "", "form-control", "", "") ?>
                    </td>
                    <td>
                        <?php createInput("text", "receiptNumber", "receiptNumber", "", "form-control", "", "") ?>
                    </td>
                    <td>
                        <?php createInput("text", "total", "total", "", "form-control", "", "") ?>
                    </td>
                    <td>
                        <?php createInput("text", "amount", "amount", "", "form-control", "", "") ?>
                    </td>


                </tr>
               
            </tbody>

        </table>
</div>
        <div class="form-group col-md-6">
            <?php
            createLabel("adviceStatus", "", "Status Of Advice")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "adviceStatus", "adviceStatus", "", "form-control", "", "Status Of Advice") ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <?php
            createLabel("receivedAdvance", "", "Advance Received")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "receivedAdvance", "receivedAdvance", "", "form-control", "", "Advance Received") ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <?php
            createLabel("totalExpense", "", "Total Expense")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "totalExpense", "totalExpense", "", "form-control", "", "Total Expense") ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <?php
            createLabel("payBalance", "", "Balance TO Pay")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "payBalance", "payBalance", "", "form-control", "", "Balance TO Pay") ?>
            </div>
        </div>


        <!-- last -->
        <h5>Requested By</h5>
        <div class="form-group col-md-4">
            <?php
            createLabel("requestedName", "", "Full Name")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "requestedName", "requestedName", "", "form-control", "", "Full Name") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php
            createLabel("requestedDesignation", "", "Designation")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "requestedDesignation", "requestedDesignation", "", "form-control", "", "Designation") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php
            createLabel("requestedDate", "", "Date")
            ?>
            <div class="form-control-wrap">
                <?php createInput("date", "requestedDate", "requestedDate", "", "form-control", "", "Date") ?>
            </div>
        </div>
        <h5>Checked By</h5>
        <div class="form-group col-md-4">
            <?php
            createLabel("checkedName", "", "Full Name")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "checkedName", "checkedName", "", "form-control", "", "Full Name") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php
            createLabel("checkeDesignation", "", "Designation")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "checkeDesignation", "checkeDesignation", "", "form-control", "", "Designation") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php
            createLabel("checkedDate", "", "Date")
            ?>
            <div class="form-control-wrap">
                <?php createInput("date", "checkedDate", "checkedDate", "", "form-control", "", "Date") ?>
            </div>
        </div>
        <h5>Recommended & Approved By</h5>
        <div class="form-group col-md-4">
            <?php
            createLabel("recommendName", "", "Full Name")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "recommendName", "recommendName", "", "form-control", "", "Full Name") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php
            createLabel("recommendDesignation", "", "Designation")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "recommendDesignation", "recommendDesignation", "", "form-control", "", "Designation") ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <?php
            createLabel("recommendDate", "", "Date")
            ?>
            <div class="form-control-wrap">
                <?php createInput("date", "recommendDate", "recommendDate", "", "form-control", "", "Date") ?>
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