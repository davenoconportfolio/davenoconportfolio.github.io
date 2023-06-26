<?php include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<!--

-->

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$data['name']?> - <?=$data['title']?></title>
  <meta content="" name="description">
 

  <!-- Favicons -->
  <link href="assets/img/profile.jpg " rel='icon'>
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<!--
  ---------------------------------------------------------------


  ---------------------------------------------------------------
-->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?=$data['name']?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span><?=$data['title']?></span> from <?=$data['place']?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        
        
<!--
---------------------------------------------------------------


--------------------------------------------------------------
-->
        <?php   
          if($data['facebook']){
        ?>
            <a href="<?=$data["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <?php
          }
        ?>

     
<!--
  ---------------------------------------------------------------


  ---------------------------------------------------------------
-->
       

       
<!--
  ---------------------------------------------------------------


  ---------------------------------------------------------------
-->
        

      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
<!--
  ---------------------------------------------------------------


  ---------------------------------------------------------------
-->
    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/profile.jpg" class="img-fluid" alt="" style=" width: 80;">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $data['title']?></h3>
          <p class="fst-italic">
            <?=$data['slogan']?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo date('d M Y', strtotime($data['birthday']))?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?=$data['age']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Gender:</strong> <span><?=$data['Gender']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone Number:</strong> <span><?=$data['phone']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Province:</strong> <span><?=$data['city']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?=$data['degree']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a style="color: white;" href="mailto:<?=$data['email']?>"><?=$data['email']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>
                <?php 
                  if($data['freelance'] == 1){
                    echo "Available";
                  }
                  else{
                    echo "Not Available";
                  }
                  ?>
              </ul>
            </div>
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
        

                </span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
    <?php
    
    $counter = "SELECT * FROM `counter`";
    $counter_result = mysqli_query($con, $counter);

    ?>
    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">
    <?php
    if($counter_result -> num_rows > 0){
      while($row = $counter_result -> fetch_assoc()){
      ?>
        <div class="col-lg-3 col-md-6 mt-5">
          <div class="count-box">
            <i class="<?=$row['icon']?>"></i>
            <span data-purecounter-start="<?=$row['pre']?>" data-purecounter-end="<?=$row['post']?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?=$row['title']?></p>
          </div>
        </div>
        <?php
      }
    }

    ?>
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
      </div>

    </div><!-- End Counts -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row">

      <?php
      
      $skills = "SELECT * FROM `skills`";
      $skills_result = mysqli_query($con, $skills);

      if($skills_result -> num_rows > 0){
        while($skills_row = $skills_result -> fetch_assoc()){
          ?>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <i class="<?=$skills_row['icon']?>" style="color: #<?=$skills_row['color']?>;"></i>
                <h3><?=$skills_row['title']?></h3>
              </div>
            </div>
          <?php
        }
      }

      ?>
      </div>

      <!--
---------------------------------------------------------------


---------------------------------------------------------------
-->

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Motto in Life</h2>
      </div>

    

        <?php 
        
        $quets = "SELECT * FROM `quets`";
        $quets_result = mysqli_query($con, $quets);

        if($quets_result -> num_rows > 0){
          while($quets_row = $quets_result -> fetch_assoc()){
            ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?=$quets_row['quet']?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <h3><?=$quets_row['name']?></h3>
                  <h4><?=$quets_row['title']?></h4>
                </div>
              </div><!-- End testimonial item -->
            <?php
          }
        }
        
        ?>
        </div>

        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>Profile</h4>
            <p><em>I am taking a course Bachelor of Science in Information Technology. I
defined myself as hard-working, determined, ambitious, and driven
person.</em></p>
           
          </div>

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Primary Education</h4>
            <h5>2013</h5>
            <p><em>Buenavista 3 Elementary School</em></p>
  
          </div>
          <div class="resume-item">
            <h4>Seconday Education</h4>
            <h5>2017</h5>
            <p><em>Andres A. Nocon National High School </em></p>
          </div>
          <div class="resume-item">
            <h4>Senior High School</h4>
            <h5>2019</h5>
            <p><em>Philippine Christian University</em></p>
  
          </div>
          <div class="resume-item">
            <h4>College</h4>
            <h5>2023</h5>
            <p><em>City College of Tagaytay</em></p>
          </div>
        </div>
        
        <div class="col-lg-6">
          <h3 class="resume-title">Objectives</h3>
              <div class="resume-item">
            <h4></h4>

            <p><em>To be able to find a job where I can apply my
skills and develop my knowledge in technology
acquired from years of learning and to perform
well in a job.</em></p>
          </div>
          <h3 class="resume-title">Work Experience and Internship</h3>
          <div class="resume-item">
            <h4>CREOTEC PHILIPPINES INC. EMS GROUP</h4>
            <h5>August 2018</h5>
            <p>
            <ul>
              <li>80 hours work immersion.</li>
              <li>Compensation and benefits in human resource management.</li>
            </ul>
            </p>
          </div>
          
          <div class="resume-item">
            <h4>JR&R Distributors Inc. </h4>
            <h5>February-June 2023</h5>
            <p>
            <ul>
              <li>486 hours of On-the-Job Training Program.</li>
              <li>Work as Technical Support, Graphic Designer, Image and Video Editor, CCTV Operator, Encoder.</li>
              <li>Work as a Customer Service.</li>
            </ul>
            </p>
            
          </div>
          
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->
<!--
---------------------------------------------------------------

---------------------------------------------------------------
-->
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
      <?php 
        $services = "SELECT * FROM `services`";
        $services_result = mysqli_query($con, $services);
      ?>

      <div class="row">
        <?php
          if($services_result -> num_rows > 0){
            while($services_data = $services_result->fetch_assoc()){
              ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="icon-box">
                    <div class="icon"><i class="<?=$services_data['icon']?>"></i></div>
                    <h4><?=$services_data['title']?></h4>
                    <p><?=$services_data['text']?></p>
                  </div>
                </div>
              <?php
            }
          }
          else{
            echo "No Service Found.";
          }
        ?>
      </div>

    </div>
  </section><!-- End Services Section -->
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Sample Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php
              $cat_list = "SELECT * FROM `category`";
              $cat_result = mysqli_query($con, $cat_list);
              if($cat_result -> num_rows > 0){
                while($cat_data = $cat_result -> fetch_assoc()){
                  ?>
                  <li data-filter=".<?php echo $cat_data['name']?>"><?php echo $cat_data['name']?></li>
                  <?php
                }
              }
            ?>
          </ul>
        </div>
      </div>
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
      <div class="row portfolio-container">
        <?php
          $portfolio = "SELECT * FROM `portfolio`";
          $portfolio_result = mysqli_query($con, $portfolio);

          if($portfolio_result -> num_rows > 0){
            while($portfolio_data = $portfolio_result->fetch_assoc()){
              $category = $portfolio_data['category'];
                $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
                $category_result = mysqli_query($con, $category_sql);
                $category_data = mysqli_fetch_assoc($category_result);
              ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?=$category_data['name']?>">
                  <div class="portfolio-wrap">
                    <img src="<?=$portfolio_data['image']?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4><?=$portfolio_data['title']?></h4>
                      <p><?=$category_data['name']?></p>
                      <div class="portfolio-links">
                        <a href="<?=$portfolio_data['image']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $portfolio_data['title']?>"><i class="bx bx-plus"></i></a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }
          }
          else{
            echo "NO Portfolio Found.";
          }
        ?>
      </div>

    </div>
  </section><!-- End Portfolio Section -->
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?=$data['address']?></p>
          </div>
        </div>
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
             

              <?php   
                if($data['facebook']){
              ?>
                  <a href="<?=$data["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <?php
                }
              ?>
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
           
            

              
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
           
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?=$data['email']?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?=$data['phone']?></p>
          </div>
        </div>
      </div>
      <?php
        if(isset($_POST['send_message'])){
          global $con;
          $name = mysqli_real_escape_string($con, $_POST['name']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $subject = mysqli_real_escape_string($con, $_POST['subject']);
          $message = mysqli_real_escape_string($con, $_POST['message']);

          $contact = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
          mysqli_query($con, $contact);
        }
      ?>
      <form action="#" method="post" class="mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
<!--
---------------------------------------------------------------


---------------------------------------------------------------
-->
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center"><button type="submit" name="send_message">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->



  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<!--
---------------------------------------------------------------

-----------------------------------------------------
-->
</html>