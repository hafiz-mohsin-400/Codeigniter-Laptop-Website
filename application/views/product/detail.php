<?php $this->load->view('layout/header'); ?>  
<div id="container">
    <div class="container">
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <div itemscope itemtype="http://schema.org/Product">
            <h1 class="title" itemprop="name"><?php echo $product->title; ?></h1>
            <div class="row product-info">
              <div class="col-sm-6">
                <div class="image">
                  <?php if ($product->product_img == 'image not found') : ?>
                      <img src="/assets/image/noimage.jpg" class="img-thumbnail">
                  <?php else: ?>
                      <img src="/uploads/<?php echo $product->product_img; ?>" class="img-responsive" itemprop="image" id="zoom_01" alt="<?php echo $product->title; ?>" data-zoom-image="/uploads/<?php echo $product->product_img; ?>" />
                  <?php endif ?>
                </div>
                <div class="center-block text-center"><span class="zoom-gallery"><i class="fa fa-search"></i> Click image for Gallery</span></div>
                <?php $galleries = $this->gallery->get_gallery_by($product->id); ?>
                <div class="image-additional" id="gallery_01">
                  <?php foreach ($galleries as $gallery): ?>   
                  <a class="thumbnail" href="#" data-zoom-image="/uploads/<?php echo $gallery->gallery_img; ?>" data-image="/uploads/<?php echo $gallery->gallery_img; ?>"> 
                    <img src="/uploads/<?php echo $gallery->gallery_img; ?>" alt = ""/>
                  </a>
                   <?php endforeach ?> 
                   
                </div>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled description">
                  <li><b>Brand:</b> <a href="#"><span itemprop="brand"><?php echo $brand_array[$product->brand_id]; ?></span></a></li>
                  <li><b>Code:</b> <a href="#"><span itemprop="brand"><?php echo $product->code; ?></span></a></li>
                  <li><b>Product Condition:</b> <span itemprop="mpn"><?php echo $product->product_condition; ?></span></li>
                  <li><b>Total Views:</b> <?php echo $product->views; ?></li>
                </ul>
                <ul class="price-box">
                  <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer"> <span itemprop="price">Rs- <?php echo number_format($product->price); ?><span itemprop="availability" content="In Stock"></span></span></li>
                </ul>
                <div id="product">
                  
                  <div class="cart">
                    <div>
                      <div class="qty">
                        <label class="control-label" for="input-quantity">Qty</label>
                        <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                        <a class="qtyBtn plus" href="javascript:void(0);">+</a><br />
                        <a class="qtyBtn mines" href="javascript:void(0);">-</a>
                        <div class="clear"></div>
                      </div>
                      <button type="button" id="button-cart" class="btn btn-primary btn-lg">Add to Cart</button>
                    </div>
                    <div>
                      <button type="button" class="wishlist" onClick=""><i class="fa fa-heart"></i> Add to Wish List</button>
                      <br />
                      <button type="button" class="wishlist" onClick=""><i class="fa fa-exchange"></i> Compare this Product</button>
                    </div>
                  </div>
                </div>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style"> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal" pi:pinit:url="http://www.addthis.com/features/pinterest" pi:pinit:media="http://www.addthis.com/cms-content/images/features/pinterest-lg.png"></a> <a class="addthis_counter addthis_pill_style"></a> </div>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514863386b357649"></script>
                <!-- AddThis Button END -->
              </div>
            </div>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
              <li><a href="#tab-specification" data-toggle="tab">Specification</a></li>
              <li><a href="#tab-review" data-toggle="tab">Reviews (2)</a></li>
            </ul>
            <div class="tab-content">
              <div itemprop="description" id="tab-description" class="tab-pane active">
                <div>
                  <p><?php echo $product->description; ?></p>
                </div>
              </div>
              <div id="tab-specification" class="tab-pane">
                <table class="table table-bordered">
                  <tr>
                    <th>Processor Type</th>
                    <td><?php echo $product->processor_type; ?></td>
                  </tr>
                  <tr>
                    <th>Processor Speed</th>
                    <td><?php echo $product->processor_speed; ?></td>
                  </tr>
                  <tr>
                    <th>Hard Drive Size</th>
                    <td><?php echo $product->hard_drive_size; ?></td>
                  </tr>
                  <tr>
                    <th>Installed Ram</th>
                    <td><?php echo $product->installed_ram; ?></td>
                  </tr>
                  <tr>
                    <th>Screen Size</th>
                    <td><?php echo $product->screen_size; ?></td>
                  </tr>
                  <tr>
                    <th>Camera</th>
                    <td><?php echo $product->camera; ?></td>
                  </tr>
                  <tr>
                    <th>Color</th>
                    <td><?php echo $product->color; ?></td>
                  </tr>
                  <tr>
                    <th>Operating System</th>
                    <td><?php echo $product->operating_system; ?></td>
                  </tr>
                  <tr>
                    <th>Bluetooth</th>
                    <td><?php echo $product->bluetooth; ?></td>
                  </tr>
                  <tr>
                    <th>Wifi</th>
                    <td><?php echo $product->wifi; ?></td>
                  </tr>
                  <tr>
                    <th>Lan</th>
                    <td><?php echo $product->lan; ?></td>
                  </tr>
                  <tr>
                    <th>Modem</th>
                    <td><?php echo $product->modem; ?></td>
                  </tr>

                  </table>
                
              </div>
              <div id="tab-review" class="tab-pane">
                <?php 
                    $attributes = ['name' => 'reviewForm', 'id' => 'reviewForm', 'class' => 'form-horizontal'];
                    $hidden = ['productID' => $product->id, 'redirectTo' => '/' . $this->uri->uri_string() ];
                    echo form_open('/product/review/' . $product->slug, $attributes, $hidden);
                  ?>
                  <div id="review">
                    <div>
                      <?php $getReviews = $this->review->get_reviews($product->id); ?>
                      
                      <?php foreach ($getReviews as $getReview) : ?>
                      <table class="table table-striped table-bordered">
                        <tbody>
                          <tr>
                            <td style="width: 50%;"><strong><span><?php echo $getReview->name; ?></span></strong></td>
                            <td class="text-right"><span><?php echo $getReview->create_date; ?></span></td>
                          </tr>
                          <tr>
                            <td colspan="2"><p><?php echo $getReview->comment; ?></p></td>
                          </tr>
                        </tbody>
                      </table>
                      <?php endforeach ?>
                      
                    </div>
                    <div class="text-right"></div>
                  </div>
                  <h2>Write a review</h2>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label for="name" class="control-label">Your Name</label>
                      <input type="text" class="form-control" name="name" id="name" value="" name="name">
                    </div>
                  </div>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label for="review" class="control-label">Your Review</label>
                      <textarea class="form-control" name="review" id="review" rows="5" name="text"></textarea>
                      <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                    </div>
                  </div>
                  <div class="buttons">
                    <div class="pull-right">
                      <button class="btn btn-primary" class="button_click" id="button-review" type="submit">Continue</button>
                    </div>
                  </div>
                <?php echo form_close(); ?>
            </div>
            </div>
            <h3 class="subtitle">Related Products</h3>
            <div class="owl-carousel related_pro">
              <?php if ($related_products): ?>
                <?php foreach ($related_products as $related_product): ?>

              <div class="product-thumb">
                <div class="image">
                  <a href="<?php echo '/product/' . $related_product->slug; ?>">
                  <?php if ($related_product->product_img == 'image not found') : ?>
                      <img src="/assets/image/noimage.jpg" class="img-thumbnail">
                  <?php else: ?>
                      <img src="/uploads/<?php echo $related_product->product_img; ?>" class="img-thumbnail"
                      alt="<?php echo $related_product->title; ?>">
                  <?php endif ?>
                </a>
                </div>
                <div class="caption">
                  <h4><a href="<?php echo '/product/' . $related_product->slug; ?>"><?php echo $related_product->title; ?></a></h4>
                  <p class="price"> <span class="price-new">Rs- <?php echo number_format($related_product->price); ?></span></p>
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
                <div class="alert alert-danger">
                  No Related Products found!
                </div>  
              <?php endif ?>
              
            </div>
          </div>
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
        <?php $this->load->view('layout/sidebar'); ?>
        <!--Right Part End -->
      </div>
    </div>
  </div>
  <!--Footer Start-->
  <?php $this->load->view('layout/footer'); ?>


  <script>
    $(document).ready(function() {
        
        $(".button_click").on('click', function(e) {
            e.preventDefault();
            
        });
        
        





});
</script>