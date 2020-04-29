<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <div class="container">
	   <div class="row">
            <h2 style="text-align:center;margin-top:20px">All Gallery</h2>   
                <div class="gallery">
                 <?php foreach ($allgalery as $galery) { ?>
                  <figure>
                    <img src="<?=base_url()?>assets/img/galery/<?=$galery->photo_gal ?>" alt=""/>
                    <figcaption><?=$galery->judul?><small>AP2SC UNIKOM</small></figcaption>
                  </figure>
                    <?php }?>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
                  <symbol id="close" viewBox="0 0 18 18">
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
                            S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
                            l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
                            c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
                            s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
                  </symbol>
                </svg>
                    </div>
    </div>
   