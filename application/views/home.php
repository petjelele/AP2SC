<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
        <section id="home" class="home">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel-inner -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?=base_url()?>assets/frontend/images/slider.jpg">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Aplikasi Pengembangan Pelatihan dan Service Center</h3>
                                <h1>AP2SC</h1>
                                <h1 class="second_heading">UNIKOM</h1>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($slider as $sliders) { ?>
                    <div class="item">
                        <img src="<?=base_url()?>assets/img/slider/<?= $sliders->photo_slider ?>">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Aplikasi Pengembangan Pelatihan dan Service Center</h3>
                                <h1>AP2SC</h1>
                                <h1 class="second_heading">UNIKOM</h1>
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                </div>  
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
        </section>


        <!-- About -->
        <section id="about">
            <div class="container about_bg">
                <div class="row" style="margin-top:50px">
                    <div class="col-lg-7 col-md-6">
                        <div class="about_content">
                            <h2>Welcome To AP2SC</h2>
                            <h3>Aplikasi Pengembangan Pelatihan dan Service Center</h3>
                            <p>,</p>
                            <p> </p>
                            <a  href="<?= base_url()?>about" class="btn know_btn" style="margin-top:-50px">know more</a>
                            <div class="row">
                              <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-lg-offset-1">
                        <div class="about_banner">
                            <img src="assets/frontend/images/Logo AP2SC.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- About end -->

        <!-- Why us -->
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                            <h2>OUR SERVICES</h2>
                            <p></p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <a href="http://ap2sc.unikom.ac.id/itsc/"><img src="assets/img/unnamed_icon.png"  class="img-thumbnail"></a>
                            <h3>ITSC</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <a href="http://ap2sc.unikom.ac.id/ibt/"><img src="assets/img/logo_ibt.png"  class="img-thumbnail">
                            </a>                            
                            <h3>IBT</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <a href="https://smartapps.unikom.ac.id/"><img  src="assets/img/about/logo_icon.png" class="img-thumbnail"></a>
                            <h3>Smartapps</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <a href="https://ap2sc.unikom.ac.id/itsc/pearson"><img src="assets/img/about/aboutp.jpg" class="img-thumbnail"></a>
                            <h3>Pearson Vue</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Why us end -->

        <!-- Services -->
        <section id="services">
            <div class="container">
                <div class="row">
                <h2>Recent News</h2>
                            <div class="site-heading text-center">
                                            <div class="border"></div>
                                        </div>
                       
                        <div class="row text-center">
                                <?php foreach ($news as $berita) { ?>
                               <div class="col-sm-2 col-md-4">
                                                <div class="blog-box">
                                                    <div class="blog-box-image">
                                                        <img src="assets/img/news/<?= $berita->photo_news ?>" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="blog-box-content">
                                                        <h4><a href=""><?= $berita->judul ?></a></h4>
                                                        <table>
                                                        <tr>
                                                        <td style="padding-right:10px">
                                                        <span class="posted-date"  style="margin-top:10px;padding-right:10px;color:#959595"><?= indonesian_date($berita->tgl) ?></span>
                                                        <td>
                                                        <span class="posted-by"><i class="fa fa-user" aria-hidden="true"></i> By <a href="#">Admin AP2SC</a></span>
                                                        </tr>    
                                                        </table>
                                                        <a href="<?= base_url()?>detail/<?= abs($berita->id_news)?>" class="btn btn-default site-btn">Read More</a>
                                                    </div>
                                                </div>
                                            </div> <!-- End Col -->			<?php }?>
                           
                                                        
                        </div>
      
             
                    
                    </div>
  
                </div>
             <div class="row text-center">
                             <a  href="<?=base_url()?>news" class="btn know_btn" style="margin-top:35px;margin-bottom:20px">MORE NEWS</a>     
                            </div>
    </section>

        <!-- Portfolio -->
        <section id="portfolio">
            <div class="container portfolio_area text-center">
                <h2>Gallery</h2>
                <p></p>

                <div id="filters">
                    <button class="button is-checked" data-filter="*">Show All</button>
                    <button class="button" data-filter=".buildings">Buildings</button>
                    <button class="button" data-filter=".interior">Interior Design</button>
                    <button class="button" data-filter=".isolation">Isolation</button>
                    <button class="button" data-filter=".plumbing">Plumbing</button>
                </div>
                <!-- Portfolio grid -->
                <div class="grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item grid-item--width2 grid-item--height2 buildings plumbing interior">
                        <img src="assets/img/galery/1578365354168.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="assets/img/galery/1578365354168.jpg" data-fancybox-group="gallery" title="Workshop Bongkar Laptop"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>
                    </div>

                    <div class="grid-item buildings interior isolation">
                        <img alt="" src="assets/img/galery/1578297768136.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="assets/img/galery/1578297768136.jpg" data-fancybox-group="gallery" title="Workshop Jaringan"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>
                    </div>

                    <div class="grid-item interior plumbing isolation">
                        <img alt="" src="assets/img/galery/1578365720197.png" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="assets/img/galery/1578365720197.png" data-fancybox-group="gallery" title="Doorprize Workshop"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>
                    </div>

                    <div class="grid-item isolation buildings">
                        <img alt="" src="assets/img/galery/1578365562805.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="assets/img/galery/1578365562805.jpg" data-fancybox-group="gallery" title="Workshop IoT dengan Raspberry Pi"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>
                    </div>

                    <div class="grid-item plumbing isolation">
                        <img alt="" src="assets/img/galery/1578293839092.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="assets/img/galery/1578293839092.jpg" data-fancybox-group="gallery" title="Rekor Muri Merakit dan Instalasi PC 2012
"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>
                    </div>
                </div><!-- Portfolio grid end -->
                <a href="<?=base_url()?>galery" class="btn know_btn" style="margin-top:30px;background:#ffcb0f">MORE GALLERY</a>
            </div>
        </section><!-- Portfolio end -->
    
                <!--OUR PARTNERS START-->
        <div class="row">
                <div class="container" style="margin-top:50px;margin-bottom:35px" >
                     <h2 style="text-align:center;">OUR PARTNERS</h2>
                    <section class="customer-logos slider">
                        <div class="slide"><img src="assets/img/mitra/belogix.png"></div>
                        <div class="slide"><img src="assets/img/mitra/pearson.png"></div>
                        <div class="slide"><img src="assets/img/mitra/bni.png"></div>
                        <div class="slide"><img src="assets/img/mitra/hitsunikomradio.png"></div>
                        <div class="slide"><img src="assets/img/mitra/telkompcc.png"></div>
                        <div class="slide"><img src="assets/img/mitra/telkomedika.png"></div>
                        <div class="slide"><img src="assets/img/mitra/Azus.png"></div>
                        <div class="slide"><img src="assets/img/mitra/astera.png"></div>
                        <div class="slide"><img src="assets/img/mitra/idcard.png"></div>
                    </section>
                </div>
            </div>
                <!--OUR PARTNERS END-->

        <!-- Contact form -->
        <section id="contact_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Do you have any questions?</h2>
                        <h2 class="second_heading">Feel free to contact us!</h2>
                    </div>
                    <form id="ajax-contact" role="form" class="form-inline text-right col-md-6" method="post" action="<?=base_url()?>inbox"> 
                        <div class="form-group">
                            <input type="text" class="form-control" id="namA" placeholder="Name" name="namA">
                        </div>
                        <div class="form-group">
                             <input class="form-control" placeholder="Your Email" name="emaiL" id="emaiL" required type="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="msg" placeholder="Message" name="messagE"></textarea>
                        </div>
                        <button type="submit" onclick="validation();" class="btn submit_btn">Submit</button>
                    </form>
                    <script type="text/javascript">
                    function validation()
                        {
                            Swal.fire(
                              'Good job!',
                              'You clicked the button!',
                              'success'
                            )
                        }
                    </script>
                </div>
            </div>
        </section><!-- Contact form end -->


       