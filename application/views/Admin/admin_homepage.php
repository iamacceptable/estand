<?php $this->view('layout/header'); ?>
<?php $this->view('Admin/layout/nav'); ?>
<div class="tab-content my-4">
  <div class="tab-pane fade in show active" id="left_panel" role="tabpanel">
    <div class="row">
      <div class="col-md-3 col-lg-3 col-sm-3 sticky " style="padding: 0; ">
        <ul class="nav md-pills pills-warning flex-column" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#homepage" role="tab">
              <i class="fa fa-home mr-2"></i>Homepage
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel22" role="tab">
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
          <!-- Panel 1 -->
          <div class="tab-pane fade in show active my-2" id="homepage" role="tabpanel">
            <div class="container ">
            	<div class="row">
            		<div class="col mt-4">
            			<h4 class="font-weight-bold text-center red-text"><i class="fa fa-home mx-2"></i>Homepage Content</h4>
            		</div>
            	</div>
            	<hr>
            	<div class="row">
            		<div class="col-md-2 col-sm-0 col-xs-0 col-lg-2"></div>
            		<div class="col-md-8 col-sm-8 col-xs-8 col-lg-8">
            			<div class="card">
							<div class="card-body">
								<h5 class="card-title text-center">Homepage Carousel</h5>
								<h6 class="card-subtitle mb-2 text-muted text-center">Add new Image to Carousel</h6>
								<form action="#" method="POST" class="md-form">
									<div class="md-form">
								        <input type="text" id="title" name="cotitle" class="form-control">
								        <label for="title">Carousel Title</label>
								    </div>
								    <div class="md-form">
								        <input type="text" id="description" length="250" name="codescription" class="form-control">
								        <label for="description">Carousel Description</label>
								    </div>
								    <div class="file-field">
								        <div class="btn btn-danger btn-sm float-left">
								            <span>Choose file</span>
								            <input type="file">
								        </div>
								        <div class="file-path-wrapper">
								            <input class="file-path" readonly type="text" placeholder="Upload your file">
								        </div>
								    </div>
								    <div class="text-center md-form">
								    	<button class="btn btn-success btn-sm">Add New<i class="fa fa-plus ml-2"></i></button>
									</div>	
								</form>
							</div>
						</div>
            		</div>
            		<div class="col-md-2 col-sm-0 col-xs-0 col-lg-2"></div>
            	</div>
            	<hr>
            	<div class="row">
            		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            			<h4 class="font-weight-bold indigo-text text-center">Current Slide Show Images</h4>
            		</div>
            		
            	</div>
            </div>
          </div>
          <!-- Panel 1 -->
          <!-- Panel 2 -->
          <div class="tab-pane fade my-2" id="panel22" role="tabpanel">
            <div class="container ">
              <div class="row">
                <div class="col mt-4">
                  <h4 class="font-weight-bold text-center red-text"><i class="fa fa-user mx-2"></i>Testimonials</h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-2 col-sm-0 col-xs-0 col-lg-2"></div>
                <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8">
                  <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">User Reviews</h5>
                <h6 class="card-subtitle mb-2 text-muted text-center">Add New Testimonial to Homepage</h6>
                <form action="#" method="POST" class="md-form">
                  <div class="md-form">
                        <input type="text" id="uname" name="uname" class="form-control">
                        <label for="uname">Name</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="udesign" name="udesign" class="form-control">
                        <label for="udesign">Designation</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="description" length="500" name="umessage" class="form-control">
                        <label for="description">Message</label>
                    </div>
                    <div class="file-field">
                        <div class="btn btn-danger btn-sm float-left">
                            <span>Choose DP</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path" readonly type="text" placeholder="Upload User DP">
                        </div>
                    </div>
                    <div class="text-center md-form">
                      <button class="btn btn-success btn-sm">Add New<i class="fa fa-plus ml-2"></i></button>
                  </div>  
                </form>
              </div>
            </div>
                </div>
                <div class="col-md-2 col-sm-0 col-xs-0 col-lg-2"></div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                  <h4 class="font-weight-bold indigo-text text-center"><i class="fa fa-user-o mx-2"></i>Current Testimonials</h4>
                </div>
                
              </div>
            </div>
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