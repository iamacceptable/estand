<?php $this->view('layout/header');?>
<body>
	<header>
		<!-- Golu Navbar -->
        <?php $this->view('layout/nav');?>
        <!-- Golu Navbar dynamically calling -->
    </header>
    <section>
        <div id="carousel-golu" class="carousel slide carousel-fade" data-ride="carousel">
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
                                    <li class="list-group-item justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-question-circle dark-grey-text mr-2" aria-hidden="true"></i> Problem&nbsp;-&nbsp;Precaution&nbsp;-&nbsp;Prevention&emsp;<h5><a href="http://www.youtube.com/embed/foln8_jgmqw" target="_blank">Watch The Video..</a></h5></a>
                                        

                                    </li>
                                    <li class="list-group-item justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-question dark-grey-text mr-3" aria-hidden="true"></i><b>Why to use E-Stand:</b>Best international ergonomics principle have been embedded in eStand....<a href="#">Read More</a></a>
                                    </li>
                                    <li class="list-group-item justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-dollar dark-grey-text mr-3" aria-hidden="true"></i><b>Pricing: </b>We kept our prices to fit in you budget...<a href="#">Check Products</a></a>
                                    </li>
                                    <li class="list-group-item justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-asterisk dark-grey-text mr-3" aria-hidden="true"></i><b>Features: </b>E-Stand have unique features and it is mixture of comfort, ease and ergonomics...<a href="#">Check Details Here</a></a>
                                    </li>
                                    <li class="list-group-item justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fa fa-thumb-tack dark-grey-text mr-3" aria-hidden="true"></i><b>Ergonomics: </b>Comfort is necessary for life, but can’t be at the cost of ergonomics...<a href="#">Check E-Stand Ergonomics here</a></a>
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
                <!--Section: Advertising-->
                <section>

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-12">
                            <!--Image -->
                            <div class="view  z-depth-1">

                                <img src="https://mdbootstrap.com/img/Photos/Others/ecommerce5.jpg" class="img-fluid" alt="SALE image">
                                <div class="mask rgba-stylish-slight">
                                    <div class="dark-grey-text text-right pt-lg-5 pt-md-1 mr-5 pr-md-4 pr-0">
                                        <div>
                                            <a>
                                                <span class="badge badge-danger">SALE</span>
                                            </a>
                                            <h2 class="card-title font-weight-bold pt-md-3 pt-1">
                                                <strong>Sale on E-Stand
                                                </strong>
                                            </h2>
                                            <p class="pb-lg-3 pb-md-1 clearfix d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                            <a class="btn mr-0 btn-primary btn-rounded clearfix d-none d-md-inline-block">View Products</a>
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
                        <div class="col-lg-12 col-md-12 col-12 pt-5">
                         
                         <hr>

                            <h5 class="text-center font-weight-bold dark-grey-text">
                                <strong>Our Products</strong>
                            </h5>
                            <hr>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            
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
                                        <strong>₹849</strong>
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
                                        <strong>₹49</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>₹89</s>
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
                                        <strong>₹1449</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>₹2189</s>
                                            </small>
                                        </span>
                                    </h6>

                                </div>

                            </div>
                            <!-- /.Third row -->

                        </div>
                        <!-- /.New Products-->

                        <!-- Top Sellers-->
                        <div class="col-lg-4  col-md-12">

                           

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
                                        <strong>₹649</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>₹889</s>
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
                                        <strong>₹1249</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>₹1489</s>
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
                                        <strong>₹49</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>₹89</s>
                                            </small>
                                        </span>
                                    </h6>

                                </div>

                            </div>
                            <!-- /.Third row -->

                        </div>
                        <!-- /.Top Sellers -->

                        <!-- Random Products-->
                        <div class="col-lg-4 col-md-12">


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
                                        <strong>₹749</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>₹889</s>
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
                                        <strong>₹249</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>₹489</s>
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
                                        <strong>₹2149</strong>
                                        <span class="grey-text">
                                            <small>
                                                <s>₹2489</s>
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
            </div>
            <!-- /.Content -->

        </div>
        <!-- /Grid row -->
    </div>
    <!-- /.Main Container -->

    <section class="text-center my-5">

      <!-- Section heading -->
    
      <h2 class="h1-responsive font-weight-bold my-5">What People Says??</h2>
      <!-- Carousel Wrapper -->
      <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
        data-interval="false">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <!--First slide-->
          <div class="carousel-item active">
            <div class="testimonial">
              <!--Avatar-->
              <div class="avatar mx-auto mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle img-fluid"
                  alt="First sample avatar image">
              </div>
              <!--Content-->
              <p>
                <i class="fa fa-quote-left"></i> I have found that there is no better stand in the market than the eStand from elpedia welfare to maintain correct posture and remain fit.
              </p>
              <h4 class="font-weight-bold">Prof. S.K. Atreya</h4>
              <h6 class="font-weight-bold my-3">Professor , IIT Delhi</h6>
              <!--Review-->
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star-half-full blue-text"> </i>
            </div>
          </div>
          <!--First slide-->
          <!--Second slide-->
          <div class="carousel-item">
            <div class="testimonial">
              <!--Avatar-->
              <div class="avatar mx-auto mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded-circle img-fluid"
                  alt="Second sample avatar image">
              </div>
              <!--Content-->
              <p>
                <i class="fa fa-quote-left"></i> All in all a very good product. I strongly recommend it to everyone. It is multipurpose. You can also use it as a reading table. If you use this in the office/classroom you may convert it as a presentation desk. </p>
              <h4 class="font-weight-bold">Prof. Navin Rampal</h4>
              <h6 class="font-weight-bold my-3">V.Faculty, IIT Delhi</h6>
              <!--Review-->
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
            </div>
          </div>
          <!--Second slide-->
          <!--Third slide-->
          <div class="carousel-item">
            <div class="testimonial">
              <!--Avatar-->
              <div class="avatar mx-auto mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle img-fluid"
                  alt="Third sample avatar image">
              </div>
              <!--Content-->
              <p>
                <i class="fa fa-quote-left"></i> If I were to set out to design a perfect stand for using my laptop on a desk, I
                                would stop what I was doing and go out and buy the eStand from elpedia welfare technologies,
                                because there would be no sense in reinventing what they have already perfected.</p>
              <h4 class="font-weight-bold">Ashwani Agrawal</h4>
              <h6 class="font-weight-bold my-3">Manager Kotak Mahindra</h6>
              <!--Review-->
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star-o blue-text"> </i>
            </div>
          </div>
          <!--Third slide-->
          <!--Third slide-->
          <div class="carousel-item">
            <div class="testimonial">
              <!--Avatar-->
              <div class="avatar mx-auto mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle img-fluid"
                  alt="Third sample avatar image">
              </div>
              <!--Content-->
              <p>
                <i class="fa fa-quote-left"></i> Simple, effective, and very stable structure elevates your laptop and makes it
                                more ergonomical for desktop use. eStand is the best workstation to be used with
                                laptops to maintain correct posture</p>
              <h4 class="font-weight-bold">Mr. Amit Kumar</h4>
              <h6 class="font-weight-bold my-3">Software Professional</h6>
              <!--Review-->
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star blue-text"> </i>
              <i class="fa fa-star-o blue-text"> </i>
            </div>
          </div>
          <!--Third slide-->
        </div>
        <!--Slides-->
        <!--Controls-->
        <a class="carousel-item-prev left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
          <span class="icon-prev" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-item-next right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
          <span class="icon-next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--Controls-->
      </div>
      <!-- Carousel Wrapper -->

    </section>
    <!--Footer-->
    <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

        <div style="background-color: red;">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 font-weight-bold white-text">Get connected with us on social networks!</h6>
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
                        <strong>Elpedia Welfare Society</strong>
                    </h6>
                    <hr class="red mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
                    <p>Elpedia welfare technologies is company supported by a group of high end professionals. In the team there are professors from IIT Delhi, Engineers, Doctors, Students and last but the most important, a group of users. User is the most important member who help to customize product as per their actual need. It is this combination of people which gives this group a unique identity.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Products</strong>
                    </h6>
                    <hr class="red mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">E-Stand Laptop Stand</a>
                    </p>
                    <p>
                        <a href="#!">E-Stand Desktop Stand</a>
                    </p>
                    <p>
                        <a href="#!">E-Stand Slope</a>
                    </p>
                    <p>
                        <a href="#!">Visit More...</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Useful links</strong>
                    </h6>
                    <hr class="red mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">My Account</a>
                    </p>
                    <p>
                        <a href="#!">Our Blog</a>
                    </p>
                    <p>
                        <a href="#!">Payment & Return</a>
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
                    <hr class="red mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> Fm-1, Plot no.67, Rajendra Nagar, Sector-5, Sahibabad, Ghaziabad 201005</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> contact@elpediainfotech.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 91 991 177 4882</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                All Rights Reserved | eStand.in © 2018 | Developed With <i class="red-text fa fa-heart"></i> By: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> Shubham Kumar </a>
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
<?php $this->view('layout/footer');?>