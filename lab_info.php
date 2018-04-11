<?php
if(isset($_POST['submit'])){
    $servername="lamp.eng.fau.edu";
    $username="CEN4010_S2018g02";
    $password="cen4010_s2018";
    $db="CEN4010_S2018g02";

    $conn =  mysqli_connect($servername,$username,$password);

    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($db);

    $sql="INSERT INTO module3(znumber,classname) VALUES ('$_POST[znumber]','$_POST[classname]')";

    mysqli_query($sql,$conn);
   
    mysqli_close($conn);
  }
?>
