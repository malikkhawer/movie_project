<?php
 include('includes/header.php');
 include('includes/sidebar.php') ;
 include('includes/navbar.php') ;
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movies</title>
</head>
<body>
<div class="container">
<div class="page-inner">
<div class="page-inner">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            upload movie
            </button>
           <table class="table table-responsive">
            <thead>
                <tr>
                    <td class="bg-dark text-white">ID</td>
                    <td class="bg-dark text-white">Title</td>
                    <!-- <td class="bg-dark text-white">Description</td> -->
                    <!-- <td class="bg-dark text-white">Date</td> -->
                    <td class="bg-dark text-white">Image</td>
                    <td class="bg-dark text-white">Trailer</td>
                    <td class="bg-dark text-white">Movie</td>
                    <td class="bg-dark text-white">Action</td>

                </tr>
            </thead>
            <tbody>

            <?php
              include('connect.php');



              $query = "SELECT * FROM movies";

              $connect_query = mysqli_query($connection, $query);

              if(mysqli_num_rows($connect_query) > 0){
        


      
            ?>
              <?php
                $counter = 1;
              while($row = mysqli_fetch_assoc($connect_query)){
          
              
              ?>
                <tr>
                    <td><?php echo $row ['movie_id'] ?></td>
                    <td><?php echo $row ['title'] ?></td>
                    <!-- <td><?php echo $row ['description'] ?></td> -->
                    <!-- <td><?php echo $row ['date'] ?></td> -->
                    <td><img src="uploads/<?php echo $row ['image'] ?>"height="50px"width="50px" alt=""></td>
                    <td><?php echo $row ['trailer'] ?></td>
                    <td><?php echo $row ['movie'] ?></td>
                      <td>
                      <a href="edit_mov.php?user_id=<?php echo $row['movie_id'];?>" class="btn btn-info btn-sm">Edit</a>
                      <a href="del_mov?user_id=<?php echo $row['movie_id'];?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php
                }
                $counter++;
              }
                ?>
            </tbody>
           </table>
           </div>
</div>

                      <div class="page-inner">
                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                      
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1>Add Movie</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="movies.php" method="post" enctype="multipart/form-data" >
                              <div class="form-group mb-4">
                    <select name="category_id" id="" class="form-control">
                        <option value="">SELECT CATEGORY</option>

                    <?php
                        include('connect.php');



                        $query = "SELECT * FROM categories";

                        $connect_query = mysqli_query($connection, $query);

                        if(mysqli_num_rows($connect_query) > 0){
                            while($row = mysqli_fetch_assoc($connect_query)){

                              ?>
                               <option value="<?php echo $row['category_id']?>"> <?php echo $row['name']?> </option> <?php
                            }


                        } 
                        ?>
                         
                </select>
                  
                </div>

                              <div class="form-group mb-4">
                  <label for="name" class="pb-2">TITLE</label>
                  <input type="text" name="title" id="" class="form-control" placeholder="Enter Title">
                      </div>
                <div class="form-group mb-4">
                  <label for="file" class="pb-2">IMAGE</label>
                  <input type="file" class="form-control" name="image" id="" placeholder="">
                </div>
                <div class="form-group mb-4">
                  <label for="trailer" class="pb-2">TRAILER</label>
                  <input type="file" class="form-control" name="trailer" id="" placeholder="">
                </div>
                <div class="form-group mb-4">
                  <label for="movie" class="pb-2">MOVIE</label>
                  <input type="file" class="form-control" name="movie" id="" placeholder="">
                </div>
                  <button type="submit"name="add" class="form-control btn btn-info ">Save</button>
                </div>
                
              </form>
  </div>
</div>

                

              </div>
            </div>
    </div>
        
              


</body>
</html>

<?php

if(isset($_POST['add'])){

    $catid = $_POST['category_id'];
    $title = $_POST['title'];
    // $description = $_POST['description'];
    // $date = $_POST['date'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    $trailer = $_FILES['trailer']['name'];
    $tmp_trailer_name = $_FILES['trailer']['tmp_name'];

    $movie = $_FILES['movie']['name'];
    $tmp_movie_name = $_FILES['movie']['tmp_name'];

    move_uploaded_file($tmp_name, "uploads/".$image);

    move_uploaded_file($tmp_trailer_name, "uploads/".$trailer);

    move_uploaded_file($tmp_movie_name, "uploads/".$movie);

    $query = "INSERT INTO `movies`(`title`, `image`, `trailer`, `movie`, `category_id`) VALUES ( '$title', '$description', '$data', '$image', '$trailer', '$movie', '$catid');";

    $connection_query = mysqli_query($connection, $query);

    if($connection_query){
        echo "<script>
        alert('movie Added Successfully');
        window.location.href = 'movies.php';
        </script>
        ";

    }
    else{
        echo "<script>
        alert('movie don`t Added Successfully');
        window.location.href = 'mmovies.php';
        </script>
        ";
    }

}


include('includes/footer.php');
    ?>
