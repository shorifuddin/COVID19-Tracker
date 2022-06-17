<!DOCTYPE html>
<html >
  
  <head>
    <title>Welcome To Deashboard</title>
    <meta charset="utf-8">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="files/assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" href="files/bower_components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" media="all">
    <link rel="stylesheet" href="files/assets/icon/feather/css/feather.css">
    <link rel="stylesheet" href="files/assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" href="files/bower_components/chartist/css/chartist.css" media="all">
    <link rel="stylesheet" href="files/assets/css/coustom.css">
    <link rel="stylesheet" href="files/assets/css/widget.css">
    
    <link rel="stylesheet" href="files/assets/css/style.css">
    
    <script src="files/bower_components/jquery/js/jquery.min.js"></script>
    <script src="files/assets/js/sweetalert.min.js"></script>
  </head>
  <body>
    <div class="loader-bg">
      <div class="loader-bar"></div>
    </div>
    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
          <div class="navbar-wrapper">
            <div class="navbar-logo">
              <a href="index.php">
                <img class="img-fluid" src="files/assets/images/logo.png" alt="Theme-Logo" />
              </a>
              <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu icon-toggle-right"></i>
              </a>
              <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
              </a>
            </div>
            <div class="navbar-container container-fluid">
              <ul class="nav-left">
                <li class="header-search">
                  <div class="main-search morphsearch-search">
                    <div class="input-group">
                      <span class="input-group-prepend search-close">
                        <i class="feather icon-x input-group-text"></i>
                      </span>
                      <input type="text" class="form-control" placeholder="Enter Keyword">
                      <span class="input-group-append search-btn">
                        <i class="feather icon-search input-group-text"></i>
                      </span>
                    </div>
                  </div>
                </li>
               
              </ul>
              <ul class="nav-right">
                <li class="header-notification">
                  <div class="dropdown-primary dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      <i class="feather icon-bell"></i>
                      <span class="badge bg-c-red">5</span>
                    </div>
                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                      <li>
                        <h6>Notifications</h6>
                        <label class="label label-danger">New</label>
                      </li>
                      <li>
                        <div class="media">
                          <img class="img-radius" src="uploads/<?=$_SESSION['img'];?>" alt="Generic placeholder image">
                          <div class="media-body">
                            <h5 class="notification-user"><?=$_SESSION['name'];?></h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                          </div>
                        </div>
                      </li>
                     
                    </ul>
                  </div>
                </li>
               
                <li class="user-profile header-notification">
                  <div class="dropdown-primary dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      <img src="uploads/<?=$_SESSION['img'];?>" class="img-radius" alt="User-Profile-Image">
                      <span><?=$_SESSION['name'];?></span>
                      <i class="feather icon-chevron-down"></i>
                    </div>
                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                      <li>
                        <a href="#!">
                          <i class="feather icon-settings"></i> Settings </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="feather icon-user"></i> Profile </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="feather icon-mail"></i> My Messages </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="feather icon-lock"></i> Lock Screen </a>
                      </li>
                      <li>
                        <a href="logout.php">
                          <i class="feather icon-log-out"></i> Logout </a>
                      </li>
                    </ul>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
       
        
        
        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">

            <!-- {{--Sidebar strt--}} -->

            <nav class="pcoded-navbar">
              <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                  <div class="pcoded-navigation-label">Navigation</div>
                  <ul class="pcoded-item pcoded-left-item">

                        <li class="active pcoded-trigger">
                          <a href="index.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                              <i class="feather icon-home"></i>
                            </span>
                            <span class="pcoded-mtext">Dashboard</span>
                          </a>
                        </li>

                    <li class="">
                      <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-menu"></i>
                        </span>
                        <span class="pcoded-mtext">Navigation</span>
                      </a>
                    </li>

                    <li class="">
                      <a href="index.php" target="blank" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-globe"></i>
                        </span>
                        <span class="pcoded-mtext">Live Site</span>
                      </a>
                    </li>

                  </ul>

                <ul class="pcoded-item pcoded-left-item">
                 
                </ul>
                <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Superadmin' ) { ?>
                <div class="pcoded-navigation-label">Information</div>

                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="feather icon-clipboard"></i>
                      </span>
                      <span class="pcoded-mtext">User Information</span>
                    </a>
                    <?php if ($_SESSION['role']=='Admin' ) { ?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="adduser.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">ADD User </span>
                        </a>
                      </li>
                    </ul>
                    <?php }?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="alluser.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">All User </span>
                        </a>
                      </li>
                    </ul>

                  </li>
                </ul>
              <?php }?>
              <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Superadmin' ) { ?>
                <div class="pcoded-navigation-label">COVID-19 Tracker</div>

                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="feather icon-navigation"></i>
                      </span>
                      <span class="pcoded-mtext">COVID-19 Tracker</span>
                    </a>
                    <?php if ($_SESSION['role']=='Admin' ) { ?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wbaddcovidcase.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">ADD COVID-19 Tracker </span>
                        </a>
                      </li>
                    </ul>
                    <?php }?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wballcovidcase.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">All COVID-19 Tracker </span>
                        </a>
                      </li>
                    </ul>

                  </li>
                </ul>
              <?php }?>
              <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Superadmin' ) { ?>
                <div class="pcoded-navigation-label">Corona Virus Spread</div>

                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="feather icon-codepen"></i>
                      </span>
                      <span class="pcoded-mtext">Corona Virus Spread</span>
                    </a>
                    <?php if ($_SESSION['role']=='Admin' ) { ?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wbvirus.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">ADD Virus Spread </span>
                        </a>
                      </li>
                    </ul>
                    <?php }?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wballsym.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">All Virus Spread </span>
                        </a>
                      </li>
                    </ul>

                  </li>
                </ul>
              <?php }?>
              <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Superadmin' ) { ?>
                <div class="pcoded-navigation-label">Corona Virus Symptoms</div>

                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="feather icon-shield"></i>
                      </span>
                      <span class="pcoded-mtext">Corona Virus Symptoms</span>
                    </a>
                    <?php if ($_SESSION['role']=='Admin' ) { ?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wbaddsym.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">ADD Symptoms </span>
                        </a>
                      </li>
                    </ul>
                    <?php }?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wballsym.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">All Symptoms </span>
                        </a>
                      </li>
                    </ul>

                  </li>
                </ul>
              <?php }?>
              <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Superadmin' ) { ?>
                <div class="pcoded-navigation-label">Website Prevention info</div>

                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="feather icon-shuffle"></i>
                      </span>
                      <span class="pcoded-mtext">Website Prevention Info</span>
                    </a>
                    <?php if ($_SESSION['role']=='Admin' ) { ?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wbshoulddo.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">ADD Prevention Should Do  </span>
                        </a>
                      </li>
                    </ul>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wbshouldavoid.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">ADD Prevention Should Avoid </span>
                        </a>
                      </li>
                    </ul>
                    <?php }?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wballshoulddo.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">All Prevention Should Do </span>
                        </a>
                      </li>
                    </ul>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wballshouldavoid.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">All Prevention Should Avoid </span>
                        </a>
                      </li>
                    </ul>
                    
                  </li>
                </ul>
              <?php }?>
              <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Superadmin' ) { ?>
                <div class="pcoded-navigation-label">Website Questions info</div>

                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="feather icon-help-circle"></i>
                      </span>
                      <span class="pcoded-mtext">Website Questions Info</span>
                    </a>
                    <?php if ($_SESSION['role']=='Admin' ) { ?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wbaddfq.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">ADD Website Questions  </span>
                        </a>
                      </li>
                    </ul>
                    <?php }?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wballfq.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">All Website Questions </span>
                        </a>
                      </li>
                    </ul>
                    
                  </li>
                </ul>
              <?php }?>    
              <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Superadmin' ) { ?>
                <div class="pcoded-navigation-label">Contact Information</div>

                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="feather icon-clipboard"></i>
                      </span>
                      <span class="pcoded-mtext">Website Contact Info</span>
                    </a>
                    <?php if ($_SESSION['role']=='Admin' ) { ?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wbaddcon.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">ADD Contact Information </span>
                        </a>
                      </li>
                    </ul>
                    <?php }?>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wballcon.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">All Contact Information </span>
                        </a>
                      </li>
                    </ul>
                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="wballconsms.php" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">All Contact Messeage </span>
                        </a>
                      </li>
                    </ul>

                  </li>
                </ul>
              <?php }?> 
              
                                                   
                <div class="pcoded-navigation-label">Banner Information</div>

                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                      <span class="pcoded-micon">
                        <i class="feather icon-airplay"></i>
                      </span>
                      <span class="pcoded-mtext">Banner Information</span>
                    </a>

                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="#" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">All Banner </span>
                        </a>
                      </li>
                    </ul>

                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="#" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">ADD Banner</span>
                        </a>
                      </li>
                    </ul>

                    <ul class="pcoded-submenu">
                      <li class=" ">
                        <a href="#" class="waves-effect waves-dark">
                          <span class="pcoded-mtext">Restore Banner</span>
                        </a>
                      </li>
                    </ul>

                  </li>
                </ul>


                  <div class="pcoded-navigation-label">User Information</div>

                  <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="index.php" class="waves-effect waves-dark">
                          <span class="pcoded-micon">
                            <i class="feather icon-aperture rotate-refresh"></i>
                          </span>
                          <span class="pcoded-mtext">Navigation</span>
                        </a>
                      </li>
                  </ul>

                  
                 

                  <div class="pcoded-navigation-label">Pages</div>

                  <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu ">
                      <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-unlock"></i>
                        </span>
                        <span class="pcoded-mtext">Authentication</span>
                      </a>
                      <ul class="pcoded-submenu">
                        <li class="">
                          <a href="#" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Login</span>
                          </a>
                        </li>
                        <li class="">
                          <a href="#" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Registration</span>
                          </a>
                        </li>
                        <li class="">
                          <a href="#" target="_blank" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Forgot Password</span>
                          </a>
                        </li>
                        <li class="">
                          <a href="#" target="_blank" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Lock Screen</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                   
                    <ul class="pcoded-item pcoded-left-item">
                      <li class="">
                          <a href="logout.php">
   
                            <span class="pcoded-micon">
                              <i class="feather icon-log-out"></i>
                            </span>
                            <span class="pcoded-mtext">Log Out</span>
                          </a>
                        </li>
                    </ul>
                    
                </div>
              </div>
            </nav>

            <!-- {{--Sidebar end--}} -->

            
            
            <div class="pcoded-content">
              <div class="page-header card">
                <div class="row align-items-end">
                  <div class="col-lg-8">
                    <div class="page-header-title">
                      <i class="feather icon-home bg-c-blue"></i>
                      <div class="d-inline">
                        <h5>Dashboard</h5>
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                      <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                          <a href="index.php">
                            <i class="feather icon-home"></i>
                          </a>
                        </li>
                        <li class="breadcrumb-item">
                          <a href="index.php">Dashboard</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pcoded-inner-content">
                <div class="main-body">
                  <div class="page-wrapper">
                    <div class="page-body">