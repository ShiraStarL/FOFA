<?php
 include('server/db.php');
 
    //escape variables for security
    $_postID = mysqli_real_escape_string($connection, $_POST['post_id']);
    //SET: insert new data to DB
    $query2 = "DELETE FROM tb_data_215 WHERE post_id='$_postID'";
    
    $result = mysqli_query($connection, $query2);
    if(!$result) {
        die('DB QUERY FAILED.');
    }
	
	//release returned data
    mysqli_free_result($result);

    //close DB connection
    mysqli_close($connection);
 ?>