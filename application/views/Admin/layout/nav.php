
<nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar unique-color-dark">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">
            <strong class="white-text"><i class="fa fa-user-secret mr-2"></i>Admin Panel @estand.in</strong>
        </a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon white-text"></span>
        </button> --><!-- 
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-3">
                    <a class="nav-link waves-effect active waves-light orange-text font-weight-bold" href="<?php echo base_url();?>index.php/Navbar/home">
                        <i class="fa fa-sign-out white-text"></i> Log Out
                    </a>
                </li>
            </ul>
        </div> -->
        <?php if($active != 'login'){ ?>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item"> 
                <a class="nav-link waves-effect active waves-light orange-text font-weight-bold" href="<?php echo base_url();?>index.php/Admin/logout">
                    <i class="fa fa-sign-out white-text"></i><span class="clearfix d-none d-sm-inline-block">Log Out</span>
                </a>
            </li>
        </ul>
        <?php }?>
    </div> 
</nav>