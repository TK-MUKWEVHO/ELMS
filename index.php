<?php
session_start();
include "PHPcode/DBConnection.php";
include "PHPcode/functions.php";
$userData = checkLogin($db);
?>

<?php include_once "head.php"?>
   <body>
      <div id="app">
      <?php include_once "sidebar.php";?>
	<div class="main-content container-fluid">
<div class="page-title">
                  <h3>Leave Credits</h3>
               </div>
               <section class="section">
                  <div class="row mb-2">
                    <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa fa-ambulance text-success fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Sick Leave</h4>
                    <h2 class="h1 mb-0">s</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa fa-calendar-check text-info fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Annual Leave</h4>
                    <h2 class="h1 mb-0">S</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa fa-graduation-cap text-warning fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Study Leave</h4>
                    <h2 class="h1 mb-0">S</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </section>

               <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Leave Requests</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Leave Type</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Refilwe</td>
                                        <td>Sick Leave</td>
                                        <td>20-Dec-2021 until 22-Dec-2021</td>
                                        <td>   
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Approved
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" >Leave Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="form-floating">
                                            <textarea class="form-control" name="comment" value="From database" readonly>sssssss</textarea>
                                            <label for="floatingTextarea">Message</label>
                                            </div>
                                            <div>
                                              <ul class="list-group list-group-flush">
                                              <li class="list-group-item">Approved By: </li>
                                              <li class="list-group-item">Date: </li>
                                              <li class="list-group-item">Attatch Proof:<input type="file" class="form-control" id="inputGroupFile01"> </li>
                                            </ul>
                                            </div>
                                  
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                            <!--<span class="badge bg-success">Approved</span>-->
                                        </td>
                                        <!--<td><a href="leave-details.php"><i class="fa fa-eye text-success"></i></a></td>-->
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
            
      <script src="assets/js/feather-icons/feather.min.js"></script>
      <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <script src="assets/js/app.js"></script>
      <script src="assets/vendors/chartjs/Chart.min.js"></script>
      <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
      <script src="assets/js/pages/dashboard.js"></script>
      <script src="assets/js/main.js"></script>
      
   </body>
</html>