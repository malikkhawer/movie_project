<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Theater</title>
</head>
<body>

<?php include('../adminpanel/includes/connect.php')  ?>
<?php include('includes/header.php')  ?>





<section id="team" class="team section-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h3>All <span>Theater</span></h3>
        </div>

        <div class="row mt-5">
          <?php
         $sql = "SELECT theater.*, movies.title, movies.image, categories.name 
           FROM theater 
              INNER JOIN movies ON movies.movie_id = theater.movie_id 
                 INNER JOIN categories ON categories.category_id = movies.category_id";
                    $res  = mysqli_query($connection, $sql);
                     if(mysqli_num_rows($res) > 0){
                        while($data = mysqli_fetch_array($res)){

                ?>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <div class="member-img">
                    <img src="../adminpanel/uploads/<?= $data['image'] ?>"  style="height:250px ; width:250px " alt="">
                    <div class="social">
                        <!-- <a href="../adminpanel/uploads/<?= $data['trailer'] ?>" target="_blank"  class="btn btn-primary" style="width:150px;">Watch Trailer</a> -->
                    
                    </div>
                    </div>
                    <div class="member-info">
                    <h3><?= $data['theater_name'] ?></h3>
                    <h6><?= $data['title'] ?> <span> <br> <?= $data['name'] ?></span></h6>
                    <span><?= $data['timing'] ?> <span> <br> <?= $data['days'] ?></span></span><br>
                    <span><?= $data['date'] ?></span>
                    <h4>Ticket: Rs.<?= $data['price'] ?></h4>
                    <a href="booking.php?b_id=<?=$data['theater_id']?>" class="btn btn-primary btn-sm"> Book Now </a>
                                   
          </div>
    </div>
</div>

    <?php
    }
    }

    ?>

</div>



      </div>
</section>

<?php include('includes/footer.php')  ?>


</body>
</html>