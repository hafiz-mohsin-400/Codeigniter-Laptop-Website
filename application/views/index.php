<?php $this->load->view('layout/header'); ?>
  <div id="container">
    <!-- Feature Box Start-->
    <div class="container">&nbsp;</div>
    <!-- Feature Box End-->
    <div class="container">
      <div class="row">
        <!-- Left Part Start-->
        <?php $this->load->view('layout/sidebar'); ?>
        <!-- Left Part End-->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <!-- Slideshow Start-->
          <div class="slideshow single-slider owl-carousel">
            <?php $slideshows = $this->media->show_media_by('slideshow'); ?>
            <?php if ($slideshows): ?>
              <?php foreach ($slideshows as $slideshow): ?>
            <div class="item"> 
              <a href="#">
                <?php if ($slideshow->media_img == 'image not found') : ?>
                      <img src="/assets/image/noimage.jpg" style="width:920px; height:550px;">
                  <?php else: ?>
                      <img src="/uploads/<?php echo $slideshow->media_img; ?>" style="width:920px; height:550px;" alt="<?php echo $slideshow->title; ?>" />
                  <?php endif ?>
              </a> 
          </div>
            <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No Slideshows found!</div>
            <?php endif ?>
          </div>
          <!-- Slideshow End-->
          <!-- Featured Product Start-->
          <h3 class="subtitle">Dell</h3>
          <div class="owl-carousel product_carousel">
            <?php $products = $this->product->show_all_by_brands(1); ?>
            <?php if ($products): ?>
              <?php foreach ($products as $product): ?>
             
             <div class="product-thumb clearfix">
              <div class="image">
                <a href="<?php echo '/product/' . $product->slug; ?>">
                  <?php if ($product->product_img == 'image not found') : ?>
                      <img src="/assets/image/noimage.jpg" class="img-thumbnail">
                  <?php else: ?>
                      <img src="/uploads/<?php echo $product->product_img; ?>" class="img-thumbnail"
                      alt="<?php echo $product->title; ?>">
                  <?php endif ?>
                </a>
              </div>
              <div class="caption">
                <h4><a href="<?php echo '/product/' . $product->slug; ?>"> <?php echo substr($product->title, 0, 10); ?>...</a></h4>
                <p class="price"><span class="price-new">Rs- <?php echo number_format($product->price); ?></span></p>
                
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('42');"><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                </div>
              </div>
            </div>
            <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No Brands found!</div>
            <?php endif ?>

          </div>
          <!-- Featured Product End-->
          <!-- Banner Start-->
          
          <!-- Banner End-->
          <!-- Categories Product Slider Start-->
          <div class="category-module" id="latest_category">
            <h3 class="subtitle">Hp</h3>
            <div class="category-module-content">
              <div id="tab-cat1" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                  <?php $products = $this->product->show_all_by_brands(2); ?>
                  <?php if ($products): ?>
                    <?php foreach ($products as $product): ?>
                      
                    
                  <div class="product-thumb">
                    <div class="image">
                      <a href="<?php echo '/product/' . $product->slug; ?>">
                        <?php if ($product->product_img == 'image not found') : ?>
                            <img src="/assets/image/noimage.jpg" class="img-thumbnail">
                        <?php else: ?>
                            <img src="/uploads/<?php echo $product->product_img; ?>" class="img-thumbnail"
                            alt="<?php echo $product->title; ?>">
                        <?php endif ?>
                      </a>
                    </div>
                    <div class="caption">
                      <h4><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo substr($product->title, 0, 10); ?>...</a></h4>
                      <p class="price"> <span class="price-new">Rs- <?php echo number_format($product->price); ?></span></p>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                      </div>
                    </div>
                  </div>
                  <?php endforeach ?>
                  <?php else: ?>
                    <div class="alert alert-danger">No Brands found!</div>
                  <?php endif ?>
                </div>
              </div>
            </div>
          </div>
          <!-- Categories Product Slider End-->
          <!-- Banner Start -->
          
          <!-- Banner End -->
          
          <!-- Categories Product Slider Start -->
          <h3 class="subtitle">LENOVO</h3>
          <div class="owl-carousel latest_category_carousel">
              <?php $products = $this->product->show_all_by_brands(3); ?>
              <?php if ($products): ?>
              <?php foreach ($products as $product): ?>


            <div class="product-thumb">
              <div class="image">
                <a href="<?php echo '/product/' . $product->slug; ?>">
                  <?php if ($product->product_img == 'image not found') : ?>
                      <img src="/assets/image/noimage.jpg" class="img-thumbnail">
                  <?php else: ?>
                      <img src="/uploads/<?php echo $product->product_img; ?>" class="img-thumbnail"
                      alt="<?php echo $product->title; ?>">
                  <?php endif ?>
              </a></div>
              <div class="caption">
                <h4><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo substr($product->title, 0, 10); ?>...</a></h4>
                <p class="price">Rs- <?php echo number_format($product->price); ?></p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                </div>
              </div>
            </div>
            <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No Brands found!</div>
            <?php endif ?>
          </div>
          <!-- Categories Product Slider End -->
          <!-- Brand Product Slider Start-->
          <h3 class="subtitle">Apple</h3>
          <div class="owl-carousel latest_brands_carousel">
            <?php $products = $this->product->show_all_by_brands(4); ?>
              <?php if ($products): ?>
              <?php foreach ($products as $product): ?>



            <div class="product-thumb">
              <div class="image">
                <a href="<?php echo '/product/' . $product->slug; ?>">
                  <?php if ($product->product_img == 'image not found') : ?>
                      <img src="/assets/image/noimage.jpg" class="img-thumbnail">
                  <?php else: ?>
                      <img src="/uploads/<?php echo $product->product_img; ?>" class="img-thumbnail"
                      alt="<?php echo $product->title; ?>">
                  <?php endif ?>
              </a>
              </div>
              <div class="caption">
                <h4><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo substr($product->title, 0, 10); ?>...</a></h4>
                <p class="price">Rs- <?php echo number_format($product->price); ?></p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                </div>
              </div>
            </div>
             <?php endforeach ?>
            <?php else: ?>
              <div class="alert alert-danger">No Brands found!</div>
            <?php endif ?>
            
          </div>
          <!-- Brand Product Slider End -->
          <!-- Brand Logo Carousel Start-->
          <div id="carousel" class="owl-carousel nxt">
            <?php $brands = $this->brand->show_all(); ?>
            <?php foreach ($brands as $brand): ?>
            <div class="item text-center">
              <a href="<?php echo '/brand/' . $brand->slug; ?>">
                  <?php if ($brand->brand_img == 'image not found') : ?>
                      <img src="/assets/image/noimage.jpg" class="img-thumbnail">
                  <?php else: ?>
                      <img src="/uploads/<?php echo $brand->brand_img; ?>" style="width: 200px; height: 200px;"  alt="<?php echo $brand->title; ?>">
                  <?php endif ?>
              </a> 
                </div>
            <?php endforeach ?>
          </div>
          <!-- Brand Logo Carousel End -->
        </div>
        <!--Middle Part End-->
      </div>
    </div>
  </div>

  <!--Footer Start-->
  <?php $this->load->view('layout/footer'); ?>