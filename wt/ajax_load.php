<?php

$conn = mysqli_connect("localhost","root","","mydb") or die("connection failed");

$sql=" SELECT * FROM info";

$result=mysqli_query($conn,$sql) or die(" SQl query failed");
$output="";
if(mysqli_num_rows($result)> 0 ){
$output='<table border = "1" width="100%" cellspacing="0" cellpadding="10px"> 
         <tr>
         <th> ID</th>
         <th> fname</th>
         <th>lname</th>
         </tr>
         ';
         while($row = mysqli_fetch_assoc($result)){
            $output .= "<tr><td>{$row['id']}</td><td>{$row['fname']}</td><></tr>";
        }
        $output .= "</table>";

        while($row = mysqli_fetch_assoc($result)){
            $output .="<h1></h1>";
        }
        
        mysqli_close($conn);
        
        echo $output;
        
        }else{
            echo "<h2>No Record Found.</h2>";
        }
?>