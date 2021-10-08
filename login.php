<?php
session_start();

include_once "PHPcode/DBConnection.php";

if($_SERVER['REQUEST_METHOD']=="POST"){

    $persalNumber=$_POST['persalNumber'];
    $password=$_POST['password'];

    if(!empty($persalNumber)&&!empty($password)){

        $findUser=mysqli_query($db,"SELECT * FROM Account WHERE persalNumber='{$persalNumber}' limit 1");
        
        if(mysqli_num_rows($findUser)>0){

            $data=mysqli_fetch_assoc($findUser);

            if($password===$data['Password']){
                
                $_SESSION['persalNumber']=$data['persalNumber'];
                
                header("location: index.php");
                die;
            }
            else{
                echo "Incorrect Password";
                header("location: login.php");
            }  
        }    
        else{
            echo "Employee does not exist";
        }
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
                                <h3 >Welcome to Employee Portal</h3>
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
                                <div class="clearfix">
                                <a href="signup.php" class='float-start'>
                                            <small>Not yet signed up?</small>
                                        </a>
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