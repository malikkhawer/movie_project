<?php include('includes/header.php')?>
<?php include('includes/sidebar.php')?>
<?php include('includes/navbar.php')?>
<?php include('includes/connect.php')?>

<?php
    if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];
        $query = "SELECT * FROM movies WHERE movie_id = '$user_id'";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run) > 0){
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
                 <div class="container form-group">
                <center>
                <h2>Category Edit</h2>
                  </center>
        <form action="update_mov.php"method="POST"enctype="multipart/form-data" class="form-group">
          <input type="hidden"name="user_id"value="<?php echo $row['movie_id']?>">
          
          <div class="form-group mb-4">
                  <label for="name" class="pb-2">TITLE</label>
                  <input type="text" name="title" value="<?php echo $row['title']?>" id="" class="form-control" placeholder="Enter Title">
                      </div>
                <div class="form-group mb-4">
                  <label for="file" class="pb-2">IMAGE</label>
                  <input type="file" class="form-control" name="image"value="<?php echo $row['image']?>" id="" placeholder="">
                </div>
                <div class="form-group mb-4">
                  <label for="trailer" class="pb-2">TRAILER</label>
                  <input type="file" class="form-control" name="trailer"value="<?php echo $row['trailer']?>" id="" placeholder="">
                </div>
                <div class="form-group mb-4">
                  <label for="movie" class="pb-2">MOVIE</label>
                  <input type="file" class="form-control" name="movie"value="<?php echo $row['movie']?>" id="" placeholder="">
                </div>
            <div class="modal-footer">
                
                <button type="submit"name="submit" class="btn btn-info" >Update</button>
            </form>
    </div>
                <?php

            }
        }
    }
    
    ?>
    <?php include('includes/footer.php')?>