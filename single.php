<?php
include_once('../Sykweb_Site/database/db.php');

$annee = !empty($row['année'])?$row['année']:"2022";
$description = !empty($row['Description'])?$row['Description']:"";
$name = $_GET['name'];
$res=$conn->prepare("SELECT * FROM `projects` WHERE name_project=?"); 
$res->execute(array($name));
$row=$res->fetch();

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
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <title>SYKWEB</title>
    <!-- magnific popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"
    integrity="sha512-WEQNv9d3+sqyHjrqUZobDhFARZDko2wpWdfcpv44lsypsSuMO0kHGd3MQ8rrsBn/Qa39VojphdU6CMkpJUmDVw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="stylesheet/singlestyle.css">
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
            <div class="shape">
                <img src="./images/back_logo.png" alt="" class="shape1">
                <img src="./images/back_logo.png" alt="" class="shape2">
                <img src="./images/back_logo.png" alt="" class="shape3">
                <img src="./images/back_logo.png" alt="" class="shape4">
                <img src="./images/back_logo.png" alt="" class="shape5">
            </div>
            <header class="header_container">
                <div class="links">
                    <a href="index.php#main"><span>Home</span><i></i></a>
                    <a href="index.php#about"> <span>About us</span><i></i></a>
                    <a href="index.php#service"><span>Services</span><i></i></a>
                </div>
                <div class="logo">
                    <a href="index.php#main"><img src="./images/logo.png" alt=""></a>
                </div>
                <div class="links">
                    <a href="team.php"><span>Team</span><i></i></a>
                    <a href="index.php#project"><span>Projects</span><i></i></a>
                    <a href="contact.php"> <span>contact</span><i></i></a>
                </div>
                <div class="device">
                    <div class="container">
                        <div class="logo_mobile">
                            <a href="#"><img src="./images/logo.png" alt=""></a>
                        </div>
                        <button id="burger" class="open-main-nav">
                            <span class="burger"><i class='bx bx-menu-alt-right'></i></span>
                            <span class="burger-text">Menu</span>
                        </button>
                        <nav class="main-nav" id="main-nav">
                            <ul>
                                <li class="link">
                                    <a href="index.php#main">Home</a>
                                </li>
                                <li class="link">
                                    <a href="index.php#about">About us</a>
                                </li>
                                <li class="link">
                                    <a href="index.php#service">Services</a>
                                </li>
                                <li class="link">
                                    <a href="team.php">Our Team</a>
                                </li>
                                <li class="link">
                                    <a href="index.php#project">Projects</a>
                                </li>
                                <li class="link">
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <section class="project_intro">
                <h1 class="project_title"><?php echo $row['name_project'] ?></h1>
                <section class="project_content_image">
                    <div class="project_image">
                        <img width="600" height="600" src="./images/<?php echo $row['src_image'] ?>" class="" alt="Project Name">
                    </div>
                </section>
                <section class="project_content_details">
                    <span class="project_content_details_item">
                        <span class="project_content_details_item_title">Projet :</span>
                        <span class="project_content_details_item_value"><?php echo $row['name_project'] ?></span>
                    </span>
                    <span class="project_content_details_item">
                        <span class="project_content_details_item_title">Link :</span>
                        <span class="project_content_details_item_value"><a href="<?php echo $row['link_project'] ?>"><?php echo $row['link_project'] ?></a> </span>
                    </span>
                    <span class="project_content_details_item">
                        <span class="project_content_details_item_title">Année :</span>
                        <span class="project_content_details_item_value"><?php echo $annee ?></span>
                    </span>
                </section>
            </section>
            <section class="project_description">
                <h2>Description:</h2>
                <span>
                <?php echo $description?>
                </span>
                <div class="screenshots">
                    <div class="box-container">
    
                        <div class="box" data-aos="zoom-in">
                            <a href="images/about1.jpg">
                                <img src="images/about1.jpg" alt="">
                            </a>
                        </div>
    
                        <div class="box" data-aos="zoom-in">
                            <a href="images/about1.jpg" >
                                <img src="images/about1.jpg" alt="">
                            </a>
                        </div>
    
                        <div class="box" data-aos="zoom-in">
                            <a href="images/about1.jpg">
                                <img src="images/about1.jpg" alt="">
                            </a>
                        </div>
    
                        <div class="box" data-aos="zoom-in">
                            <a href="images/about1.jpg" >
                                <img src="images/about1.jpg" alt="">
                            </a>
                        </div>
    
                        <div class="box" data-aos="zoom-in">
                            <a href="images/about2.jpeg" >
                                <img src="images/about2.jpeg" alt="">
                            </a>
                        </div>
    
                        <div class="box" data-aos="zoom-in">
                            <a href="images/about1.jpg" title="">
                                <img src="images/about1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="btn">
                    <a href="<?php echo $row['link_project'] ?>">GO VISIT</a>
                    <a href="contact.php">Order Similar Project</a>
                </div>
            </section>
            <?php
            //foreach ($row as $key) {
            ?>
                <!-- <div class="content_single">
                    <img class="img" src="images/<?php echo $row["src_image"] ?>" alt="">
                    <span class="description">
                        <?php //echo $row['Description']; ?>
                    </span>
                </div>
                <span class="langage">
                    <?php //echo $row['langage'] ?>
                </span> -->
            <?php
            //}
            ?>
        </section>
        <section class="footer" id="footer">
            <div class="footer__container container">
                <h1 class="footer__title">SykWeb</h1>
                <p>
                    Development Company<br>
                    <span> ~ Give Birth To Your Idea ~ </span>
                </p>
                <ul class="footer_social">
                    <a href="https://www.facebook.com/profile.php?id=100089940784275" target="_blank" class="footer_social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/sykweb/" target="_blank" class="footer_social-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" target="_blank" class="footer_social-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/syk-web-1719a8251/" target="_blank" class="footer_social-link">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </ul>
                <div class="footer_copyright">
                    <small>&copy; SykWeb. All right reserved.</small>
                </div>
            </div>
        </section>
    </div>
    <a href="#main" class="scroll_up" id="scroll_up">
        <i class="fa-solid fa-circle-chevron-up"></i>
    </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./javascript/loader.js"></script>
    <script src="./javascript/owl.carousel.min.js"></script>
    <script src="./javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!-- boostrap -->
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.js" type="text/javascript"></script>
    <!-- magnific popup js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"
    integrity="sha512-C1zvdb9R55RAkl6xCLTPt+Wmcz6s+ccOvcr6G57lbm8M2fbgn2SUjUJbQ13fEyjuLViwe97uJvwa1EUf4F1Akw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- aos js file cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>