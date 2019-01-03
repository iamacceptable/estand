<?php $this->view('layout/header'); ?>
<?php $this->view('Admin/layout/nav'); ?>
<div class="tab-content my-4">
  <div class="tab-pane fade in show active" id="left_panel" role="tabpanel">
    <div class="row">
      <div class="col-md-3 col-lg-3 col-sm-3 z-depth-3" style="padding: 0; height:100vh; position:sticky; ">
        <ul class="nav md-pills pills-warning flex-column" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#users" role="tab">
              <i class="fa fa-user mr-2"></i>Users Registered
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#products" role="tab">
              <i class="fa fa-product-hunt mr-2"></i>Add Products and Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#homepage" role="tab">
              <i class="fa fa-plus-square mr-2"></i>Add Homepage Caurosel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#testimonial" role="tab">
              <i class="fa fa-user-plus mr-2"></i>Add Testimonials
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#homepagecc" role="tab">
              <i class="fa fa-home mr-2"></i>Caurosel Registered
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#testimonialc" role="tab">
              <i class="fa fa-user-o mr-2"></i>Testimonials Registered
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-9 col-sm-9 col-lg-9">
        <!-- Tab panels -->
        <div class="tab-content vertical">
          <?php $this->view('Admin/panel/users');?>
          <?php $this->view('Admin/panel/homepagec');?>
          <?php $this->view('Admin/panel/testimonial');?>
          <?php $this->view('Admin/panel/testimonialc');?>
          <?php $this->view('Admin/panel/homepagecc');?>
          <!-- Panel 3 -->
          <div class="tab-pane fade" id="products" role="tabpanel">
            <h5 class="my-2 h5">Panel 3</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->view('Admin/layout/foo'); ?>
<?php $this->view('layout/footer'); ?>