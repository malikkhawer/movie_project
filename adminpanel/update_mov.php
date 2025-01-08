<?php
include('includes/connect.php');

if(isset($_POST['submit'])){
    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    $trailer = $_FILES['trailer']['name'];
    $tmp_trailer_name = $_FILES['trailer']['tmp_name'];

    $movie = $_FILES['movie']['name'];
    $tmp_movie_name = $_FILES['movie']['tmp_name'];

    move_uploaded_file($tmp_name, "uploads/".$image);

    move_uploaded_file($tmp_trailer_name, "uploads/".$trailer);

    move_uploaded_file($tmp_movie_name, "uploads/".$movie);
    
    $query = "UPDATE `movies` SET `title` = '$title', `image` = '$image',`trailer` = '$trailer', `movie` = '$movie' WHERE `movie_id` = '$user_id'";

    $query_run = mysqli_query($connection, $query);
    if($query_run){
        echo "<script>
        // alert('Category update Successfully');
        window.location.href = 'movies.php';
        </script>
        ";
    }
    else{
        echo "<script>
        // alert('Category Added error');
        window.location.href = 'movies.php';
        </script>
        ";
    }
}


?>