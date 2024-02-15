@extends('layouts.main')

@section('main-section')
<section class="banner-one" id="home">
            <div class="banner-bg-slide"
                data-options='{ "delay": 5000, "slides": [ { "src": "../fronted/images/main-slider/slider1.jpg" }, { "src": "../fronted/images/main-slider/slider1.jpg" } ], "transition": "fade", "timer": false, "align": "top", "animation": [ "kenburnsUp", "kenburnsDown", "kenburnsLeft", "kenburnsRight" ] }'>
            </div><!-- /.banner-bg-slide -->
            <div class="container">
                <div class="content-box">
                    <div class="top-title">
                        <h2>Find Your Future <br> Dream Home</h2>
                    </div>
                    <div class="banner_one_bottom_icon_text">
                        <div class="banner_one_bottom_icon">
                            <span class="icon-building"></span>
                        </div>
                        <div class="banner_one_bottom_text">
                            <p>HOUSE.LOVE.HOME</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section One End -->

<!-- ABout us  -->
<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{url('fronted/images/about/about1.jpeg')}}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4" style="color: #62CEC5">About Us</h1>
                <p class="mb-4">Hindustan Times Employees and Others Cooperative Group Housing Society was formed in the year 2002 and Registered on 20th Feb,2002. It is a recognised Society by the ROC Department. The Society had been allocated 1.23 acres of land in Sector 79, Mohali for the construction of flats with 47 active members in it. The Society is headed by Sh Maneesh Chhibber and assisted by a team of five other office bearers and Executive Members.</p>
            </div>
        </div>
    </div>
</div>
<!-- about us end -->
    <!--Why Choose One Start-->
    <section class="why_choose_one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url('../fronted/images/backgrounds/slider1.jpg')" id="importantdocument">
            <div class="container">
                <div class="why_choose_one_title">
                    <h2>Important Documents</h2>
                </div>
                <div class="why_choose_one_shape_one"
                    style="background-image: url(../fronted/images/shapes/why_choose_one_shape_1.png)"></div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp">
                            <a href="https://www.dropbox.com/s/8smg36vpz9drka9/Fire%20NOC.jpeg?dl=0" target="_blank"><div class="why_choose_one_icon">
                                <span class="fa fa-fire"></span>
                            </div>
                            <h3>Fire NOC</h3></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp" data-wow-delay="100ms">
                            <a href="https://www.dropbox.com/s/uzyqtwv5v450l15/Aviation%20NOC%20for%20Construction%20of%20Building%20HT.pdf?dl=0" target="_blank">
                            <div class="why_choose_one_icon">
                                <span class="fa fa-plane"></span>
                            </div>
                            <h3>Aviation NOC</h3></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp" data-wow-delay="200ms">
                            <a href="https://www.dropbox.com/s/vqqjmq81u87af8z/CA%20Audit%20Report%20for%20RERA.pdf?dl=0" target="_blank"><div class="why_choose_one_icon">
                                <span class="fa fa-tv"></span>
                            </div>
                            <h3>CA Report <br>for RERA</h3></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp" data-wow-delay="300ms">
                            <a href="https://www.dropbox.com/s/60b1an18too3tt3/HT%20Society%20%20Land%20Registery.pdf?dl=0" target="_blank"><div class="why_choose_one_icon">
                                <span class="fa fa-ribbon"></span>
                            </div>
                            <h3>HT Society  <br> Land Registry</h3></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp" data-wow-delay="300ms">
                            <a href="https://www.dropbox.com/s/h0120rdd9yn9uhi/Copy%20of%20agreement%20between%20Builder%20%26%20Society.pdf?dl=0" target="_blank"><div class="why_choose_one_icon">
                                <span class="fa fa-user"></span>
                            </div>
                            <h3>Copy of Agreement  <br> with Builder</h3></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp" data-wow-delay="300ms">
                            <a href="#" target="_blank"><div class="why_choose_one_icon">
                                <span class="fa fa-registered"></span>
                            </div>
                            <h3>Registery Documentation</h3></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp" data-wow-delay="300ms">
                            <a href="https://www.dropbox.com/s/tzadtbfii8beifr/Payment%20Reciepts%20from%20Members1.jpg?dl=0" target="_blank"><div class="why_choose_one_icon">
                                <span class="fa fa-money-bill-wave"></span>
                            </div>
                            <h3>Payment Receipts<br>from Members - 1</h3></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp" data-wow-delay="300ms">
                            <a href="https://www.dropbox.com/s/yuydo4vm6v745xz/Payment%20Reciepts%20from%20Members2.jpg?dl=0" target="_blank"><div class="why_choose_one_icon">
                                <span class="fa fa-money-bill-wave"></span>
                            </div>
                            <h3>Payment Receipts<br>from Members - 2</h3></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        <!--Why Choose One End-->

        <!--Latest Properties Start-->
        <section class="latest_properties" id="aproveplans">
            <div class="container">
                <div class="block-title text-center">
                    <h2>APPROVED BUILDING PLANS</h2>
                </div>
                <div class="row">
                <div class="wrapper">
                  <i id="left" class="fas fa-angle-left"></i>
                  <div class="carousel">
                    <img src="{{url('fronted/images/resources/map 1.jpg')}}" alt="img" draggable="false">
                    <img src="{{url('fronted/images/resources/map 2.jpg')}}" alt="img" draggable="false">
                    <img src="{{url('fronted/images/resources/map 3.jpg')}}" alt="img" draggable="false">
                    <img src="{{url('fronted/images/resources/map 4.jpg')}}" alt="img" draggable="false">
                    <img src="{{url('fronted/images/resources/map 5.jpg')}}" alt="img" draggable="false">
                    <img src="{{url('fronted/images/resources/map 6.jpg')}}" alt="img" draggable="false">
                    <img src="{{url('fronted/images/resources/map 7.jpg')}}" alt="img" draggable="false">
                    <img src="{{url('fronted/images/resources/map 8.jpg')}}" alt="img" draggable="false">
                    <img src="{{url('fronted/images/resources/map 9.jpg')}}" alt="img" draggable="false">
                    <img src="{{url('fronted/images/resources/map 10.jpg')}}" alt="img" draggable="false">
                  </div>
                  <i id="right" class="fas fa-angle-right"></i>
                </div>     
              </div>
            </div>
        </section>

        <!-- Bank documentation -->
        <section class="how_it_works" id="bankdocument">
            <div class="how_it_works_shape_1">
                <img src="{{url('fronted/images/shapes/how_it_works_shape_1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="block-title text-center">
                    <h2>Bank Documentation</h2>
                </div>
                <div class="row">
                    <div class="column">
                        <a href="https://www.dropbox.com/s/wwczdq35yvrr753/Papers%20%20required%20for%20initiation%20of%20Home%20Loan%20Process%20by%20PNB%20Bank.jpeg?dl=0" target="_blank"><img src="{{url('fronted/images/banks/Document1.jpg')}}" style="width:100%;"></a>
                        <div class="how_it_works_content text-center">
                            <p style="color:#000;">Papers required for initiation of Home Loan Process by PNB Bank</p>
                        </div>
                    </div>
                    <div class="column">
                        <a href="https://www.dropbox.com/s/24cuncknpln2o5z/Loan%20Requiste%20Documents.jpg?dl=0" target="_blank"><img src="{{url('fronted/images/banks/Document2.jpg')}}" style="width:100%;"></a>
                        <div class="how_it_works_content text-center">
                            <p style="color:#000;">Loan Requisite Documents</p>
                        </div>
                    </div>
                    <div class="column">
                        <a href="https://www.dropbox.com/s/1ul1z3o98chseh3/PNB%20Housing%20loan%20Sector%2017%20Doc.pdf?dl=0" target="_blank"><img src="{{url('fronted/images/about/about1.jpeg')}}" style="width:100%;"></a>
                        <div class="how_it_works_content text-center">
                            <p style="color:#000;">PNB Housing Loan Form </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- gallery  -->
        <section class="property-plans">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 wow fadeInUp"> 
                <h2><span>Hindustan</span> Times Design</h2>
                <p>We are waiting for you in our sales office for having all these opportunities with affordable prices and appropriate payment opportunities..</p>
                <table>
                  <tbody>
                    <tr>
                      <td>Total area:</td>
                      <td>1.27 acres</td>
                    </tr>
                    <tr>
                      <td>Total Floor:</td>
                      <td>12 Floor</td>
                    </tr>
                    <tr>
                      <td>Total Flat:</td>
                      <td>47</td>
                    </tr>
                    <tr>
                      <td>Club House:</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Super Area:</td>
                      <td>2225 sq.ft</td>
                    </tr>
                    <tr>
                      <td>Carpet Area:</td>
                      <td>1858 sq.ft</td>
                    </tr>
                  </tbody>
                </table>
                <a href="{{ url('gallery') }}"><button type="button" class="btn btn-primary">Gallery</button></a>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.05s">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab-one">
                    <figure><img src="{{url('fronted/images/backgrounds/download.jpg')}}" style="    width: 100%;padding: 10px;"></figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
</section>
@endsection
            