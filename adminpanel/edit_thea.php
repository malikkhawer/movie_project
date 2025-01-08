<?php include('includes/header.php')?>
<?php include('includes/sidebar.php')?>
<?php include('includes/navbar.php')?>
<?php include('includes/connect.php')?>

<?php
    if(isset($_GET['u_id'])){
        $u_id = $_GET['u_id'];
        $query = "SELECT * FROM theater WHERE theater_id = $u_id";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run) > 0){
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
                 <div class="container form-group">
                <center>
                <h2>Theater Edit</h2>
                  </center>
        <form action="update_thea.php"method="POST"enctype="multipart/form-data" class="form-group">
          <input type="hidden"name="u_id"value="<?php echo $row['theater_id']?>">
          

          <div class="form-group mb-4">
                  <label for="time" class="pb-2">THEATER_NAME</label>
                  <input type="text" name="theater_name"value="<?php echo $row['theater_name']?>" id="" class="form-control" placeholder="">
                </div>
                <div class="form-group mb-4">
                  <label for="time" class="pb-2">TIMING</label>
                  <input type="time" name="timing"value="<?php echo $row['timing']?>" id="" class="form-control" placeholder="">
                </div>
                <div class="form-group mb-4">
                  <label for="text" class="pb-2">DAYS</label>
                  <input type="text" class="form-control" name="days"value="<?php echo $row['days']?>" id="" placeholder="">
                </div>
                <div class="form-group mb-4">
                  <label for="date" class="pb-2">RELEASE DATE</label>
                  <input type="date" class="form-control" name="date"value="<?php echo $row['date']?>"  id="" placeholder="">
                </div>
                <div class="form-group mb-4">
                  <label for="number" class="pb-2">PRICE</label>
                  <input type="number" class="form-control" name="price"value="<?php echo $row['price']?>"  id="" placeholder="">
                </div>
                  <button type="submit"name="update" class="form-control btn btn-info ">Update</button>
                </form>
              </div>

         
    </div>
                <?php

            }
        }
    }
    
    ?>
    <?php include('includes/footer.php')?>