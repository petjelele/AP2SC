<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
        <section id="services">
            <div class="container">
                <h2>All News</h2>
                <div class="blog-section paddingTB60 ">
                    <div class="container">
                            <div class="site-heading text-center">
                                            <div class="border"></div>
                                        </div>
                        </div>
                        <div class="row text-center">
                                <?php foreach ($allnews as $allberita) { ?>
                               <div class="col-sm-6 col-md-4">
                                                <div class="blog-box">
                                                    <div class="blog-box-image">
                                                        <img src="assets/img/news/<?= $allberita->photo_news ?>" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="blog-box-content">
                                                        <h4><a href="<?= base_url()?>detail/<?= abs($allberita->id_news) ?>"><?= $allberita->judul ?></a></h4>
                                                        <p><?= substr($allberita->desc, 0, 100)?> ..
</p>
                                                        <a href="" class="btn btn-default site-btn">Read More</a>
                                                    </div>
                                                </div>
                                            </div> <!-- End Col -->			<?php }?>
                           
                                                        
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
</section>