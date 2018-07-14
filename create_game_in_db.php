<?php
    include('db.php');

    if(isset($_POST['dateTime'])){
        //escape variables for security
        $_txt = mysqli_real_escape_string($connection, $_POST['desc']);
        $_dateTime = mysqli_real_escape_string($connection, $_POST['dateTime']);
        $_street= mysqli_real_escape_string($connection, $_POST['street']);
        $_city = mysqli_real_escape_string($connection, $_POST['city']);
        $_country = mysqli_real_escape_string($connection, $_POST['country']);
        $_part = mysqli_real_escape_string($connection, $_POST['part']);
        $_phoneNum = mysqli_real_escape_string($connection, $_POST['phoneNum']);

        //SET: insert new data to DB
        $query2 = "INSERT into tb_data_215(user_id,description,date,street,city,country,approve,phone) values ('2', '$_txt','$_dateTime','$_street','$_city','$_country','$_part','$_phoneNum')";
        $result = mysqli_query($connection, $query2);
    }
    //release returned data
    mysqli_free_result($result);

    //close DB connection
    mysqli_close($connection);
?>