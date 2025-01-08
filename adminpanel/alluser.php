<?php 
include('includes/connect.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');

// if(!isset($_SESSION['user_id'])){
//   echo "<script> window.location.href='../src/login.php'; </script>";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>




<div class="container">
    <center>
    <h1>All Users/Admin</h1>
    </center>
   
<div class="row">
 
  <div class="col-lg-12">
  
     <table class="table">
      <tr>
        <th class="bg-dark text-white">ID</th>
        <th class="bg-dark text-white">Name</th>
        <th class="bg-dark text-white">Email</th>
        <th class="bg-dark text-white">Password</th>
        <th class="bg-dark text-white">Role Type</th>      
        <th class="bg-dark text-white">Action</th>
      </tr>
      
      <?php
      $sql = "SELECT * FROM `users`";
      $res  = mysqli_query($connection, $sql);
      if(mysqli_num_rows($res) > 0){
        while($data = mysqli_fetch_assoc($res)){

          ?>

          <tr>
            <td><?= $data['user_id'] ?></td>
            <td><?= $data['name'] ?></td>
            <td><?= $data['email'] ?> </td>
            <td><?= $data['password'] ?> </td>       
            <td>

             <?php

               if($data['roltype'] == 1){
                echo "ADMIN";
               }else{
                echo "USER";
               }

             ?>

            </td>
     
          
           
            <td>
              <a href="alluser.php?user_id=<?php echo $data['user_id'] ?>" class="btn btn-danger"> Delete </a>
            
          </td>
          </tr>


       <?php
        }
      }else{
        echo 'no user found';
      }
    

      ?>


     </table>

  </div>
</div>
  

</div>



</body>
</html>

<?php

if(isset($_GET['user_id'])){

  $userid = $_GET['user_id'];

  $sql = "DELETE FROM users WHERE user_id ='$user_id'";
  
  if(mysqli_query($connection, $sql)){
    echo "<script> alert('user deleted successfully')</script>";
    echo "<script> window.location.href='alluser.php' </script>";
}else{
    echo "<script> alert('user not deleted')</script>";
  }

}



?>
<?php include('includes/footer.php')  ?>