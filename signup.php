<?php

session_start();

include_once "PHPcode/DBConnection.php";

if($_SERVER['REQUEST_METHOD']=="POST"){

    $persalNumber=$_POST['persalNumber'];
    $password=$_POST['password'];
    //$Confirmpassword=$_POST['Confirmpassword'];

    if(is_numeric($persalNumber)){
        $findEmployee=mysqli_query($db,"SELECT * FROM Employee WHERE persalNumber='{$persalNumber}' limit 1");
        if(mysqli_num_rows($findEmployee)>0){
            $findUser=mysqli_query($db,"SELECT * FROM Account WHERE persalNumber='{$persalNumber}' limit 1");
            if(mysqli_num_rows($findUser)>0){
                echo "User Already Exist";
            }else{
                
            $number=preg_match('@[0-9]@',$password);
            $upper=preg_match('@[A-Z]@',$password);
            $lower=preg_match('@[a-z]@',$password);
            $specChar=preg_match('@[^\w]@',$password);

                if(strlen($password)>=8 && $upper&& $number && $upper && $lower && $specChar){
                    $encPass=md5($password);
                    $addUser=mysqli_query($db,"INSERT INTO Account (persalNumber,password) VALUES '{$persalNumber},'{$encPass}'");
                    if($addUser){
                        echo "Successfully Registered";
                        header("location: login.php");
                    }
                }else{
                    echo "Password dont meet requiment";
                }
            }
        }else{
            echo "You are not MISA Employee";
        }
    }else{
        echo "Persal number include numbers only";
    }
}
include_once "head.php";
?>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                    <img class="card-img-top" src="assets/images/images.png" alt="Card image" height="200px" >
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <h3>Create Account</h3>
                            </div>
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
                                        
                                    </div>    
                                <div class="position-relative">
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <div class="form-control-icon">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Confirm Password</label>
                                        
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password" name="Confirmpassword" required>
                                        <div class="form-control-icon">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="clearfix">
                                <a href="login.php" class='float-start'>
                                            <small>Already signed up?</small>
                                        </a>
                                    <button class="btn btn-primary float-end" name="login" >Register</button>
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