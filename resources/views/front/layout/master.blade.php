<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | StarSecurity</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/home.css">

</head>

<body>

    <!-- Page Reloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- header section starts  -->
    <header class="header">

        <a href="#" class="logo">StarSecurity</a>

        <nav class="navbar">
            <a href="/">home</a>
            <a href="./service">services</a>
            <a href="#about">about us</a>
            <a href="./network">our network</a>
            <a href="#portfolio">clients</a>
            <a href="#review">testimonials</a>
            <a href="#contact">site map</a>
            <a href="./contact">contact</a>
            <a href="./login">login</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>
    <!-- header section ends -->


    <!-- Body here -->
    @yield('body')


    <!-- footer section starts  -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>our branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> clients </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> review </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-check"></i> Manned guarding </a>
                <a href="#"> <i class="fas fa-check"></i> Cash Services </a>
                <a href="#"> <i class="fas fa-check"></i> Recruitment and training </a>
                <a href="#"> <i class="fas fa-check"></i> Electronic security systems </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>

        <div class="credit">created by <span>StarSecurity</span> | all rights reserved</div>

    </section>
    <!-- footer section ends -->


    <!-- custom js file link  -->
    <script src="js/home.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" charset="utf-8"></script>



</body>

</html>