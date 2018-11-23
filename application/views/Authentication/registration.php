<?php $this->view('layout/header');?>
<?php $this->view('Authentication/header');?>
<div class="container my-5">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			
<div class="card card-cascade mt-5">
	<div class="view view-cacade overlay">
  <h5 class="card-header danger-color white-text text-center py-4">
    <strong><i class="fa fa-plus"></i> New Registration</strong>
  </h5>
</div>
  <div class="card-body card-body-cascade px-lg-5 pt-0">

    <!-- Form -->
    <form method="POST" action="<?php echo base_url(); ?>index.php/Registration/register" class="text-center" style="color: #757575;">

      <div class="md-form">
        <input type="text" id="regname" name="regname" class="form-control" required>
        <label for="regname">Your Name</label>
        <small><?php echo form_error('regname'); ?></small>
      </div>

      <div class="md-form">
        <input type="email" id="regemail" name="regemail" class="form-control" required>
        <label for="regemail">Your E-Mail</label>
        <small><?php echo form_error('regemail'); ?></small>
      </div>

      <div class="md-form">
        <input type="number" id="regphone" name="regphone" class="form-control" required>
        <label for="regphone">Your Mobile No.</label>
        <small><?php echo form_error('regphone'); ?></small>
      </div>

      <div class="md-form">
        <input type="password" id="password" name="regpassword" class="form-control" required>
        <label for="password">Create Your Password</label>
        <small><?php echo form_error('regpassword'); ?></small>
      </div>

      <div class="md-form">
        <input type="date" placeholder="Select Date" id="dob" name="regdob" class="form-control datepicker" max="2000-12-31" required>
        <!-- <label for="dob">Date of Birth</label> -->
        <small>Date Of Birth<?php echo '<br>'.form_error('regdob'); ?></small>
      </div>

      <small class="error"><?= $error;?></small>
      <!-- Sign in button -->
      <button class="btn btn-indigo btn-block my-4 waves-effect z-depth-0" type="submit">Register</button>

      <!-- Register -->
      <p>Already a member!!
        <a href="<?php echo base_url();?>index.php/Registration/signin">Sign In Here</a>
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