<?php $this->view('layout/header'); ?>
<?php $this->view('Admin/layout/nav'); ?>
<div class="tab-content my-4">
  <div class="tab-pane fade in show active" id="left_panel" role="tabpanel">
    <div class="row">
      <div class="col-md-3 col-lg-3 col-sm-3" style="padding: 0; ">
        <ul class="nav md-pills pills-warning flex-column" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#homepage" role="tab">
              <i class="fa fa-home mr-2"></i>Homepage
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#testimonial" role="tab">
              <i class="fa fa-user-o mr-2"></i>Testimonials
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel23" role="tab">
              <i class="fa fa-address-card mr-2"></i>Products and Categories
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-9 col-sm-9 col-lg-9">
        <!-- Tab panels -->
        <div class="tab-content vertical">
          <?php $this->view('Admin/panel/homepagec');?>
          <?php $this->view('Admin/panel/testimonial');?>
          <!-- Panel 3 -->
          <div class="tab-pane fade" id="panel23" role="tabpanel">
            <h5 class="my-2 h5">Panel 3</h5>
          </div>
          <!-- Panel 3 -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->view('Admin/layout/foo'); ?>
<?php $this->view('layout/footer'); ?>