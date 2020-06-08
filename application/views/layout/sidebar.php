<aside id="column-left" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">Brands</h3>
          <?php $brands = $this->brand->show_all(); ?>
          <?php if ($brands): ?>
            
          <div class="box-category">
            <ul id="cat_accordion">
            <?php foreach ($brands as $brand) : ?>
              <li><a href="<?php echo '/brand/' . $brand->slug; ?>"><?php echo $brand->title; ?></a></li>
            <?php endforeach ?>
            </ul>
          </div>
          <?php else: ?>
            <div class="alert alert-danger">No Brand found!</div>
          <?php endif ?>
          <h3 class="subtitle">Latest</h3>
          <div class="side-item">
            <?php $latest_products = $this->product->latest_products(); ?>
            <?php if ($latest_products): ?>
              <?php foreach ($latest_products as $latest_product) : ?>
            <div class="product-thumb clearfix">
              <div class="image">
                <a href="<?php echo '/product/' . $latest_product->slug; ?>">
                  <?php if ($latest_product->product_img == 'image not found') : ?>
                      <img src="/assets/image/noimage.jpg" class="img-thumbnail">
                  <?php else: ?>
                      <img src="/uploads/<?php echo $latest_product->product_img; ?>" class="img-thumbnail"
                      alt="<?php echo $latest_product->title; ?>">
                  <?php endif ?>
              </a>
              </div>
              <div class="caption">
                <h4><a href="<?php echo '/product/' . $latest_product->slug; ?>"><?php echo $latest_product->title; ?></a></h4>
                <p class="price"><span class="price-new">Rs- <?php echo $latest_product->price; ?></span></p>
              </div>
            </div>
          <?php endforeach ?>
          <?php else: ?>
            <div class="alert alert-danger">No Latest Brands found!</div>
          <?php endif ?>
          </div>
          <h3 class="subtitle">Most Viewed</h3>
          <div class="side-item">
            <?php $most_views = $this->product->most_views(); ?>
            <?php if ($most_views): ?>
              <?php foreach ($most_views as $most_view) : ?>
            <div class="product-thumb clearfix">
              <div class="image">
                <a href="<?php echo '/product/' . $most_view->slug; ?>">
                  <?php if ($most_view->product_img == 'image not found') : ?>
                      <img src="/assets/image/noimage.jpg" class="img-thumbnail">
                  <?php else: ?>
                      <img src="/uploads/<?php echo $most_view->product_img; ?>" class="img-thumbnail"
                      alt="<?php echo $most_view->title; ?>">
                  <?php endif ?>
                </a>
              </div>
              <div class="caption">
                <h4><a href="<?php echo '/product/' . $most_view->slug; ?>"><?php echo $most_view->title; ?></a></h4>
                <p class="price"><span class="price-new">Rs- <?php echo $most_view->price; ?></span></p>
              </div>
            </div>
            <?php endforeach ?>
            <?php else: ?>
            <div class="alert alert-danger">No Most views found!</div>
          <?php endif ?>
          </div>
          
          <h3 class="subtitle">Prices</h3>
          <div class="side-item">
            <?php 
              $prices = array(
                '10000-20000' => '10,000 To 20,000',
                '20000-30000' => '20,000 To 30,000', 
                '30000-40000' => '30,000 To 40,000', 
                '40000-50000' => '40,000 To 50,000', 
                '50000-60000' => '50,000 To 60,000', 
                '60000-70000' => '60,000 To 70,000', 
                '70000-80000' => '70,000 To 80,000', 
                '80000-90000' => '80,000 To 90,000', 
                '90000-100000' => '90,000 To 100,000' 
              ); 
            ?>
            <?php foreach ($prices as $key => $price): ?>
              
            <div class="product-thumb clearfix">
              <div class="caption">
                <h4><a href="/product?price=<?php echo $key; ?>"><?php echo $price; ?></a></h4>
              </div>
            </div>
            <?php endforeach ?>

          </div>
          <h3 class="subtitle">New Arrivals</h3>

          <div class="side-item">
            <?php 
              $items = array(
                'ci3' => 'All Ci3 Laptops',
                'ci5' => 'All Ci5 Laptops', 
                'ci7' => 'All Ci7 Laptops', 
                'ci9' => 'All Ci9 Laptops', 
                'touchscreen' => 'Touch Screen Laptops', 
                'gaming' => 'Gaming Laptops'
              );
             ?>
            <?php foreach ($items as $key => $item): ?>
              
            <div class="product-thumb clearfix">
              <div class="caption">
                <h4><a href="/product?item=<?php echo $key; ?>"><?php echo $item; ?></a></h4>
              </div>
            </div>
            <?php endforeach ?>
          </div>
        </aside>