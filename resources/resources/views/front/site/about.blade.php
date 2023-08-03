@extends('front.layout.master')
@section('title', 'About us')
@section('body')


  <!--vertical nav  start-->
  <nav class="navbar1">

    <ul>

      <li>
        <a href="#ourhistory" class="dot active" data-scroll="ourhistory">
          <span>Our History</span>
        </a>
      </li>

      <li>
        <a href="#chairman" class="dot" data-scroll="chairman">
          <span>Chairman's Profile</span>
        </a>
      </li>

      <li>
        <a href="#boarddirector" class="dot" data-scroll="boarddirector">
          <span>Board of Directors</span>
        </a>
      </li>


    </ul>
  </nav>
  <!--vertical nav end here-->

  <section class="sec" id="ourhistory">
    <div class="about-section">
      <div class="responsive-container-block bigContainer">
        <div class="responsive-container-block Container bottomContainer">
          <div class="ultimateImg">
            <img class="mainImg" src="images/silder-2.jpg">
            <div class="purpleBox">
              <p class="purpleText">
                National Cyber Security Center - NCSC
              </p>

            </div>
          </div>
          <div class="allText bottomText">
            <p class="text-blk headingText">
              Our History
            </p>
            <p class="text-blk subHeadingText">
              National Cybersecurity Monitoring Center
            </p>
            <p class="text-blk description">
              Implement the function of monitoring information security in the entire cyberspace of Vietnam; establish a nationwide network of network information security monitoring.
            </p>
            <a class="explore">
              Contact
            </a>
          </div>
        </div>
      </div>
  </section>

  <section class="sec" id="chairman">
    <div class="responsive-container-block bigContainer">
      <div class="responsive-container-block Container bottomContainer">
        <div class="ultimateImg">
          <img class="mainImg" src="images/silder-2.jpg">
          <div class="purpleBox">
            <p class="purpleText">
              Dao Dinh Khuong- Chairman
            </p>
          </div>
        </div>
        <div class="allText bottomText">
          <p class="text-blk headingText">
            Chairman's Profile
          </p>
          <p class="text-blk subHeadingText">
            Dao Dinh Khuong
          </p>
          <p class="text-blk description">
            Implement the function of monitoring information security in the entire cyberspace of Vietnam; establish a nationwide network of network information security monitoring.
          </p>
          <a href="https://www.facebook.com/dinhkhuong.2004" class="explore">
            Contact
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="sec" id="boarddirector">
    <div class="responsive-container-block bigContainer">
      <div class="responsive-container-block Container bottomContainer">
        <div class="ultimateImg">
          <img class="mainImg" src="images/silder-2.jpg ">
          <div class="purpleBox">
            <p class="purpleText">
              Pham Tuan Khanh - Directors
            </p>
          </div>
        </div>
        <div class="allText bottomText">
          <p class="text-blk headingText">
            Board of Directors
          </p>
          <p class="text-blk subHeadingText">
            Pham Tuan Khanh
          </p>
          <p class="text-blk description">
            Implement the function of monitoring information security in the entire cyberspace of Vietnam; establish a nationwide network of network information security monitoring.
          </p>
          <a href="https://www.facebook.com/profile.php?id=100022787111248" class="explore">
            Contact
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection