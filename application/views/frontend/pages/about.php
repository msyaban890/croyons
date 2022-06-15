<!--Start sidebar -->
<div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
    <div class="offcanvas-body">
        <div class="cbtn animation">
            <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="form-block sidebarform">
            <h4>Request A Quote</h4>
            <form id="contactForm" data-bs-toggle="validator" class="shake mt20">
                <div class="row">
                    <div class="form-group col-sm-12">
                        <input type="text" id="name" placeholder="Enter name" required data-error="Please fill Out">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="email" id="email" placeholder="Enter email" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <input type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                        <select name="Dtype" id="Dtype" required>
                            <option value="">Select Requirement</option>
                            <option value="web">web</option>
                            <option value="graphic">graphic</option>
                            <option value="video">video</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="getintouchblock mt30">
            <h4>Get In Touch</h4>
            <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
            <div class="media mt15">
                <div class="icondive"><img src="images/icons/call.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="images/icons/whatsapp.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="images/icons/mail.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="mailto:info@website.com">info@website.com <span>Online Support</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="images/icons/map.svg" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="mailto:info@website.com">Jaipur, Rajasthan, India<span>Visit Our Office</span></a>
                </div>
            </div>
        </div>
        <div class="contact-data mt30">
            <h4>Follow Us On:</h4>
            <div class="social-media-linkz mt10">
                <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>
</div>
<!--end sidebar -->

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-1" data-background="images/banner/9.jpg">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">About Us</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>Tentang Croyons</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->
<!--Start About-->
<section class="about-agency pad-tb block-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 v-center">
                <div class="about-image">
                    <img src="<?= base_url('assets/'); ?>images/about/company-about.png" alt="about us" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="common-heading text-l ">
                    <span>About Us</span>
                    <h2>APA ITU CROYONS?</h2>
                    <p>Kami adalah perusahaan berbasis IT. Fokus utama kami adalah memberikan layanan solusi IT untuk perusahaan, perseorangan atau lembaga lainnya. Kami memiliki i para programmer muda profesional yang memiliki passion yang sama untuk mengembangkan industri digital. Fokus lain kami adalah pembuatan / pengembangan software baik menggunakan platfrom Web Based, maupun mobile apps seperti Android dan IOS. Selain itu, kami juga mengembangkan beberapa produk yang dapat langsung anda gunakan untuk mengembangkan, membantu menjalankan proses bisnis yang ada di perusahaan anda. </p>
                    <p>Untuk informasi layanan lebih detail dan penawaran terbaik silahkan kontak kami melalui telepon, SMS ataupun whatsapp, dan kami akan memastikan bahwa kebutuhan Anda terpenuhi. Kami tidak menawarkan jasa murah, namun kami menawarkan kualitas, pelayanan, jaminan penyelesaian pekerjaan, dan layanan maintenance (managed service) jangka panjang.</p>
                </div>
                <div class="row in-stats small about-statistics">
                    <div class="col-lg-4 col-sm-4">
                        <div class="statistics">
                            <div class="statnumb counter-number">
                                <span class="counter">450</span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="statistics">
                            <div class="statnumb">
                                <span class="counter">95</span><span>k</span>
                                <p>Hours Worked</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="statistics mb0">
                            <div class="statnumb counter-number">
                                <span class="counter">850</span>
                                <p>Projects Done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->
<!--Start why-choose-->
<section class="why-choose pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading">
                    <span>We Are Awesome</span>
                    <h2 class="mb30">KENAPA HARUS CROYONS?</h2>
                    <p>Banyak perusahaan yang mencari solusi IT terbaik untuk meningkatkan bisnis mereka dan bekerjasama dengan Croyons.
                        Inilah beberapa alasan kenapa anda harus memilih Croyons?</p>
                </div>
            </div>
        </div>
        <div class="row upset">
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="<?= base_url('assets/'); ?>images/icons/research.svg" alt="service" class="img-fluid" /></div>
                    <h4>Reasearch and Analysis</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="<?= base_url('assets/'); ?>images/icons/chat.svg" alt="service" class="img-fluid" /></div>
                    <h4>Negotiation and power</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="<?= base_url('assets/'); ?>images/icons/monitor.svg" alt="service" class="img-fluid" /></div>
                    <h4>Creative and innovative solutions</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="<?= base_url('assets/'); ?>images/icons/trasparency.svg" alt="service" class="img-fluid" /></div>
                    <h4>Trasparency and ease of work</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End why-choose-->

<!--Start Blogs-->
<section class="blogs-section pb80 pt80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Blogs</span>
                    <h2 class="mb20">Latest Stories</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="<?= base_url('assets/'); ?>images/blog/blog-dg-1.jpg" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Nodejs</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 23, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4><a href="#">Everything You Need To Know About Nodejs!</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="post-social">
                            <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="<?= base_url('assets/'); ?>images/blog/blog-dg-2.jpg" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Laravel</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 24, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4><a href="#">Exploring the Key Features of Laravel 7 Framework</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="post-social">
                            <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="<?= base_url('assets/'); ?>images/blog/blog-dg-3.jpg" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Mobile Application</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 25, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4><a href="#">Best Technology for Mobile Application Development</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="post-social">
                            <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Blogs-->
<!--Start CTA-->
<section class="-cta-section dg-bg--2 dg-cta-sec pb130 pt130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading-2">
                    <span class="text-effect-1">LET'S WORK TOGETHER</span>
                    <h2>Let’s Create Big Stories Together</h2>
                    <p class="mt20">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those.</p>
                    <a href="#" class="btn-main bg-btn4 lnk mt40">Request a proposal<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End CTA-->