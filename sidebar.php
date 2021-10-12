<?php
include_once "head.php";
include_once "PHPcode/DBconnection.php";
?>

<div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header" style="height: 50px;margin-top: -30px">
                <div class="avatar me-1">
                              <img src="assets/images/coat.png" alt="" srcset="">
                           </div>   
                <span href="/">Home<span> 
                </div>
               <div id="sidebar" class="sidebar-menu">
                    <ul class="menu">
                       <li class="sidebar-item active">
                          <a href="index.php" class='sidebar-link'>
                          <i class="fa fa-home text-success"></i>
                          <span>Dashboard</span>
                          </a>
                       </li>
                       <li class="sidebar-item">
                          <a href="apply_leave.php" class='sidebar-link'>
                          <i class="fa fa-inbox text-success"></i>
                          <span>Apply Leave</span>
                          </a>
                       </li>
                       <?php
                        if($userData['MANAGERNO']===null){
                        ?>
                            <li class="sidebar-item">
                                <a href="panding_leaves.php" class='sidebar-link'>
                                <i class="fa fa-spinner text-success"></i>
                                <span>Approve Leaves</span>
                                </a>
                            </li>
                            <?php
                        }
                     ?>
                     <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                        <i class="fa fa-briefcase text-success"></i>
                        <span>Manage Leaves</span>
                        </a>
                        <ul class="submenu ">
                           <li>
                              <a href="all_leave.php">All Leaves</a>
                           </li>
                           <li>
                              <a href="fullDay_leave.php">Full Leaves</a>
                           </li>
                           <li>
                              <a href="halfday_leave.php">Half Day Leaves</a>
                           </li>
                        </ul>
                     </li>
                    </ul>
                 </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
<?php
            if($userData['MANAGERNO']===null){  
?>
			<li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i><span class="badge bg-info">2</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                    <div class="row mb-2">
                                    <div class="col-md-12 notif">
                                            <a href="panding_leaves.php"><h6 class='text-bold'>John Doe</h6>
                                            <p class='text-xs'>
                                                applied for leave at 05-21-2021
                                            </p></a>
                                        </div>
                                      </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php
                
            }?><!--not>
          <!-->         <li class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                           <div class="avatar me-1">
                              <img src="assets/images/admin.png" alt="" srcset="">
                           </div>
                           <div class="d-none d-md-block d-lg-inline-block">Hi, <?php echo $userData['FNAME']?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                           <a class="dropdown-item" href="update.php"><i data-feather="user"></i> Account</a>
                        <!--<a class="dropdown-item" href="update_password.php"><i data-feather="settings"></i> Settings</a>-->
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="logout.php"><i data-feather="log-out"></i> Logout</a>
                        </div>
                     </li>
                  </ul>
                </div>
            </nav>