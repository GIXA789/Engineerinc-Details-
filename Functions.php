<?php
     
     require_once'con.php';

     function display_data(){
        global $con;
        $query="select * from users"
        $result=mysqli_query($con,$query);
        return $result;
     }



?>