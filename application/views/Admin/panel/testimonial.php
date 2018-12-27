<div class="tab-pane fade my-2" id="testimonial" role="tabpanel">
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
                    <form action="<?php echo base_url();?>index.php/Admin/testupload" method="POST" class="md-form" enctype="multipart/form-data">
                        <div class="md-form">
                            <input type="text" id="tname" name="tname" class="form-control">
                            <label for="tname">Name</label>
                        </div>
                        <div class="md-form">
                            <input type="text" id="tdesignation" name="tdesignation" class="form-control">
                            <label for="tdesignation">Designation</label>
                        </div>
                        <div class="md-form">
                            <input type="text" id="tmessage" length="400" name="tmessage" class="form-control">
                            <label for="tmessage">Message</label>
                        </div>
                        <div class="file-field">
                            <div class="btn btn-info btn-sm float-left">
                                <span>Choose DP</span>
                                <input type="file" name="testgolu">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path" name="timg" readonly type="text" placeholder="Upload User DP">
                            </div>
                        </div>
                        <div class="text-center md-form">
                            <button class="btn btn-success btn-rounded">Add New<i class="fa fa-plus ml-2"></i></button>
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