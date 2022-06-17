<?php
        require_once('function/function.php');
        logg();
        get_header();
        
		$id=$_GET['view'];
		$sel="SELECT * FROM user_info  NATURAL JOIN user_role WHERE user_id='$id'";
		$view=mysqli_query($con,$sel);
		$data=mysqli_fetch_assoc($view);
?>


<div class="row container">
  <div class="col-md-12 container">
    <div class="card">
      <div class="card-header bg-secondary card_header">
          <div class="row">
            <div class="col-md-8 card_header_title" style="font-weight: 400; font-size:16px;">
              <i class="fab fa-gg-circle "></i> User Information
            </div>
            <div class="col-md-4 card_header_btn ">
              <a href="alluser.php" class="btn btn-xs btn-dark " ><i class="fas fa-plus-circle"></i> ALL User </a>
            </div>
          </div>
      </div>  

      <div class="card-body">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <table class="table table-bordered table-hover table-striped view_custom_table">
            <tr>
                <td>Name</td>
                <td>:</td>
                  <td><?= $data['user_name']; ?></td>
            </tr>
             <tr>
                <td>Email</td>
                <td>:</td>
                <td><?=$data['user_email'];?></td>
              </tr>
              <tr>
                  <td>Username</td>
                  <td>:</td>
                  <td><?=$data['user_username'];?></td>
              </tr>
              <tr>
                  <td>Role</td>
                  <td>:</td>
                  <td><?=$data['role_name'];?></td>
              </tr>
              <tr>
                  <td>Photo</td>
                  <td>:</td>
                  <td>
											<?php
												if ($data['user_img']!='') {
											?>
												<img height="80px" src="uploads/<?=$data['user_img'] ?>"/>
											<?php   }else{ ?>
												<img height="80px" src="uploads/photos/avatar.png"/>
											<?php } ?>
                                                  
                  </td>
              </tr>
            </table>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>

    <div class="card-footer bg-secondary card_footer">
      <div class="btn-group" role="group">
        <a type="button" class="btn btn-xs btn-dark">Print</a>
        <a type="button" class="btn btn-xs btn-warning">Excel</a>
        <a type="button" class="btn btn-xs btn-dark">PDF</a>
      </div>
    </div>

    </div>
  </div> 
</div>  

<?php
  get_footer();
?>