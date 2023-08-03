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
                <a href="#electronicsecuritysystems" class="dot" data-scroll="electronicsecuritysystems">
                    <span>Electronic security systems</span>
                </a>
            </li>
        </ul>
    </nav>
    <!--vertical nav end here-->

    @foreach($services as $service)
        <section class="sec" id="{{ strtolower(str_replace(' ', '', $service->ServiceName)) }}">
            <div class="sec__box">
                <div class="sec__content sec__content--left">
                    <h1>{{ $service->ServiceName }}</h1>
                    <p>{{ $service->ServiceDescription }}</p>
                </div>
                <div class="sec__img sec__img--right">
                    <img src="images/service/{{ strtolower(str_replace(' ', '-', $service->ServiceName)) }}.jpg" alt="" width="100%" height="100%">
                </div>
            </div>
        </section>
    @endforeach
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