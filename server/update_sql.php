<?php
include('db.php');
	if(isset($_POST['dateTime'])){
        //escape variables for security
        $_postID = mysqli_real_escape_string($connection, $_POST['post_id']);
        $_txt = mysqli_real_escape_string($connection, $_POST['desc']);
        $_dateTime = mysqli_real_escape_string($connection, $_POST['dateTime']);
        $_street= mysqli_real_escape_string($connection, $_POST['street']);
        $_city = mysqli_real_escape_string($connection, $_POST['city']);
        $_country = mysqli_real_escape_string($connection, $_POST['country']);
        $_part = mysqli_real_escape_string($connection, $_POST['part']);
        $_phoneNum = mysqli_real_escape_string($connection, $_POST['phoneNum']);
        //SET: insert new data to DB
        $query2 = "UPDATE tb_data_215 SET description='$_txt',date='$_dateTime',street='$_street',city='$_city',country='$_country',approve='$_part',phone='$__phoneNum'  WHERE post_id='$_postID'" ;
        $result = mysqli_query($connection, $query2);
        if(!$result) {
            die('Error');
        }
        else{
            echo "yes";
        }
    }

    
    // //release returned data
    // mysqli_free_result($result);

    // //close DB connection
    // mysqli_close($connection);
?>