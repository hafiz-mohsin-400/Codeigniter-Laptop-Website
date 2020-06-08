<?php $this->load->view('layout/header'); ?>
  <div id="container">
    <div class="container">
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h1 class="title">Gallery</h1>
          <div class="row">
            <div class="col-sm-12">
              <main class="main-content">
                <div class="gallery tc-padding">
                  <div class="container">
                    <div class="row no-gutters">
                      

                    <?php $galleries = $this->media->getByGallery('gallery'); ?>
                    <?php if ($galleries): ?>
                    <?php foreach ($galleries as $gallery): ?>  
                    <div class="col-lg-3 col-xs-6 r-full-width">
                      <div class="gallery-figure style-2">
                      <?php if ($gallery->media_img == 'image not found') : ?>
                        <img src="/assets/image/noimage.jpg" width="291" height="291">
                      <?php else: ?>
                        <img src="/uploads/<?php echo $gallery->media_img; ?>" width="291" height="291" alt="<?php echo $gallery->title; ?>">
                      <?php endif ?> 
                        

                      </div>
                    </div>
                    <?php endforeach ?>
                    <?php else: ?>
                    <div class="alert alert-danger">No Galleries found!</div>
                    <?php endif ?>


                    </div>
                    </div>
                </div>
              </main>
            </div>
          </div>
          
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>

  <!--Footer Start-->
 <?php $this->load->view('layout/footer'); ?>
