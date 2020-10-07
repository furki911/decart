<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
   <link rel="icon" href="../assets/images/logo_basket.png" type="image/gif">
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
   <link rel="stylesheet" href="../assets/css/style.css">

   <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

   <script defer src="../assets/js/slider.js"></script>
</head>
<body>
   



<!--  -->

<nav class="categories">
   <ul>


<?php

   $serverName = 'localhost';
   $userName = 'root';
   $password = '';
   $dbName = 'E-commerce';

   $con = mysqli_connect($serverName, $userName, $password, $dbName);

   if($con) {
      
      $query = "SELECT categories FROM categories";

      $result = mysqli_query($con, $query);

      while($row =  mysqli_fetch_assoc($result)){

         ?>
            <li class="categories__link"> <a href="#"><?php echo($row["categories"]); ?> <i class="fa fa-arrow-down"></i></a></li>
         <?php

      }

   }  else {
      echo "Hat!";
   }

?>



<!--  -->


</ul>
</nav>







</body>
</html>

