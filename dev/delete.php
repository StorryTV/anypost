<?php

include "connect.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"delete from posts where id = '$id'"); // delete query

if($del)
{
    echo "done!";
    mysqli_close($db); // Close connection
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>



