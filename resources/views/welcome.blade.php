@extends('layout')
@section('title', 'About Us')
@section('content')
  <section class="slide-banner row">
    <img src="https://www.wiberrentacar.com/images/landings/benidorm.jpg" alt="benidorm" class="this-bg hidden-xs">

    <div class="this-texts container">
      <h2 class="this-cursive" style="font-size: 27px;">Wiber Car <span>Web oficial</span></h2>
  <h2 class="this-h1">TU COCHE DE ALQUILER</h2> 
   <!--    <h2 class="this-foot">TU COCHE DE ALQUILER</h2> -->
     <!--  <a href="#" class="btn btn-primary">Let’s check it out</a> -->
    </div>
  <!--   <a href="#" class="slide-location">LIMOUSINE<i class="ion-location"></i>New York, USA</a> -->
  </section>
  <!--3 Fold-->
  <section class="row fold3">
    <div class="container">
      <div class="row fold-banners">
        <div class="col-md-3 col-sm-6 banner-vans fold-banner">
          <div class="row inner">
            <img src="images/fold3/1.jpg" alt="" class="img-responsive">
            <h2 class="top-text">At Winter</h2>
            <h5 class="bottom-text">From $59.69/day</h5>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-6 col-sm-6 banner-limo  fold-banner">          
          <div class="row inner">
            <img src="images/fold3/2.jpg" alt="" class="img-responsive">
            <h2 class="top-text">Big Sale</h2>
            <h5 class="bottom-text">Sale 50%, 30%, 20%</h5>
          </div>
        </div>
      </div>
      <div class="row finder-form">
        <div class="col-md-6 col-md-offset-3 car-finder-form">
          <form class="row inner" action="{{ url('consult') }}" method="post">
          	@csrf
            <h3 class="form-title">Buscando un coche de alquiler</h3>
            <div class="input-group" style="display: block;">
              <input id="location" name="location" type="text" class="form-control" autocomplete="off" placeholder="Enter airport, city or postcode..." required="required">
              <span class="input-group-addon"></span>
            </div>
            <h5 class="return"><i class="ion-android-arrow-dropdown-circle"></i>Devolver una ubicación diferente</h5>
            <div class="row this-foot">
              <div class="col-xs-6 date">
                <h5 class="this-hd">FECHA DE RECOGIDA <i class="ion-arrow-down-b"></i></h5>
           
                <div class="date row m0">
                	<div id="Pickup_Dat"></div>
                </div>
              </div>
              <div class="col-xs-6 date">
                <h5 class="this-hd">Fecha de entrega <i class="ion-arrow-down-b"></i></h5>
                <div class="date row m0">
                 <div id="Drop_Date"></div>
                </div>
              </div>
          </div>
           
	          <div class="row" style="margin-top: 20px;">
	             <div class="col-md-12 col-xs-12">
	              	 <div class="col-xs-6 ">
	                <input type="checkbox" name="driver" id="driver" checked>
	                <label for="driver">Conductor de entre 20 y 70 años</label>
	            </div>
	             <div class="col-xs-6 ">
	                <input type="submit" class="btn btn-primary" value="find now">
	              </div>
	          </div>
        	 </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--Features-->
  <section class="row features">
    <div class="container">
      <div class="col-md-4 feature">
        <div class="media">
          <div class="media-left"><span><img src="images/icons/features/1.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">FREE FULL FUEL</h4>
            <p>Never need to pay for Fuel. If you need extra fuel just fill up and keep the receipt, we will <strong>refund the amount.</strong></p>
          </div>
        </div>
        <div class="media">
          <div class="media-left"><span><img src="images/icons/features/2.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">24/7 ROADSIDE ASSISTENCE</h4>
            <p>You drive to adventures, we get it. We and our roadside assistance partners are <strong>available</strong> around the clock.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 feature">
        <div class="media">
          <div class="media-left"><span><img src="images/icons/features/3.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">TAX &amp; INSURANCE INCLUDED</h4>
            <p>The hourly price includes Taxes &amp; Insurance. <strong>No hidden charges!</strong> Dosis amet consectua.</p>
          </div>
        </div>
        <div class="media">
          <div class="media-left"><span><img src="images/icons/features/4.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">ALL USA. PERMIT</h4>
            <p>Go <strong>anywhere.</strong> Our cars have all‐USA permits. Just remember to pay state tolls and taxes.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 feature">
        <div class="media">
          <div class="media-left"><span><img src="images/icons/features/5.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">REFUNDABLE DEPOSIT</h4>
            <p>We take a small refundable deposit of <strong>$5,000.</strong> It will take 5‐15 days before the refund reflects in your account.</p>
          </div>
        </div>
        <div class="media">
          <div class="media-left"><span><img src="images/icons/features/6.png" alt=""></span></div>
          <div class="media-body">
            <h4 class="this-title">DOORSTEP CAR DELIVERY</h4>
            <p>Get your car <strong>delivered</strong> to your doorstep as well as picked up once you are done lorem dolor.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Fleet-->
  <section class="row fleets2">
    <div class="container">
      <div class="row section-title text-center white">
        <h6 class="this-top">SO MANY CHOICE</h6>
        <h2 class="h1 this-main">A Car for Every Need!</h2>
      </div>
      <div class="row">
        <div class="col-md-4 fleet fleet2 sale-offer">
          <div class="inner row">
            <h2 class="rent text-center"><small>from</small>$96.90<sub>/day</sub></h2>
            <h6 class="reviews text-center">
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i> 
              (5 reviews)
            </h6>
            <h4 class="vehicle-title text-center">Bentley Contidental 2016</h4>
            <div class="row vehicle-img text-center">
              <img src="images/fleet/1.png" alt="">
            </div>
            <div class="row specification">
              <ul class="nav">
                <li><span><img src="images/icons/fleet2/1.png" alt=""></span>Auto</li>
                <li><span><img src="images/icons/fleet2/2.png" alt=""></span>06L/100km</li>
                <li><span><img src="images/icons/fleet2/3.png" alt=""></span>02</li>
                <li><span><img src="images/icons/fleet2/4.png" alt=""></span>2016</li>
                <li><span><img src="images/icons/fleet2/5.png" alt=""></span>100 lits</li>
                <li><span><img src="images/icons/fleet2/6.png" alt=""></span>04</li>
              </ul>
              <a href="single-car.html" class="details-page">+</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 fleet fleet2">
          <div class="inner row">
            <h2 class="rent text-center"><small>from</small>$196.90<sub>/day</sub></h2>
            <h6 class="reviews text-center">
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i> 
              (5 reviews)
            </h6>
            <h4 class="vehicle-title text-center">Jaguar XJL 2016</h4>
            <div class="row vehicle-img text-center">
              <img src="images/fleet/2.png" alt="">
            </div>
            <div class="row specification">
              <ul class="nav">
                <li><span><img src="images/icons/fleet2/1.png" alt=""></span>Auto</li>
                <li><span><img src="images/icons/fleet2/2.png" alt=""></span>06L/100km</li>
                <li><span><img src="images/icons/fleet2/3.png" alt=""></span>02</li>
                <li><span><img src="images/icons/fleet2/4.png" alt=""></span>2016</li>
                <li><span><img src="images/icons/fleet2/5.png" alt=""></span>100 lits</li>
                <li><span><img src="images/icons/fleet2/6.png" alt=""></span>04</li>
              </ul>
              <a href="single-car.html" class="details-page">+</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 fleet fleet2 sale-offer">
          <div class="inner row">
            <h2 class="rent text-center"><small>from</small>$296.90<sub>/day</sub></h2>
            <h6 class="reviews text-center">
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o starred"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i> 
              (5 reviews)
            </h6>
            <h4 class="vehicle-title text-center">Bentley Contidental 2016</h4>
            <div class="row vehicle-img text-center">
              <img src="images/fleet/3.png" alt="">
            </div>
            <div class="row specification">
              <ul class="nav">
                <li><span><img src="images/icons/fleet2/1.png" alt=""></span>Auto</li>
                <li><span><img src="images/icons/fleet2/2.png" alt=""></span>06L/100km</li>
                <li><span><img src="images/icons/fleet2/3.png" alt=""></span>02</li>
                <li><span><img src="images/icons/fleet2/4.png" alt=""></span>2016</li>
                <li><span><img src="images/icons/fleet2/5.png" alt=""></span>100 lits</li>
                <li><span><img src="images/icons/fleet2/6.png" alt=""></span>04</li>
              </ul>
              <a href="single-car.html" class="details-page">+</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Updates-Partner-->
  <!--Service Offers-->
  <section class="row services-offer">
    <div class="container">
      <div class="row section-title text-center">
        <h6 class="this-top">The VALUE OF BRAND</h6>
        <h2 class="h1 this-main">What we offer?</h2>
        <p>We seek to get involved early in the design phase so that we can manage the project more efficiently, provide effective building solutions, and identify challenges early on to mitigate design changes after that.</p>
      </div>
      <div class="row text-center section-title-img"><img src="images/services/1.png" alt=""></div>

      <div class="row">
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="images/services/1.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">ONE WAY HIRE CAR</h4>
                  <h5 class="this-area">All USA</h5>
                </div>
                <div class="media-right media-middle">
                  <span class="normal"><img src="images/icons/service-offer/1.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="images/icons/service-offer/7.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="images/services/2.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">Airport transfers</h4>
                  <h5 class="this-area">Euro &amp; East Asia</h5>
                </div>
                <div class="media-right media-middle">                    
                  <span class="normal"><img src="images/icons/service-offer/2.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="images/icons/service-offer/8.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="images/services/3.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">Flex (long-term car hire)</h4>
                  <h5 class="this-area">Euro &amp; East Asia</h5>
                </div>
                <div class="media-right media-middle">
                  <span class="normal"><img src="images/icons/service-offer/3.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="images/icons/service-offer/9.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="images/services/4.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">Breakdown assistance</h4>
                  <h5 class="this-area">All USA</h5>
                </div>
                <div class="media-right media-middle">
                  <span class="normal"><img src="images/icons/service-offer/4.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="images/icons/service-offer/10.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="images/services/5.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">ADDITIONAL COVER</h4>
                  <h5 class="this-area">Euro &amp; East Asia</h5>
                </div>
                <div class="media-right media-middle">
                  <span class="normal"><img src="images/icons/service-offer/5.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="images/icons/service-offer/11.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>
        <!--Offer-->
        <div class="col-sm-6 col-md-4 service-offer">
          <div class="row inner">
            <img src="images/services/6.jpg" alt="" class="img-responsive">
            <div class="text-holder">
              <div class="media this-heading">
                <div class="media-body">
                  <h4 class="this-title">Chauffeur Drive</h4>
                  <h5 class="this-area">Euro &amp; East Asia</h5>
                </div>
                <div class="media-right media-middle">
                  <span class="normal"><img src="images/icons/service-offer/6.png" alt="" class="this-icon"></span>
                  <span class="hover"><img src="images/icons/service-offer/12.png" alt="" class="this-icon"></span>
                </div>
              </div>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
            </div>
          </div>
        </div>          
      </div>        
    </div>
  </section>  
  <!--Funfact-->
  <section class="row funfacts">
    <div class="container">
      <div class="row inner">
        <!--Fact-->
        <div class="col-xs-6 col-md-3 fact">
          <div class="inner-fact">
            <div class="this-icon"><i class="ion-ios-alarm-outline"></i></div>
            <div class="this-texts">
              <h2 class="this-counter"><span class="counter">1991</span><sup>+</sup></h2>
              <h5 class="this-about">Hours Saled</h5>
            </div>
          </div>
        </div>
        <!--Fact-->
        <div class="col-xs-6 col-md-3 fact">
          <div class="inner-fact">
            <div class="this-icon"><i class="ion-ios-ionic-outline"></i></div>
            <div class="this-texts">
              <h2 class="this-counter"><span class="counter">69</span></h2>
              <h5 class="this-about">City Park</h5>
            </div>
          </div>
        </div>
        <!--Fact-->
        <div class="col-xs-6 col-md-3 fact">
          <div class="inner-fact">
            <div class="this-icon"><i class="ion-ios-paw-outline"></i></div>
            <div class="this-texts">
              <h2 class="this-counter"><span class="counter">581</span></h2>
              <h5 class="this-about">Clients in USA</h5>
            </div>
          </div>
        </div>
        <!--Fact-->
        <div class="col-xs-6 col-md-3 fact">
          <div class="inner-fact">
            <div class="this-icon"><i class="ion-ios-speedometer-outline"></i></div>
            <div class="this-texts">
              <h2 class="this-counter"><span class="counter">251</span><sup>+</sup></h2>
              <h5 class="this-about">Cars Storage</h5>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </section>
  <!--Banner 01-->
  <section class="row banner01">
    <div class="container">
      <div class="row inner text-center">
        <h2 class="this-cursive">The Flash</h2>
          <h4 class="this-deliver">DELIVERED AT <u>YOUR DOOR</u></h4>
          <h2 class="this-title">Yes, just at home!</h2>
          <h4 class="this-hire">Hire a car <u>never been easier!</u></h4>
          <a href="#" class="btn btn-outline">RESERVE A CAR</a>
        </div>
      </div>
    </section>  
    <section class="row popular-fleets">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row popular-tabs-row">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs popular-fleets-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#popular-t01" aria-controls="popular-t01" role="tab" data-toggle="tab">Popular</a></li>
                <li role="presentation"><a href="#propular-t02" aria-controls="propular-t02" role="tab" data-toggle="tab">Related</a></li>
              </ul>
              <ul class="tab-switcher list-unstyled">
                <li><i class="ion-chevron-left"></i></li>
                <li><i class="ion-chevron-right"></i></li>
              </ul>
            </div>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="popular-t01">
                <div class="row fleets-row">
                  <!--Popular Fleets-->
                  <div class="col-md-6 popular-fleet fleet sale-offer">
                    <div class="media inner">
                      <div class="media-left"><a href="single-car.html"><img src="images/fleet/popular/1.png" alt=""></a></div>
                      <div class="media-body">
                        <h4 class="rent"><small>from</small>$96.90<sub>/day</sub></h4>
                        <h6 class="reviews">
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i> 
                          (5 reviews)
                        </h6>
                        <h4 class="vehicle-title">Mercedes S500 v8l</h4>
                      </div>
                    </div>
                  </div>
                  <!--Popular Fleets-->
                  <div class="col-md-6 popular-fleet fleet">
                    <div class="media inner">
                      <div class="media-left"><a href="single-car.html"><img src="images/fleet/popular/2.png" alt=""></a></div>
                      <div class="media-body">
                        <h4 class="rent"><small>from</small>$96.90<sub>/day</sub></h4>
                        <h6 class="reviews">
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i> 
                          (5 reviews)
                        </h6>
                        <h4 class="vehicle-title">Honda Civic 2016</h4>
                      </div>
                    </div>
                  </div>
                  <!--Popular Fleets-->
                  <div class="col-md-6 popular-fleet fleet">
                    <div class="media inner">
                      <div class="media-left"><a href="single-car.html"><img src="images/fleet/popular/3.png" alt=""></a></div>
                      <div class="media-body">
                        <h4 class="rent"><small>from</small>$96.90<sub>/day</sub></h4>
                        <h6 class="reviews">
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i> 
                          (5 reviews)
                        </h6>
                        <h4 class="vehicle-title">Lexus h400</h4>
                      </div>
                    </div>
                  </div>
                  <!--Popular Fleets-->
                  <div class="col-md-6 popular-fleet fleet">
                    <div class="media inner">
                      <div class="media-left"><a href="single-car.html"><img src="images/fleet/popular/4.png" alt=""></a></div>
                      <div class="media-body">
                        <h4 class="rent"><small>from</small>$96.90<sub>/day</sub></h4>
                        <h6 class="reviews">
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i> 
                          (5 reviews)
                        </h6>
                        <h4 class="vehicle-title">Jaguar XJL Brand</h4>
                      </div>
                    </div>
                  </div>
                  <!--Popular Fleets-->
                  <div class="col-md-6 popular-fleet fleet">
                    <div class="media inner">
                      <div class="media-left"><a href="single-car.html"><img src="images/fleet/popular/5.png" alt=""></a></div>
                      <div class="media-body">
                        <h4 class="rent"><small>from</small>$96.90<sub>/day</sub></h4>
                        <h6 class="reviews">
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i> 
                          (5 reviews)
                        </h6>
                        <h4 class="vehicle-title">Lamboghini Avado</h4>
                      </div>
                    </div>
                  </div>
                  <!--Popular Fleets-->
                  <div class="col-md-6 popular-fleet fleet sale-offer">
                    <div class="media inner">
                      <div class="media-left"><a href="single-car.html"><img src="images/fleet/popular/6.png" alt=""></a></div>
                      <div class="media-body">
                        <h4 class="rent"><small>from</small>$96.90<sub>/day</sub></h4>
                        <h6 class="reviews">
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o starred"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i> 
                          (5 reviews)
                        </h6>
                        <h4 class="vehicle-title">BMW i8 Black Edition</h4>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="propular-t02">...</div>
            </div>
          </div>
          <div class="col-lg-4 banner2">
            <a href="#"><img src="images/banner/banner.jpg" alt="" class="img-responsive"></a>
          </div>
        </div>
      </div>
    </section>
    <!--Banner 3-->
    <section class="row banner3">
      <div class="container">
        <div class="media inner">
          <div class="media-body">
            <h2 class="h1 this-title">Many reasons to choose <u>HireCarPro!</u></h2>
            <p>Our fleet comprises quite the range of rides, whether you need a small hybrid for efficient bursts across town.</p>
          </div>
          <div class="media-right">
            <a href="#" class="btn btn-primary dark">read more</a>
          </div>
        </div>
      </div>
    </section>
    <!--Testimonial-->
    <section class="row testimonial-row">
      <div class="container">         
        <div class="row section-title text-center">
          <h6 class="this-top">SO MANY CHOICE</h6>
          <h2 class="h1 this-main">A Car for Every Need!</h2>
        </div>

        <div class="row">
          <div class="testimonial-carousel">
            <div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="images/testimonial/1.jpg" alt="" class="img-circle"></a>
              </div>
            </div>
            <div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="images/testimonial/2.jpg" alt="" class="img-circle"></a>
              </div>
            </div>
            <div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="images/testimonial/1.jpg" alt="" class="img-circle"></a>
              </div>
            </div>
            <div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="images/testimonial/2.jpg" alt="" class="img-circle"></a>
              </div>
            </div>
            <div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="images/testimonial/1.jpg" alt="" class="img-circle"></a>
              </div>
            </div>
            <div class="item testimonial">
              <div class="inner row m0">
                <p>“PUKDG is my favorite booking car company ever! <span>Cool drivers</span> , amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :) Reading more at link”</p>
                <span class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <h5 class="client">Diego Furlan <small>- Sandiago/29 ages</small></h5>
                <a href="#" class="client-img"><img src="images/testimonial/2.jpg" alt="" class="img-circle"></a>
              </div>
            </div>
          </div>          
        </div>

      </div>
    </section>
    <!--From Blogs-->
    <section class="row from-blogs">
      <div class="container"> 
        <div class="row section-title text-center">
          <h2 class="h1 this-main">From Blogs</h2>
        </div>
        <div class="row">
          <div class="col-md-6 latest-blog">
            <div class="media">
              <div class="media-left"><a href="#"><img src="images/blogs/latest/1.jpg" alt=""></a></div>
              <div class="media-body">
                <a href="single.html"><h4 class="post-title">Chauffeured &amp; shuttle of two services in ski City!</h4></a>
                <h6 class="post-meta">
                  <a href="#" class="date">March 12, 2016</a>
                  <a href="#" class="likes"><i class="ion-heart"></i>69</a>
                  <a href="#" class="comments"><i class="ion-chatbubble-working"></i>06</a>
                </h6>
                <a href="single.html" class="read-more btn btn-outline btn-sm">read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 latest-blog">
            <div class="media">
              <div class="media-left"><a href="#"><img src="images/blogs/latest/2.jpg" alt=""></a></div>
              <div class="media-body">
                <a href="single.html"><h4 class="post-title">Chauffeured &amp; shuttle of two services in ski City!</h4></a>
                <h6 class="post-meta">
                  <a href="#" class="date">March 12, 2016</a>
                  <a href="#" class="likes"><i class="ion-heart"></i>69</a>
                  <a href="#" class="comments"><i class="ion-chatbubble-working"></i>06</a>
                </h6>
                <a href="single.html" class="read-more btn btn-outline btn-sm">read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 latest-blog">
            <div class="media">
              <div class="media-left"><a href="#"><img src="images/blogs/latest/3.jpg" alt=""></a></div>
              <div class="media-body">
                <a href="single.html"><h4 class="post-title">Chauffeured &amp; shuttle of two services in ski City!</h4></a>
                <h6 class="post-meta">
                  <a href="#" class="date">March 12, 2016</a>
                  <a href="#" class="likes"><i class="ion-heart"></i>69</a>
                  <a href="#" class="comments"><i class="ion-chatbubble-working"></i>06</a>
                </h6>
                <a href="single.html" class="read-more btn btn-outline btn-sm">read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 latest-blog">
            <div class="media">
              <div class="media-left"><a href="#"><img src="images/blogs/latest/4.jpg" alt=""></a></div>
              <div class="media-body">
                <a href="single.html"><h4 class="post-title">Chauffeured &amp; shuttle of two services in ski City!</h4></a>
                <h6 class="post-meta">
                  <a href="#" class="date">March 12, 2016</a>
                  <a href="#" class="likes"><i class="ion-heart"></i>69</a>
                  <a href="#" class="comments"><i class="ion-chatbubble-working"></i>06</a>
                </h6>
                <a href="single.html" class="read-more btn btn-outline btn-sm">read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="row banner2-prefolder">
      <div class="container">
        <div class="row inner m0">
          <div class="col-md-6 this-left">
            <div class="this-texts">
              <h2 class="this-title">Quick Sale</h2>
              <h2 class="this-title2 h1">VANS PICKUP!</h2>
              <p>At vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
              <a href="#" class="read-more">read more<i class="ion-arrow-right-b"></i></a>
            </div>
          </div>
          <div class="col-md-6 this-right">
            <div class="this-texts">
              <h2 class="this-title">Online Booking</h2>
              <h2 class="this-title2 h1">CADILAC SALE 39%</h2>
              <p>At vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
              <a href="#" class="read-more">read more<i class="ion-arrow-right-b"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    @stop