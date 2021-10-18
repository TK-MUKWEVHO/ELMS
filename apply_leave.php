
<?php
session_start();
include "PHPcode/DBConnection.php";
include "PHPcode/functions.php";
$userData = checkLogin($db);
include_once "head.php";

if($_SERVER['REQUEST_METHOD']=="POST"){

    $leaveType=$_POST['leaveType'];
    $duration="";
    $radioVal=$_POST['flexRadioDefault'];
    $dates="";
    $status="Panding";

    switch($radioVal){

        case "h":
            $date=$_POST['fromdate'];
            break;

            case "f":
                $date=$_POST['todate'];
                break;
        default:
            $date=$_POST[' '];
            
    }
    echo $date;
}

?>
<body>
    <div id="app">
        <?php include_once "sidebar.php";?>            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Apply for Leave</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-success">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Leave Application</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-8">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post">
                                <div class="row"> 
                                    <div class="mb-3">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Select Leave Type</label>
                                            <div class="position-relative">
                                                <fieldset class="form-group">
                                                    <select name="leaveType" class="form-select" id="basicSelect" required>
                                                        <option value="">Select Type of Leave..</option>
                                                        <?php
                                                        $queryLeaveTyp=mysqli_query($db,"SELECT leaveType FROM tblleavetype");
                                                        
                                                        if(mysqli_num_rows($queryLeaveTyp)>0){
                                                            while($data=mysqli_fetch_array($queryLeaveTyp)){?>
                                                                <option value="<?php echo $data['leaveType'];?>"><?php echo $data['leaveType'];?></option>
                                                            
                                            
                                                           <?php }
                                                        }
                                                        ?>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                <div>
                                    <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="h">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                              Half day
                                             </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="f" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Full day
                                        </label>
                                    </div>
                                </div>
                                <div class="h select mb-3">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">From Date And To Date</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" id="picker" name="fromdate" required>
                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="f select mb-3"> 
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Date</label>
                                            <div class="position-relative">
                                                <input type="date" class="form-control" name="todate" required>
                                    
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                        
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" name="apply" class="btn btn-primary me-1 mb-1" onclick="return confirm('Press OK to Confirm')">Apply</button>
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
    <script type="text/javascript">
            $(document).ready(function() {
                $('input[type="radio"]').click(function() {
                    var inputValue = $(this).attr("value");
                    var targetBox = $("." + inputValue);
                    $(".select").not(targetBox).hide();
                    $(targetBox).show();
                    
                });
                $('input[type="radio"]:checked').click();
            });

        $('#picker').daterangepicker({
            autoApply: false,
        });
        </script>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>   
    <script src="assets/js/main.js"></script>
  
    

</body>
</html>
