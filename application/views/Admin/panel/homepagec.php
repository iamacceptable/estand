<div class="tab-pane fade in show active my-2" id="homepage" role="tabpanel">
            <div class="container ">
            	<div class="row">
            		<div class="col mt-4">
            			<h4 class="font-weight-bold text-center red-text"><i class="fa fa-home mx-2"></i>Homepage Content</h4>
						<h6 class="mt-2 text-muted text-center red-text"><?php if(isset($error)) { echo $error.' <a href="'; echo base_url().'index.php/Admin"><i class="fa fa-refresh"></i> Reload the Page</a>'; } ?></h6>
						<h6 class="mt-2 text-muted text-center green-text"><?php if(isset($success)) { echo $success.' <a href="'; echo base_url().'index.php/Admin"><i class="fa fa-refresh"></i> Reload the Page</a>'; } ?></h6>
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
								<form action="<?php echo base_url();?>index.php/Admin/cupload" method="POST" class="md-form" enctype="multipart/form-data">
									<div class="md-form">
								        <input type="text" id="ctitle" name="ctitle" value="<?php echo set_value('ctitle');?>" class="form-control">
								        <label for="ctitle">Carousel Title</label>
                        <small class="error"><?php echo form_error('ctitle');?></small>
								    </div>
								    <div class="md-form">
								        <input type="text" id="cdescription" length="250" name="cdescription" value="<?php echo set_value('cdescription');?>" class="form-control">
								        <label for="cdescription">Carousel Description</label>
                        <small class="error"><?php echo form_error('cdescription');?></small>
								    </div>
								    <div class="file-field">
								        <div class="btn btn-danger btn-sm float-left">
								            <span>Choose file</span>
								            <input type="file" name="cauroselgolu">
								        </div>
								        <div class="file-path-wrapper">
								            <input class="file-path" name="cimg" readonly type="text" placeholder="Upload your file">
								        </div>

									</div>
									<div class="text-center md-form">
										<small class="text-muted">*Only Upload a specific image of Height 516px</small>									
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
						<h4 class="font-weight-bold indigo-text text-center">Current Slide Show Images</h4>
						<div class="table-responsive">
							<!--Table-->
							<table class="table table-striped table-hoverable">

							<!--Table head-->
							<thead>
								<tr>
								<th>S.No.</th>
								<th>Title</th>
								<th>Description</th>
								<th>Image Name</th>
								<th>Image</th>
								<th>Edit</th>
								<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; 
									foreach($caurosel as $cdata): ?>
									<tr>
									<th scope="row"><?= $i++; ?></th>
									<td><?= $cdata['ctitle']; ?></td>
									<td><?= $cdata['cdescription']; ?></td>
									<td><?= $cdata['cname']; ?></td>
									<td><img src="<?= $cdata['cpath'];?>" height="15%"></td>
									<td><a href="#"><i class="fa fa-edit indigo-text"></i></a></td>
									<td><a href="<?= base_url();?>index.php/Admin/cdelete/<?= $cdata['cid'];?>"><i class="fa fa-trash red-text"></i></a></td>
									</tr>
								<?php endforeach;
								 if($i == 1){ ?>
								 <tr>
									 <td align="center" colspan="7">
										 No Caurosel Uploaded Yet!!
									 </td>
								 </tr>
								 <?php } ?>
							</tbody>
							<!--Table body-->


							</table>
							<!--Table-->
						</div>
					</section>
					<!--Section: Live preview-->
            		</div>
            		
            	</div>
            </div>
		  </div>