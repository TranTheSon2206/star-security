@extends('front.layout.master')
@section('title', 'Home')
@section('body')


<!-- Body Here -->


<!--vertical nav  start-->
<nav class="navbar1">
        <ul>
            <li>
                <a href="#home" class="dot active" data-scroll="home">
                    <span>Carrer</span>
                </a>
            </li>
            <li>
                <a href="#services" class="dot" data-scroll="services">
                    <span>service</span>
                </a>
            </li>
            <li>
                <a href="#about" class="dot" data-scroll="about">
                    <span>About Us</span>
                </a>
            </li>
            <li>
                <a href="#network" class="dot" data-scroll="network">
                    <span>Our Network</span>
                </a>
            </li>
            <li>
                <a href="#contact" class="dot" data-scroll="contact">
                    <span>Contact</span>
                </a>
            </li>
        </ul>
</nav>
<!--vertical nav end here-->

<!-- home section starts  -->
<section class="home" id="home">

    <div class="content">
        <h3>career with us</h3>
        <p>Our mission is to provide protection and security to our clients through a bespoke service tailored to their specific needs. The safety and security of the client’s staff, premises, assets, and the general public is our highest priority.</p>
        <a href="#" class="btn">sign up</a>
    </div>

    <div class="image">
        <img src="images/rocket.svg" alt="">
    </div>

    <div class="cloud cloud-1"></div>
    <div class="cloud cloud-2"></div>

</section>
<!-- home section ends -->

<!-- services section starts  -->
<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/s-1.png" alt="">
            <h3>manned guarding</h3>
            <p>Bla Bla Bla Bla....</p>
            <a href="services.html" class="btn">Show more</a>
        </div>

        <div class="box">
            <img src="images/s-2.png" alt="">
            <h3>cash service</h3>
            <p>Bla Bla Bla Bla....</p>
            <a href="services.html" class="btn">Show more</a>
        </div>

        <div class="box">
            <img src="images/s-3.png" alt="">
            <h3>recruitment and training</h3>
            <p>Bla Bla Bla Bla....</p>
            <a href="services.html" class="btn">Show more</a>
        </div>

        <div class="box">
            <img src="images/s-4.png" alt="">
            <h3>Electronic security systems</h3>
            <p>Bla Bla Bla Bla....</p>
            <a href="services.html" class="btn">Show more</a>
        </div>


    </div>

</section>
<!-- services section ends -->

<!-- about section starts  -->
<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>
    
    <div class="row">

        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3 class="title">our history</h3>
            <p>bla bla bla bla...</p>
            <h3 class="title">our award</h3>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-award"></i>
                    <h3>14 award won</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-user"></i>
                    <h3>250 satisfied clients</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-project-diagram"></i>
                    <h3>200 projects completed</h3>
                </div>
            </div>
            <a href="about.html" class="btn">view details</a>
        </div>

    </div>

</section>
<!-- about section ends -->

<!-- our network section starts  -->
<section class="network" id="network">
    <h1 class="heading"> our <span>network</span> </h1>

    <div class="slider">
        <div class="slide active">
          <img src="images/slider-1.jpg" alt="">
          <div class="info">
            <h2>North region</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="slide">
          <img src="images/silder-2.jpg" alt="">
          <div class="info">
            <h2>West region</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="slide">
          <img src="images/silder-3.jpg" alt="">
          <div class="info">
            <h2>East region</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="slide">
          <img src="images/slide-4.jpg" alt="">
          <div class="info">
            <h2>South region</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
       
        <div class="navigation">
            <i class="fas fa-chevron-left prev-btn"></i>
        <i class="fas fa-chevron-right next-btn"></i>
        </div>
        <div class="navigation-visibility">
          <div class="slide-icon active"></div>
          <div class="slide-icon"></div>
          <div class="slide-icon"></div>
          <div class="slide-icon"></div>
          <div class="slide-icon"></div>
        </div>
    </div>

    <a href="network.html" class="btn">Show details</a>
</section>
<!-- our network section ends  -->

<!-- clients section starts   -->
<section class="portfolio" id="portfolio">

    <h1 class="heading"> our <span>Clients</span> </h1>

    <div class="box-container">

        <div class="box">
            <span>01</span>
            <img src="images/port-img1.jpg" alt="">
            <div class="content">
                <h3>web design</h3>
                <p>May, 2023</p>
            </div>
        </div>

        <div class="box">
            <span>02</span>
            <img src="images/port-img2.jpg" alt="">
            <div class="content">
                <h3>web design</h3>
                <p>May, 2023</p>
            </div>
        </div>

        <div class="box">
            <span>03</span>
            <img src="images/port-img3.jpg" alt="">
            <div class="content">
                <h3>web design</h3>
                <p>May, 2023</p>
            </div>
        </div>

        <div class="box">
            <span>04</span>
            <img src="images/port-img4.jpg" alt="">
            <div class="content">
                <h3>web design</h3>
                <p>May, 2023</p>
            </div>
        </div>

        <div class="box">
            <span>05</span>
            <img src="images/port-img5.jpg" alt="">
            <div class="content">
                <h3>web design</h3>
                <p>May, 2023</p>
            </div>
        </div>

        <div class="box">
            <span>06</span>
            <img src="images/port-img6.jpg" alt="">
            <div class="content">
                <h3>web design</h3>
                <p>May, 2023</p>
            </div>
        </div>

        <a href="clients.html" class="btn">Show more</a>

    </div>

</section>
<!-- portfolio section ends -->


<!-- reivew section starts  -->
<section class="review" id="review">

    <h1 class="heading"> client's <span>testimonials</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="user">
                <img src="images/pic-1.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <i class="fas fa-quote-right"></i>
            </div>
            <p>I am very satisfied with the security service provided by the company. The security personnel are highly professional and dedicated in their work. They always appear alert and ready to handle any emergency situations. I feel reassured having them ensure the safety and protection of the building and its residents. I will definitely continue using the company's services in the future and recommend it to my friends.</p>
        </div>

        <div class="box">
            <div class="user">
                <img src="images/pic-2.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <i class="fas fa-quote-right"></i>
            </div>
            <p>I am very satisfied with the security service provided by the company. The security personnel are highly professional and dedicated in their work. They always appear alert and ready to handle any emergency situations. I feel reassured having them ensure the safety and protection of the building and its residents. I will definitely continue using the company's services in the future and recommend it to my friends.</p>

        </div>

        <div class="box">
            <div class="user">
                <img src="images/pic-3.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <i class="fas fa-quote-right"></i>
            </div>
            <p>I am very satisfied with the security service provided by the company. The security personnel are highly professional and dedicated in their work. They always appear alert and ready to handle any emergency situations. I feel reassured having them ensure the safety and protection of the building and its residents. I will definitely continue using the company's services in the future and recommend it to my friends.</p>

        </div>

        <div class="box">
            <div class="user">
                <img src="images/pic-2.png" alt="">
                <div class="info">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <i class="fas fa-quote-right"></i>
            </div>
            <p>I am very satisfied with the security service provided by the company. The security personnel are highly professional and dedicated in their work. They always appear alert and ready to handle any emergency situations. I feel reassured having them ensure the safety and protection of the building and its residents. I will definitely continue using the company's services in the future and recommend it to my friends.</p>

        </div>
            
        <a href="testimonials.html" class="btn">Show more</a>

    </div>

</section>
<!-- reivew section ends -->

<!-- contact section starts  -->
<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>our number</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>
        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>our email</h3>
            <p>shaikhanas@gmail.com</p>
            <p>anashaikh@gmail.com</p>
        </div>
        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our location</h3>
            <p>Hanoi, VietNam - 10000</p>
        </div>
    </div>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed/v1/place?q=FPT%20Aptech%20H%C3%A0%20N%E1%BB%99i%20-%20H%E1%BB%87%20Th%E1%BB%91ng%20%C4%90%C3%A0o%20T%E1%BA%A1o%20L%E1%BA%ADp%20Tr%C3%ACnh%20Vi%C3%AAn%20Qu%E1%BB%91c%20T%E1%BA%BF%20(Since%201999)%2C%20T%C3%B4n%20Th%E1%BA%A5t%20Thuy%E1%BA%BFt%2C%20M%E1%BB%B9%20%C4%90%C3%ACnh%202%2C%20Nam%20T%E1%BB%AB%20Li%C3%AAm%2C%20H%C3%A0%20N%E1%BB%99i%2C%20Vi%E1%BB%87t%20Nam&amp;key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" placeholder="message" class="box" id="" cols="30" rows="10"></textarea>
            <a href="#" class="btn">send message</a>
            <a href="contact.html" class="btn" id="moredetails">More details</a>
        </form>

    </div>

</section>
<!-- contact section ends -->


@endsection