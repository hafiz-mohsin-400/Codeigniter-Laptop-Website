<?php $this->load->view('layout/header'); ?>
  <div id="container">
    <div class="container">
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <h1 class="title">Contact Us</h1>
          <h3 class="subtitle">Our Location</h3>
          <div class="row">
            <div class="col-sm-3">
              <img src="/assets/image/product/store_location-275x180.jpg" alt="MarketShop Template" title="MarketShop Template" class="img-thumbnail" /></div>
            <div class="col-sm-3"><strong>MarketShop Template</strong><br />
              <address>
              Falak Corporate City,<br />
              Office #91,<br />
              Bolton market,<br />
              Karachi, Pakistan
              </address>
            </div>
            <div class="col-sm-3"><strong>Telephone</strong><br>
              +92 322 3411811<br />
              <br />
              <strong>Email</strong><br>
              info@alfateemacademy.com </div>
            <div class="col-sm-3"> <strong>Opening Times</strong><br />
              24X7 Customer Care<br />
              <br />
            </div>
          </div><br>
          <?php if(!empty($status)){ ?>
            <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
          <?php } ?>

          <?php 
            $attributes = array( 'name' => 'formContact', 'id' => 'formContact' );
            echo form_open_multipart('', $attributes);
          ?>
            <fieldset>
              <h3 class="subtitle">Send us an Email</h3>
              <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-name">Your Name</label>
                <div class="col-md-10 col-sm-9">
                  <input type="text" name="name" value="" id="name" class="form-control" />
                </div>
              </div>
              <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-email">E-Mail Address</label>
                <div class="col-md-10 col-sm-9">
                  <input type="text" name="email" value="" id="email" class="form-control" />
                </div>
              </div>
              <div class="form-group required">
                <label class="col-md-2 col-sm-3 control-label" for="input-enquiry">Enquiry</label>
                <div class="col-md-10 col-sm-9">
                  <textarea name="enquiry" rows="10" id="enquiry" class="form-control"></textarea>
                </div>
              </div>
            </fieldset>
            <div class="buttons">
              <div class="pull-right">
                <input class="btn btn-primary" type="submit" value="Submit" />
              </div>
            </div>
          <?php echo form_close(); ?>
        </div>
        <?php $this->load->view('layout/sidebar'); ?>
        <!--Middle Part End -->
      </div>
    </div>
  </div>
  <!--Footer Start-->
  <?php $this->load->view('layout/footer'); ?>
