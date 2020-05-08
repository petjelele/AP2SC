<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="services">
            <div class="container">
                <h2 class="text-center">News Detail</h2>
                <div class="blog-section paddingTB60">
                        <div class="site-heading text-center">
                            <div class="border"></div>
                        </div>
                        <div class="row text-center">
                               <div class="col-sm-6 col-md-9">
                                        <div class="blog-box">
                                            <div class="blog-box-image">
                                                <img src="<?= base_url()?>assets/img/news/<?= $detail->photo_news?>" class="img-responsive" alt="">
                                            </div>
                                            <div class="blog-box-content">
                                                <h4><?= $detail->judul ?></h4>
                                                <p><?= $detail->desc?></p>
                                                    </div>
                                        </div>
                            </div> <!-- End Col -->		
                            <div class="col-sm-1 col-md-2 text-center" style="float:right;">
                               <aside id="sidebar">
                            <div class="widget-single widget-recent-blog">
                                <h4 class="hr-primary">Recent News</h4>
                                <ul>
                                    <?php foreach ($news as $berita) {?>
                                    <li >
                                        <figure>
                                            <a href="<?= base_url()?>detail/<?= abs($berita->id_news) ?>"><img src="<?= base_url()?>assets/img/news/<?= $berita->photo_news?>" alt=""></a>
                                        </figure>
                                        <div class="post-summary">
                                            <h5><a href="<?= base_url()?>detail/<?= abs($berita->id_news) ?>"><?= $berita->judul?></a></h5>
                                            <div class="posted-date"><?= indonesian_date($berita->tgl)?></div><!--/.post-date-->
                                        </div><!--/.post-summary-->
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div><!--/.widget-single-->
                        </aside><!--/.sidebar-->                         
                            </div> <!-- End Col -->	
                        </div>
                         <div class="row text-center">
                               		
                        </div>
                    </div>
                </div>
</section>