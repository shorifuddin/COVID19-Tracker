<?php
        require_once('function/function.php');
        logg();
        get_header();

        
		if (!empty($_POST)) {
			$name=$_POST['name'];
			$phone=$_POST['phone'];
			$username=$_POST['username'];
			$email=$_POST['email'];
			$pass=md5($_POST['pass']);
			$repass=md5($_POST['repass']);
			$role=$_POST['role'];
			$img=$_FILES['img'];
			$imgname='';

			if ($img['name']!='') {
				$imgname='upload'. time().rand(10,1000).'.'.pathinfo($img['name'],PATHINFO_EXTENSION);
			}

			if (!empty($name)) {
				if ($pass===$repass) {
				
				$inser="INSERT INTO user_info(user_name,user_phone,user_username,user_email,user_pas,role_id,user_img) 
						VALUE('$name','$phone','$username','$email','$pass','$role','$imgname')";
					if (mysqli_query($con,$inser)) {
						move_uploaded_file($img['tmp_name'],'uploads/'.$imgname);
						echo "User ADD Successfully";
					}else{
						echo "<br><br>User ADD Failed";
					}
					
				}else{
					echo "Password Don't Match";
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
              <i class="fab fa-gg-circle "></i> REGISTRATION NOW
            </div>
            <div class="col-md-4 card_header_btn ">
            <a href="alluser.php" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="fas fa-th"></i> All User</a>
           </div>
          </div>
      </div>  

      <div class="card-body">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="name" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="phone" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Username:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="username" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
          <div class="col-sm-7">
            <input type="email" class="form-control form_control" name="email" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Password<span class="req_star">*</span>:</label>
          <div class="col-sm-7">
            <input type="password" class="form-control form_control" name="pass" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Confirm-Password<span class="req_star">*</span>:</label>
          <div class="col-sm-7">
            <input type="password" class="form-control form_control" name="repass" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">User-Role<span class="req_star">*</span>:</label>
          <div class="col-sm-4">
            <select class="form-control form_control" name="role">
              <option>Choose User Role</option>
              <?php
										$sel="SELECT * FROM user_role ORDER BY role_id ASC";
										$rol=mysqli_query($con,$sel);
										while ($role=mysqli_fetch_assoc($rol)) {
											
							?>
              <option value="<?=$role['role_id'];?>"><?=$role['role_name'];?></option>
              <?php } ?>
              
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
          <div class="col-sm-7">
            <input type="file" name="img">
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