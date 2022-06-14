<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>Niwax - Web Design &amp; Digital Marketing Agency HTML Template</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#101010">
    <!--website-favicon-->
    <link href="images/favicon.png" rel="icon">
    <!--plugin-css-->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/plugin.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- template-style-->
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/responsive.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/darkmode.css" rel="stylesheet">
</head>

<body class="dark-main f-weight active-dark">
    <!--Start Preloader -->
    <div class="onloadpage" id="page_loader">
        <div class="pre-content">
            <div class="logo-pre"><img src="<?= base_url('assets/'); ?>img/logo-baru-croyons.png" alt="Logo" class="img-fluid" /></div>
            <div class="pre-text- text-radius text-light text-animation bg-b">Niwax - Creative Agency & Portfolio HTML Template Are 2 Seconds Away. Have Patience</div>
        </div>
    </div>
    <!--End Preloader -->
    <!--Start Header -->
    <header class="nav-bg-b main-header navfix fixed-top menu-white">
        <div class="container-fluid m-pad">
            <div class="menu-header">
                <div class="dsk-logo"><a class="nav-brand" href="./">
                        <img src="<?= base_url('assets/'); ?>img/logo-baru-croyons.png" alt="Logo" class="mega-white-logo" />
                        <img src="<?= base_url('assets/'); ?>img/logo-baru-croyons-white.png" alt="Logo" class="mega-darks-logo" />
                    </a>
                </div>
                <div class="custom-nav" role="navigation">
                    <ul class="nav-list">
                        <li class="nav-list onepge">
                            <a href="<?= site_url(''); ?>" class="menu-links">Home</a>
                        </li>
                        <li class="nav-list onepge">
                            <a href="<?= site_url('about'); ?>" class="menu-links">About</a>
                            <!-- <div class="nx-dropdown">
                                <div class="sub-menu-section">
                                    <div class="container">
                                        <div class="sub-menu-center-block">
                                            <div class="sub-menu-column">
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="about-2.html">About Us V2</a></li>
                                                    <li><a href="why-us.html">Why Us</a></li>
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="team-details.html">Team Single</a></li>
                                                    <li><a href="case-study.html">Case Study</a></li>
                                                    <li><a href="case-study-details.html">Case Study Single</a></li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-column">
                                                <ul>
                                                    <li><a href="mission-vision.html">Mission & Vision</a></li>
                                                    <li><a href="development-process.html">Development Process</a></li>
                                                    <li><a href="client-reviews.html">Client Reviews</a> </li>
                                                    <li><a href="clients.html">Our Clients</a></li>
                                                    <li><a href="get-quote.html">Contact Us</a> </li>
                                                    <li><a href="get-quote-2.html">Contact Us 2</a> </li>
                                                    <li><a href="get-quote-3.html">Contact Us 3</a> </li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-column">
                                                <ul>
                                                    <li><a href="login.html">Login Page</a> </li>
                                                    <li><a href="service-card.html">Service Card</a> </li>
                                                    <li><a href="service-web.html">Service Web</a></li>
                                                    <li><a href="service-app.html">Service Mobile App</a></li>
                                                    <li><a href="service-marketing.html">Service Digital Marketing</a></li>
                                                    <li><a href="service-graphic.html">Service Graphic</a></li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-column">
                                                <ul>
                                                    <li><a href="career.html">Careers</a> </li>
                                                    <li><a href="shop-page.html">Shop Single</a> </li>
                                                    <li><a href="shop-details.html">Shop Details</a> </li>
                                                    <li><a href="shop-cart.html">Shop Cart</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </li>
                        <li class="sbmenu">
                            <a href="<?= site_url('solusi'); ?>" class="menu-links">Solusi dan Layanan</a>
                            <div class="nx-dropdown">
                                <div class="sub-menu-section">
                                    <div class="container">
                                        <div class="sub-menu-center-block">
                                            <div class="sub-menu-column">
                                                <!-- <ul>
                                                </ul> -->
                                            </div>
                                            <div class="sub-menu-column">
                                                <ul>
                                                    <li><a href="#">SISTEM SOLUTION</a></li>
                                                    <li><a href="<?= site_url('jasamob'); ?>">Jasa Pembuatan Mobile Apps</a> </li>
                                                    <li><a href="<?= site_url('jasaweb'); ?>">Jasa Pembuatan Website</a></li>
                                                    <li><a href="<?= site_url('jasasistem'); ?>">Jasa Pembuatan Sistem</a></li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-column">
                                                <ul>
                                                    <li><a href="#">DIGITAL SOLUTION</a></li>
                                                    <li><a href="<?= site_url('jasaseo'); ?>">Jasa SEO Website</a></li>
                                                    <li><a href="<?= site_url('campaign'); ?>">Campaign Development</a></li>
                                                    <li><a href="<?= site_url('onlinerep'); ?>">Online Reputation Management</a></li>
                                                    <li><a href="<?= site_url('influencer'); ?>">Infuencer Management</a></li>
                                                    <li><a href="<?= site_url('personalbrand'); ?>">Personal Branding</a></li>
                                                    <li><a href="<?= site_url('sosmedmanagement'); ?>">Sosial Media Manegement</a></li>
                                                </ul>
                                            </div>
                                            <div class="sub-menu-column">
                                                <ul>
                                                    <br>
                                                    <br>
                                                    <li><a href="<?= site_url('intmarket'); ?>">Internet Marketing</a> </li>
                                                    <li><a href="<?= site_url('boostersosmed'); ?>">Booster Sosial Media</a></li>
                                                    <li><a href="<?= site_url('buzzer'); ?> gradients.html">Buzzer Management</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-list onepge">
                            <a href="<?= site_url('client'); ?>" class="menu-links">ClIENT</a>
                            <!-- <div class="nx-dropdown menu-dorpdown">
                                <div class="sub-menu-section">
                                    <div class="sub-menu-center-block">
                                        <div class="sub-menu-column smfull">
                                            <ul>
                                                <li><a href="portfolio.html">Portfolio Grid 1</a> </li>
                                                <li><a href="portfolio-2.html">Portfolio Grid 2</a> </li>
                                                <li><a href="portfolio-block.html">Portfolio Wide Block</a> </li>
                                                <li><a href="portfolio-block-2.html">Portfolio Wide Block v2</a> </li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </li>
                        <li class="nav-list onepge">
                            <a href="<?= site_url('contact'); ?>" class="menu-links">CONTACT</a>
                            <!-- <div class="nx-dropdown menu-dorpdown">
                                <div class="sub-menu-section">
                                    <div class="sub-menu-center-block">
                                        <div class="sub-menu-column smfull">
                                            <ul>
                                                <li><a href="blog-grid-1.html">Blog Grid 1</a> </li>
                                                <li><a href="blog-grid-2.html">Blog Grid 2</a> </li>
                                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a> </li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a> </li>
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </li>
                    </ul>
                    <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                    <ul class="nav-list right-end-btn">
                        <!-- <li class="hidemobile"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-bars"></i></a></li> -->
                        <!-- <li class="hidemobile"><a href="get-quote.html" class="btn-br bg-btn3 btshad-b2 lnk">Request A Quote <span class="circle"></span></a> </li> -->
                        <li class="hidedesktop darkmodeswitch">
                            <!-- <div class="switch-wrapper"> <label class="switch" for="niwax"> <input type="checkbox" id="niwax" /> <span class="slider round"></span> </label> </div> -->
                        </li>
                        <li class="hidedesktop"><a data-bs-toggle="offcanvas" href="#offcanvasExample"></a></li>
                        <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
                    </ul>
                </div>
            </div>

            <!--Mobile Menu-->
            <nav id="main-nav">
                <ul class="first-nav">
                    <li>
                        <a href="<?= site_url(''); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= site_url('about'); ?>">About</a>
                        <!-- <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="why-us.html">Why Us</a></li>
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="team-details.html">Team Single</a></li>
                            <li><a href="case-study.html">Case Study</a></li>
                            <li><a href="case-study-details.html">Case Study Single</a></li>
                            <li><a href="mission-vision.html">Mission & Vision</a></li>
                            <li><a href="development-process.html">Development Process</a></li>
                            <li><a href="client-reviews.html">Client Reviews</a> </li>
                            <li><a href="clients.html">Our Clients</a></li>
                            <li><a href="get-quote.html">Contact Us</a> </li>
                            <li><a href="get-quote-2.html">Contact Us 2</a> </li>
                            <li><a href="login.html">Login Page</a> </li>
                            <li><a href="service-card.html">Service Card</a> </li>
                            <li><a href="service-web.html">Service Web</a></li>
                            <li><a href="service-app.html">Service Mobile App</a></li>
                            <li><a href="service-marketing.html">Service Digital Marketing</a></li>
                            <li><a href="service-graphic.html">Service Graphic</a></li>
                            <li><a href="career.html">Careers</a> </li>
                            <li><a href="shop-page.html">Shop Single</a> </li>
                            <li><a href="shop-details.html">Shop Details</a> </li>
                            <li><a href="shop-cart.html">Shop Cart</a> </li>
                        </ul> -->
                    </li>



                    <!-- <li>
                                <a href="#">Multi-Page Demo</a>
                                <ul>
                                    <li><a href="digital-agency.html">Digital Agency</a></li>
                                    <li><a href="digital-agency-v2.html">Digital Agency V2</a></li>
                                    <li><a href="digital-agency-glassmorphism.html">Digital Agency V3</a></li>
                                    <li><a href="web-design-agency.html">Web Design Agency</a></li>
                                    <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                    <li><a href="lead-generation.html">Lead Generation Agency</a></li>
                                    <li><a href="landing-page-1.html">Landing Page V1</a></li>
                                    <li><a href="landing-page-2.html">Landing Page V2</a></li>
                                    <li><a href="freelance-portfolio.html">Freelance Portfolio</a></li>
                                    <li><a href="app-development.html">App Development Agency</a></li>
                                    <li><a href="minimal-portfolio.html">Minimal Portfolio</a></li>
                                    <li><a href="creative-agency.html">Creative Agency</a></li>
                                    <li><a href="branding-agency.html">Branding Agency</a></li>
                                    <li><a href="modern-agency.html">Modern Agency</a></li>
                                    <li><a href="business-and-startup.html">Business & Startup</a></li>
                                    <li><a href="graphic-studio.html">Graphic Studio</a></li>
                                </ul>
                            </li> -->
                    <li>
                        <a href="<?= site_url('solusi'); ?>">Solusi dan Layanan</a>
                        <ul>
                            <li><a href="#">SISTEM SOLUTION</a></li>
                            <li><a href="<?= site_url('jasaweb'); ?>">Jasa Pembuatan Website</a></li>
                            <li><a href="<?= site_url('jasasistem'); ?>">Jasa Pembuatan Sistem</a></li>
                            <li><a href="<?= site_url('jasamob'); ?>">Jasa Pembuatan Mobile Apps</a></li>
                            <li><a href="#">DIGITAL SOLUTION</a></li>
                            <li><a href="<?= site_url('jasaseo'); ?>">Jasa SEO Website</a></li>
                            <li><a href="<?= site_url('intmarket'); ?>">Internet Marketing</a></li>
                            <li><a href="<?= site_url('sosmedmanagement'); ?>">Sosial Media Management</a></li>
                            <li><a href="<?= site_url('campaign'); ?>">Campaign Development</a></li>
                            <li><a href="<?= site_url('boostersosmed'); ?>">Booster Social Media</a></li>
                            <li><a href="<?= site_url('onlinerep'); ?>">Online Reputation Management</a></li>
                            <li><a href="<?= site_url('buzzer'); ?>">Buzzer Management</a></li>
                            <li><a href="<?= site_url('personalbrand'); ?>">Personal Branding</a></li>
                        </ul>
                    </li>
                </ul>
                </li>
                <li>
                    <a href="<?= site_url('client'); ?>">Client</a>
                    <!-- <ul>
                            <li><a href="portfolio.html">Portfolio Grid 1</a> </li>
                            <li><a href="portfolio-2.html">Portfolio Grid 2</a> </li>
                            <li><a href="portfolio-block.html">Portfolio Wide Block</a> </li>
                            <li><a href="portfolio-block-2.html">Portfolio Wide Block v2</a> </li>
                            <li><a href="portfolio-details.html">Portfolio Details</a> </li>
                        </ul> -->
                </li>
                <li>
                    <a href="<?= site_url('contact'); ?>">Contact</a>
                    <!-- <ul>
                            <li><a href="blog-grid-1.html">Blog Grid 1</a> </li>
                            <li><a href="blog-grid-2.html">Blog Grid 2</a> </li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a> </li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a> </li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul> -->
                </li>
                </ul>
                <ul class="bottom-nav">
                    <li class="prb">
                        <a href="tel:+11111111111">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
								  c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
								  c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
								  C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                            </svg>
                        </a>
                    </li>
                    <li class="prb">
                        <a href="mailto:somewebmedia@gmail.com">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                <path d="M0 0h24v24H0z" fill="none" />
                            </svg>
                        </a>
                    </li>
                    <li class="prb">
                        <a href="skype:niwax.company?call">
                            <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!--End Header -->