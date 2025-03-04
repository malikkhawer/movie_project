<?php 
include('includes/header.php');
include('../adminpanel/includes/connect.php');

// if(!isset($_SESSION['uid'])){
//   echo "<script> window.location.href='login.php';  </script>";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking</title>
    <!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
    

<section id="team" class="team section-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>Ticket Booking for Theater</h2>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <form action="booking.php" method="post" >
              <div class="row">

                <input type="hidden" name="theater_id" value="<?=$theater_id?>">
                
                <div class="col form-group mb-3">
                  <input type="text" class="form-control" name="person"  placeholder="Enter many ticket you want" required="">
                </div>
              </div>
                <div class="col form-group mb-3">
                  <input type="date" class="form-control" name="date"  required="">
                </div>

             
          

              <div class="text-center"><button type="submit" class="btn btn-primary" name="ticketbook">Ticket</button></div>
            </form>
          </div>

        

        </div>

      </div>
</section>

</body>
</html>

<?php

if(isset($_POST['ticket'])){
  $b_id = $_GET['b_id'];
  $date       = $_POST['date'];
  $person     = $_POST['person'];
  $theater_id  = $_POST['theater_id'];


  $sql = "INSERT INTO `booking`(`theater_id`, `date`, `person`, `user_id`) VALUES ('$theater_id','$date','$person','$user_id')";

  if(mysqli_query($connection, $sql)){
     echo "<script> alert('Ticket booking successfully!!') </script>";
     echo "<script> window.location.href='index.php';  </script>";

  }else{
    echo "<script> alert('ticket  booking failed')";
  }

}

?>
<?php include('includes/footer.php')  ?>
