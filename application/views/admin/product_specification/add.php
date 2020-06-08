
    <div class="page-content"> 
    <div class="content">  
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">  
        <h2><?php echo $title; ?></h2>   
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <!-- <form action="" name="formAdd" id="formAdd" method="post"></form> -->
      <?php 
        $attributes = array( 'name' => 'formAdd', 'id' => 'formAdd' );
        echo form_open_multipart('', $attributes);
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
                        <input name="processor_type" id="processor_type" type="text"  class="form-control" placeholder="Processor Type">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="processor_speed" id="processor_speed" type="text"  class="form-control" placeholder="Processor Speed">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="hard_drive_size" id="hard_drive_size" type="text"  class="form-control" placeholder="Harddrive Size">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="installed_ram" id="installed_ram" type="text"  class="form-control" placeholder="Installed Ram">
                      </div>
                    </div>  
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="screen_size" id="screen_size" type="text"  class="form-control" placeholder="Screen Size">
                      </div>
                    </div>
                    
                    <div class="row form-row">
                        <div class="col-md-12">
                        <input name="camera" id="camera" type="text"  class="form-control" placeholder="Camera">
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
        
                  <h4>Basic Information</h4>
                  
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="color" id="color" type="text"  class="form-control" placeholder="Available Color">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="operating_system" id="operating_system" type="text"  class="form-control" placeholder="OS Primary">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="bluetooth" id="bluetooth" type="text"  class="form-control" placeholder="Bluetooth">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="wifi" id="wifi" type="text"  class="form-control" placeholder="Wifi">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="lan" id="lan" type="text"  class="form-control" placeholder="Lan">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="modem" id="modem" type="text"  class="form-control" placeholder="Modem">
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
    <?php echo form_close(); ?>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>