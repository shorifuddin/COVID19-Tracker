<?php
        require_once('function/function.php');
        logg();
        get_header();

        if (!empty($_POST)) {
          $name=$_POST['loc'];
          $phone=$_POST['phone'];
          $username=$_POST['email'];
          $email=$_POST['addres'];
        
    
          if (!empty($name)) {
            
            
            $inser="INSERT INTO coninfo(con_location,con_phn,con_email,con_site) 
                VALUE('$name','$phone','$username','$email')";
              if (mysqli_query($con,$inser)) {
                
                echo "Contact Update Successfully";
              }else{
                echo "Contact Update Failed";
              }
              
            
          }else{
            echo "Enter Your Full Name";
          }
        }
          
?>
<div class="row container">
  <div class="col-md-12 container">
    <form method="POST" action="" enctype="multipart/form-data">

     <div class="card">
      <div class="card-header bg-secondary card_header">
          <div class="row">
            <div class="col-md-8 card_header_title">
              <i class="fab fa-gg-circle "></i> UPDATE CONTACT INFO NOW
            </div>
            <div class="col-md-4 card_header_btn ">
            <a href="wballcon.php" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="fas fa-th"></i> All Contact Info</a>
           </div>
          </div>
      </div>  

      <div class="card-body">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Our Location<span class="req_star">*</span>:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="loc" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Phone Number:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="phone" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Email Address:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="email" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Website Address<span class="req_star">*</span>:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="addres" value="">
          </div>
        </div>
       
      </div>

    <div class="card-footer bg-secondary card_footer">
      <button type="submit" class="btn btn-dark">REGISTRATION</button>
    </div>

    </div>
  </form>
  </div> 
</div>  

<?php
  get_footer();
?>