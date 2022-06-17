<?php
        require_once('function/function.php');
        logg();
        get_header();

        if (!empty($_POST)) {
          $total=$_POST['total'];
          $active=$_POST['active'];
          $recover=$_POST['recover'];
          $deaths=$_POST['deaths'];
          
          if (!empty($total)) {
             
            $inser="INSERT INTO covidtrack(total_cases,active_cases,recover_cases,deaths_cases) 
                VALUE('$total','$active','$recover','$deaths')";
              if (mysqli_query($con,$inser)) {
                                
                echo "COVID-19 Update Successfully";
              }else{
                echo "COVID-19 Update Failed";
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
              <i class="fab fa-gg-circle "></i> UPDATE COVID-19 Tracker NOW
            </div>
            <div class="col-md-4 card_header_btn ">
            <a href="wballcovidcase.php" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="fas fa-th"></i> All COVID-19 Tracker</a>
           </div>
          </div>
      </div>  

      <div class="card-body">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Total Confirmed Corona Cases<span class="req_star">*</span>:</label>
          <div class="col-sm-7">
            <input type="number" class="form-control form_control" name="total" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Active cases:</label>
          <div class="col-sm-7">
            <input type="number" class="form-control form_control" name="active" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Recovered cases:</label>
          <div class="col-sm-7">
            <input type="number" class="form-control form_control" name="recover" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Deaths:</label>
          <div class="col-sm-7">
            <input type="number" class="form-control form_control" name="deaths" value="">
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