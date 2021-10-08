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
                  <h3>Details</h3>
               </div>
               <section class="section">
                  <div class="row mb-2">
                    <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fa text-success fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Approval Details</h4>
                      <ul>
                        <li>Approved By: </li>
                        <li>Date: </li>
                      </ul>
                    
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
                      <i class="fa text-info fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4></h4>
                    <h2 class="h1 mb-0"></h2>
                    </div>
                  </div>
                </div>
              </div>
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