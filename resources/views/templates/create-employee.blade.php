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

        <div class="form-control-wrap col-md-6">
              
                <?php createInput("text", "firstName", "firstName", "form-label", "", "", "First Name") ?>
            </div>
        <div class="form-control-wrap col-md-6">
               
                <?php createInput("text", "lastName", "lastName", "form-label", "Last Name", "", "Last Name") ?>
            </div>
        <div class="form-control-wrap col-md-6">
                <?php createLabel("staffId", "", "Staff ID") ?>
                <?php createInput("text", "staffId", "staffId", "form-label", "", "", "Staff ID") ?>
            </div> 
        <div class="form-control-wrap col-md-6">
                <?php createLabel("email", "", "Email") ?>
                <?php createInput("text", "email", "email", "form-label", "", "", "Email") ?>
            </div> 
             <div class="form-control-wrap col-md-6">
                <?php createLabel("phoneNumber", "", "Phone Number") ?>
                <?php createInput("text", "phoneNumber", "phoneNumber", "form-label", "", "", "Phone Number") ?>
            </div>
            <div class="form-control-wrap col-md-6">
                <?php createLabel("dob", "", "Date Of Birth") ?>
                <?php createInput("date", "dob", "dob", "form-label", "", "", "") ?>
            </div>
      <div class="col-md-6">
        <?php createLabel("gender", "", "Gender")?>
            <?php createSelect("gender", "gender", "", "", array('Male', 'Female', 'Other')); ?>
</div>
      <div class="col-md-6">
        <?php createLabel("company", "", "Company")?>
            <?php createSelect("company", "company", "", "", array('1', '2', '3')); ?>
</div>
      <div class="col-md-6">
        <?php createLabel("designation", "", "Designation")?>
            <?php createSelect("designation", "designation", "", "", array('1', '2', '3')); ?>
</div>
             <div class="form-control-wrap col-md-6">
                <?php createLabel("officeShift", "", "Office Shift") ?>
                <?php createInput("text", "officeShift", "officeShift", "form-label", "", "", "Office Shift") ?>
            </div>
             <div class="form-control-wrap col-md-6">
                <?php createLabel("userName", "", "User Name") ?>
                <?php createInput("text", "userName", "userName", "form-label", "", "", "User Name") ?>
            </div>
           
             <div class="form-control-wrap col-md-6">
                <?php createLabel("position", "", "Position") ?>
                <?php createInput("text", "position", "position", "form-label", "", "", "Position") ?>
            </div>  
              <div class="form-control-wrap col-md-6">
                <?php createLabel("password", "", "Password") ?>
                <?php createInput("password", "password", "password", "form-label", "", "", "Password") ?>
            </div>
          
             <div class="form-control-wrap col-md-6">
                <?php createLabel("confirmPassword", "", "Confirm Password") ?>
                <?php createInput("text", "confirmPassword", "confirmPassword", "form-label", "", "", "Confirm Password") ?>
            </div>
        <div class="form-control-wrap col-md-6">
                <?php createLabel("department", "", "Department") ?>
                <?php createInput("text", "department", "department", "form-label", "", "", "Department") ?>
            </div>
            <div class="col-md-6">
        <?php createLabel("attendanceType", "", "Attendance Type")?>
            <?php createSelect("attendanceType", "attendanceType", "", "", array('General', 'Online')); ?>
</div>
        <div class="form-control-wrap col-md-6">
                <?php createLabel("joinedDate", "", "Date Of Joining") ?>
                <?php createInput("date", "joinedDate", "joinedDate", "form-label", "", "", "") ?>
            </div>
        
        <div class="form-control-wrap col-md-6">
                <?php createLabel("image", "", "Image") ?>
                <?php createInput("file", "image", "image", "form-label", "", "", "") ?>
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