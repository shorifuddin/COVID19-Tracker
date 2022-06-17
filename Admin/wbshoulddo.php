<?php
        require_once('function/function.php');
        logg();
        get_header();

        
		if (!empty($_POST)) {
			$title=$_POST['title'];
			$decp=$_POST['decp'];
			$img=$_FILES['img'];
			$imgname='';

			if ($img['name']!='') {
				$imgname='Prevention-Should-Do'. time().rand(10,1000).'.'.pathinfo($img['name'],PATHINFO_EXTENSION);
			}

			if (!empty($title)) {
				
				
				$inser="INSERT INTO predo(title,decp,img) 
						VALUE('$title','$decp','$imgname')";
					if (mysqli_query($con,$inser)) {
						move_uploaded_file($img['tmp_name'],'../upload/Prevention/'.$imgname);
						echo "Prevention-Should-Do ADD Successfully";
					}else{
						echo "Prevention-Should-Do ADD Failed";
					}
					
			
			}else{
				echo "Enter Full Title";
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
              <i class="fab fa-gg-circle "></i>Prevention Should Do Update
            </div>
            <div class="col-md-4 card_header_btn ">
            <a href="wballshoulddo.php" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="fas fa-th"></i> All Should Do</a>
           </div>
          </div>
      </div>  

      <div class="card-body">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Should Do Title<span class="req_star">*</span>:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="title" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label col_form_label">Should Do Decp:</label>
          <div class="col-sm-7">
            <input type="text" class="form-control form_control" name="decp" value="">
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