<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="services">
    <div class="blog-section section">
        <div class="container">
            <h2 class="text-center">News Detail</h2>
            <div class="border"></div>
            <div class="blog-detail-section animated-row">
                <div class="row">
                    <div class="column col-lg-8">
                        <div class="primary-section">
                            <div class="row">
                                <div class="col-12 animate" data-animate="fadeInUp">
                                    <div class="blog-box">
                                        <div class="blog-img-box">
                                            <figure><img src="<?= base_url()?>assets/img/news/<?= $detail->photo_news ?>" alt=""></figure>
                                            <span class="blog-category">
                                            <?php switch ($detail->cat) {
                                                 case '1': echo "Kegiatan"; break;
                                                 case '2': echo "Pengumuman"; break;
                                                 case '3': echo "Berita"; break;
                                            };?>                       
                                            </span><!--/.blog-category-->
                                        </div><!--/.blog-img-box-->
                                        <div class="blog-info">
                                            <div class="blog-details">
                                                <span class="posted-date hr-primary"><?= indonesian_date($detail->tgl) ?></span><!--/.posted-date-->
                                                <h1 class="post-title" style="line-height:40px"><?= $detail->judul ?></h1>
                                                <p class="text-justify"><?= $detail->desc ?></p>
                                            </div><!--/.blog-details-->
                                            <div class="blog-bottom-row">
                                                <span class="posted-by"><i class="fa fa-user" aria-hidden="true"></i> By <a href="#">Admin ITSC</a></span><!--/.posted-by-->
                                            </div><!--/.blog-bottom-row-->
                                        </div><!--/.blog-info-->
                                    </div><!--/.blog-box-->
                                </div><!--/.col-->
                            </div><!--/.row-->
                        </div><!--/.primary-section-->
                    </div><!--/.col-->
                    <div class="col-lg-4v2" style="float:right;wdith:width: 30.33333333%">
                        <aside id="sidebar">
                            <div class="widget-single widget-recent-blog" style="float:right;">
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
                    </div>
                </div><!--/.row-->
            </div><!--/.blog-posts-->
        </div><!--/.container-->
    </div><!--/.blog-section-->
</section>