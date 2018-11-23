<?php $this->view('layout/header');?>
<?php $this->view('Authentication/header');?>
<div class="container mt-5">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			
			<div class="card card-cascade mt-5">
				<div class="view view-cacade overlay">
			  <h5 class="card-header danger-color white-text text-center py-4">
			    <strong><i class="fa fa-sign-in"></i> Login in</strong>
			  </h5>
			</div>
			  <div class="card-body card-body-cascade px-lg-5 pt-0">

			    <!-- Form -->
			    <form action="<?php echo base_url();?>index.php/Authentication/authenticate" method="POST" class="text-center" style="color: #757575;">

			      <!-- Email -->
			      <div class="md-form">
			        <input type="email" id="email" name="loginemail" class="form-control">
			        <label for="email">Registered E-mail</label>
			        <small class="error"><?php echo form_error('loginemail');?></small>
			      </div>

			      <!-- Password -->
			      <div class="md-form">
			        <input type="password" id="password" name="loginpassword" class="form-control">
			        <label for="password">Registered Password</label>
			        <small class="error"><?php echo form_error('loginpassword');?></small>
			      </div>

			      <div class=" justify-content-around">
			        <div>
			          <!-- Forgot password -->
			          <a href="">Forgot password?</a>
			          <?php if(isset($error)){ ?><small><?= $error; ?></small><?php } ?>
			        </div>
			      </div>

			      <!-- Sign in button -->
			      <button class="btn btn-indigo btn-block my-3 waves-effect z-depth-0" type="submit">Sign in</button>

			      <!-- Register -->
			      <p>Not a member?
			        <a href="<?php echo base_url();?>index.php/Authentication/register">Register Here</a>
			      </p>
			    </form>
			    <!-- Form -->

			  </div>

			</div>
			<!-- Material form login -->

		</div>
		<div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
	</div> 
</div>
<?php $this->view('Authentication/footer');?>
<?php $this->view('layout/footer');?>