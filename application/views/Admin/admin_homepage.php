<?php $this->view('layout/header'); ?>
<?php $this->view('Admin/layout/nav'); ?>
<div class="tab-content my-4">

  <!-- Panel 1 -->
  <div class="tab-pane fade in show active" id="left_panel" role="tabpanel">

    <!-- Nav tabs -->
    <div class="row">
      <div class="col-md-3">
        <ul class="nav md-pills pills-danger flex-column" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel21" role="tab">
              <i class="fa fa-home mr-2"></i>Homepage
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel22" role="tab">
              <i class="fa fa-user-o mr-2"></i>Testimonials
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel23" role="tab">Billing details
              <i class="fa fa-address-card ml-2"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-9">
        <!-- Tab panels -->
        <div class="tab-content vertical">
          <!-- Panel 1 -->
          <div class="tab-pane fade in show active" id="panel21" role="tabpanel">
            <h5 class="my-2 h5">Panel 1</h5>
          </div>
          <!-- Panel 1 -->
          <!-- Panel 2 -->
          <div class="tab-pane fade" id="panel22" role="tabpanel">
            <h5 class="my-2 h5">Panel 2</h5>
          </div>
          <!-- Panel 2 -->
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