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
              <i class="fab fa-gg-circle "></i> All Contact Information
            </div>
            <?php if ($_SESSION['role']=='Admin' ) { ?>
              <div class="col-md-4 card_header_btn ">
              
              <?php }?>
            </div>
          </div>
      </div>  

    <div class="card-body container">
        <table class="table table-bordered table-striped table-hover custom_table">
          <thead class="thead-dark">
            <tr>
            
            <th scope="col">NAME</th>
            <th scope="col">EMAIL </th>
            <th scope="col">Address </th>
            <th scope="col">MESSAGE: </th>
            
            <?php if ($_SESSION['role']=='Admin' ) { ?>
            <th scope="col">Manage</th>
            <?php }?>
            </tr>
          </thead>
          <tbody>
          <?php

          $sel="SELECT * FROM websms ORDER BY web_id DESC";
          $alq=mysqli_query($con,$sel);
          while ($data=mysqli_fetch_assoc($alq)) {
          ?>
            <tr>
               
            <td><?=$data['name'];?></td>
            <td><?=$data['email'];?></td>
            <td><?=$data['address'];?></td>
            <td><?=$data['sms'];?></td>
            
                <?php if ($_SESSION['role']=='Admin' ) { ?>
                <td>
                 
                  <a href="wbdeletecon.php?delet=<?=$data['web_id'];?>"><i class="fas fa-trash-alt fa-lg"></i></a>
                  
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