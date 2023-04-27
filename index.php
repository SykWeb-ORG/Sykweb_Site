<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_send_email'])) {
    require_once './emailing/receive.php';
}
include_once('../Sykweb_Site/database/db.php');
$sql = "SELECT * FROM projects";
$stmt = $conn->query($sql);

?>
<!DOCTYPE html>
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
        <section id="main" class="main">
            <div class="shape">
                <img src="./images/back_logo.png" alt="" class="shape1">
                <img src="./images/back_logo.png" alt="" class="shape2">
                <img src="./images/back_logo.png" alt="" class="shape3">
                <img src="./images/back_logo.png" alt="" class="shape4">
                <img src="./images/back_logo.png" alt="" class="shape5">
            </div>
            <header class="header_container">
                <div class="links">
                    <a href="#service"><span>Home</span><i></i></a>
                    <a href="#about"> <span>About us</span><i></i></a>
                    <a href="#service"><span>Services</span><i></i></a>
                </div>
                <div class="logo">
                    <a href="#main"><img src="./images/logo.png" alt=""></a>
                </div>
                <div class="links">
                    <a href="team.php"><span>Team</span><i></i></a>
                    <a href="#project"><span>Projects</span><i></i></a>
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
                                    <a href="#main">Home</a>
                                </li>
                                <li class="link">
                                    <a href="#about">About us</a>
                                </li>
                                <li class="link">
                                    <a href="#service">Services</a>
                                </li>
                                <li class="link">
                                    <a href="team.php">Our Team</a>
                                </li>
                                <li class="link">
                                    <a href="#project">Projects</a>
                                </li>
                                <li class="link">
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </nav>
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
                    <a href="#about"><i class="fas fa-arrow-circle-down me-2"></i>Go Down</a>
                </div>
            </section>
        </section>
        <section id="about" class="about">
            <div class="about-main">
                <img src="images/about_pic.jpg" alt="">
                <div class="all-text">
                    <h4 class="about-title">About Us</h4>
                    <h1 class="about-Subtitle">A Great Hardworking Team</h1>
                    <p class="about-text">with more than 7 Years of development experience using PHP , MySQL and Laravel
                        and more than 5 years of experience in graphic designing.
                        We've worked on projects that demanded high-level PHP customization.
                        In addition to that, we also have developed many E-Commerce Projects.
                        We can work on both photoshop and illustrator ,
                        we can design a t-shirt, business card logo, and any other graphic design work that you can think
                        of.
                        we use our skills with pure dedication and deliver work on time.
                        Send me a message, we'll respond with an hour
                    </p>
                    <div class="btn">
                        <a href="team.php">Our Team</a>
                        <a href="contact.php">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="content">
            <div class="img">
                <img src="./images/code.png" alt="" class="front">
                <img src="./images/code.png" alt="" class="back">
            </div>
            <div class="text">
                <div class="line">
                    <?php
                    function line_one()
                    {
                        global $conn;
                        $langages = "SELECT * FROM langages WHERE `id` BETWEEN 1 AND 3";
                        $res = $conn->query($langages)->fetchAll();
                        foreach ($res as  $lang) {
                    ?>
                            <span data-src="images/<?php echo $lang['src_image_lang'] ?>"><?php echo $lang['name_langage'] ?></span>
                    <?php
                        }
                    }
                    for ($i = 0; $i < 3; $i++) {
                        line_one();
                    }
                    ?>
                </div>
                <div class=" line line2">
                    <?php
                    function line_two()
                    {
                        global $conn;
                        $langages = "SELECT * FROM `langages` WHERE `id` BETWEEN 4 AND 7";
                        $res = $conn->query($langages)->fetchAll();
                        foreach ($res as  $lang) {
                    ?>
                            <span data-src="images/<?php echo $lang['src_image_lang'] ?>"><?php echo $lang['name_langage'] ?></span>
                    <?php
                        }
                    }
                    for ($i = 0; $i < 3; $i++) {
                        line_two();
                    }
                    ?>
                </div>
                <div class="line line3">
                    <?php
                    function line_three()
                    {
                        global $conn;
                        $langages = "SELECT * FROM `langages` WHERE `id` BETWEEN 8 AND 11";
                        $res = $conn->query($langages)->fetchAll();
                        foreach ($res as  $lang) {
                    ?>
                            <span data-src="images/<?php echo $lang['src_image_lang'] ?>"><?php echo $lang['name_langage'] ?></span>
                    <?php
                        }
                    }
                    for ($i = 0; $i < 4; $i++) {
                        line_three();
                    }
                    ?>
                </div>
            </div>
        </div>
        <section class="service" id="service">
            <h1 class="service_title">Our Services</h1>
            <div class="services_content">
                <div class="card">
                    <i class="fa-solid fa-desktop"></i>
                    <h1>Web App Development</h1>
                    <div class="content">
                        <p>Web application development is the creation of application programs that reside on remote servers and are delivered to the user's device over the Internet. A web application (web app) does not need to be downloaded and is instead accessed through a network</p>
                        <p class="Read_more" data-bs-toggle="modal" data-bs-target="#web">
                            <a href="#" title="See More"></a>
                        </p>
                        <div class="modal fade" id="web" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Web App Development</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>Custom web app development tailored to your specific needs and goals.</li>
                                            <li>Responsive and user-friendly web designs for seamless user experience.</li>
                                            <li>Integration with third-party services and APIs to enhance functionality.</li>
                                            <li>Ongoing maintenance and support to ensure your web app stays up-to-date and secure.</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <i class="fa-solid fa-paintbrush"></i>
                    <h1>Graphic Designing</h1>
                    <div class="content">
                        <p>Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques, designers use typography and pictures to meet users' specific needs and focus on the logic of displaying elements in interactive designs, to optimize the user experience.</p>
                        <p class="Read_more" data-bs-toggle="modal" data-bs-target="#Graphic">
                            <a href="#" title="See More"></a>
                        </p>
                        <div class="modal fade" id="Graphic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Graphic Designing</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>Custom Logo Design: We can create a unique and eye-catching logo that accurately represents your brand.</li>
                                            <li>Brand Identity: We can help you establish a cohesive visual identity by designing business cards, letterheads, and other marketing materials.</li>
                                            <li>Illustration and Graphics: Our team can create beautiful illustrations and graphics that enhance your website, social media, or print materials.</li>
                                            <li>Packaging Design: We can design beautiful packaging that makes your product stand out on the shelves and attract customers.</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <i class="fa-solid fa-folder-tree"></i>
                    <h1>Professional SEO Services</h1>
                    <div class="content">
                        <p>Professional SEO services are search engine optimization services that work to improve your visibility in search results so that your business can capture more qualified traffic from the web. Most professional SEO services will include keyword research, content creation, outreach, and more</p>
                        <p class="Read_more" id="click_video" data-bs-toggle="modal" data-bs-target="#SEO">
                            <a href="#" title="See More"></a>
                        </p>
                        <div class="modal fade" id="SEO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Professional SEO Services</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>We specialize in optimizing websites</li>
                                            <li>To rank higher in search engine searches</li>
                                            <li>Our experts analyze and improve</li>
                                            <li>Your online presence to help you groove</li>
                                        </ul>   
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <i class="fa-solid fa-mobile"></i>
                    <h1>Mobile App Development</h1>
                    <div class="content">
                        <p>Mobile application development is the set of processes and procedures involved in writing software for small, wireless computing devices, such as smartphones and other hand-held devices.</p>
                        <p class="Read_more" id="click_video" data-bs-toggle="modal" data-bs-target="#Mobile">
                            <a href="#" title="See More"></a>
                        </p>
                        <!-- Modal -->
                        <div class="modal fade" id="Mobile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mobile App Development</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>Custom Mobile App Development: We offer bespoke app development services tailored to your specific business needs and goals</li>
                                            <li>UI/UX Design: Our team of designers creates visually stunning and user-friendly interfaces that enhance the overall user experience.</li>
                                            <li>App Testing & Quality Assurance: Our testing and quality assurance processes ensure that your app is stable, secure, and performs optimally on various devices and platforms.</li>
                                            <li>App Maintenance & Support: We provide ongoing maintenance and support services to ensure that your app stays up-to-date, secure, and continues to meet your evolving business needs.</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <i class="fa-brands fa-creative-commons"></i>
                    <h1>Content Creation Services</h1>
                    <div class="content">
                        <p>Content creation services are services that develop, write, and publish content for your business. Content creation can range from producing blog posts to white papers to emails. Content creation plans may also include search engine optimization, graphics, video, and more</p>
                        <p class="Read_more" id="click_video" data-bs-toggle="modal" data-bs-target="#ContentCreation">
                            <a href="#" title="See More"></a>
                        </p>
                        <div class="modal fade" id="ContentCreation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Content Creation Services</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>We provide high-quality content creation services for all your digital marketing needs.</li>
                                            <li>Our team of experienced writers can create engaging and informative content in various formats.</li>
                                            <li>From blog posts to social media content, we tailor our services to meet your specific requirements.</li>
                                            <li>Let us help you establish a strong online presence with our professional content creation services.</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <i class="fa-solid fa-database"></i>
                    <h1>Data Storage And Management</h1>
                    <div class="content">
                        <p>Data storage management refers to the process of managing data more effectively. It requires a proper understanding of storage devices and the availability of various types of data. Digital information may include protocols, documents, user preferences, address books, and more</p>
                        <p class="Read_more" id="click_video" data-bs-toggle="modal" data-bs-target="#Storage">
                            <a href="#" title="See More"></a>
                        </p>
                        <div class="modal fade" id="Storage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Data Storage And Management</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>We offer secure and reliable data storage solutions to meet your unique needs</li>
                                            <li>Our data management services ensure your information is organized, accessible, and up-to-date.</li>
                                            <li>We use state-of-the-art technology to protect your data from cyber threats and data loss.</li>
                                            <li>Our team of experts will work with you to create a customized data storage and management plan that meets your business goals.</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <i class="fa-solid fa-laptop"></i>
                    <h1>Desktop App Development</h1>
                    <div class="content">
                        <p> Desktop app development is very similar to mobile app development in that software is developed for particular devices and operating systems. In this case, desktop development refers to software built to run on computers</p>
                        <p class="Read_more" id="click_video" data-bs-toggle="modal" data-bs-target="#Desktop">
                            <a href="#" title="See More"></a>
                        </p>
                        <div class="modal fade" id="Desktop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Desktop App Development</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>Custom desktop application development to meet your unique business needs</li>
                                            <li>Cross-platform development to ensure compatibility with Windows, macOS, and Linux operating systems</li>
                                            <li>Integration with third-party tools and APIs for enhanced functionality</li>
                                            <li>Ongoing maintenance and support to ensure optimal performance and user experience</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pub_project">
            <div class="pub_project__bg">
                <div class="pub_project__container">
                    <div class="pub_project__data">
                        <h2 class="pub_project__title">You have a new project</h2>
                        <div class="project__description">
                            <span>Contact us now<br></span> and get a 30% discount on your new project.
                        </div>
                        <a href="contact.php" class="button button--flex button--white">
                            Contact Us
                            <i class="fa-solid fa-circle-arrow-right pub_project__icon"></i>
                        </a>
                    </div>
                    <img src="./images/bg_pub_project.jpg" class="pub_project__img" alt="">
                </div>
            </div>
        </section>
        <section class="project" id="project">
            <h1 class="project_title">Our Projects</h1>
            <div class="container">
                <div class="slider">
                    <div class="owl-carousel">
                        <?php
                        while ($row = $stmt->fetch()) {
                        ?>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="images/<?php echo $row["src_image"] ?>" alt="">
                                </div>
                                <h5 class="text-center p-4"><?php echo $row['name_project'] ?></h5>
                                <a href="single.php?name=<?php echo $row['name_project'] ?>" class="text-center"><span>Go Visit</span></a>
                            </div>
                        <?php
                        }
                        ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>