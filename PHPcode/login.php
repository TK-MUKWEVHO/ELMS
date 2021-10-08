if($_SERVER['REQUEST_METHOD']=="POST"){

$persalNumber=$_POST['persalNumber'];
$password=$_POST['password'];

if(!empty($persalNumber)&&!empty($password)){

    $findUser=mysqli_query($db,"SELECT * FROM Account WHERE persalNumber='{$persalNumber}' limit 1");
    
    if(mysqli_num_rows($findUser)>0){
        $data=mysqli_fetch_assoc($findUser);
        if($password===$data['password']){
            
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