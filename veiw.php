<?php

$servername="localhost";
 $username="root";
 $pass="";
 $db="info";
 $conn=mysqli_connect($servername,$username,$pass,$db);
$viwsql="SELECT * FROM tableinfo ";

$viwQuery=mysqli_query($conn,$viwsql);

while($row=mysqli_fetch_assoc($viwQuery)){
  
   $name= $row['Name'];
   $Email= $row['EMAIL'];
    $img=$row['Picture'];?>

    <div class="continer"
     style="border: 1px solid; width: 300px; text-align: center; margin-top: 10px; ">
   <?php echo "<img style='width: 100px; height: 100px; ' src='$img '>" ?>
    
    <h3> <?php echo "Name: ".$name; ?> </h3>
    <h3> <?php echo "Email: ".$Email; ?> </h3>
   
   </div>
   
  
  <?php
}
?>