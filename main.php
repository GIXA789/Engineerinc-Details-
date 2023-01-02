<?php
require_once('con.php');
$query="select * from message";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetching Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style>
        .Answer1{
            margin-top:5mm;
            margin-left:0mm;
        }
        .table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
     }
     .Page {
    height:297mm;
    width:210mm;   
    border-style:solid;
    align-self: center;
    border-width: 3px;
    font-family: Arial, Helvetica, sans-serif;
      
}
        </style>
</head>
<body>
<div class="Page">
        <div class="insideborder">
    <img src="logo.png" width=500px><br><br>
    <div class="Searchbar">
    
</div>
<br>
    <h4>Solar Module Details</h4>
    <div align="center">  
                     <input type="text" name="search" id="search" class="form-control" />  
                </div> 
    <div class= "Answer1">
        <!-- taking data from databse to html page-->
        <table class="table table-bordered" id="employee_table">
        <tr>
            <th>id</th>
            <th>Date</th>
            <th>Project_Name</th>
            <th>Contractor</th>
            <th>Edit/Delete</th>
        </tr>  
    <tr>
        <?php

        while($row=mysqli_fetch_assoc($result)){

        ?>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['Date'];?></td>
            <td><?php echo $row['Project_Name'];?></td>
            <td><?php echo $row['Contractor'];?></td>

          <td>
               <button class="btn btn-primary"><a href="Edit.php?
               Editid=<?php echo $row['id'];?>"class="text-light">Edit</a></button>
               <button class="btn btn-danger"><a href="delete.php?
               deleteid=<?php echo $row['id'];?>"class="text-light">Delete</a></button>
        </td>
     </tr> 
<?php
        }
        ?>
        
</table>
     </div>
     </div></div>
</body>
</html>
<!--java code to search bar-->
<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#employee_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>
