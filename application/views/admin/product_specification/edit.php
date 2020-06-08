
    <div class="page-content"> 
    <div class="content">  
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">  
        <h2><?php echo $title; ?></h2>   
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <?php 
        $attributes = array( 'name' => 'formEdit', 'id' => 'formEdit' );
        echo form_open('/admin/product_specification/edit/' . $product_specification->id, $attributes);
      ?>
        <div class="col-md-14">
              <div class="grid simple">
                <div class="grid-body no-border">
                  <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              &nbsp;
            </div>
            <div class="grid-body no-border">
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>            
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="processor_type" id="processor_type" type="text"  class="form-control" placeholder="Processor Type" value="<?php echo $product_specification->processor_type; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="processor_speed" id="processor_speed" type="text"  class="form-control" placeholder="Processor Speed" value="<?php echo $product_specification->processor_speed; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="hard_drive_size" id="hard_drive_size" type="text"  class="form-control" placeholder="Harddrive Size" value="<?php echo $product_specification->hard_drive_size; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="installed_ram" id="installed_ram" type="text"  class="form-control" placeholder="Installed Ram" value="<?php echo $product_specification->installed_ram; ?>">
                      </div>
                    </div>  
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="screen_size" id="screen_size" type="text"  class="form-control" placeholder="Screen Size" value="<?php echo $product_specification->screen_size; ?>">
                      </div>
                    </div>
                    
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="camera" id="camera" type="text"  class="form-control" placeholder="Camera" value="<?php echo $product_specification->camera; ?>">
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
        
                  <h4>Basic Information</h4>
                  
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="color" id="color" type="text"  class="form-control" placeholder="Color" value="<?php echo $product_specification->color; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="operating_system" id="operating_system" type="text"  class="form-control" placeholder="OS Primary" value="<?php echo $product_specification->operating_system; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="bluetooth" id="bluetooth" type="text"  class="form-control" placeholder="Bluetooth" value="<?php echo $product_specification->bluetooth; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="wifi" id="wifi" type="text"  class="form-control" placeholder="Wifi" value="<?php echo $product_specification->wifi; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="lan" id="lan" type="text"  class="form-control" placeholder="Lan" value="<?php echo $product_specification->lan; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="modem" id="modem" type="text"  class="form-control" placeholder="Modem" value="<?php echo $product_specification->modem; ?>">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
       <div class="form-actions">
          <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
          <a href="/admin/product/" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
        </div>
        </div>
      </div>
            </div>
          </div>
    </div>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>
