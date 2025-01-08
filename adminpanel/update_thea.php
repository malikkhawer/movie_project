<?php
include('includes/connect.php');

if(isset($_POST['update'])){
    $u_id = $_POST['u_id'];
    $theater_name = $_POST['theater_name'];
    $timing = $_POST['timing'];
    $days = $_POST['days'];
    $date = $_POST['date'];
    $price = $_POST['price'];
    // $description = $_POST['description'];
    // $file_name = $_FILES['icon']['name'];
    // $tmp_name = $_FILES['icon']['tmp_name'];
    // move_uploaded_file($tmp_name, $file_name);

    
    $query = "UPDATE `theater` SET `theater_name` = '$theater_name',`timing` = '$timing',`days` = '$days',`date` = '$date',`price` = '$price' WHERE `theater_id` = '$u_id'";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        echo "<script>
        // alert('theater update Successfully');
        window.location.href = 'theater.php';
        </script>
        ";
    }
    else{
        echo "<script>
        // alert('theater is not update');
        window.location.href = 'theater.php';
        </script>
        ";
    }
}


?>