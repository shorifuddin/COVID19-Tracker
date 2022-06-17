<?php
        require_once('function/function.php');
        logg();
        get_header();

        if (!empty($_POST)) {
          $que=$_POST['fq'];
          $ans=$_POST['fa'];
          
    
          if (!empty($que)) {
            
            
            $inser="INSERT INTO webfq(fq_qus,fq_ans) 
                VALUE('$que','$ans')";
              if (mysqli_query($con,$inser)) {
                
                echo "Questions Update Successfully";
              }else{
                echo "Questions Update Failed";
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
              <i class="fab fa-gg-circle "></i> UPDATE Friquently Questions NOW
            </div>
            <div class="col-md-4 card_header_btn ">
            <a href="wballfq.php" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="fas fa-th"></i> All Contact Info</a>
           </div>
          </div>
      </div>  

      <div class="card-body">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Friquently Questions<span class="req_star">*</span>:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="fq" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Friquently Answer:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="fa" value="">
          </div>
        </div>
        
      </div>

    <div class="card-footer bg-secondary card_footer">
      <button type="submit" class="btn btn-dark">UPDATE</button>
    </div>

    </div>
  </form>
  </div> 
</div>  

<?php
  get_footer();
?>