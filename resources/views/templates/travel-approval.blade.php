@include("partials.header")
@include("partials.sidebar")
<div class="nk-content">
                    <div class="container">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">



<!-- cards -->
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
        <div class="form-group col-md-6">
            <?php
            createLabel("Designation", "", "Designation")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "Designation", "Designation", "", "form-control", "", "Designation") ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <?php
            createLabel("date", "", "Date")
            ?>
            <div class="form-control-wrap">
                <?php createInput("date", "date", "date", "", "form-control", "", "") ?>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>

                    <th> <?php createLabel("tableFrom", "", "From") ?>
                    </th>
                    <th> <?php createLabel("tableTo", "", "To") ?>
                    </th>
                    <th> <?php createLabel("tablePurpose", "", "Purpose") ?>
                    </th>
                    <th>
                        <?php createLabel("tableMode", "", "Mode Of Transport") ?>
                    </th>
                    <th>
                        <?php createLabel("tableAmount", "", "Amount") ?>
                    </th>
            <tbody>
                <tr>

                    <td>
                        <?php createInput("text", "tableFrom", "tableFrom", "", "form-control", "", "") ?>

                    </td>
                    <td>
                        <?php createInput("text", "tableTo", "tableTo", "", "form-control", "", "") ?>

                    </td>
                    <td>
                        <?php createInput("text", "tablePurpose", "tablePurpose", "", "form-control", "", "") ?>

                    </td>
                    <td>
                        <?php createInput("text", "tableMode", "tableMode", "", "form-control", "", "") ?>

                    </td>
                    <td>
                        <?php createInput("text", "tableAmount", "tableAmount", "", "form-control", "", "") ?>

                    </td>

                </tr>

            </tbody>
        </table>
        <h5>Claimed By</h5>

        <div class="form-group col-md-6">
            <?php
            createLabel("claimedName", "", "Full Name")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "claimedName", "claimedName", "", "form-control", "", "Full Name") ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <?php
            createLabel("claimedDesignation", "", "Designation")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "claimedDesignation", "claimedDesignation", "", "form-control", "", "Designation") ?>
            </div>
        </div>
        <h5>Approved By </h5>

        <div class="form-group col-md-6">
            <?php createLabel("approvedName", "", "Full Name") ?>
            <div class="form-control-wrap">
                <?php createInput("text", "approvedName", "approvedName", "", "form-control", "", "Full Name") ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <?php
            createLabel("approvedDesignation", "", "Designation")
            ?>
            <div class="form-control-wrap">
                <?php createInput("text", "approvedDesignation", "approvedDesignation", "", "form-control", "", "Designation") ?>
            </div>
        </div>
        <div class="form-control-wrap col-md-12">
            <?php createButton("btn-primary", "", "Submit") ?>
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