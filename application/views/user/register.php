<?php $this->load->view('layout/header'); ?>

  <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="login.html">Account</a></li>
        <li><a href="register.html">Register</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div class="col-sm-9" id="content">
          <h1 class="title">Register Account</h1>
          <p>If you already have an account with us, please login at the <a href="login.html">Login Page</a>.</p>
          <?php 
            $attributes = array('name' => 'formRegister', 'id' => 'formRegister', 'class' => 'form_horizontal' );
            echo form_open('', $attributes);
           ?>
            <fieldset id="account">
              <legend>Your Personal Details</legend>
              <div style="display: none;" class="form-group required">
                <label class="col-sm-2 control-label">Customer Group</label>
                <div class="col-sm-10">
                  <div class="radio">
                    <label>
                      <input type="radio" checked="checked" value="1" name="customer_group_id">
                      Default</label>
                  </div>
                </div>
              </div>
              <div class="form-group required">
                <label for="input-firstname" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" value="<?php echo set_value('first_name'); ?>">
                  <?php echo form_error('first_name', '<div class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group required">
                <label for="input-lastname" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" value="">
                  <?php echo form_error('last_name', '<div class="error">', '</div>'); ?>

                </div>
              </div>
              <div class="form-group required">
                <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="E-Mail" value="" name="email">
                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>

                </div>
              </div>
              <div class="form-group required">
                <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
                <div class="col-sm-10">
                  <input type="tel" class="form-control" id="telephone" placeholder="Telephone" value="" name="telephone">
                </div>
              </div>
              <div class="form-group">
                <label for="input-fax" class="col-sm-2 control-label">Fax</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="fax" placeholder="Fax" value="" name="fax">
                </div>
              </div>
            </fieldset>
            <fieldset id="address">
              <legend>Your Address</legend>
              <div class="form-group">
                <label for="input-company" class="col-sm-2 control-label">Company</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="company" placeholder="Company" value="" name="company">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-address-1" class="col-sm-2 control-label">Address </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="address" placeholder="Address" value="" name="address">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-city" class="col-sm-2 control-label">City</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="city" placeholder="City" value="" name="city">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-post_code" class="col-sm-2 control-label">Post Code</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="post_code" placeholder="Post Code" value="" name="post_code">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-country" class="col-sm-2 control-label">Country</label>
                <div class="col-sm-10">
                  <select class="form-control" id="country" name="country">
                    <option value=""> --- Please Select --- </option>
                    <?php $query = $this->db->get("country"); ?>
                    <?php $countries = $query->result(); ?>
                    <?php foreach ($countries as $country): ?>
                    <option value="<?php echo $country->name; ?>"><?php echo $country->name; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group required">
                <label for="input-zone" class="col-sm-2 control-label">Region / State</label>
                <div class="col-sm-10">
                  <select class="form-control" id="region" name="region">
                    <option value=""> --- Please Select --- </option>
                    <option value="3513">Aberdeen</option>
                    <option value="3514">Aberdeenshire</option>
                    <option value="3515">Anglesey</option>
                    <option value="3516">Angus</option>
                    <option value="3517">Argyll and Bute</option>
                    <option value="3518">Bedfordshire</option>
                    <option value="3519">Berkshire</option>
                    <option value="3520">Blaenau Gwent</option>
                    <option value="3521">Bridgend</option>
                    <option value="3522">Bristol</option>
                    <option value="3523">Buckinghamshire</option>
                    <option value="3524">Caerphilly</option>
                    <option value="3525">Cambridgeshire</option>
                    <option value="3526">Cardiff</option>
                    <option value="3527">Carmarthenshire</option>
                    <option value="3528">Ceredigion</option>
                    <option value="3529">Cheshire</option>
                    <option value="3530">Clackmannanshire</option>
                    <option value="3531">Conwy</option>
                    <option value="3532">Cornwall</option>
                    <option value="3949">County Antrim</option>
                    <option value="3950">County Armagh</option>
                    <option value="3951">County Down</option>
                    <option value="3952">County Fermanagh</option>
                    <option value="3953">County Londonderry</option>
                    <option value="3954">County Tyrone</option>
                    <option value="3955">Cumbria</option>
                    <option value="3533">Denbighshire</option>
                    <option value="3534">Derbyshire</option>
                    <option value="3535">Devon</option>
                    <option value="3536">Dorset</option>
                    <option value="3537">Dumfries and Galloway</option>
                    <option value="3538">Dundee</option>
                    <option value="3539">Durham</option>
                    <option value="3540">East Ayrshire</option>
                    <option value="3541">East Dunbartonshire</option>
                    <option value="3542">East Lothian</option>
                    <option value="3543">East Renfrewshire</option>
                    <option value="3544">East Riding of Yorkshire</option>
                    <option value="3545">East Sussex</option>
                    <option value="3546">Edinburgh</option>
                    <option value="3547">Essex</option>
                    <option value="3548">Falkirk</option>
                    <option value="3549">Fife</option>
                    <option value="3550">Flintshire</option>
                    <option value="3551">Glasgow</option>
                    <option value="3552">Gloucestershire</option>
                    <option value="3553">Greater London</option>
                    <option value="3554">Greater Manchester</option>
                    <option value="3555">Gwynedd</option>
                    <option value="3556">Hampshire</option>
                    <option value="3557">Herefordshire</option>
                    <option value="3558">Hertfordshire</option>
                    <option value="3559">Highlands</option>
                    <option value="3560">Inverclyde</option>
                    <option value="3561">Isle of Wight</option>
                    <option value="3562">Kent</option>
                    <option value="3563">Lancashire</option>
                    <option value="3564">Leicestershire</option>
                    <option value="3565">Lincolnshire</option>
                    <option value="3566">Merseyside</option>
                    <option value="3567">Merthyr Tydfil</option>
                    <option value="3568">Midlothian</option>
                    <option value="3569">Monmouthshire</option>
                    <option value="3570">Moray</option>
                    <option value="3571">Neath Port Talbot</option>
                    <option value="3572">Newport</option>
                    <option value="3573">Norfolk</option>
                    <option value="3574">North Ayrshire</option>
                    <option value="3575">North Lanarkshire</option>
                    <option value="3576">North Yorkshire</option>
                    <option value="3577">Northamptonshire</option>
                    <option value="3578">Northumberland</option>
                    <option value="3579">Nottinghamshire</option>
                    <option value="3580">Orkney Islands</option>
                    <option value="3581">Oxfordshire</option>
                    <option value="3582">Pembrokeshire</option>
                    <option value="3583">Perth and Kinross</option>
                    <option value="3584">Powys</option>
                    <option value="3585">Renfrewshire</option>
                    <option value="3586">Rhondda Cynon Taff</option>
                    <option value="3587">Rutland</option>
                    <option value="3588">Scottish Borders</option>
                    <option value="3589">Shetland Islands</option>
                    <option value="3590">Shropshire</option>
                    <option value="3591">Somerset</option>
                    <option value="3592">South Ayrshire</option>
                    <option value="3593">South Lanarkshire</option>
                    <option value="3594">South Yorkshire</option>
                    <option value="3595">Staffordshire</option>
                    <option value="3596">Stirling</option>
                    <option value="3597">Suffolk</option>
                    <option value="3598">Surrey</option>
                    <option value="3599">Swansea</option>
                    <option value="3600">Torfaen</option>
                    <option value="3601">Tyne and Wear</option>
                    <option value="3602">Vale of Glamorgan</option>
                    <option value="3603">Warwickshire</option>
                    <option value="3604">West Dunbartonshire</option>
                    <option value="3605">West Lothian</option>
                    <option value="3606">West Midlands</option>
                    <option value="3607">West Sussex</option>
                    <option value="3608">West Yorkshire</option>
                    <option value="3609">Western Isles</option>
                    <option value="3610">Wiltshire</option>
                    <option value="3611">Worcestershire</option>
                    <option value="3612">Wrexham</option>
                  </select>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>Your Password</legend>
              <div class="form-group required">
                <label for="input-password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" placeholder="Password" value="" name="password">
                  <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>Newsletter</legend>
              <div class="form-group">
                <label class="col-sm-2 control-label">Subscribe</label>
                <div class="col-sm-10">
                  <label class="radio-inline">
                    <input type="radio" value="1" name="newsletter">
                    Yes</label>
                  <label class="radio-inline">
                    <input type="radio" checked="checked" value="0" name="newsletter">
                    No</label>
                </div>
              </div>
            </fieldset>
            <div class="buttons">
              <div class="pull-right">
                <input type="checkbox" id="agree" value="check" name="agree">
                &nbsp;I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a> &nbsp;
                <input type="submit" class="btn btn-primary" value="Continue">
              </div>
            </div>
          <?php echo form_close(); ?>
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
        <aside id="column-right" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">Account</h3>
          <div class="list-group">
            <ul class="list-item">
              <li><a href="/user/login">Login</a></li>
              <li><a href="/user/register">Register</a></li>
            </ul>
          </div>
        </aside>
        <!--Right Part End -->
      </div>
    </div>
  </div>
  <!--Footer Start-->
 <?php $this->load->view('layout/footer'); ?>