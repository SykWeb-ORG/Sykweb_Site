<?php 
include_once('../Sykweb_Site/database/db.php'); 

$name = $_GET['name'];
$sql = "SELECT * FROM description_project WHERE name='$name'";
$res = $conn->query($sql)->fetchAll();
// print_r($res);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./stylesheet/style.min.css">
    <link rel="stylesheet" href="./stylesheet/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <title>SYKWEB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet/style.css">
</head>

<body>
    <section class="loader_body">
        <div class="loader_content">
            <div class="random">
                 <span class="nbr ltr">0</span>
                 <span class="nbr ltr">0</span>
                 <span class="nbr ltr">0</span>
                 <span class="nbr ltr">0</span>
                 <span class="nbr ltr">0</span>
                 <span class="nbr ltr">0</span>
            </div>
       </div>
    </section>
<div class="site_body">
    <section id="main" class="main" style="height: auto;">
        <!-- <div class="shape">
            <img src="./images/back_logo.png" alt="" class="shape1">
            <img src="./images/back_logo.png" alt="" class="shape2">
            <img src="./images/back_logo.png" alt="" class="shape3">
            <img src="./images/back_logo.png" alt="" class="shape4">
            <img src="./images/back_logo.png" alt="" class="shape5">
        </div> -->
        <header class="header_container">
            <div class="logo">
                <a href="#main"><img src="./images/logo.png" alt=""></a>
            </div>
            <div class="device">
                <div class="container">
                    <div class="logo_mobile">
                        <a href="#"><img src="./images/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </header>
        <section class="hero_sec">
            <div class="hero_sec_text">
                <h1> We are SYKWEB,a professional<br> team in
                    <div class="rotate-words">
                        <span style="--d: 0s">graphic designing</span>
                        <span style="--d: 4s">Laravel</span>
                        <span style="--d: 8s">PHP & MySQL</span>
                        <span style="--d: 12s">UI design</span>
                    </div>
                </h1>
            </div>
        </section>
    </section>
    <?php 
 foreach ($res as $key ) {
  ?>
  <div class="content_single">
        <img class="img" src="images/<?php echo $key["image"] ?>" alt="">
        <span class="description">
            <?php echo $key['description']; ?>
        </span>
    </div>
    <span  class="langage">
        <?php  echo $key['langage']?>
    </span>
<?php 
  }
?>
<a href="www.google.com">GO VISIT</a>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./javascript/loader.js"></script>
    <script src="./javascript/owl.carousel.min.js"></script>
    <script src="./javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script></body>

</html>