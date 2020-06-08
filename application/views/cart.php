<?php $this->load->view('layout/header'); ?>  
<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="cart.html">Shopping Cart</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h1 class="title">Shopping Cart</h1>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Model</td>
                    <td class="text-left">Quantity</td>
                    <td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center"><a href="product.html"><img src="assets/image/product/samsung_tab_1-50x50.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-thumbnail" /></a></td>
                    <td class="text-left"><a href="product.html">Aspire Ultrabook Laptop</a><br />
                      <small>Reward Points: 1000</small></td>
                    <td class="text-left">SAM1</td>
                    <td class="text-left"><div class="input-group btn-block quantity">
                        <input type="text" name="quantity" value="1" size="1" class="form-control" />
                        <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                    <td class="text-right">$230.00</td>
                    <td class="text-right">$230.00</td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="product.html"><img src="assets/image/product/sony_vaio_1-50x50.jpg" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-thumbnail" /></a></td>
                    <td class="text-left"><a href="product.html">Xitefun Causal Wear Fancy Shoes</a></td>
                    <td class="text-left">Product 114</td>
                    <td class="text-left"><div class="input-group btn-block quantity">
                        <input type="text" name="quantity" value="1" size="1" class="form-control" />
                        <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                    <td class="text-right">$902.00</td>
                    <td class="text-right">$902.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          

          
          <div class="row">
            <div class="col-sm-4 col-sm-offset-8">
              <table class="table table-bordered">
                <tr>
                  <td class="text-right"><strong>Sub-Total:</strong></td>
                  <td class="text-right">$940.00</td>
                </tr>
                <tr>
                  <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                  <td class="text-right">$4.00</td>
                </tr>
                <tr>
                  <td class="text-right"><strong>VAT (20%):</strong></td>
                  <td class="text-right">$188.00</td>
                </tr>
                <tr>
                  <td class="text-right"><strong>Total:</strong></td>
                  <td class="text-right">$1,132.00</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="buttons">
            <div class="pull-right"><a href="/shopping/checkout" class="btn btn-primary">Checkout</a></div>
          </div>
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>
  <!--Footer Start-->
<?php $this->load->view('layout/footer'); ?>