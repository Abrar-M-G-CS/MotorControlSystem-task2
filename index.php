<?php

//set connection variables 
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'control_System';
$db_port = 3306;

//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;



if(isset($_POST['Forward'])){

    $my_query = "select * from control_system WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control_system (Forward_Button) VALUES ('Forward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Right'])){

    $my_query = "select * from control_system WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control_system (Right_Button) VALUES ('Right')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Left'])){

    $my_query = "select * from control_system WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control_system (left_Button) VALUES ('Left')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Stop'])){

    $my_query = "select * from control_system WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control_system (Stop_Button) VALUES ('Stop')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Backward'])){

    $my_query = "select * from control_system WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control_system (Back_Button) VALUES ('Backward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}





?>