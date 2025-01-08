<?php
include('includes/connect.php');

$u_id = $_GET['u_id'];

$query ="DELETE FROM `theater` WHERE `theater_id` = '$u_id'";
$query_run =mysqli_query($connection, $query);

if($query_run){
    echo "<script>
    // alert('Theater deleted Successfully');
    window.location.href = 'theater.php';
    </script>
    ";
}
else{
    echo "<script>
    // alert('Theater can`t deleted Successfully');
    window.location.href = 'theater.php';
    </script>
    ";
}


?>