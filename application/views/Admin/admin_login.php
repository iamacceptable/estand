<?php $this->view('layout/header'); ?>
<?php $this->view('Admin/layout/nav'); ?>

<div class="container mt-5">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			
			<div class="card hoverable card-cascade mt-5">
				<div class="view view-cacade overlay">
			  <h5 class="card-header unique-color white-text font-weight-bold text-center py-4">
			    <strong><i class="fa fa-sign-in"></i> Login in</strong>
			  </h5>
			</div>
			  <div class="card-body card-body-cascade px-lg-5 pt-0">

			    <!-- Form -->
			    <form action="<?php echo base_url();?>index.php/Admin/login" method="POST" class="text-center" style="color: #757575;">

			      <!-- Email -->
			      <div class="md-form">
			        <input type="email" id="email" name="adminusername" value="<?php echo set_value('adminusername');?>" class="form-control">
			        <label for="email">Admin Username</label>
			        <small class="error"><?php echo form_error('adminusername');?></small>
			      </div>

			      <!-- Password -->
			      <div class="md-form">
			        <input type="password" id="password" name="adminpassword" class="form-control" >
			        <label for="password">Admin Password</label>
			        <small class="error"><?php echo form_error('adminpassword');?></small>
			      </div>
			      <?php if(isset($error)){ ?>
			      <div class="text-center"> 
			      	<small class="error"><?= $error;?></small>
			      </div>
			  		<?php }?>
			      <!-- Sign in button -->
			      <button class="btn special-color hoverable btn-block my-3 waves-effect z-depth-0" type="submit">Sign in as Admin</button>

			      <!-- Register -->
			      
			    </form>
			    <!-- Form -->

			  </div>

			</div>
			<!-- Material form login -->

		</div>
		<div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
	</div> 
</div>
<?php $this->view('Admin/layout/foo'); ?>
<?php $this->view('layout/footer'); ?>