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
              <i class="fab fa-gg-circle "></i> COVID-19 Tracker Information
            </div>
            <?php if ($_SESSION['role']=='Admin' ) { ?>
              <div class="col-md-4 card_header_btn ">
              <a href="wbaddfq.php" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="fas fa-plus-circle"></i> Add User</a>
              <?php }?>
            </div>
          </div>
      </div>  

    <div class="card-body container">
        <table class="table table-bordered table-striped table-hover custom_table">
          <thead class="thead-dark">
            <tr>
            
            <th scope="col">Total Confirmed Corona Cases </th>
            <th scope="col">Active cases </th>
            <th scope="col">Recovered cases </th>
            <th scope="col">Deaths cases</th>
            
            
            <?php if ($_SESSION['role']=='Admin' ) { ?>
            <th scope="col">Manage</th>
            <?php }?>
            </tr>
          </thead>
          <tbody>
          <?php

          $sel="SELECT * FROM covidtrack ORDER BY id DESC ";
          $alq=mysqli_query($con,$sel);
          while ($data=mysqli_fetch_assoc($alq)) {
          ?>
            <tr>
               
            <td><?=substr($data['total_cases'],0,50);?></td>
            <td><?=substr($data['active_cases'],0,60) ;?></td>
            <td><?=substr($data['recover_cases'],0,60) ;?></td>
            <td><?=substr($data['deaths_cases'],0,60) ;?></td>

                <?php if ($_SESSION['role']=='Admin' ) { ?>
                <td>
                 
                  <a href="wbdeletewballcovidcase.php?delet=<?=$data['id'];?>"><i class="fas fa-trash-alt fa-lg"></i></a>
                  
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