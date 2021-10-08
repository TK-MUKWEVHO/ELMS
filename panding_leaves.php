
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
                            <h3>Pending Leaves for Approval</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Leaves</li>
                                </ol>
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
                                        <th>Posting Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>Sick Leave</td>
                                        <td>2021-11-01</td>
                                        <td>
                                            <span class="badge bg-primary">Panding</span>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Take Action
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" >Take Action on Request</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <fieldset class="form-group">
                                                    <select name="action" class="form-select" id="basicSelect" required>
                                                    <option value="">Response to Request..</option>
                                                    <option value="Approve">Approve</option> 
                                                    <option value="Decline">Decline</option>                                         
                                                    </select>
                                            </fieldset>
                                            <div class="form-floating">
                                            <textarea class="form-control" name="comment" required></textarea>
                                            <label for="floatingTextarea">Comments</label>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>

                                            </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                          </td>
                                        
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

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="assets/js/vendors.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>