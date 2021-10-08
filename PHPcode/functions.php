<?php

function checkLogin($db){
    
    if(!isset($_SESSION['persalNumber'])){
        header("Location: login.php");
    die; 
    }
    $id= $_SESSION['persalNumber'];
    $queryR=mysqli_query($db,"SELECT * FROM tblemployee WHERE empno='{$id}' limit 1");
    
    if($queryR && mysqli_num_rows($queryR)>0){

        $data=mysqli_fetch_assoc($queryR);

        return $data;
    }
    
}


?>