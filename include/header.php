<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/global.css">
        <script src="https://kit.fontawesome.com/7254a5967d.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <!-- navbar section start-->
      <div uk-sticky="start: 300; animation: uk-animation-slide-top; cls-active:uk-navbar-sticky; sel-target:.uk-navbar-container; class:uk-sticky;">
        <!-- Main Menu -->
        <div class="uk-visible@l uk-main-header-transparent uk-navbar-container uk-navbar-transparent" style="background:white;">
            <div class="uk-container">
                <nav class="uk-navbar d-flex uk-flex-middle" uk-navbar="dropbar: true; uk-dropbar-top">
                    <div class="uk-navbar-left ">
                        <a class="uk-navbar-item uk-logo " href="index.php"> <img src="assets/images/adventure-logo.png" alt="" class="uk-logo-dark"> </a>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-position-relative">
                            <li><a href="index.php"> Home</a> </li>
                            <li><a href="#"> About <span uk-navbar-parent-icon></span></a>
                                <div class="uk-dropbar uk-dropbar-top" uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;" style="background-image: url('assets/images/nav.jpg'); background-position: top right; background-size:cover;">
                                    <div class="uk-container">
                                        <div class="uk-child-width-1-4 uk-grid-medium" uk-grid>
                                            <!--  -->
                                            <div class="uk-activities ">
                                                <a href="who-we-are.php">
                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="who-we-are.php">
                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Who we are</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--  -->
                                            <!--  -->
                                            <div class="uk-activities ">
                                                <a href="why-us.php">
                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="why-us.php">
                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about1.jpg " />
                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove"> Why Us</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--  -->
                                            <!--  -->
                                            <div class="uk-activities ">
                                                <a href="guides.php">
                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="guides.php">
                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about2.jpg " />
                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove"> Our Guides</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--  -->
                                            <!--  -->
                                            <div class="uk-activities">
                                                <a href="partner.php">
                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="partner.php">
                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about3.jpg " />
                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove"> Our Partners</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="activities-list.php">Activities<span uk-navbar-parent-icon></span>
                                </a>
                                <div class="uk-dropbar uk-dropbar-top" uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;" style="background-image: url('assets/images/nav.jpg'); background-position: top right; background-size:cover;">
                                    <div class="uk-container">
                                        <div class="uk-child-width-1-4 uk-grid-medium" uk-grid>
                                            <!--  -->
                                            <div class="uk-activities ">
                                                <a href="activities-inner-list.php">
                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="activities-inner-list.php">
                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Trekking</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--  -->
                                            <!--  -->
                                            <div class="uk-activities ">
                                                <a href="activities-inner-list.php">
                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="activities-inner-list.php">
                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about1.jpg " />
                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove"> Tours</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--  -->
                                            <!--  -->
                                            <div class="uk-activities ">
                                                <a href="activities-inner-list.php">
                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="activities-inner-list.php">
                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about2.jpg " />
                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Skiing</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--  -->
                                            <!--  -->
                                            <div class="uk-activities">
                                                <a href="activities-inner-list.php">
                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="activities-inner-list.php">
                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about3.jpg " />
                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove"> Speed Summits</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--  -->
                                        </div>
                                        <div class="uk-text-center">
                                            <a href="activities-list.php" class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar text-white">View
                                                All <span uk-icon="icon:  arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Expeditions <span uk-navbar-parent-icon></span></a>
                                <div class="uk-dropbar uk-dropbar-top" uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;" style="background-image: url('assets/images/nav.jpg'); background-position: top right; background-size:cover;">
                                    <div class="uk-container">
                                        <div class="mega-border-top">
                                            <div uk-grid class="uk-grid-small">
                                                <ul class="tab-nav uk-mega-tab uk-padding-menu   uk-tab-left uk-margin-medium-right  " data-uk-tab="{connect:'.uk-switcher'}">
                                                    <li> <a href="">8000ers</a> </li>
                                                    <li> <a href="">7000ers</a> </li>
                                                    <li> <a href="">6000ers</a> </li>
                                                </ul>
                                                <div class="uk-switcher uk-width-expand@m uk-padding-menu ">

                                                    <!-- 8000ers -->
                                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                                                        <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Poonhill Annapurna Sunrise Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Annapurna Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Everest Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Gokyo Valley Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                            <a class="uk-nav-slider-btn " href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                            <a href="activities-inner-list.php" class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar">View
                                                                All <span uk-icon="icon:  arrow-right"></span></a>
                                                            <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                        </div>

                                                    </div>
                                                    <!-- end of 8000ers -->
                                                    <!-- 7000ers -->
                                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                                                        <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Poonhill Annapurna Sunrise Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Annapurna Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Everest Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Gokyo Valley Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                            <a class="uk-nav-slider-btn " href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                            <a href="activities-inner-list.php" class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar">View
                                                                All <span uk-icon="icon:  arrow-right"></span></a>
                                                            <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                        </div>

                                                    </div>
                                                    <!-- end of 7000ers -->
                                                    <!-- 6000ers -->
                                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                                                        <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Poonhill Annapurna Sunrise Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Annapurna Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Everest Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Gokyo Valley Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                            <a class="uk-nav-slider-btn " href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                            <a href="activities-inner-list.php" class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar">View
                                                                All <span uk-icon="icon:  arrow-right"></span></a>
                                                            <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                        </div>

                                                    </div>
                                                    <!-- end of 6000ers -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Trekking <span uk-navbar-parent-icon></span></a>
                                <div class="uk-dropbar uk-dropbar-top" uk-drop="boundary:!.uk-main-header-transparent; stretch: x; flip: false; animation: reveal-top; delay-hide: 10; duration: 700;" style="background-image: url('assets/images/nav.jpg'); background-position: top right; background-size:cover;">
                                    <div class="uk-container">
                                        <div class="mega-border-top">
                                            <div uk-grid class="uk-grid-small">
                                                <ul class="scroll-change tab-nav uk-mega-tab uk-padding-menu   uk-tab-left uk-margin-medium-right  " data-uk-tab="{connect:'.uk-switcher'}" style="height:10rem; overflow-y:scroll;display:block;">
                                                    <style>
                                                        .scroll-change::-webkit-scrollbar{
                                                            width: 5px;
                                                        }
                                                        .scroll-change::-webkit-scrollbar-thumb {
                                                            background: #007bff; /* A vibrant color for the thumb */
                                                            border-radius: 10px; /* Rounded corners for a smoother look */
                                                            transition: background 0.3s; /* Smooth transition on hover */
                                                        }
                                                        .scroll-change::-webkit-scrollbar-track {
                                                            background: #f0f0f0; /* Background color for the track */
                                                            border-radius: 10px; /* Rounded corners for the track */
                                                        }
                                                    </style>
                                                    <li> <a href="">Everest Region</a> </li>
                                                    <li> <a href="">Annapurna Region</a> </li>
                                                    <li> <a href="">Makalu Region</a> </li>
                                                    <li> <a href="">Manasulu Region</a> </li>
                                                    <li> <a href="">Manasulu Region</a> </li>
                                                    <li> <a href="">Manasulu Region</a> </li>
                                                    <li> <a href="">Manasulu Region</a> </li>
                                                    <li> <a href="">Manasulu Region</a> </li>
                                                    <li> <a href="">Manasulu Region</a> </li>
                                                    <li> <a href="">Manasulu Region</a> </li>
                                                    
                                                </ul>
                                                <div class="uk-switcher uk-width-expand@m uk-padding-menu ">

                                                    <!-- 8000ers -->
                                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                                                        <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Poonhill Annapurna Sunrise Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Annapurna Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Everest Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Gokyo Valley Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                            <a class="uk-nav-slider-btn " href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                            <a href="activities-inner-list.php" class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar">View
                                                                All <span uk-icon="icon:  arrow-right"></span></a>
                                                            <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                        </div>

                                                    </div>
                                                    <!-- end of 8000ers -->
                                                    <!-- 7000ers -->
                                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                                                        <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Poonhill Annapurna Sunrise Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Annapurna Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Everest Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Gokyo Valley Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                            <a class="uk-nav-slider-btn " href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                            <a href="activities-inner-list.php" class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar">View
                                                                All <span uk-icon="icon:  arrow-right"></span></a>
                                                            <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                        </div>

                                                    </div>
                                                    <!-- end of 7000ers -->
                                                    <!-- 6000ers -->
                                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                                                        <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Poonhill Annapurna Sunrise Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Annapurna Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Everest Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Gokyo Valley Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                            <a class="uk-nav-slider-btn " href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                            <a href="activities-inner-list.php" class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar">View
                                                                All <span uk-icon="icon:  arrow-right"></span></a>
                                                            <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                        </div>

                                                    </div>
                                                    <!-- end of 6000ers -->
                                                    <!-- 5000ers -->
                                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                                                        <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Poonhill Annapurna Sunrise Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Annapurna Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Everest Base Camp Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="uk-activities ">
                                                                <a href="detail.php">
                                                                    <div class="uk-media-205 uk-border-rounded uk-cover-container  uk-display-block " href="detail.php">
                                                                        <img class="uk-image uk-cover" alt="" src=" assets/images/about.png " />
                                                                        <div class="uk-overlay-banner  uk-position-cover"></div>
                                                                        <div class="uk-position-bottom-center  uk-activities uk-text-center">
                                                                            <h1 class=" expedition-small-font  text-white uk-margin-remove">Gokyo Valley Trekking</h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="uk-flex uk-flex-middle uk-flex-between uk-margin uk-margin-remove-bottom">
                                                            <a class="uk-nav-slider-btn " href="#" uk-icon="icon:arrow-left; ratio: 1.5" uk-slider-item="previous"></a>
                                                            <a href="activities-inner-list.php" class=" uk-margin-top uk-margin-remove-bottom uk-button uk-button-navbar">View
                                                                All <span uk-icon="icon:  arrow-right"></span></a>
                                                            <a class="uk-nav-slider-btn" href="#" uk-icon="icon:arrow-right; ratio: 1.5" uk-slider-item="next"></a>
                                                        </div>

                                                    </div>
                                                    <!-- end of 5000ers -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="avoide:javascript;">Useful Info <span uk-navbar-parent-icon></span>
                                </a>
                                <div uk-drop="mode:hover; pos: bottom-center; delay-hide: 10;" class="uk-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li>
                                            <a href="useful.php"> <span uk-icon="icon:  chevron-right"></span> Terms and Conditions</a>
                                        </li>
                                        <li>
                                            <a href="useful.php"><span uk-icon="icon:  chevron-right"></span> Gear List</a>
                                        </li>
                                        <li>
                                            <a href="useful.php"><span uk-icon="icon:  chevron-right"></span> Travel Insurance</a>
                                        </li>
                                        <li>
                                            <a href="useful.php"><span uk-icon="icon:  chevron-right"></span> Expedition Permit Fees</a>
                                        </li>
                                        <li>
                                            <a href="useful.php"><span uk-icon="icon:  chevron-right"></span> Visa Fee</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li> <a href="blog.php"> Blog</a> </li>
                            <li> <a href="contact.php"> Contact</a> </li>
                            <li><a href="payment.php"><button class="uk-button uk-button-default">Payment</button></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end main menu -->
        <!-- mobile menu -->
        <div class="uk-header-mobile uk-hidden@l " uk-header="">
            <div class="uk-navbar-container ">
                <div class="uk-container">
                    <nav class="uk-navbar" uk-navbar="{&quot;container&quot;:&quot;.uk-header-mobile&quot;}">
                        <div class="uk-navbar-left">
                            <a href="index.php" class="uk-logo uk-navbar-item"> <img src="assets/images/adventure-logo.png" alt="" class="uk-logo-dark"> </a>
                        </div>
                        <div class="uk-navbar-right">

                            <a uk-toggle aria-label="Open Menu" href="#uk-dialog-mobile" class="uk-navbar-toggle uk-navbar-toggle-animate" aria-expanded="false">
                                <div uk-navbar-toggle-icon class="uk-icon uk-navbar-toggle-icon"></div>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div id="uk-dialog-mobile" class="uk-dropbar uk-padding-remove" uk-drop="{&quot;clsDrop&quot;:&quot;uk-dropbar&quot;,&quot;flip&quot;:&quot;false&quot;,&quot;container&quot;:&quot;.uk-header-mobile&quot;,&quot;target-y&quot;:&quot;.uk-header-mobile .uk-navbar-container&quot;,&quot;mode&quot;:&quot;click&quot;,&quot;target-x&quot;:&quot;.uk-header-mobile .uk-navbar-container&quot;,&quot;stretch&quot;:true,&quot;bgScroll&quot;:&quot;false&quot;,&quot;animation&quot;:&quot;reveal-top&quot;,&quot;animateOut&quot;:true,&quot;duration&quot;:300,&quot;toggle&quot;:&quot;false&quot;}">
                <div class="uk-height-min-1-1 uk-flex uk-flex-column">
                    <div class="uk-margin-auto-bottom">
                        <div class="uk-grid uk-child-width-1-1 uk-grid-stack" uk-grid="">
                            <div>
                                <div class="uk-panel" id="module-menu-dialog-mobile">
                                    <ul class="uk-nav uk-nav-primary  uk-nav-divider uk-nav-accordion uk-margin-top" uk-nav="targets: > .js-accordion">
                                        <li><a href="index.php">Home</a></li>
                                        <li class="js-accordion uk-parent"> <a href="" aria-expanded="false">
                                                About <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                                <li><a href="why-us.php">Why Us</a></li>
                                                <li><a href="who-we-are.php">Who We Are</a></li>
                                                <li><a href="guides.php">Our Guides</a></li>
                                                <li><a href="partners.php">Our Partners</a></li>
                                            </ul>
                                        </li>
                                        <li class="js-accordion uk-parent"> <a href="activities.php" aria-expanded="false"> Activities
                                                <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                                <li><a href="activities-list.php">Trekking</a></li>
                                                <li><a href="activities-list.php">Expedition</a></li>
                                                <li><a href="activities-list.php">Skiing</a></li>
                                                <li><a href="activities-list.php">Speed Summits</a></li>
                                                <li><a href="activities-list.php">Tours</a></li>

                                            </ul>
                                        </li>
                                        <li class="js-accordion uk-parent"> <a href="activities-list.php" aria-expanded="false"> Expedition
                                                <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                                <li><a href="trip-list.php">8000ers</a></li>
                                                <li><a href="trip-list.php">7000ers</a></li>
                                                <li><a href="trip-list.php">6000ers</a></li>
                                                <li><a href="trip-list.php">All</a></li>
                                            </ul>
                                        </li>
                                        <li class="js-accordion uk-parent"> <a href="activities-list.php" aria-expanded="false"> Trekking
                                                <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                                <li><a href="trip-list.php">Everest Region</a></li>
                                                <li><a href="trip-listt.php">Manasulu Region</a></li>
                                                <li><a href="trip-list.php">Annapurna Region</a></li>
                                                <li><a href="trip-list.php">Langtang Region</a></li>
                                                <li><a href="trip-list.php">Makalu Region</a></li>
                                            </ul>
                                        </li>
                                        <li class="js-accordion uk-parent"> <a href="" aria-expanded="false">Useful Info
                                                <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span>
                                            </a>
                                            <ul class="uk-nav-sub">
                                                <li><a href="contact.php">Contact</a></li>
                                                <li><a href="useful.php">Terms & Condition</a></li>
                                                <li><a href="useful.php">Privacy Policy</a></li>
                                                <li> <a href="useful.php">Visa Information</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="blog.php"> Blog</a> </li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li><a href="payment.php"><button class="uk-button uk-button-default">Payment</button></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end mobile menu -->
    </div>
    <!-- navbar section end-->
    
