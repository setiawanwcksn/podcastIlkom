<div id="aside-main" >
  <div class="asidebar">
    <div class="wrap-widget">
        <div class="wrap-widget-header">
            <hr>
            <h5 class="text-center"><img class="images-grid" src="<?php echo base_url('./assets/images/grid.png')?>" alt="" width="20px">&nbsp;<strong> Artikel <?php echo $jenisArtikel1 ?></strong></img></h4>
            <hr>
        </div>
        <div class="container pb-3">
          <?php          
              foreach($artikelHypeLimit  as $hype) :  
            ?>  
          <div class="row mt-2">
                  <div class="col-4"> <img class="card-img-top" src="<?php echo base_url('assets/upload/'.$hype['foto1']) ?>" alt="Card image cap"></div>
                  <div class="col-8"><b><a class="text-color-blue" href="<?php echo base_url('article/view/').$hype['id_artikel']?>">"<?php echo $hype['judul']; ?>"</a></p></b></div>
          </div>
              <?php endforeach;?>
        </div>
    </div>
    <div class="wrap-widget">
        <div class="wrap-widget-header">
            <hr>
                <h5 class="text-center"><img class="images-grid" src="<?php echo base_url('./assets/images/grid.png')?>" alt="" width="20px">&nbsp;<strong> Artikel <?php echo $jenisArtikel2 ?></strong></img></h4>
            <hr>
        </div>
        <div class="container pb-3">
          <?php 
              foreach($artikelReviewLimit as $Review) :            
            ?>  
          <div class="row mt-2">
            <div class="col-4"> <img class="card-img-top" src="<?php echo base_url('assets/upload/'.$Review['foto1']) ?>" alt="Card image cap"></div>
            <div class="col-8"><b><a class="text-color-blue" href="<?php echo base_url('article/view/').$Review['id_artikel']?>">"<?php echo $Review['judul']; ?>"</a></b></div>
          </div>
              <?php endforeach;?>
        </div>
    </div>
                
  </div>
</div>