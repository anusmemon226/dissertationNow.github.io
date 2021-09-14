<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="assets/css/fonts.css" rel="stylesheet">
    <title>Dissertation Now</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--
-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo4.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="link">Home</a></li>
                            <li class="scroll-to-section"><a href="essay.php" class="link">Essay</a></li>
                            <li class="scroll-to-section"><a href="assignment.php" class="link">Assignment</a></li>
                            <li class="scroll-to-section"><a href="thesis.php" class="link">Thesis</a></li>
                            <li class="scroll-to-section"><a href="dissertation.php" class="link">Dissertation</a></li>

                            <!-- <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>  -->
                            <li class="scroll-to-section">
                                <div class="main-red-button-hover"><a href="contactus.php" class="link">Contact Us Now</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <div class="intro_head" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 text-center d-flex justify-content-center align-item-center">
              <a href="index.php" class="text-light"><h1 style="margin:0px;">Home</h1></a>
              <i class="fa fa-chevron-right mt-3 mx-3"></i>
                  <h1 style="margin:0px;">Contact Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row d-flex flex-column justify-content-center">
                <div class="col-lg-12">
                    <div class="section-heading d-flex flex-column justify-content-center">
                        <div class="info d-flex justify-content-center flex-wrap">
                            <span><i class="fa fa-phone"></i> <a href="#" class="my-auto">000-000-0000</a></span>
                            <span><i class="fa fa-envelope"></i> <a href="#" class="my-auto">info@company.com</a></span>
                            <span><i class="fa fa-globe"></i> <a href="#" class="my-auto">DissertationNow.co.uk</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 align-self-center ms-5 ms-md-0">
                    <form id="contact" action="" method="get">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="number" name="number" id="number" placeholder="Your Number" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" id="msg" placeholder="Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Submit Request</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-dec">
            <img src="assets/images/contact-dec.png" alt="">
        </div>
        <div class="contact-left-dec">
            <img src="assets/images/contact-left-dec.png" alt="">
        </div>
    </div>



    <?php include('components/footer.php') ?>


    <!-- Scripts -->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
        // Acc
        $(document).on("click", ".naccs .menu div", function() {
            var numberIndex = $(this).index();

            if (!$(this).is("active")) {
                $(".naccs .menu div").removeClass("active");
                $(".naccs ul li").removeClass("active");

                $(this).addClass("active");
                $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

                var listItemHeight = $(".naccs ul")
                    .find("li:eq(" + numberIndex + ")")
                    .innerHeight();
                $(".naccs ul").height(listItemHeight + "px");
            }
        });
    </script>
</body>

</html>