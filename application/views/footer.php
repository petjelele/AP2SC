<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <footer>
            <!-- Footer top -->
            <div class="container footer_top">
                <div class="row">
                    <div class="col-lg-4 col-sm-7">
                        <div class="footer_item">
                            <img class="logo" src="assets/frontend/images/whatthefuck.png" alt="Construction" />
                            <p>Sekretariat IT Training & Service Center (R.4409) </p>
                            <p>Universitas Komputer Indonesia</p>
                            <p>Jln. Dipatiukur No.102-116, Coblong, Lebakgede, Bandung, Jawa Barat 40132</p>

                            <ul class="list-inline footer_social_icon">
                                <li><a href="https://www.facebook.com/unikomitsc/"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="https://twitter.com/itsc_unikom?lang=en"><span class="fa fa-twitter"></span></a></li>
                                <li><a href=" https://www.youtube.com/channel/UC6M28Sf-qizojBJXROYN7-A"><span class="fa fa-youtube"></span></a></li>
                                <li><a href="https://www.instagram.com/unikomitsc/?hl=en"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5">
                        <div class="footer_item">
                            <h4>Explore link</h4>
                            <ul class="list-unstyled footer_menu">
                                <li><a href="https://www.ristekbrin.go.id/"><span class="fa fa-play"></span> KEMENRISTEK DIKTI</a>
                                <li><a href="https://www.unikom.ac.id/"><span class="fa fa-play"></span> UNIKOM</a>
                                <li><a href="http://ap2sc.unikom.ac.id/itsc/"><span class="fa fa-play"></span> ITSC</a>
                                <li><a href="https://cdc.unikom.ac.id/"><span class="fa fa-play"></span> Career Online</a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-3">
                        <div class="footer_item">
                            <h4>Contact us</h4>
                            <ul class="list-unstyled footer_contact">
                                <li><a href="https://www.google.com/maps/place/Universitas+Komputer+Indonesia/@-6.8866868,107.6143908,18z/data=!4m5!3m4!1s0x2e68e6f8aa08188b:0x632d24e6061e8903!8m2!3d-6.8868635!4d107.6153092"><span class="fa fa-map-marker"></span> AP2SC UNIKOM</a></li>
                                <li><a href=""><span class="fa fa-envelope"></span> ap2sc@unikom.ac.id</a></li>
                                <li><a href=""><span class="fa fa-mobile"></span><p>(022) 2532141<br /></p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5">
                        <div class="footer_item" style="padding-left:50px">
                            <!--<h4>Youtube</h4>-->
                            <iframe width="380" height="320" src="https://www.youtube.com/embed/videoseries?list=PLo9cpv8KV_DG3RgUvVDBm76jFBNWqVLsD" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div><!-- Footer top end -->

            <!-- Footer bottom -->
            <div class="footer_bottom text-center">
                <p class="wow fadeInRight">
                   AP2SC
                    2020. All Rights Reserved
                </p>
            </div><!-- Footer bottom end -->
        </footer><!-- Footer end -->

        <!-- JavaScript -->
        <script src="assets/frontend/js/jquery-1.12.1.min.js"></script>
        <script src="assets/frontend/js/bootstrap.min.js"></script>
        <script src="assets/frontend/js/script.js"></script>
        <!-- Bootsnav js -->
        <script src="assets/frontend/js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="<?=base_url()?>assets/frontend/js/isotope.js"></script>
        <script src="<?=base_url()?>assets/frontend/js/isotope-active.js"></script>
        <script src="<?=base_url()?>assets/frontend/js/jquery.fancybox.js?v=2.1.5"></script>
        <script src="<?=base_url()?>assets/frontend/js/slick.js"></script>
        <script src="<?=base_url()?>assets/frontend/js/jquery.scrollUp.min.js"></script>
        <script src="<?=base_url()?>assets/frontend/js/main.js"></script>
        <script src="<?=base_url()?>assets/frontend/js/load-maps.js"></script>
        <script>
            popup = {
          init: function(){
            $('figure').click(function(){
              popup.open($(this));
            });

            $(document).on('click', '.popup img', function(){
              return false;
            }).on('click', '.popup', function(){
              popup.close();
            })
          },
          open: function($figure) {
            $('.gallery').addClass('pop');
            $popup = $('<div class="popup" />').appendTo($('body'));
            $fig = $figure.clone().appendTo($('.popup'));
            $bg = $('<div class="bg" />').appendTo($('.popup'));
            $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
            $shadow = $('<div class="shadow" />').appendTo($fig);
            src = $('img', $fig).attr('src');
            $shadow.css({backgroundImage: 'url(' + src + ')'});
            $bg.css({backgroundImage: 'url(' + src + ')'});
            setTimeout(function(){
              $('.popup').addClass('pop');
            }, 10);
          },
          close: function(){
            $('.gallery, .popup').removeClass('pop');
            setTimeout(function(){
              $('.popup').remove()
            }, 100);
          }
        }

        popup.init()

        </script>
    </body>
</html>
