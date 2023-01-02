<?php

    include 'con.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from message where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            //deleting row and don't refresh
            header('location:main.php');
        }
        else{
            die("Connection error");
    }
}
?>