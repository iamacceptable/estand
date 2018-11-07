<?php $this->view('layout/header');?>
<body>
	<header>
		<!-- Golu Navbar -->
        <?php $this->view('layout/nav');?>
        <!-- Golu Navbar dynamically calling -->
    </header>
    <section>
        <div id="carousel-golu" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-golu" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-golu" data-slide-to="1"></li>
                <li data-target="#carousel-golu" data-slide-to="2"></li>
                <li data-target="#carousel-golu" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <div class="view zoom h-100">
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce4.jpg" alt="First slide">
                        <div class="mask waves-effect waves-light rgba-black-slight">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-10 list-unstyled">
                                    <li>
                                        <p class="h1 red-text mb-4 mt-5">
                                            <strong>Problems</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5">While working on laptops it is not possible to maintain correct posture and we become victim of repetitive strain injury. E-Stand helps to reduce this problem.</h5>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-danger btn-rounded" rel="nofollow">See more!</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item h-100">
                    <div class="view zoom h-100">
                        <img class="d-block h-100 w-lg-100 avtar" src="<?php echo base_url(); ?>assets/images/homepagecou/product1.jpg" alt="Second slide">
                        <div class="mask waves-effect waves-light rgba-white-slight">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-10 list-unstyled">
                                    <li>
                                        <p class="h1 dark-grey-text mb-4">
                                            <strong >E-Stand</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="h5-responsive white-text font-weight-bold mb-5">E-Stand gives correct place to keep your laptop, keyboard and mouse as well as E-Stand helps to maintain correct posture while working on the laptop.</h5>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-primary btn-rounded" rel="nofollow">Read more</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce3.jpg" alt="Third slide">
                        <div class="mask">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-md-10 text-center text-md-right list-unstyled">
                                    <li>
                                        <p class="h1 blue-text mb-4 mt-5 pr-lg-5">
                                            <strong>Multipurpose and Flexible</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5 pr-lg-5">E-Stand may be used as simple table or presentation desk. First product in India which gives you flexibility to use laptop in sitting as well as standing position.</h5>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/Third slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce3.jpg" alt="Third slide">
                        <div class="mask">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-md-10 text-center text-md-right list-unstyled">
                                    <li>
                                        <p class="h1 blue-text mb-4 mt-5 pr-lg-5">
                                            <strong>Reccomendation</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5 pr-lg-5">Big laptop companies like <b>HP</b> also recommend to use laptop with external keyboard and mouse for comfortable use. For details check laptop instruction manual.</h5>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <!-- <a class="carousel-control-prev" href="#carousel-golu" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-golu" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

    </section>
    <!--/Intro-->

    <!-- Main Container -->
    <div class="container">
        <!-- Grid row -->
        <div class="row pt-4">

            <!-- Content -->
            <div class="col-lg-12">

                <!-- Categories & Adv -->
                <section class="section pt-2">

                    <!-- Grid row -->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!-- Section: Categories -->
                            <section class="section">

                                <ul class="list-group z-depth-1">

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-question-circle dark-grey-text mr-2" aria-hidden="true"></i> Problem&nbsp;-&nbsp;Precaution&nbsp;-&nbsp;Prevention<br>&emsp;<h4>Watch The Video..</h4></a>
                                        

                                    </li>
                                    <li class="list-group-item justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-question dark-grey-text mr-3" aria-hidden="true"></i> <b>Why to use E-Stand:</b>Best international ergonomics principle have been embedded in eStand....<a href="#">Read More</a></a>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-tablet dark-grey-text mr-3" aria-hidden="true"></i> Tablet</a>
                                        <span class="badge badge-danger badge-pill">18</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-headphones dark-grey-text mr-3" aria-hidden="true"></i>Heahphones</a>
                                        <span class="badge badge-danger badge-pill">37</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-camera-retro dark-grey-text mr-3" aria-hidden="true"></i>Camera</a>
                                        <span class="badge badge-danger badge-pill">15</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-suitcase dark-grey-text mr-3" aria-hidden="true"></i>Accesories</a>
                                        <span class="badge badge-danger badge-pill">64</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-television dark-grey-text mr-3" aria-hidden="true"></i>TV</a>
                                        <span class="badge badge-danger badge-pill">2</span>
                                    </li>
                                </ul>
                            </section>
                            <!-- Section: Categories -->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-8 col-md-12 pb-lg-5 mb-4">
                            <div class="embed-responsive embed-responsive-16by9">
  								<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/foln8_jgmqw" allowfullscreen></iframe>
							</div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <!-- Categories & Adv -->

                <!--Section: Bestsellers & offers-->
                <section>

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-12">

                            <!-- Nav tabs -->
                            <ul class="nav md-tabs nav-justified grey lighten-3 mx-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active dark-grey-text font-weight-bold" data-toggle="tab" href="#panel5" role="tab"> Bestsellers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dark-grey-text font-weight-bold" data-toggle="tab" href="#panel6" role="tab">Top offers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dark-grey-text font-weight-bold" data-toggle="tab" href="#panel7" role="tab">
                                        </i>Best rated</a>
                                </li>
                            </ul>
                            <!-- Tab panels -->
                            <div class="tab-content px-0">
                                <!--Panel 1-->
                                <div class="tab-pane fade in show active " id="panel5" role="tabpanel">
                                    <br>
                                    <!-- Grid row -->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-12 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Asus CT-567</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">iPad PRO</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <span class="badge badge-success mb-2 ml-2">SALE</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star grey-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <h5 class="mb-0 pb-0 mt-1 font-weight-bold">
                                                                <span class="red-text">
                                                                    <strong>$699</strong>
                                                                </span>
                                                                <span class="grey-text">
                                                                    <small>
                                                                        <s>$920</s>
                                                                    </small>
                                                                </span>
                                                            </h5>

                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Dell V-964i</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <span class="badge badge-info mb-2 ml-2">new</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->
                                </div>
                                <!--/.Panel 1-->

                                <!--Panel 2-->
                                <div class="tab-pane fade" id="panel6" role="tabpanel">
                                    <br>

                                    <!-- Grid row -->
                                    <div class="row mb-3">

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-12 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Samsung V54</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge grey mb-2">best rated</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Dell 786i</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-info mb-2">new</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star grey-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Canon 675-D</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-info mb-2">new</span>
                                                    <span class="badge badge-success mb-2 ml-2">SALE</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <h5 class="mb-0 pb-0 mt-1 font-weight-bold">
                                                                <span class="red-text">
                                                                    <strong>$1199</strong>
                                                                </span>
                                                                <span class="grey-text">
                                                                    <small>
                                                                        <s>$1520</s>
                                                                    </small>
                                                                </span>
                                                            </h5>

                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->
                                </div>
                                <!--/.Panel 2-->

                                <!--Panel 3-->
                                <div class="tab-pane fade" id="panel7" role="tabpanel">
                                    <br>
                                    <!-- Grid row -->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-12 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Headphones</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">iPhone</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-info mb-2">new</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">iMac</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star grey-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                </div>
                                <!--/.Panel 3-->
                            </div>

                        </div>

                    </div>
                    <!--Grid row-->

                </section>
                <!--Section: Bestsellers & offers-->

                <!--Section: Advertising-->
                <section>

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-12">
                            <!--Image -->
                            <div class="view  z-depth-1">

                                <img src="https://mdbootstrap.com/img/Photos/Others/ecommerce5.jpg" class="img-fluid" alt="sample image">
                                <div class="mask rgba-stylish-slight">
                                    <div class="dark-grey-text text-right pt-lg-5 pt-md-1 mr-5 pr-md-4 pr-0">
                                        <div>
                                            <a>
                                                <span class="badge badge-primary">SALE</span>
                                            </a>
                                            <h2 class="card-title font-weight-bold pt-md-3 pt-1">
                                                <strong>Sale from 20% to 50% on every tablet!
                                                </strong>
                                            </h2>
                                            <p class="pb-lg-3 pb-md-1 clearfix d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                            <a class="btn mr-0 btn-primary btn-rounded clearfix d-none d-md-inline-block">Read more</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Image -->
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <!--/Section: Advertising-->

                <!--Section: product list-->
                <section class="mb-5">
                    <div class="row">
                        <!-- New Products-->
                        <div class="col-lg-4 col-md-12 col-12 pt-5">
                            <hr>
                            <h5 class="text-center font-weight-bold dark-grey-text">
                                <strong>New Products</strong>
                            </h5>
                            <hr>
                            <!-- First row -->
                            <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a>
                                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a class="pt-5">
                                        <strong>iPad</strong>
                                    </a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                        <strong>$849</strong>
                                    </h6>

                                </div>

                            </div>
                            <!-- /.First row -->

                            <!-- Second row -->
                            <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a>
                                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a>
                                        <strong>Headphones</strong>
                                    </a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                        <strong>$49</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>$89</s>
                                            </small>
                                        </span>
                                    </h6>

                                </div>

                            </div>
                            <!-- /.Second row -->

                            <!-- Third row -->
                            <div class="row mt-2 py-2 pb-1 hoverable align-items-center">

                                <div class="col-6">
                                    <a>
                                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a>
                                        <strong>iMac 27"</strong>
                                    </a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                        <strong>$1449</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>$2189</s>
                                            </small>
                                        </span>
                                    </h6>

                                </div>

                            </div>
                            <!-- /.Third row -->

                        </div>
                        <!-- /.New Products-->

                        <!-- Top Sellers-->
                        <div class="col-lg-4  col-md-12 pt-5">

                            <hr>
                            <h5 class="text-center font-weight-bold dark-grey-text">
                                <strong>Top Sellers</strong>
                            </h5>
                            <hr>

                            <!-- First row -->
                            <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a>
                                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a>
                                        <strong>Dell V-964i</strong>
                                    </a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                        <strong>$649</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>$889</s>
                                            </small>
                                        </span>
                                    </h6>

                                </div>

                            </div>
                            <!-- /.First row -->

                            <!-- Second row -->
                            <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a>
                                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a>
                                        <strong>Asus GT67i</strong>
                                    </a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                        <strong>$1249</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>$1489</s>
                                            </small>
                                        </span>
                                    </h6>

                                </div>

                            </div>
                            <!-- /.Second row -->

                            <!-- Third row -->
                            <div class="row mt-2 py-2 pb-1 hoverable align-items-center">

                                <div class="col-6">
                                    <a>
                                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a>
                                        <strong>Headphones</strong>
                                    </a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                        <strong>$49</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>$89</s>
                                            </small>
                                        </span>
                                    </h6>

                                </div>

                            </div>
                            <!-- /.Third row -->

                        </div>
                        <!-- /.Top Sellers -->

                        <!-- Random Products-->
                        <div class="col-lg-4 col-md-12 pt-5">

                            <hr>
                            <h5 class="text-center font-weight-bold dark-grey-text">
                                <strong>Random products</strong>
                            </h5>
                            <hr>

                            <!-- First row -->
                            <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a>
                                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a>
                                        <strong>Dell 786i</strong>
                                    </a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                        <strong>$749</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>$889</s>
                                            </small>
                                        </span>
                                    </h6>

                                </div>

                            </div>
                            <!-- /.First row -->

                            <!-- Second row -->
                            <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a>
                                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a>
                                        <strong>Samsung V54</strong>
                                    </a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                        <strong>$249</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>$489</s>
                                            </small>
                                        </span>
                                    </h6>

                                </div>

                            </div>
                            <!-- /.Second row -->

                            <!-- Third row -->
                            <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                                <div class="col-6">
                                    <a>
                                        <img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6">

                                    <!-- Title -->
                                    <a>
                                        <strong>Canon 675-D</strong>
                                    </a>

                                    <!-- Rating -->
                                    <ul class="rating inline-ul">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!-- Price -->
                                    <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                        <strong>$2149</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>$2489</s>
                                            </small>
                                        </span>
                                    </h6>

                                </div>

                            </div>
                            <!-- /.Third row -->

                        </div>
                        <!-- /.Random Products -->
                    </div>

                </section>
                <!--/Section: product list-->

                <!--Section: Last items-->
                <section>

                    <h4 class="font-weight-bold mt-4 dark-grey-text">
                        <strong>LAST ITEMS</strong>
                    </h4>
                    <hr class="mb-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">Headphones</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/16.jpg" class="img-fluid" alt="sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">Headphones</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">
                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">iPhone</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid" alt="sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">iMac</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row justify-content-center mb-4">

                        <!--Pagination -->
                        <nav class="mb-4">
                            <ul class="pagination pagination-circle pg-blue mb-0">

                                <!--First-->
                                <li class="page-item disabled clearfix d-none d-md-block">
                                    <a class="page-link waves-effect waves-effect">First</a>
                                </li>

                                <!--Arrow left-->
                                <li class="page-item disabled">
                                    <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <!--Numbers-->
                                <li class="page-item active">
                                    <a class="page-link waves-effect waves-effect">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">5</a>
                                </li>

                                <!--Arrow right-->
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>

                                <!--First-->
                                <li class="page-item clearfix d-none d-md-block">
                                    <a class="page-link waves-effect waves-effect">Last</a>
                                </li>

                            </ul>
                        </nav>
                        <!--/Pagination -->

                    </div>
                    <!--Grid row-->
                </section>
                <!-- /.Section: Last items -->

            </div>
            <!-- /.Content -->

        </div>
        <!-- /Grid row -->
    </div>
    <!-- /.Main Container -->


    <!--Footer-->
    <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

        <div style="background-color: #4285f4;">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0 px-2">
                            <i class="fa fa-facebook white-text"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic px-2">
                            <i class="fa fa-twitter white-text"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic px-2">
                            <i class="fa fa-google-plus white-text"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic px-2">
                            <i class="fa fa-linkedin white-text"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic px-2">
                            <i class="fa fa-instagram white-text"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Company name</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Products</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Useful links</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2018 Copyright: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
<?php $this->view('layout/footer');?>