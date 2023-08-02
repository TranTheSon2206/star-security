@extends('front.layout.master')
@section('title', 'Services')
@section('body')

    <!--vertical nav  start-->
    <nav class="navbar1">
        <ul>
            <li>
                <a href="#mannedguarding" class="dot active" data-scroll="mannedguarding">
                    <span>manned guarding</span>
                </a>
            </li>
            <li>
                <a href="#cashservice" class="dot" data-scroll="cashservice">
                    <span>cash service</span>
                </a>
            </li>
            <li>
                <a href="#recruitmentandtraining" class="dot" data-scroll="recruitmentandtraining">
                    <span>recruitment and training</span>
                </a>
            </li>
            <li>
                <a href="#Electronicsecuritysystems" class="dot" data-scroll="Electronicsecuritysystems">
                    <span>Electronic security systems</span>
                </a>
            </li>
        </ul>
    </nav>
    <!--vertical nav end here-->

    <section class="sec" id="mannedguarding">
        <div class="sec__box">
            <div class="sec__content sec__content--left">
                <h1>Manned guarding</h1>
                <p>Manned guarding refers to the actual security guards that you’ll likely be familiar with.
                 It refers to the physical presence of security personnel and is a licensed activity that is monitored by a Government department. They could be placed to physically guard properties, people, assets or more against the threat of entry, assault, theft or criminal damage.
                </p>
                <p>A manned security guard will be put in place to protect various assets, which of course will depend on the needs and requirements of the client(s). Security guards will usually be uniformed and act to protect a designated property.
                </p>
            </div>
            <div class="sec__img sec__img--right">
                <img src="images/service/manned-guarding.jpg" alt="" width="100%" height="100%">
            </div>
        </div>
    </section>
    <section class="sec" id="cashservice">
        <div class="sec__box">
            <div class="sec__img sec__img--left">
                <img src="images/service/cash-service.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="sec__content sec__content--right">
                <h1>Cash Service</h1>
                <p>Cash remains a safe and widely used method of paying for goods and services, and is relied on by some of the most vulnerable groups in society.
                    The Cash Services team supports members through our forecasts of upcoming demand, the operational trading of notes and coin, and oversight of systemic cashflow risks.
                    In ensuring that the industry remains fit for purpose, we also work closely with The Royal Mint on tackling counterfeit coin in circulation and with the Bank on ensuring the correct amount of banknotes are in circulation. We work with our members and other participants in the cash supply chain to promote environmental sustainability within the cash system.  
                </p>
            </div>
        </div>
    </section>
    <section class="sec" id="recruitmentandtraining">
        <div class="sec__box">
            <div class="sec__content sec__content--left">
                <h1>Recruitment And Training</h1>
                <p>People are the lifeblood of every company. No matter what your mission is, no matter what challenge you’re facing, having the right employees in your ranks can lead you to success.
                But if your recruiting and talent acquisition teams aren’t optimized and upskilled, the odds of finding, hiring, and retaining the best people are drastically reduced. 
                </p>
                <p>Recruiters are the gatekeepers of talent. By ensuring that they are trained to understand the market and your organizational goals, provide a stellar interview experience, remove bias, 
                    and expand their scope of sourcing, you open the floodgates to star candidates.</p>
            </div>
            <div class="sec__img sec__img--right">
                <img src="images/service/recruitment-and-training.jpg" alt="" width="100%" height="100%">
            </div>
        </div>
    </section>
    <section class="sec" id="Electronicsecuritysystems">
        <div class="sec__box">
            <div class="sec__img sec__img--left">
                <img src="images/service/electronic-security-systems.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="sec__content sec__content--right">
                <h1>Electronic security systems</h1>
                <p>Electronic security systems use computer software and electronic devices to carry out a host of security functions to enhance the protection of a designated area. These systems monitor and collect data from subsystems, enabling system operators to interpret the data, determine a response, and counter events quickly.    
                </p>
            </div>
        </div>
    </section>
    <!-- <section class="sec" id="contact">contact</section> -->


    <!-- footer section starts  -->

    <section class="footer">

        <section class="box-container">

            <section class="box">
                <h3>our branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            </section>

            <section class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> clients </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> review </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            </section>

            <section class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-check"></i> Manned guarding </a>
                <a href="#"> <i class="fas fa-check"></i> Cash Services </a>
                <a href="#"> <i class="fas fa-check"></i> Recruitment and training </a>
                <a href="#"> <i class="fas fa-check"></i> Electronic security systems </a>
            </section>

            <section class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </section>

        </section>

        <section class="credit">created by <span>StarSecurity</span> | all rights reserved</section>

    </section>

    <!-- footer section ends -->

@endsection