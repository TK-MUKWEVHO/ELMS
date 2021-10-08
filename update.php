
<?php

session_start();

include "PHPcode/DBConnection.php";
include "PHPcode/functions.php";


$userData = checkLogin($db);

include_once "head.php";
?>
<body>
    <div id="app">
        <?php include_once "sidebar.php";?>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Update Profile</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>


    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">First Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="first name" id="first-name-icon" value="<?php echo $userData['FNAME']?>" readonly>
                                                <div class="form-control-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Middle Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="middle name" id="first-name-icon" value="None" readonly>
                                                <div class="form-control-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="col-md-4 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Last Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="last name" id="first-name-icon" value="<?php echo $userData['LNAME']?>" readonly>
                                                <div class="form-control-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Email</label>
                                            <div class="position-relative">
                
                                                <input type="text" class="form-control" placeholder="email" id="first-name-icon" value="<?php echo $userData['EMAIL']?>" readonly>
                                                <div class="form-control-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Contact</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="contact" id="first-name-icon" value="<?php echo $userData['TEL']?>" readonly>
                                                <div class="form-control-icon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Department</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Deepartment" id="first-name-icon" value="<?php echo $userData['DEPTCODE']?>" readonly>
                                                <div class="form-control-icon">
                                                    <i class="fa fa-building"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">designation</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Job" id="first-name-icon" value="<?php echo $userData['JOB']?>" readonly>
                                                <div class="form-control-icon">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Username</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" value="<?php echo $userData['EMPNO']?>" readonly>
                                                <div class="form-control-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Password</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control" placeholder="passsword" id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>

        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
</body>
</html>
