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
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <title>SYKWEB</title>
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
                    <a href="#main"> <span>Home</span><i></i></a>
                    <a href="#about"> <span>About us</span><i></i></a>
                </div>
                <div class="logo">
                    <a href="#main"><img src="./images/logo.png" alt=""></a>
                </div>
                <div class="links">
                    <a href="#service"><span>Services</span><i></i></a>
                    <a href="#project"><span>Projects</span><i></i></a>
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
                                    <a href="#main">Home</a>
                                </li>
                                <li class="link">
                                    <a href="#service">Services</a>
                                </li>
                                <li class="link">
                                    <a href="#project">Projects</a>
                                </li>
                                <li class="link">
                                    <a href="#about">About us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <section class="project_intro">
                <h1 class="project_title">Project Name</h1>
                <section class="project_content_image">
                    <div class="project_image">
                        <img width="600" height="600" src="./images/about2.jpeg" class="" alt="Project Name">
                    </div>
                </section>
                <section class="project_content_details">
                    <span class="project_content_details_item">
                        <span class="project_content_details_item_title">Projet :</span>
                        <span class="project_content_details_item_value">Name</span>
                    </span>
                    <span class="project_content_details_item">
                        <span class="project_content_details_item_title">Link :</span>
                        <span class="project_content_details_item_value">www.project.com</span>
                    </span>
                    <span class="project_content_details_item">
                        <span class="project_content_details_item_title">Année :</span>
                        <span class="project_content_details_item_value">2022</span>
                    </span>
                </section>
            </section>
            <section class="project_description">
                <h2>Description:</h2>
                <span>I code designs. Rad designs for rad learnersThe mission and the vision are to explore, scavenge and play
                    with creative designs. Because of my passion for design,precision and details, I created Codegrid to bring
                    concepts of web designing to you.
                </span>
                <a href="www.google.com" class="btn">GO VISIT</a>
            </section>
            <?php
            foreach ($res as $key) {
            ?>
                <div class="content_single">
                    <img class="img" src="images/<?php echo $key["image"] ?>" alt="">
                    <span class="description">
                        <?php echo $key['description']; ?>
                    </span>
                </div>
                <span class="langage">
                    <?php echo $key['langage'] ?>
                </span>
            <?php
            }
            ?>
        </section>
        <section id="contact" class="contact">
            <h1 class="contact_title">Contact Us</h1>
            <div class="container">
                <span class="big_circle"></span>
                <div class="form">
                    <div class="contact_info">
                        <h3 class="title">Let's get in touch</h3>
                        <p class="text">
                            Lorem ipsum dolor sit amet consecteur adipsicuig elit. Saepe
                            dolorum adipisci recusandae praesentium dicta!
                        </p>
                        <div class="info">
                            <div class="information">
                                <i class="info_icon fa-solid fa-map-location-dot"></i>
                                <a href="" class="curs">
                                    <p>Marrakech , Morrocco</p>
                                </a>
                            </div>
                            <div class="information">
                                <i class="info_icon fa-solid fa-envelope"></i>
                                <a href="" class="curs">
                                    <p>sykweb10@gmail.com</p>
                                </a>
                            </div>
                            <div class="information">
                                <i class="info_icon fa-solid fa-phone"></i>
                                <a href="#" class="curs">
                                    <p>+212-625-461-645</p>
                                </a>
                            </div>
                        </div>
                        <!-- <div class="social_media">
                        <p>Connect with us :</p>
                        <div class="social_icon">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div> -->
                    </div>
                    <div class="contact_form">
                        <span class="circle one"></span>
                        <span class="circle two"></span>
                        <form action="" method="POST">
                            <h3 class="title">Send Email</h3>
                            <div class="input_container">
                                <input type="text" name="name" class="input">
                                <label for="name">Username</label>
                                <span>Username</span>
                            </div>
                            <div class="input_container">
                                <input type="email" name="email" class="input">
                                <label for="email">Email</label>
                                <span>Email</span>
                            </div>
                            <div class="input_container">
                                <input type="tel" name="phone" class="input">
                                <label for="phone">Phone Number</label>
                                <span>Phone Number</span>
                            </div>
                            <div class="input_container textarea">
                                <textarea name="message" class="input"></textarea>
                                <label for="message">Message</label>
                                <span>Message</span>
                            </div>
                            <input type="submit" name="btn_send_email" value="Send" class="btn">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer" id="footer">
            <div class="footer__container container">
                <h1 class="footer__title">SykWeb</h1>
                <p>
                    Development Company<br>
                    <span> ~ Give Birth To Your Idea ~ </span>
                </p>
                <ul class="footer_social">
                    <a href="" target="_blank" class="footer_social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" target="_blank" class="footer_social-link">
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
</body>

</html>