<?php $this->load->view('layout/header'); ?>
  
  <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="login.html">Account</a></li>
        <li><a href="login.html">Change Password</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <h1 class="title">Change Password</h1>
          <div class="row">
            <div class="col-sm-6">
              <h2 class="subtitle">New Customer</h2>
              <p><strong>Register Account</strong></p>
              <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
              <a href="register.html" class="btn btn-primary">Continue</a> </div>
            <div class="col-sm-6">
              <h2 class="subtitle">Change Password</h2>
              <p><strong>Change your Password</strong></p>
                <div class="form-group">
                  <label class="control-label" for="old_password">Old Password</label>
                  <input type="password" name="old_password" value="" placeholder="Old Password" id="old_password" class="form-control" />
                </div>
                <div class="form-group">
                  <label class="control-label" for="new_password">New Password</label>
                  <input type="password" name="new_password" value="" placeholder="New Password" id="new_password" class="form-control" />
                </div>
                <div class="form-group">
                  <label class="control-label" for="retype_password">Retype Password</label>
                  <input type="password" name="retype_password" value="" placeholder="Retype Password" id="retype_password" class="form-control" />
                </div>
                <input type="submit" value="Forgot Password" class="btn btn-primary" />
            </div>
          </div>
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
        <aside id="column-right" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">Account</h3>
          <div class="list-group">
            <ul class="list-item">
              <li><a href="/user/register">Register</a></li>
              <li><a href="/user/forgot_password">Forgotten Password</a></li>
            </ul>
          </div>
        </aside>
        <!--Right Part End -->
      </div>
    </div>
  </div>
  <!--Footer Start-->
<?php $this->load->view('layout/footer'); ?>