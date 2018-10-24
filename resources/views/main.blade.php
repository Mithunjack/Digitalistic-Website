<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="  width=device-width, initial-scale=1,  user-scalable=no"/>
    <title>Digitalistic</title>
    <!-- SEO -->
    <meta name="description" content="We specialize in information catering, Digital Signage, Smart Display for Advertisement & Video Wall Technology based in Dhaka, Bangladesh. We create custom management panel for business solutions, Cu" />
    <meta name="keywords" content="Digital signage in bd , Digital signage solution in bd , Queue Management solution in bd , Digital Advertisement Medium in bd , Low cost digital signage in bd  , Best digital signage provider in bd , Best Digital display provider in bd" />
    <meta name="author" content="metatags generator">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">
    <title> A complete Digital Signage solution in Bangladesh</title>
    <!-- Signage, RFID, Bangladesh -->

    <!-- Adding Favicon -->
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="15x15">
    <!-- CSS Meterialize -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/Styles.css')}}">
    <!-- Circle css -->
    <link rel="stylesheet" href="{{url('css/circle.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <script src="{{url('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{url('js/jssor.slider-27.0.4.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">

        jssor_2_slider_init = function() {

            var jssor_2_options = {
                $AutoPlay: 1,
                $Idle: 0,
                $SlideDuration: 3000,
                $SlideEasing: $Jease$.$Linear,
                $FillMode: 1,
                /*$PauseOnHover: 4,*/
                $SlideWidth:250,
                $Cols: 6,
                $Align: 0
            };

            var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);


            /*#region responsive code begin*/

            var MAX_WIDTH = 1920;

            function ScaleSlider() {
                var containerElement = jssor_2_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_2_slider.$ScaleWidth(expectedWidth);

                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
</head>

<body>
<div class="navbar-fixed">
    <nav >
        <div class="nav-wrapper" style="height: 80px;">
            <a href="#home" class="brand-logo" ><img src="icon_files/Digitallogo.svg"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu" style="margin: 25% 15%;"></i></a>

            <ul class="right hide-on-med-and-down wow slideInRight" data-wow-duration="1s">
                <li><a href="#home">Home</a></li>
                <li><a href="#Services">Service</a></li>
                <!-- <li><a href="#Gallery">Gallery</a></li> -->
                <li><a href="#Team">Team</a></li>
                <li><a href="#About">About</a></li>
                <!-- <li><a href="#">Testimonials</a></li> -->
                <li><a href="#Contact">Contact Us</a></li>
                <li><a href="#clints" style="padding-right: 30px;">Clients</a></li>
                <!-- <li><a href="#">Blog</a></li> -->
            </ul>

            <ul class="side-nav" id="mobile-demo">
                <li><a href="#home" class="sidenav-close">Home</a></li>
                <li><a href="#Services" class="sidenav-close">Service</a></li>
                <!-- <li><a href="#Gallery">Gallery</a></li> -->
                <li><a href="#Team" class="sidenav-close">Team</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#clints">Clients</a></li>
                <!-- <li><a href="#">Testimonials</a></li> -->
                <li><a href="#Contact">Contact Us</a></li>
                <!-- <li><a href="#">Blog</a></li> -->
                <div class="center-align icon-caption-position-mobile">
                    <a class="pulse black waves-effect waves-light btn btn-small social twitter" style="border-radius: 100%" href="https://twitter.com/digitalisticbd">
                        <i class="fa fa-twitter" style="width: 25px;height: 25px"></i>
                    </a>
                    <a class="pulse black  waves-effect waves-light btn btn-small social linkedin" style="border-radius: 100%" href="https://www.linkedin.com/company/digitalistic">
                        <i class="fa fa-linkedin" style="width: 25px;height: 25px"></i>
                    </a>
                    <a class="pulse black waves-effect waves-light btn btn-small social facebook" style="border-radius: 100%" href="https://www.facebook.com/digitalistic7">
                        <i class="fa fa-facebook" style="width: 25px;height: 25px"></i>
                    </a>

                </div>
            </ul>
        </div>
    </nav>
</div>

<div class="row slider fullscreen scrollspy land-slides" id="home"   >
    <div >
        <ul class="slides" >
            <?php
            $captionleft = "";
            foreach ($data['carousel'] as $slide) {

              $s = get_object_vars($slide);

            ?>
            <li>
                <!-- Caption For Pc -->
                <img src="{{url('uploads/contents')}}/<?= $s['slide'] ?>">
                <div class="caption caption-alignment hide-on-med-and-down land-slide-pc">
                        <?php
                         if($s['align']=="left-align")
                         {
                            $captionleft = "caption-left";
                         }
                        ?>
                        <div class="{{ $s['align'] }}">
                            @if ($s['heading'] != null)
                                <h3 class="<?= $s['font']?>-text" > {{ $s['heading'] }}</h3>
                            @endif
                            @if ($s['description'] != null)
                                <h5 style="width: 100%;margin: 0 auto;" class="light text-lighten-3 {{ $captionleft }} <?= $s['font'] ?>-text ">{{ $s['description'] }}</h5>
                            @endif
                        </div>

                </div>
                <!-- Caption For Mobile Devices -->
                <div class="caption {{ $s['align'] }} caption-alignment hide-on-large-only land-slide-mobile">
                        <?php
                         if($s['align']=="left-align")
                         {
                            $captionleft = "caption-left";
                         }
                        ?>
                      @if ($s['heading'] != null)
                        <h5 class="<?= $s['font']?>-text" >{{ $s['heading'] }}</h5>
                      @endif
                      @if ($s['description'] != null)
                        <h6 class="light <?= $s['font']?>-text text-lighten-3 {{ $captionleft }}">{{ $s['description'] }}</h6>
                      @endif
                </div>
            </li>

            <?php
            }
            ?>
        </ul>
    </div>
</div>

<div class="row click-me">

    <div class="col s12 m7 l8 xl9  click-me-firstcol valign-wrapper  wow slideInLeft" style="min-height: 80px;">

        <h3 class="center-align hide-on-med-and-down click-me-text">Know who we are &amp; what we do</h3>
        <h3 class="center-align flow-text show-on-med-and-down hide-on-large-only">Know who we are &amp; what we do</h3>

    </div>
    <div class="col s12 m5 l4 xl3  click-me-firstcol " style="min-height: 50px;">
        <div style="width: 100%;height: 100%" class="valign-wrapper wow slideInRight">
            <a href="portfolio.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light click-me-btn" type="submit" name="action">Portfolio
                <i class="material-icons right " >file_download</i>
            </button></a>
        </div>
    </div>
</div>

<div class="row freePsd scrollspy" id="Services">

    <div class="col xl1 l1 hide-on-med-and-down psdtofreeSide">

    </div>
    <div class="col xl10 l10 m12 s12 accent-4 psdtofreeCol  ">
        <!-- Popup -->
        {{--<div style="position:relative;width: 0;height: 0;z-index: 1;">--}}
            {{--<div  class="popup1 overlay ">--}}
                  {{--<div class="popup">--}}
                     {{--<div class="row close-position" >--}}
                      {{--<p class="close">&times;</p>--}}
                     {{--</div>--}}
                      {{--<div class="row content">--}}

                             {{--<div class="col xl6 l6 m6 s12">--}}
                                 {{--<div class="row big-icon-div">--}}
                                     {{--<img src="{{url('img')}}/web icons Digitalistic-01.png" class="responsive-img service-gallery-header">--}}
                                 {{--</div>--}}
                                 {{--<div class="row center-align" style="padding-top: 2%;">--}}
                                     {{--<h5>IOT</h5>--}}
                                     {{--<h6>Solutions involbing IOT Devices which enables automation</h6>--}}
                                 {{--</div>--}}
                                 {{--<div class="row  show-on-medium-and-up hide-on-small-only" style="padding-top: 3%;padding-bottom: 3%;margin: 0 8%;">--}}
                                     {{--<div class="col xl2 l2 m2 s2">--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-01.png" data-service="SRS" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                     {{--<div class="col xl2 l2 m2 s2">--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-02.png" data-service="DMS" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                     {{--<div class="col xl2 l2 m2 s2">--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-03.png" data-service="WD" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                     {{--<div class="col xl2 l2 m2 s2">--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-04.png" data-service="IOT" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                     {{--<div class="col xl2 l2 m2 s2">--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-05.png" data-service="KIOSK" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                     {{--<div class="col xl2 l2 m2 s2">--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-06.png" data-service="CLOUD" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                 {{--</div>--}}
                                 {{--<div class="row hide-on-med-and-up show-on-small right-img" >--}}
                                 {{--<img src="{{url('img')}}/service-images/SRS.png" class="responsive-img service-gallery-body" style="object-fit: contain;width: 100%;height: 100%;">--}}
                                {{--</div>--}}
                             {{--</div>--}}
                             {{--<div class="col xl6 l6 m6 s12">--}}
                                {{--<div class="row show-on-medium-and-up hide-on-small-only right-img">--}}
                                 {{--<img src="{{url('img')}}/service-images/IOT.png" class="responsive-img service-gallery-body" style="object-fit: contain;width: 100%;height: 100%;">--}}
                                {{--</div>--}}
                                {{--<div class="row hide-on-med-and-up show-on-small-only" style="padding-top: 3%;padding-bottom: 3%;">--}}
                                     {{--<div class="col xl2 l2 m2 s2" >--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-01.png" data-service="SRS" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                     {{--<div class="col xl2 l2 m2 s2" >--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-02.png" data-service="DMS" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                     {{--<div class="col xl2 l2 m2 s2" >--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-03.png" data-service="WD" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                     {{--<div class="col xl2 l2 m2 s2" >--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-04.png" data-service="IOT" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                     {{--<div class="col xl2 l2 m2 s2" >--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-05.png" data-service="KIOSK" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                     {{--<div class="col xl2 l2 m2 s2" >--}}
                                         {{--<div class="row small-icon-div">--}}
                                            {{--<img src="{{url('img')}}/web icons Digitalistic-06.png" data-service="CLOUD" class="responsive-img service-gallery">--}}
                                         {{--</div>--}}
                                     {{--</div>--}}
                                 {{--</div>--}}
                             {{--</div>--}}

                      {{--</div>--}}
                  {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="modal terms-service" id="terms">




                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="service-rfid">

                            {{--Heading--}}
                            <div class="row">
                                <div class="col s12 m12 l6 xl6 " style="margin: 0;padding:0">

                                        <div class="service-heading">
                                            <h4>RFID Solution</h4>
                                        </div>

                                        <div class="service-details"  style="margin: 0;padding:0">
                                            <p>One of the key strength of Digitalistic is the capacity to develop custom services & products which exactly caters to specific customer needs. In the case of RFID BASED inventory management system, we have developed our own custom application from ground-up for RFID hardware identification- and tracking systems, we also provide the optimal solutions to improve, simplify and automate RFID challenges for Garments, Agriculture, IT based asset, Pharmaceuticals & Aquaculture industries worldwide. For more information please download our portfolio....</p>

                                        </div>
                                        <a href="javascript:void(0)" class="service-detail-see-more">See More...</a>

                                        <div class="service-port-btn show-on-large hide-on-med-and-up hide-on-small-and-down">
                                            <a href="rfid.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                                </button>
                                            </a>
                                        </div>

                                </div>

                                {{--service-rfid-img--}}
                                {{--service-rfid-img-parent--}}


                                <div class="col s12 m12 l6 xl6">
                                        <div class="service-image-div">
                                            <img src="{{url('img/service-images')}}/RFID.png" data-service="WD" class="responsive-img service-gallery">
                                        </div>


                                    <div class="service-port-btn hide-on-large-only show-on-medium-and-down show-on-small">
                                        <a href="rfid.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="service-rfid">

                            {{--Heading--}}
                            <div class="row">
                                <div class="col s12 m12 l6 xl6 " style="margin: 0;padding:0">

                                    <div class="service-heading">
                                        <h4>Digital Signage/KIOSK</h4>
                                    </div>

                                    <div class="service-details"  style="margin: 0;padding:0">
                                        <p>This amazing solution provides you with an alternate medium of Advertisement in a place of your interest. Digital Signage is basically a content distribution platform for delivering rich media content to one or more digital displays. These displays can communicate information like, news, TV, weather, menus, calendars, advertising all from any web browser, tablet or mobile device. Environments such as corporate buildings, retail stores, hotels and restaurants are becoming a common place for Digital Signage. Our in house developed powerful Digital Display Signage manager will provide unprecedented level of media/content management control at your fingertips. For more details please download our portfolio...</p>
                                    </div>
                                    <a href="javascript:void(0)" class="service-detail-see-more">See More...</a>

                                    <div class="service-port-btn show-on-large hide-on-med-and-up hide-on-small-and-down">
                                        <a href="digital-signage.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                            </button>
                                        </a>
                                    </div>

                                </div>

                                {{--service-rfid-img--}}
                                {{--service-rfid-img-parent--}}


                                <div class="col s12 m12 l6 xl6">
                                    <div class="service-image-div">
                                        <img src="{{url('img/service-images')}}/kiosk.png" data-service="WD" class="responsive-img service-gallery">
                                    </div>


                                    <div class="service-port-btn hide-on-large-only show-on-medium-and-down show-on-small">
                                        <a href="digital-signage.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="service-rfid">

                            {{--Heading--}}
                            <div class="row">
                                <div class="col s12 m12 l6 xl6 " style="margin: 0;padding:0">

                                    <div class="service-heading">
                                        <h4>Digital Retail Solution</h4>
                                    </div>

                                    <div class="service-details"  style="margin: 0;padding:0">
                                        <p>Our extensive array of engineers and developers are ready to take your existing retail business to a next level. With the help of interactive display, custom view, app integration and IOT based solution will help customers visualize the product and establish brand loyalty. Based on client’s requirement we can accommodate to any type of custom solution which will cater to individual retailers. For details and to visualize sample solution, please download our portfolio…..</p>
                                    </div>
                                    <a href="javascript:void(0)" class="service-detail-see-more">See More...</a>

                                    <div class="service-port-btn show-on-large hide-on-med-and-up hide-on-small-and-down">
                                        <a href="digital-retail.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                            </button>
                                        </a>
                                    </div>

                                </div>

                                {{--service-rfid-img--}}
                                {{--service-rfid-img-parent--}}


                                <div class="col s12 m12 l6 xl6">
                                    <div class="service-image-div">
                                        <img src="{{url('img/service-images')}}/digitalretail.png" data-service="WD" class="responsive-img service-gallery">
                                    </div>


                                    <div class="service-port-btn hide-on-large-only show-on-medium-and-down show-on-small">
                                        <a href="digital-retail.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="service-rfid">

                            {{--Heading--}}
                            <div class="row">
                                <div class="col s12 m12 l6 xl6 " style="margin: 0;padding:0">

                                    <div class="service-heading">
                                        <h4>Remote Content Manager</h4>
                                    </div>

                                    <div class="service-details"  style="margin: 0;padding:0">
                                        <p>With our custom solution, it is possible to remotely deploy, control and analyze media content across all your customer-facing broadcast mediums, such as display panel, video wall or digital greeting systems, with REMOTELY-hosted content management system. This can be done from anywhere in the world. With endless possibilities, Digitalistic’s Remote Management system is designed and developed to support any industrial need of web content creation, distribution, and ultimately remote management of rich contents, along with websites without compromising the web quality. It could be e-commerce pages or can be customized info catalogs, news pages, or more. Digitalistic’s unique centralized control panel offers multiple tools to remotely control the distributed content through any mediums. If you have any further quires, please download the portfolio for more details or leave your name and numer, so that we can get in touch with you....</p>
                                    </div>
                                    <a href="javascript:void(0)" class="service-detail-see-more">See More...</a>

                                    <div class="service-port-btn show-on-large hide-on-med-and-up hide-on-small-and-down">
                                        <a href="portfolio.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                            </button>
                                        </a>
                                    </div>

                                </div>

                                {{--service-rfid-img--}}
                                {{--service-rfid-img-parent--}}


                                <div class="col s12 m12 l6 xl6">
                                    <div class="service-image-div">
                                        <img src="{{url('img/service-images')}}/rcms.png" data-service="WD" class="responsive-img service-gallery">
                                    </div>


                                    <div class="service-port-btn hide-on-large-only show-on-medium-and-down show-on-small">
                                        <a href="portfolio.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="service-rfid">

                            {{--Heading--}}
                            <div class="row">
                                <div class="col s12 m12 l6 xl6 " style="margin: 0;padding:0">

                                    <div class="service-heading">
                                        <h4>Web Development</h4>
                                    </div>

                                    <div class="service-details"  style="margin: 0;padding:0">
                                        <p>Digitalistic is an innovative & extremely forward thinking software development company,  Digitalistic provides reliable web and mobile solutions spanning across Custom Web Development platforms, UI/UX Design Solutions, E-Commerce Solutions, Database Programming, CMS Development, Native Mobile Apps Development, Cross-Platform Mobile App Development, Enterprise Mobility Solutions and IT Consulting – offering businesses delightfully tailored and trendy solutions in their budget. Our Portfolio will provide you with an in death idea about us....</p>
                                    </div>
                                    <a href="javascript:void(0)" class="service-detail-see-more">See More...</a>

                                    <div class="service-port-btn show-on-large hide-on-med-and-up hide-on-small-and-down">
                                        <a href="portfolio.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                            </button>
                                        </a>
                                    </div>

                                </div>

                                {{--service-rfid-img--}}
                                {{--service-rfid-img-parent--}}


                                <div class="col s12 m12 l6 xl6">
                                    <div class="service-image-div">
                                        <img src="{{url('img/service-images')}}/webdesign.png" data-service="WD" class="responsive-img service-gallery">
                                    </div>


                                    <div class="service-port-btn hide-on-large-only show-on-medium-and-down show-on-small">
                                        <a href="portfolio.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="service-rfid">

                            {{--Heading--}}
                            <div class="row">
                                <div class="col s12 m12 l6 xl6 " style="margin: 0;padding:0">

                                    <div class="service-heading">
                                        <h4>Digital Marketing</h4>
                                    </div>

                                    <div class="service-details"  style="margin: 0;padding:0">
                                        <p>We offer full-service social media management services. Transform your social media presence with high-quality content, daily activity, and increasing followers. Our social media advertising services expedites your results. You can reach people instantly. This means you can generate followers, engagement, and website traffic fast. The more ad dollars you’re able to provide, the more people we can reach. As you reach more people, you open up the door for more awareness, traffic and sales. Download our Service Portfolio to know more....</p>
                                    </div>
                                    <a href="javascript:void(0)" class="service-detail-see-more">See More...</a>

                                    <div class="service-port-btn show-on-large hide-on-med-and-up hide-on-small-and-down">
                                        <a href="portfolio.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                            </button>
                                        </a>
                                    </div>

                                </div>

                                {{--service-rfid-img--}}
                                {{--service-rfid-img-parent--}}


                                <div class="col s12 m12 l6 xl6">
                                    <div class="service-image-div">
                                        <img src="{{url('img/service-images')}}/digitalmarketing.png" data-service="WD" class="responsive-img service-gallery">
                                    </div>


                                    <div class="service-port-btn hide-on-large-only show-on-medium-and-down show-on-small">
                                        <a href="portfolio.pdf" rel="noopener noreferrer" target="_blank"><button class="btn waves-effect waves-light" type="submit" name="action">Portfolio
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
        </div>





        {{--Service Portion--}}
        <div class="row psdtofreeInnerRowFirst ">


                <div class="col xl4 l4 m4 s4 serviceClass wow bounceInDown"   data-wow-duration="2s" data-wow-delay=".1s" style="padding-bottom: 5%">
                    <div class="row freepsddiv center-align hoverable service-modal-trigger" data-id="1" style="margin: 0 auto">
                        <div style="padding: 15% 13%">
                            <img src="{{url('uploads/contents')}}/<?= $data['service'][0]->icon; ?>" class="freepsdImg" >
                        </div>
                    </div>
                    <div class="row center-align service-title-text">
                         <p class="service-title-p-tag"><b>RFID Based Solution</b></p>
                    </div>

                    <div class="service-div-portfolio-btn">
                        <div class="valign-wrapper wow slideInRight">
                            <a href="rfid.pdf" rel="noopener noreferrer" target="_blank">
                                <button class="btn waves-effect waves-light service-port-below-btn" type="submit" name="action">Portfolio</button>
                            </a>
                        </div>
                    </div>
                </div>




            <div class="col xl4 l4 m4 s4 serviceClass wow bounceInDown "  data-wow-duration="2s" data-wow-delay=".1s" style="padding-bottom: 5%">
                <div class="row freepsddiv center-align hoverable service-modal-trigger" data-id="2" style="margin: 0 auto">
                    <div style="padding: 15% 13%">
                        <img src="{{url('uploads/contents')}}/<?= $data['service'][1]->icon; ?>" class="freepsdImg" >
                    </div>
                </div>
                <div class="row center-align service-title-text">
                     <p class="service-title-p-tag"><b>Digital Signage/Kiosk</b><!-- <?= $data['service'][1]->title; ?> --></p>
                </div>

                <div class="service-div-portfolio-btn">
                    <div class="valign-wrapper wow slideInRight">
                        <a href="digital-signage.pdf" rel="noopener noreferrer" target="_blank">
                            <button class="btn waves-effect waves-light service-port-below-btn" type="submit" name="action">Portfolio</button>
                        </a>
                    </div>
                </div>
            </div>




            <div class="col xl4 l4 m4 s4 serviceClass wow bounceInDown "  data-wow-duration="2s" data-wow-delay=".1s" style="padding-bottom: 5%">
                <div class="row freepsddiv center-align hoverable service-modal-trigger"  data-id="3" style="margin: 0 auto">
                    <div style="padding: 15% 13%">
                        <img src="{{url('uploads/contents')}}/<?= $data['service'][2]->icon; ?>" class="freepsdImg" >
                    </div>
                </div>
                <div class="row center-align service-title-text">
                     <p class="service-title-p-tag"><b>Digital Retail Solution</b><!-- <?= $data['service'][2]->title; ?> --></p>
                </div>

                <div class="service-div-portfolio-btn">
                    <div class="valign-wrapper wow slideInRight">
                        <a href="digital-retail.pdf" rel="noopener noreferrer" target="_blank">
                            <button class="btn waves-effect waves-light service-port-below-btn" type="submit" name="action">Portfolio</button>
                        </a>
                    </div>
                </div>
            </div>





            <div class="col xl4 l4 m4 s4 serviceClass wow bounceInDown"  data-wow-duration="2s" data-wow-delay=".1s" style="padding-bottom: 5%">
                <div class="row freepsddiv center-align hoverable service-modal-trigger" data-id="4" style="margin: 0 auto">
                    <div style="padding: 15% 13%">
                        <img src="{{url('uploads/contents')}}/<?= $data['service'][3]->icon; ?>" class="freepsdImg" >
                    </div>
                </div>
                <div class="row center-align service-title-text">
                     <p class="service-title-p-tag"><b>Remote Management</b><!-- <?= $data['service'][3]->title; ?> --></p>
                </div>

                <div class="service-div-portfolio-btn">
                    <div class="valign-wrapper wow slideInRight">
                        <a href="portfolio.pdf" rel="noopener noreferrer" target="_blank">
                            <button class="btn waves-effect waves-light service-port-below-btn" type="submit" name="action">Portfolio</button>
                        </a>
                    </div>
                </div>
            </div>
            </a>



            <div class="col xl4 l4 m4 s4 serviceClass wow bounceInDown "  data-wow-duration="2s" data-wow-delay=".1s" style="padding-bottom: 5%">
                <div class="row freepsddiv center-align hoverable service-modal-trigger" data-id="5"  style="margin: 0 auto">
                    <div style="padding: 15% 13%">
                        <img src="{{url('uploads/contents')}}/<?= $data['service'][4]->icon; ?>" class="freepsdImg" >
                    </div>
                </div>
                <div class="row center-align service-title-text">
                     <p class="service-title-p-tag" ><b>Website Design & Development</b><!-- <?= $data['service'][4]->title; ?> --></p>
                </div>

                <div class="service-div-portfolio-btn">
                    <div class="valign-wrapper wow slideInRight">
                        <a href="portfolio.pdf" rel="noopener noreferrer" target="_blank">
                            <button class="btn waves-effect waves-light service-port-below-btn" type="submit" name="action">Portfolio</button>
                        </a>
                    </div>
                </div>
            </div>





            <div class="col xl4 l4 m4 s4 serviceClass wow bounceInDown "  data-wow-duration="2s" data-wow-delay=".1s" style="padding-bottom: 5%">
                <div class="row freepsddiv center-align hoverable service-modal-trigger" data-id="6" style="margin: 0 auto">
                    <div style="padding: 15% 13%">
                        <img src="{{url('uploads/contents')}}/<?= $data['service'][5]->icon; ?>" class="freepsdImg" >
                    </div>
                </div>
                <div class="row center-align service-title-text">
                     <p class="service-title-p-tag"><b>Digital Marketing and Strategy</b><!-- <?= $data['service'][5]->title; ?> --></p>
                </div>

                <div class="service-div-portfolio-btn">
                    <div class="valign-wrapper wow slideInRight">
                        <a href="portfolio.pdf" rel="noopener noreferrer" target="_blank">
                            <button class="btn waves-effect waves-light service-port-below-btn" type="submit" name="action">Portfolio</button>
                        </a>
                    </div>
                </div>
            </div>


        </div>


    </div>
    <div class="col xl1 l1 hide-on-med-and-down psdtofreeSide">

    </div>
</div>

<div class="row team-members"  >
    <div class="row">
        <div class="col xl12 l12 m12 s12 " style="padding: 0;" >
            <div class="row" style="background-color: #eeeeee;">
                <div class="col xl12 l12 m12 s12">
                    <div >
                        <h3 class="center-align wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s" style="color:black"><b>Our Team</b></h3>
                    </div>
                    <div style="margin-top: -1%;">
                        <p class="center-align flow-text wow fadeInRight" data-wow-duration="2s" data-wow-delay=".1s" style="color:black">Our experts skilled in various fields dedicated for the services you require.</p>
                    </div>
                </div>
            </div>
            <div class="row scrollspy alignment-check" id="Team">
                <div class="col xl4 l4 m4 s4 wow bounceInleft" style="margin-bottom: 3%" data-wow-duration="2s" data-wow-delay=".1s">
                    <a class="modal-trigger" href="#modal1">
                        <div class="personal-img-size responsive-img center-align">
                            <img src="img/mustafa bhai .png" alt="" class="personal-img hoverable" style="width: 230px;">
                        </div>
                    </a>
                    <div class="center-align">
                        <h6><b>Mustafa Lujohn</b></h6>
                    </div>
                    <div class="center-align">
                        <h6>CEO</h6>
                    </div>
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal arefin">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col xl4 l4 m12 s12 personal-img-size responsive-img center-align" style="margin-top: .5%;">
                                    <img src="img/mustafa bhai .png" alt="" class="personal-img hoverable" style="width: 130px;" >
                                    <h5 class="center-align"><b>Mustafa Lujohn</b></h5>
                                    <h6>CEO</h6>
                                </div>
                                <div class="col xl8 l8 m12 s12">
                                    <div style="width: 100%">
                                        <h6 class="left-align flow-text" style="margin:0px">
                                          With an accumulated experience of 12-years in the field of Information Technology, where my expertise circumvents around UX & Interaction design, Project Management, Service Development & Architecture Design. Academically a Telecommunications expert, experience in service development & deployment, Operation Management and Engineering Management.
                                        </h6>
                                        <br>
                                    </div>
                                    <div class="row inner-content text-center" style="width: 100%">

                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Creativity</h4></div>
                                            <div class="c100 p80 left-align">
                                                <span>80%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Leadership</h4></div>
                                            <div class="c100 p95 left-align">
                                                <span>95%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Skill</h4></div>
                                            <div class="c100 p85 left-align">
                                                <span>85%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Communication</h4></div>
                                            <div class="c100 p95 left-align">
                                                <span>95%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col xl4 l4 m4 s4 wow bounceInUp" style="margin-bottom: 3%" data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="modal-trigger" href="#modal2">
                        <div class="personal-img-size responsive-img center-align">
                            <img src="img/rhythm bhai .png" alt="" class="personal-img cen hoverable" style="width: 230px;">
                        </div>
                    </a>
                    <div class="center-align">
                        <h6><b>Shahriar Tofael</b></h6>
                    </div>
                    <div class="center-align">
                        <h6>CTO</h6>
                    </div>
                    <!-- Modal Structure -->
                    <div id="modal2" class="modal arefin">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col xl4 l4 m12 s12 personal-img-size responsive-img center-align" style="margin-top: .5%;">
                                    <img src="img/rhythm bhai .png" alt="" class="personal-img responsive-img hoverable" style="width: 130px;">
                                    <h5 class="center-align"><b>Shahriar Ibn Tofael</b></h5>
                                    <h6>CTO</h6>
                                </div>
                                <div class="col xl8 l8 m12 s12">
                                    <h6 class="left-align flow-text" style="margin:0px">I have been developing Softwares and web apps since 1999. I have experience in developing a wide variety of web applications ranging from large social community platforms to business critical automation applications to a shopping cart, and so on. I follow Agile methodologies of software development and I am especially fond of Scrum and stand-up. I do test driven development and create robust, tested code. I have developed an application using PHP and NodeJS.I have more than 11 years experience in PHP and JavaScript. I have 4-year experience in Nodejs.
</h6>
                                    <br><br>
                                    <div class="row inner-content text-center">

                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Creativity</h4></div>
                                            <div class="c100 p90 left-align">
                                                <span>90%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Leadership</h4></div>
                                            <div class="c100 p90 left-align">
                                                <span>90%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Skill</h4></div>
                                            <div class="c100 p90 left-align">
                                                <span>90%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Communication</h4></div>
                                            <div class="c100 p90 left-align">
                                                <span>90%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col xl4 l4 m4 s4 wow bounceInRight" style="margin-bottom: 3%" data-wow-duration="2s" data-wow-delay=".3s">
                    <a class="modal-trigger" href="#modal3">
                        <div class="personal-img-size responsive-img center-align">
                            <img src="img/tanjin apu.png" alt="" class="personal-img hoverable" style="width: 230px;">
                        </div>
                    </a>
                    <div class="center-align">
                        <h6><b>Tanjin Rafiq</b></h6>
                    </div>
                    <div class="center-align">
                        <h6>Project Manager</h6>
                    </div>
                    <!-- Modal Structure -->
                    <div id="modal3" class="modal arefin">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col xl4 l4 m12 s12 personal-img-size responsive-img center-align" style="margin-top: .5%;">
                                    <img src="img/tanjin apu.png" alt="" class="personal-img responsive-img hoverable" style="width: 130px;">
                                    <h5 class="center-align"><b>Tanjin Nahida Rafiq</b></h5>
                                    <h6>Project Manager</h6>
                                </div>
                                <div class="col xl8 l8 m12 s12">
                                    <h6 class="left-align flow-text" style="margin:0px">The role of a manager isn’t always smooth sailing. As a project manager I have to manage a bunch of talented guys here. I always want to be an innovative leader who not only can manage the team but also can bring best from the team. I believe a team should work like a family.  Apart from my team I love classical Dance and foods.</h6>
                                    <br><br>
                                    <div class="row inner-content text-center">

                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Creativity</h4></div>
                                            <div class="c100 p80 left-align">
                                                <span>80%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Leadership</h4></div>
                                            <div class="c100 p80 left-align">
                                                <span>80%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Skill</h4></div>
                                            <div class="c100 p85 left-align">
                                                <span>85%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Communication</h4></div>
                                            <div class="c100 p85 left-align">
                                                <span>85%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col xl4 l4 m4 s4 wow bounceInleft"  data-wow-duration="2s" data-wow-delay=".1s">
                    <a class="modal-trigger" href="#modal4">
                        <div class="personal-img-size responsive-img center-align">
                            <img src="img/saquib vai.jpg" alt="" class="personal-img hoverable" style="width: 230px;">
                        </div>
                    </a>
                    <div class="center-align">
                        <h6><b>Ahmed Saquib</b></h6>
                    </div>
                    <div class="center-align">
                        <h6>Visualizer</h6>
                    </div>
                    <!-- Modal Structure -->
                    <div id="modal4" class="modal arefin">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col xl4 l4 m12 s12 personal-img-size responsive-img center-align" style="margin-top: .5%;">
                                    <img src="img/saquib vai.jpg" alt="" class="personal-img responsive-img hoverable" style="width: 130px;">
                                    <h5 class="center-align"><b>Ahmed Saquib</b></h5>
                                    <h6>Visualizer</h6>
                                </div>
                                <div class="col xl8 l8 m12 s12">
                                    <h6 class="left-align flow-text" style="margin:0px">Ahmed Saquib is a Graphic Designer, occasionally freelancer, is a maniac behind the computer and with power tools, loves making things and getting super glue on his fingers.
                                        He has a moderately decent sense of interface design and believes to deliver maximum output with minimal elements.Lives on cheeseburger and fries but mostly Coca-Cola.</h6>
                                    <br><br>
                                    <div class="row inner-content text-center">

                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Creativity</h4></div>
                                            <div class="c100 p60 left-align">
                                                <span>60%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Leadership</h4></div>
                                            <div class="c100 p30 left-align">
                                                <span>80%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Skill</h4></div>
                                            <div class="c100 p45 left-align">
                                                <span>45%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Communication</h4></div>
                                            <div class="c100 p75 left-align">
                                                <span>75%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col xl4 l4 m4 s4 wow bounceInUp"  data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="modal-trigger" href="#modal5">
                        <div class="personal-img-size responsive-img center-align">
                            <img src="img/nabil .png" alt="" class="personal-img hoverable" style="width: 230px;">
                        </div>
                    </a>
                    <div class="center-align">
                        <h6><b>Tahmid Zahin</b></h6>
                    </div>
                    <div class="center-align">
                        <h6>Back-End Developer</h6>
                    </div>
                    <!-- Modal Structure -->
                    <div id="modal5" class="modal arefin">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col xl4 l4 m12 s12 personal-img-size responsive-img center-align" style="margin-top: .5%;">
                                    <img src="img/nabil .png" alt="" class="personal-img responsive-img hoverable" style="width: 130px;">
                                    <h5 class="center-align"><b>Tahmid Zahin Nabil</b></h5>
                                    <h6>Back-End Developer</h6>
                                </div>
                                <div class="col xl8 l8 m12 s12">
                                    <h6 class="left-align flow-text" style="margin:0px">I love to play with my fingers, oh come on you have a dirty mind I love to Code. </h6>
                                    <br><br>
                                    <div class="row inner-content text-center">

                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Creativity</h4></div>
                                            <div class="c100 p60 left-align">
                                                <span>60%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Leadership</h4></div>
                                            <div class="c100 p80 left-align">
                                                <span>80%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Skill</h4></div>
                                            <div class="c100 p45 left-align">
                                                <span>45%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div><h4 class="center-align" style="font-size: 15px;">Communication</h4></div>
                                            <div class="c100 p75 left-align">
                                                <span>75%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col xl4 l4 m4 s4 wow bounceInRight"  data-wow-duration="2s" data-wow-delay=".3s">
                    <a class="modal-trigger" href="#modal6">
                        <div class="personal-img-size responsive-img center-align">
                            <img src="img/Mithun.jpg" alt="" class="personal-img hoverable" style="width: 230px;">
                        </div>
                    </a>
                    <div class="center-align">
                        <h6><b>Mithun Das</b></h6>
                    </div>
                    <div class="center-align">
                        <h6>Front-End Developer</h6>
                    </div>
                    <!-- Modal Structure -->
                    <div id="modal6" class="modal arefin">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col xl4 l4 m12 s12 personal-img-size responsive-img center-align" style="margin-top: .5%;">
                                    <img src="img/Mithun.jpg" alt="" class="personal-img responsive-img hoverable" style="width: 130px;" >
                                    <h5 class="center-align"><b>Mithun Das</b></h5>
                                    <h6>Front-End Developer</h6>
                                </div>
                                <div class="col xl8 l8 m12 s12">
                                    <h6 class="left-align flow-text" style="margin:0px">Want to work in peace along with stress free Mind?Then Give me some tasks to do else i won't let you work in peace.But once i get envolve in any works you won't find me in the whole universe before finishing the works &#x1F61C ohhh by the way....I am expert in a little bit of coding!!</h6>
                                    <br><br>
                                    <div class="row inner-content text-center">
                                        <div class="col col-sm-6">
                                            <div><h4 class="center-align" style="font-size: 15px;">Creativity</h4></div>
                                            <div class="c100 p60 left-align">
                                                <span>60%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>

                                        <div class="col col-sm-6">
                                            <div><h4 class="center-align" style="font-size: 15px;">Leadership</h4></div>
                                            <div class="c100 p80 left-align">
                                                <span>80%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col col-sm-6">
                                            <div><h4 class="center-align" style="font-size: 15px;">Skill</h4></div>
                                            <div class="c100 p45 left-align">
                                                <span>45%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>
                                        <div class="col col-sm-6">
                                            <div><h4 class="center-align" style="font-size: 15px;">Communication</h4></div>
                                            <div class="c100 p75 left-align">
                                                <span>75%</span>
                                                <div class="slice"><div class="bar "></div><div class="fill"></div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="row about scrollspy" id="About">
    <div class="parallax-container">
        <div class="parallax" ><img src="{{url('uploads/contents')}}/<?= $data['bio']['image'] ?>">
        </div>
        <div class="col xl12 l12 m12 s12" style="padding:0px;">
            <!--
            <div class="row about-tag-row">
                <p class="center-align flow-text wow fadeInLeft" data-wow-duration="1s" style="color: black;"><b>ABOUT</b></p>
            </div> -->
            <div class=" wow rollIn" data-wow-duration="2s" data-wow-delay=".1s" style="background-color: rgba(255,255,255,0.6)">
                <div class="row Bio-wrapper">
                    <div class="col xl10 l9 m12 s12">
                        <p class="left-align flow-text"><b>BIOGRAPGHY</b></p>
                        <p class="left-align flow-text">{{ $data['bio']['bio'] }}</p>
                    </div>
                    <div class="col xl2 l3 m12 s12">
                        <p class="left-align flow-text"><b>Contact Info</b></p>
                        <ul>
                            <li><div style="display: inline-block;float: left;"><i class="small material-icons flow-text">call</i></div><div style="padding-top: .7%">&nbsp;01777-799326</div><br></li>

                            <li><div style="display: inline-block;float: left;"><i class="small material-icons flow-text">mail_outline</i></div><div style="padding-top: .8%">&nbsp; info@digitalistic.net</div><br></li>

                            <li><div style="display: inline-block;float: left;"><i class="small material-icons flow-text">web</i></div><div style="padding-top: .7%">&nbsp; www.digitalistic.net</div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row contact-form scrollspy land-lombay-height" id="Contact">
  <div class="col xl1 l1 hide-on-med-and-down" style="height: 1px">

  </div>





  <div class="col xl10 l10 m12 s12 ">
        <div class="row">
          <div class="col xl12 l12 m12 s12">
              <h4 class="center-align" style="color: #f65e62;padding-top: 4%;"><b>CONTACT US</b></h4>
              <h6 class="center-align" style="color: white;">If you have any question feel free to ask</h6>
          </div>
        </div>
        <div class="row" style="padding-top: 2%;">
            <div class="col xl4 l5 m4 s4 push-l1 push-xl2 push-m2 push-s2" >
                <hr class="style1">
            </div>
            <div class="col xl4 l5 m4 s4 push-l1 push-xl2 push-m2 push-s2" >
                <hr class="style1">
            </div>
        </div>
        <div class="row">
            <div class="col xl5 l5 hide-on-small-only hide-on-med-only">
                 <div class="row right-align">
                     <div class="col l10 pull-l1">
                         <p  style="color:white;font-size: 15px;padding-top: 8%;"><b>Phone</b></p>
                         <p  style="color:white;font-size: 15px;">01777-799326</p>
                     </div>
                     <div class="col l1 pull-l1" style="margin-top: 8%;">
                         <img src="img/mobile.png" style="width: 30px;">
                     </div>
                 </div>
                 <div class="row right-align">
                     <div class="col l10 pull-l1">
                         <p  style="color:white;font-size: 15px;padding-top: 2%;"><b>Address</b></p>
                         <p  style="color:white;font-size: 15px;">Sylhet House (First Floor), House # 3, Road # 2/1,Chairman Bari to Amtoli Road, Banani<br>Dhaka, Bangladesh</p>
                     </div>
                     <div class="col l1 pull-l1" style="margin-top: 3%;">
                         <img src="img/Address.png" style="width: 30px;">
                     </div>
                 </div>
                 <div class="row right-align">
                     <div class="col l10 pull-l1" >
                         <p  style="color:white;font-size: 15px;padding-top: 2%;"><b>Email</b></p>
                         <p  style="color:white;font-size: 15px;" id="send-msg"><a href="mailto:info@digitalistic.net">Send Message</a></p>
                     </div>
                     <div class="col l1 pull-l1" style="margin-top: 3%;">
                         <img src="img/Email.png" style="width: 30px;">
                     </div>
                 </div>
            </div>
            <div class="col xl5 l5 hide-on-large-only ">
                 <div class="row">
                    <div class="col m12 s12" style="margin-top: 6%;">
                         <img src="img/mobile.png" style="width: 30px;float: left;">
                         <p  style="color:white;font-size: 15px;padding-top: 6%;margin-bottom: 0;">Phone</p>
                         <p  style="color:white;font-size: 15px;margin-top: 0;">01777-799326</p>
                     </div>
                 </div>
                 <div class="row">
                    <div class="col m12 s12">
                         <img src="img/Address.png" style="width: 30px;float: left;">
                         <p  style="color:white;font-size: 15px;padding-top: 6%;margin-bottom: 0;">Address</p>
                         <p  style="color:white;font-size: 15px;margin-top: 0;">Sylhet House (First Floor), House # 3, Road # 2/1,Chairman Bari to Amtoli Road, Banani<br>Dhaka, Bangladesh</p>
                     </div>
                 </div>
                 <div class="row">
                    <div class="col m12 s12">
                         <img src="img/Email.png" style="width: 30px;float: left;">
                         <p  style="color:white;font-size: 15px;padding-top: 6%;margin-bottom: 0;">Email</p>
                         <p  style="color:white;font-size: 15px;margin-top: 0;" id="send-msg"><a href="mailto:info@digitalistic.net">Send Message</a></p>
                     </div>
                 </div>
            </div>


        <form method="POST"  action="{{url('contactForm')}}">
            <div class="col l6">
                <div class="row">
                    <div class="input-field col s6">
                      <input  id="first_name" type="text" name="first_name" class="validate" style="color: white">
                      <label for="first_name" style="color: white">First Name</label>
                    </div>
                    <div class="input-field col s6" style="padding-right: 0px;">
                      <input  id="last_name" type="text" name="last_name" class="validate" style="color: white;">
                      <label for="last_name" style="color: white;">Last Name</label>
                    </div>
                    <div class="input-field col s6">
                      <input  id="email" type="text" name="email" class="validate" style="color: white">
                      <label for="email" style="color: white">Email</label>
                    </div>
                    <div class="input-field col s6" style="padding-right: 0px;">
                      <input id="icon_telephone" type="tel" name="phone_no" class="validate" style="color: white;">
                      <label for="icon_telephone" style="color: white;">Phone</label>
                    </div>
                    <div class="input-field col s12" style="padding-right: 0px;">
                      <input  id="subject" type="text" name="subject" class="validate" style="color: white">
                      <label for="subject" style="color: white">Subject</label>
                    </div>
                    <div class="input-field col s12" style="padding-right: 0px;">
                      <textarea id="icon_prefix2" name="message" class="materialize-textarea" style="color: white"></textarea>
                      <label for="icon_prefix2" style="color: white">Message</label>
                    </div>
                    <div class="center-align land-contact-button">
                      <button class="btn waves-effect waves-light" type="submit" name="action" style="margin:5% 0;">Submit
                        <i class="material-icons right " >send</i>
                      </button>
                    </div>
                </div>
            </div>
            {{csrf_field()}}
        </form>
        </div>
  </div>
  {{--<div class="col xl1 l1 hide-on-med-and-down" style="height: 100%">--}}

  {{--</div>--}}
</div>

<div class="row">
    <div class="col xl12 l12 m12 s12 center-align"  style="background-color: #eeeeee;">
        <h3 class=" wow tada show-on-medium-and-up hide-on-small-only" data-wow-duration="3s" style="color: black;"><b>Our Clients</b></h3>
        <p class=" wow tada show-on-small-only hide-on-med-and-up" data-wow-duration="3s" style="color: black;font-size: 20px;margin: 1%;"><b>Our Clients</b></p>
    </div>
</div>
<div class="row clints scrollspy" id="clints" >
    <div class="col xl12 l12 m12 s12" style="padding: 0px;">
        <div class="row ">
            <div class="col xl12 l12 m12 s12 OurService" style="padding:0px">
                <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:180px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                    </div>
                    <div data-u="slides" class="ClientSlider">
                      @foreach ($data['clients'] as $image)
                        <div data-p="30.00">
                            <img data-u="image" src="{{url('uploads/contents')}}/<?= $image ?>" />
                        </div>
                      @endforeach



                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


<footer class="row page-footer land-footer-footer">
    </div>
    <div class="container" id="id-footer">
        <div class="row">
            <div class="col l6 m6 s12" style="padding: 2% 0%;">
                <div class="land-footer-left">
                <h5 class="white-text"><b>Headquarter</b></h5>
                <p class="grey-text text-lighten-3" style="font-weight: 100;">Sylhet House (First Floor), House # 3, Road # 2/1,<br>Chairman Bari to Amtoli Road, Banani<br>Dhaka, Bangladesh</p>
                <a href="https://www.google.com/maps/@23.784809,90.4001007,16.92z">Get Directions</a>
                </div>
            </div>
            <div class="col l6 m6 s12" align="right" style="padding: 2% 0%;">

                <div class="land-footer-right">
                <br>

                    <a class="grey-text text-lighten-3  footer-icons wow tada" data-wow-duration="4s" href="https://twitter.com/digitalisticbd" >
                        <i class="fa-2x fa fa-twitter icon-hover"  aria-hidden="true"></i>
                    </a>
                    <a class="grey-text text-lighten-3  footer-icons wow tada" data-wow-duration="4s" href="https://www.linkedin.com/company/digitalistic" >
                        <i class="fa-2x fa fa-linkedin icon-hover" aria-hidden="true"></i>
                    </a>
                    <a class="grey-text text-lighten-3  footer-icons wow tada" data-wow-duration="4s" href="https://www.facebook.com/digitalistic7/?ref=br_rs"  >
                        <i class="fa-2x fa fa-facebook icon-hover" aria-hidden="true"></i>
                    </a>


                <p class="grey-text text-lighten-3" style="font-weight: 100;">@digitalistic7<br><a href="mailto:info@digitalistic.net">Send Message</a><br>Call 01777-799326</p>
                </div>
            </div>
            <!-- <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div> -->
        </div>
    </div>
    <div class="footer-copyright">
        <div class="land-footer">
            <p>© 2018 Digitalistic</p>

            <!-- <a class="grey-text text-lighten-3 right footer-icons" href="#!" >
              <i class="fa-2x fa fa-google icon-hover"  aria-hidden="true"></i>
            </a> -->
            <!-- <a class="grey-text text-lighten-3 right footer-icons wow tada" data-wow-duration="4s" href="https://www.facebook.com/digitalistic7/?ref=br_rs"  >
                <i class="fa-2x fa fa-whatsapp icon-hover" aria-hidden="true"></i> -->
            {{--</a>--}}
            {{--<a class="grey-text text-lighten-3 right footer-icons wow tada" data-wow-duration="4s" href="https://twitter.com/digitalisticbd" >--}}
                {{--<i class="fa-2x fa fa-twitter icon-hover"  aria-hidden="true"></i>--}}
            {{--</a>--}}
            {{--<a class="grey-text text-lighten-3 right footer-icons wow tada" data-wow-duration="4s" href="https://www.linkedin.com/company/digitalistic" >--}}
                {{--<i class="fa-2x fa fa-linkedin icon-hover" aria-hidden="true"></i>--}}
            {{--</a>--}}
            {{--<a class="grey-text text-lighten-3 right footer-icons wow tada" data-wow-duration="4s" href="https://www.facebook.com/digitalistic7/?ref=br_rs"  >--}}
                {{--<i class="fa-2x fa fa-facebook icon-hover" aria-hidden="true"></i>--}}
            {{--</a>--}}
        </div>
    </div>
</footer>
<div class="preloader-background">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-red-only">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">jssor_2_slider_init();</script>
<script src="https://code.jquery.com/jquery-2.1.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript">
    $( document ).ready(function() {
        const servimgurl = "{{url('img')}}/service-images/";
        $('.carousel .carousel-slider').carousel({
            full_Width: true,
            indicators:false
        });

        var sideBar = $(".button-collapse").sideNav({
            closeOnClick: true,
            edge: 'left', // <--- CHECK THIS OUT
        });
        console.log(sideBar);

        $('.materialboxed').materialbox();

        $('.slider').slider(
            {
                interval:5000
            }
        );
        $('.parallax').parallax();


        $('.scrollspy').scrollSpy({
            scrollOffset: 0
        });


        $('.modal-trigger').leanModal();

        $('.serviceClass').click(function(){
            $('.popup1').addClass('showPopup');
            $('.popup1').removeClass('overlay');

        });
        $('.close').click(function(){
            $('.popup1').addClass('overlay');
            $('.popup1').removeClass('showPopup');
        });

        $('.service-gallery').click(function(){

            var serviceSource = $(this).attr('src');
            $('.service-gallery-header').attr('src',serviceSource);
            var data = $(this).data('service');

            var imgurl=servimgurl + data + ".png";
            $('.service-gallery-body').attr('src',imgurl);

            console.log (data);
        });


        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            items: 1
        });


        var owl = $('.owl-carousel');
        owl.owlCarousel();


        $('.nav-next').click(function() {
            owl.trigger('next.owl.carousel', [300]);

            var currentIndex = $('div.active').index() + 1;
            console.log(currentIndex);
        });

        $('.nav-prev').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);


        });




        $('.service-modal-trigger').on('click',function(event){

            var onModalHide = function() {
                $('.service-modal-nav').hide();
                $('.lean-overlay').hide();
            };

            $("#terms").openModal({
                complete : onModalHide
            });



            var slideNumber = $(this).attr("data-id");
            owl.trigger('to.owl.carousel', [slideNumber - 1]);

        });




        owl.on('changed.owl.carousel', function(event) {
         $('.service-modal-nav').show();
        });

        // $('.lean-overlay').click(function(event){
        //     // $('.service-modal-nav').hide();
        //     console.log("Hellow");
        // });
        $('.service-detail-see-more').click(function(){
            console.log('dfgdgfdf');
            $(this).prev('.service-details').css('height','auto');
            $(this).hide();
        });




    });
</script>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "127520694568573", // Facebook page ID
            whatsapp: "Call +8801777-799326", // WhatsApp number
            company_logo_url: "https://scontent.fdac10-1.fna.fbcdn.net/v/t1.0-1/p200x200/25353889_147334125920563_3133788677897524267_n.png?_nc_cat=0&oh=513d80efad64e7df45f7edefe18bdae0&oe=5C2826E2", // URL of company logo (png, jpg, gif)
            greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
            call_to_action: "Message us", // Call to action
            button_color: "#ED1C24", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
    document.addEventListener("DOMContentLoaded", function(){
    $('.preloader-background').delay(1700).fadeOut('slow');

    $('.preloader-wrapper')
        .delay(1700)
        .fadeOut();
    });
</script>
<!-- /WhatsHelp.io widget -->
<div class="service-modal-nav" style="display: none;">
    <button class="nav-prev">
        <span aria-label="Previous">‹</span>
    </button>
    <button class="nav-next">
        <span aria-label="Next">›</span>
    </button>
</div>
</body>
</html>
