<?php
session_start();
include_once "head.php";
include_once "PHPcode/DBConnection.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $persalNumber=$_POST['persalNumber'];
    $password=$_POST['password'];

    $findUser=mysqli_query($db,"SELECT * FROM Account WHERE persalNumber='{$persalNumber}' limit 1");
    if(mysqli_num_rows($findUser)>0){
        $fetchUser=mysqli_fetch_assoc($findUser);
        if($password===$fetchUser['Password']){
            $_SESSION['persalNumber']=$fetchUser['persalNumber'];
            header("location: index.php");
            die;
        }else{
            echo " 
           <script type='text/javascript'>
           alert ('Incorrect Password');
           </script>";
        }
    }else{
        echo " 
           <script type='text/javascript'>
           alert ('Employee does not exist');
           </script>";
    }
}
?>
<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                    <img class="card-img-top" src="assets/images/images.png" alt="Card image" height="200px" >
                        <div class="card-body">
                            <form  method="post" autocomplete="off">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username/Persal Number</label>
                                    <div class="position-relative">
                                        <input type="text" name="persalNumber" class="form-control" id="username" minlength="10" maxlength="10" required>
                                        <div class="form-control-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                        <a href="#" class='float-end'>
                                            <small>Forgot password?</small>
                                        </a>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <div class="form-control-icon">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                    <button class="btn btn-primary float-end" name="login" >Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>