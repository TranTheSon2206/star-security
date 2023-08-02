@extends('front.layout.master')
@section('title', 'Network')
@section('body')

<!--vertical nav  start-->
    <nav class="navbar1">

        <ul>

            <li>
                <a href="#north" class="dot active" data-scroll="north">
                    <span>North region</span>
                </a>
            </li>

            <li>
                <a href="#west" class="dot" data-scroll="west">
                    <span>west region</span>
                </a>
            </li>

            <li>
                <a href="#east" class="dot" data-scroll="east">
                    <span>west region</span>
                </a>
            </li>

            <li>
                <a href="#south" class="dot" data-scroll="south">
                    <span>south region</span>
                </a>
            </li>


        </ul>
    </nav>
 <!--vertical nav end here-->
 
    <section class="sec" id="north">
        <div class="region">
            <h1>North Region</h1>
        </div>
        <div class="adress">
            <h3><i class="fa-solid fa-location-dot"></i>Star Security Service</h3>
            <d>172 Yên Lãng,Đống Đa,Hà Nội</d>
            <h3><i class="fa-solid fa-user"></i>Contact</h3>
            <d>Mr Thanh</d>    
            <h3><i class="fa-solid fa-phone"></i>Phone</h3>
            <d>0356305187</d>
            <h3><i class="fa-solid fa-envelope"></i>Email</h3>
            <d>thanhden874@gmail.com</d>
        </div>
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.582994560552!2d105.81203971099605!3d21.00934658055437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9d73460ebd%3A0x386d06c4ec67a412!2zMTcyIFAuWcOqbiBMw6NuZywgTMOhbmcgSOG6oSwgxJDhu5FuZyDEkGEsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1686150248348!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </section>
    <section class="sec" id="west">
        <div class="adress">
            <h3><i class="fa-solid fa-location-dot"></i>Star Security Service</h3>
            <d>40/18 Trần Não,P.An Khánh,Tp Thủ Đức</d>
            <h3><i class="fa-solid fa-user"></i>Contact</h3>
            <d>Mr Son</d>    
            <h3><i class="fa-solid fa-phone"></i>Phone</h3>
            <d>0356305187</d>
            <h3><i class="fa-solid fa-envelope"></i>Email</h3>
            <d>thanhden874@gmail.com</d>
        </div>
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1805275082666!2d106.72810041079046!3d10.797481489308211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175274b0995a11f%3A0xf444f8042a7f9179!2sPMV%20Security%20HCMC!5e0!3m2!1svi!2s!4v1686150492333!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </section>
    <section class="sec" id="east">
        <div class="adress">
            <h3><i class="fa-solid fa-location-dot"></i>Star Security Service</h3>
            <d>107/43/5 Đường 38,KP.8,P.Hiệp Bình Chánh,TP.Thủ Đức, Tp.Hồ Chí Minh</d>
            <h3><i class="fa-solid fa-user"></i>Contact</h3>
            <d>Mr Duc</d>    
            <h3><i class="fa-solid fa-phone"></i>Phone</h3>
            <d>0356305187</d>
            <h3><i class="fa-solid fa-envelope"></i>Email</h3>
            <d>thanhden874@gmail.com</d>
        </div>
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3918.557252059497!2d106.734381510791!3d10.845154989263191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zMTA3LzQzLzUgxJDGsOG7nW5nIDM4LCBLUC4gOCwgUC4gSGnhu4dwIELDrG5oIENow6FuaCwgVFAuIFRo4bunIMSQ4bupYywgVHAuIEjhu5MgQ2jDrSBNaW5oIChUUEhDTSk!5e0!3m2!1svi!2s!4v1686151045344!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </section>
    <section class="sec" id="south">
        <div class="adress">
            <h3><i class="fa-solid fa-location-dot"></i>Star Security Service</h3>
            <d>Tầng 6A Tòa Nhà Kinh Đô,Số 292 Tây Sơn,Phường Trung Liệt,Quận Đống Đa TP.Hà Nội</d>
            <h3><i class="fa-solid fa-user"></i>Contact</h3>
            <d>Mr Khanh</d>    
            <h3><i class="fa-solid fa-phone"></i>Phone</h3>
            <d>0356305187</d>
            <h3><i class="fa-solid fa-envelope"></i>Email</h3>
            <d>thanhden874@gmail.com</d>
        </div>
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.637983808262!2d105.82032001099593!3d21.00714388055598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac817fa9cb81%3A0x1e474b1901c97c44!2zVMOyYSBOaMOgIEtpbmggxJDDtA!5e0!3m2!1svi!2s!4v1686152173029!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </section>

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

@endsection