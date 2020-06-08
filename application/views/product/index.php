<?php $this->load->view('layout/header'); ?>
  <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="#"><?php echo $title; ?></a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Left Part Start -->
        <?php $this->load->view('layout/sidebar'); ?>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <h1 class="title"><?php echo $title; ?></h1>
          <div class="row products-category">
              <?php if ($products): ?>
                <?php foreach ($products as $product): ?>
                
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image">
                  <a href="<?php echo '/product/' . $product->slug; ?>">
                  <?php if ($product->product_img == 'image not found') : ?>
                      <img src="/assets/image/noimage.jpg" width="200" class="img-thumbnail">
                  <?php else: ?>
                      <img src="/uploads/<?php echo $product->product_img; ?>" class="img-thumbnail"
                      width="200" alt="<?php echo $product->title; ?>">
                  <?php endif ?>
                  </a>
              </div>
                <div>
                  <div class="caption">
                    <h4><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title; ?></a></h4>
                    <p class="description"><?php echo substr($product->description, 0, 150); ?>...</p>
                    <p class="price"> <span class="price-new">Rs- <?php echo number_format($product->price); ?></span></p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach ?>
            
          </div>
          <?php else: ?>
              <div class="alert alert-danger">No products found</div>
            <?php endif ?>
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>
  <!--Footer Start-->
  <?php $this->load->view('layout/footer'); ?>