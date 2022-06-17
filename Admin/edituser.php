<?php
        require_once('function/function.php');
        get_header();

        
        $id=$_GET['edit'];
        $sel="SELECT * FROM user_info NATURAL JOIN user_role WHERE user_id='$id'";
        $edit=mysqli_query($con,$sel);
        $data=mysqli_fetch_assoc($edit);
    
    
        if (!empty($_POST)) {
          $name=$_POST['name'];
          $phone=$_POST['phone'];
          $email=$_POST['email'];
          $img=$_FILES['img'];
          $imgname='';
    
          if ($img['name']!='') {
            $imgname='update'. time().rand(10,1000).'.'.pathinfo($img['name'],PATHINFO_EXTENSION);
          }
    
        if (!empty($name)) {
          $update="UPDATE user_info SET user_name='$name',user_phone='$phone',user_email='$email',user_img='$imgname' WHERE user_id='$id'";
    
            if (mysqli_query($con,$update)) {
            if($img['name']!=''){
              $imgUpdate="UPDATE user_info SET user_img='$imgname' WHERE user_id='$id'";
              mysqli_query($con,$imgUpdate);
              move_uploaded_file($img['tmp_name'],'uploads/'.$imgname);
              echo "Successfully Update";
              }else{
              echo "failed";
              }
          }else{
            echo "User registration failed!";
            }
          }else{
            echo "Please enter your name!";
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
              <i class="fab fa-gg-circle "></i> Update User NOW
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
            <input type="text" class="form-control form_control" name="name" value="<?=$data['user_name'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="phone" value="<?=$data['user_phone'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Username:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" disabled name="username" value="<?=$data['user_username'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
          <div class="col-sm-7">
            <input type="email" class="form-control form_control" name="email" value="<?=$data['user_email'];?>">
          </div>
        </div>
       
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">User-Role<span class="req_star">*</span>:</label>
          <div class="col-sm-4">
            <select class="form-control form_control" name="role">
              <option selected disabled><?=$data['role_name'];?></option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
          <div class="col-sm-7">
            <input type="file" name="img">
          </div>
        </div>
        <div class="form-group row">
        <label for="formFileSm" class="col-sm-3 col-form-label col_form_label">Old Image : </label> 
  				<?php
            if ($data['user_img']!='') {
          ?>
            <img height="70px" src="uploads/<?=$data['user_img'] ?>"/>
					<?php   }else{ ?>
						<img height="70px" src="uploads/photos/avatar.png"/>
					<?php } ?>
        </div>
      </div>

    <div class="card-footer bg-secondary card_footer">
      <button type="submit" class="btn btn-dark">UPDATE NOW</button>
    </div>

    </div>
  </form>
  </div> 
</div>  
<?php
  get_footer();
?>