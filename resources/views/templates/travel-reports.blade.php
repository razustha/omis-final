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
            <?php
 createLabel("title", "", "Title")
     ?>
            <div class="form-control-wrap">
                <?php createInput("text", "title", "title", "", "form-control", "", "Title") ?>
            </div>
        </div>
    <div class="form-group col-md-6">
            <?php
 createLabel("fullName", "", "Name Of The Staff")
     ?>
            <div class="form-control-wrap">
                <?php createInput("text", "fullName", "fullName", "", "form-control", "", "Name Of The Staff") ?>
            </div>
        </div>
    <div class="form-group col-md-6">
            <?php
 createLabel("departmentSector", "", "Department Sector")
     ?>
            <div class="form-control-wrap">
                <?php createInput("text", "departmentSector", "departmentSector", "", "form-control", "", "Department Sector") ?>
            </div>
        </div>
    <div class="form-group col-md-6">
            <?php
 createLabel("visitedLocation", "", "Visited Location")
     ?>
            <div class="form-control-wrap">
                <?php createInput("text", "visitedLocation", "visitedLocation", "", "form-control", "", "Visited Location") ?>
            </div>
        </div>
    <div class="form-group col-md-4">
            <?php
 createLabel("visitedDate", "", "Date Of Visit")
     ?>
            <div class="form-control-wrap">
                <?php createInput("date", "visitedDate", "visitedDate", "", "form-control", "", "Date Of Visit") ?>
            </div>
        </div>
    <div class="form-group col-md-4">
            <?php
 createLabel("activities", "", "Activities Covered")
     ?>
            <div class="form-control-wrap">
                <?php createInput("text", "activities", "activities", "", "form-control", "", "Activities Covered") ?>
            </div>
        </div>
    <div class="form-group col-md-4">
            <?php
 createLabel("visitObjectives", "", "Objectives Of The Visit")
     ?>
            <div class="form-control-wrap">
                <?php createInput("text", "visitObjectives", "visitObjectives", "", "form-control", "", "Objectives Of The Visit") ?>
            </div>
        </div>
    <div class="form-group col-md-4">
            <?php
 createLabel("keyHighlights", "", "Key Highlights")
     ?>
            <div class="form-control-wrap">
                <?php createInput("text", "keyHighlights", "keyHighlights", "", "form-control", "", "Key Highlights") ?>
            </div>
        </div>
    <div class="form-group col-md-4">
            <?php
 createLabel("achievement", "", "Achivements")
     ?>
            <div class="form-control-wrap">
                <?php createInput("text", "achievement", "achievement", "", "form-control", "", "Achivements") ?>
            </div>
        </div>
    <div class="form-group col-md-4">
            <?php
 createLabel("observation", "", "Observation")
     ?>
            <div class="form-control-wrap">
                <?php createInput("text", "observation", "observation", "", "form-control", "", "Observation") ?>
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