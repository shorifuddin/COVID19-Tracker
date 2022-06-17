<?php
        require_once('function/function.php');
        logg();
        get_header();
        
?>

<div class="row container">
  <div class="col-md-12 container">
    <div class="card">
      <div class="card-header bg-secondary card_header">
          <div class="row">
            <div class="col-md-8 card_header_title">
              <i class="fab fa-gg-circle "></i> All Prevention Should Do
            </div>
            <?php if ($_SESSION['role']=='Admin' ) { ?>
              <div class="col-md-4 card_header_btn ">
              <a href="wbshoulddo.php" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="fas fa-plus-circle"></i>ADD Should Do</a>
              <?php }?>
            </div>
          </div>
      </div>  

    <div class="card-body container">
        <table class="table table-bordered table-striped table-hover custom_table">
          <thead class="thead-dark">
            <tr>
            
            <th scope="col">Title </th>
            <th scope="col">Detail </th>
            <th scope="col">Photo </th>
            <?php if ($_SESSION['role']=='Admin' ) { ?>
            <th scope="col">Manage</th>
            <?php }?>
            </tr>
          </thead>
          <tbody>
          <?php

          $sel="SELECT * FROM predo  ORDER BY id DESC";
          $alq=mysqli_query($con,$sel);
          while ($data=mysqli_fetch_assoc($alq)) {
          ?>
            <tr>
               
            <td><?=$data['title'];?></td>
            <td><?=substr($data['decp'],0,30);?></td>
             <td>

                <?php
                  if ($data['img']!='') {
                ?>
                  <img height="70px" src="../upload/Prevention/<?=$data['img'] ?>"/>
							<?php   }else{ ?>
								<img height="70px" src="uploads/photos/avatar.png"/>
							<?php } ?></td>

                </td>
                <?php if ($_SESSION['role']=='Admin' ) { ?>
                <td>
                  <a href="viewuser.php?view=<?=$data['id'];?>"><i class="fas fa-eye fa-lg"></i></a>

                  <a href="edituser.php?edit=<?=$data['id'];?>"><i class="fas fa-edit fa-lg"></i></a>

                  <a href="deleteuser.php?delet=<?=$data['id'];?>"><i class="fas fa-trash-alt fa-lg"></i></a>
                  
                </td>
                <?php }?>
            </tr>

            <?php  } ?>
          </tbody>
        </table>
    </div>

    <div class="card-footer bg-secondary card_footer">
      <div class="btn-group" role="group">
        <a type="button" class="btn btn-xs btn-dark">Print</a>
        <a type="button" class="btn btn-xs btn-warning">Excel</a>
        <a type="button" class="btn btn-xs btn-dark">PDF</a>
      </div>
    </div>

<?php
  get_footer();
?>