<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>EduWell</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/lightbox.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/2.css">
  </head>
<body>
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <a href="index.html" class="logo">
                          <img src="<?php echo base_url()?>assets/images/templatemo-eduwell.png" alt="EduWell Template">
                      </a>
                      <ul class="nav">
					      <li>
						 <div class="inner-addon right-addon enjoy-cssx">
							<?php echo form_open_multipart("welcome/search")?>
							<input type="text" placeholder="Search" name="search" class="form-control enjoy-css" />
						    <?php echo form_close(); ?>
						</div>
						 </li>
                          <li><a href="<?php echo base_url().'index.php/welcome/index'?>" class="active">Home</a></li>
                          
                          <li><a href="<?php echo base_url().'index.php/welcome/login'?>">Login</a></li>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Best Recycle is Book Recycle</h6>
            <h2> Keep Your Books<em>Flowing</em></h2>
            <div class="main-button-gradient">
              <div><a href="<?php echo base_url().'index.php/welcome/login'?>">Join Us Now!</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="<?php echo base_url()?>assets/images/banner-right-image.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>You may Like</h6>
            <h4>Trending<em>Books</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/hole.jpg" alt="">
                </div>
                <h4>The Hole</h4>
                <p>by-Sora Kim Russell</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/haunted.jpg" alt="">
                </div>
                <h4>The Haunted Fort</h4>
                <p>by-Franklin W.Dixon</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/ocean.jpg" alt="">
                </div>
                <h4>The Ocean</h4>
                <p>by-Neil Gaiman</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/strange.jpg" alt="">
                </div>
                <h4>The Strange</h4>
                <p>by-Robert Heinlein</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/five.jpg" alt="">
                </div>
                <h4>The Five</h4>
                <p>by-Kate Saunders</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/problem.jpg" alt="">
                </div>
                <h4>Problem Solving</h4>
                <p>by-Ahuja Kulkarni</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/bridge.jpg" alt="">
                </div>
                <h4>Bridge to Terabithia </h4>
                <p>by-Katherine Paterson</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/prince.jpg" alt="">
                </div>
                <h4>Prince of Throns</h4>
                <p>by-Mark Lawrence</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/glow.jpg" alt="">
                </div>
                <h4>Glow</h4>
                <p>by-Raven Kennedy</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/ron.jpg" alt="">
                </div>
                <h4>Ron Chernow</h4>
                <p>by-Alexander Hamilton</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/twin.jpg" alt="">
                </div>
                <h4>Twin Crowns</h4>
                <p>by-Catherine Doyle and Katherine Webber</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="<?php echo base_url()?>assets/images/sherlock.jpg" alt="">
                </div>
                <h4>Sherlock Holmes</h4>
                <p>by-Arthur Conan Doyle</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<div class="section-heading">
      <h4>Uploaded<em>Books</em></h4>
</div>
<div class="container d-flex justify-content-center mt-50 mb-50">        
   <div class="row">
      <div class="col-md-3 mt-2">
          <div class="card">
              <div class="card-body">
                     <div class="card-img-actions">
                          <img src="<?php echo base_url()?>assets/images/lord.jpg" class="card-img img-fluid" style="width:260px;height:200px" alt="">
                     </div>
              </div>
             <div class="card-body bg-light text-center">
                  <div class="mb-2">
					<h6 class="font-weight-semibold mb-2">
						<a  class="text-default mb-2" data-abc="true">Lord Of The Rings</a>
					</h6>
					<a href="#" class="text-muted" data-abc="true">by-J.R.R Tolkien</a>
                  </div>
				  <h5 class="mb-0 font-weight-semibold">Rs.199</h5>
                  <a href="<?php echo base_url().'index.php/welcome/login'?>"><button type="button" class="btn bg-cart"></i>Buy</button></a>
            </div>
         </div>
     </div> 
    <div class="col-md-3 mt-2">
        <div class="card">
            <div class="card-body">
                 <div class="card-img-actions">
                      <img src="<?php echo base_url()?>assets/images/land.jpg" class="card-img img-fluid" style="width:260px;height:200px" alt="">
                 </div>
			 </div>
		 <div class="card-body bg-light text-center">
			<div class="mb-2">
				<h6 class="font-weight-semibold mb-2">
					<a href="#" class="text-default mb-2" data-abc="true">Strange in a Strange Land</a>
				</h6>
			  <a href="#" class="text-muted" data-abc="true">by-Robert Heinlein</a>
            </div>
            <h5 class="mb-0 font-weight-semibold">Rs.140</h5>
             <a href="<?php echo base_url().'index.php/welcome/login'?>"><button type="button" class="btn bg-cart">Buy</button></a>
        </div>
     </div>
   </div> 
   <div class="col-md-3 mt-2">
          <div class="card">
              <div class="card-body">
                     <div class="card-img-actions">
                          <img src="<?php echo base_url()?>assets/images/dark.jpg" class="card-img img-fluid" style="width:260px;height:200px" alt="">
                     </div>
              </div>
             <div class="card-body bg-light text-center">
                  <div class="mb-2">
					<h6 class="font-weight-semibold mb-2">
						<a class="text-default mb-2" data-abc="true">The Dark Road</a>
					</h6>
					<a href="#" class="text-muted" data-abc="true">by-MA Jian</a>
                  </div>
				  <h5 class="mb-0 font-weight-semibold">Rs.99</h5>
                 <a href="<?php echo base_url().'index.php/welcome/login'?>"><button type="button" class="btn bg-cart">Buy</button></a>
            </div>
         </div>
     </div> 
	 <div class="col-md-3 mt-2">
          <div class="card">
              <div class="card-body">
                     <div class="card-img-actions">
                          <img src="<?php echo base_url()?>assets/images/five.jpg" class="card-img img-fluid" style="width:260px;height:200px" alt="">
                     </div>
              </div>
             <div class="card-body bg-light text-center">
                  <div class="mb-2">
					<h6 class="font-weight-semibold mb-2">
						<a href="#" class="text-default mb-2" data-abc="true">Five Children on the Western</a>
					</h6>
					<a href="#" class="text-muted" data-abc="true">by-Kate Saunders</a>
                  </div>
				  <h5 class="mb-0 font-weight-semibold">Rs.240</h5>
                  <a href="<?php echo base_url().'index.php/welcome/login'?>"><button type="button" class="btn bg-cart"></i>Buy</button></a>
            </div>
         </div>
     </div> 
	 <div class="col-md-3 mt-2">
          <div class="card">
              <div class="card-body">
                     <div class="card-img-actions">
                          <img src="<?php echo base_url()?>assets/images/ghost.jpg" class="card-img img-fluid" style="width:260px;height:200px" alt="">
                     </div>
              </div>
             <div class="card-body bg-light text-center">
                  <div class="mb-2">
					<h6 class="font-weight-semibold mb-2">
						<a href="#" class="text-default mb-2" data-abc="true">Revenge of Ghost</a>
					</h6>
					<a href="#" class="text-muted" data-abc="true">by-Sunil Kapadia</a>
                  </div>
				  <h5 class="mb-0 font-weight-semibold">Rs.140</h5>
                  <a href="<?php echo base_url().'index.php/welcome/login'?>"><button type="button" class="btn bg-cart"></i>Buy</button></a>
            </div>
         </div>
     </div> 
	 <div class="col-md-3 mt-2">
          <div class="card">
              <div class="card-body">
                     <div class="card-img-actions">
                          <img src="<?php echo base_url()?>assets/images/ron.jpg" class="card-img img-fluid" style="width:260px;height:200px" alt="">
                     </div>
              </div>
             <div class="card-body bg-light text-center">
                  <div class="mb-2">
					<h6 class="font-weight-semibold mb-2">
						<a href="#" class="text-default mb-2" data-abc="true">Ron Chernow</a>
					</h6>
					<a href="#" class="text-muted" data-abc="true">by-Alexander Hamilton</a>
                  </div>
				  <h5 class="mb-0 font-weight-semibold">Rs.149</h5>
                  <a href="<?php echo base_url().'index.php/welcome/login'?>"><button type="button" class="btn bg-cart"></i>Buy</button></a>
            </div>
         </div>
     </div> 
	 <div class="col-md-3 mt-2">
          <div class="card">
              <div class="card-body">
                     <div class="card-img-actions">
                          <img src="<?php echo base_url()?>assets/images/glow.jpg" class="card-img img-fluid" style="width:260px;height:200px" alt="">
                     </div>
              </div>
             <div class="card-body bg-light text-center">
                  <div class="mb-2">
					<h6 class="font-weight-semibold mb-2">
						<a href="#" class="text-default mb-2" data-abc="true">Glow</a>
					</h6>
					<a href="#" class="text-muted" data-abc="true">by-Raven Kennedy</a>
                  </div>
				  <h5 class="mb-0 font-weight-semibold">Rs.299</h5>
                 <a href="<?php echo base_url().'index.php/welcome/login'?>"><button type="button" class="btn bg-cart"> Buy</button></a>
            </div>
         </div>
     </div> 
	 <div class="col-md-3 mt-2">
          <div class="card">
              <div class="card-body">
                     <div class="card-img-actions ">
                          <img src="<?php echo base_url()?>assets/images/hole.jpg" class="card-img img-fluid" style="width:260px;height:200px" alt="">
                     </div>
              </div>
             <div class="card-body bg-light text-center">
                  <div class="mb-2">
					<h6 class="font-weight-semibold mb-2">
						<a href="#" class="text-default mb-2" data-abc="true">The Hole</a>
					</h6>
					<a href="#" class="text-muted" data-abc="true">by-Hye Young Pyun</a>
                  </div>
				  <h5 class="mb-0 font-weight-semibold">Rs.160</h5>
                 <a href="<?php echo base_url().'index.php/welcome/login'?>"><button type="button" class="btn bg-cart">Buy</button></a>
            </div>
         </div>
     </div> 
 </div>
</div>
  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>OUR Books</h6>
            <h4>What You Can <em>Read</em></h4>
           </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>English Novel</span></div>
                    <div class="gradient-border"><span>Comic Book</span></div>
                    <div class="gradient-border"><span>Horror Book</span></div>
                    <div class="gradient-border"><span>Cook</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="<?php echo base_url()?>assets/images/FineBalance.jpg" alt="">
                          <div class="price"><h6>$128</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>A Fine Balance</h4>
                          <p>With a compassionate realism and narrative sweep that recall the work of Charles Dickens, this magnificent novel captures all the cruelty and corruption, dignity and heroism, of India.
							The time is 1975. The place is an unnamed city by the sea. The government has just declared a State of Emergency, in whose upheavals four strangers--a spirited widow, a young student uprooted from his idyllic hill station, and two tailors who have fled the caste violence of their native village--will be thrust together.
						 </p>
						  <span>36 Hours</span>
                          <span>4 Weeks</span>
                          <div class="text-button">
                            <a href="<?php echo base_url().'index.php/welcome/login'?>">Buy</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="<?php echo base_url()?>assets/images/comic.jpg" alt="">
                          <div class="price"><h6>$156</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Dark Crisis</h4>
                          <p>Crisis on Infinite Earths. Infinite Crisis. Final Crisis. And now…Dark Crisis! The epic event years in the making is finally here! Superman, Batman, Wonder Woman, and the rest of the Justice League are dead. The remaining heroes are left to protect the world from an onslaught of violent attacks by DC’s greatest villains! Can the legacy heroes step out of the shadows of the classic heroes to form a new Justice League?</p>
                          <span>48 Hours</span>
                          <span>6 Weeks</span>
                         
                          <div class="text-button">
                            <a href="<?php echo base_url().'index.php/welcome/login'?>">Buy</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="<?php echo base_url()?>assets/images/ghost.jpg" alt="">
                          <div class="price"><h6>$184</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Revenge of the Ghost</h4>
                          <p>This is a story about a nice small city named Vikramnagar. This city is named after the king who had ruled the city centuries ago. The name is Vikramnagar. The city is situated at the foothills of the Himalayas. It is an extremely beautiful and picturesque city. The beauty of nature is scattered almost in each and every atom of sand, water and air over here. This city has many temples and has an impressive mythological background.</p>
                          <span>28 Hours</span>
                          <span>4 Weeks</span>
                 
                          <div class="text-button">
                            <a href="<?php echo base_url().'index.php/welcome/login'?>">Buy</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="<?php echo base_url()?>assets/images/cook.jpg" alt="">
                          <div class="price"><h6>$76</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Cook Book</h4>
                          <p>The Essential Napa Valley Cookbook features more than 35 recipes with Napa Valley wine pairings including:<br>Gott’s Ahi Burger<br>Model Bakery Chocolate Rads cookies<br>Mustards Mighty Meatloaf</p>
                          <span>48 Hours</span>
                          <span>4 Weeks</span>
                          
                          <div class="text-button">
                            <a href="<?php echo base_url().'index.php/welcome/login'?>">Buy</a>
                          </div>
                        </div>
                      </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="assets/images/books.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>Get the sale right now!</h6>
          <h4>Up to 50% OFF For 1+ books</h4>
		  <div class="white-button">
            <a href="<?php echo base_url().'index.php/welcome/login'?>">View Books</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="map">
          
            <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7151.84524236698!2d-122.19494600413192!3d47.56605883252286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490695e625f8965%3A0xf99b055e76477def!2sNewcastle%20Beach%20Park%20Playground%2C%20Bellevue%2C%20WA%2098006%2C%20USA!5e0!3m2!1sen!2sth!4v1644335269264!5m2!1sen!2sth" width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
            <div class="row">
              <div class="col-lg-4 offset-lg-1">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Phone</h4>
                  <span>010-020-0340</span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Mobile</h4>
                  <span>090-080-0760</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Contact us</h6>
                  <h4>Say <em>Hello</em></h4>
                  </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <a href="<?php echo base_url().'index.php/welcome/login'?>"> <button type="submit"  id="form-submit" class="main-gradient-button">Send Message</button></a>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 EduWell Co., Ltd. All Rights Reserved. 
          
          <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
          <br>Distribution: <a rel="sponsored" href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/isotope.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/owl-carousel.js"></script>
    <script src="<?php echo base_url()?>assets/js/lightbox.js"></script>
    <script src="<?php echo base_url()?>assets/js/tabs.js"></script>
    <script src="<?php echo base_url()?>assets/js/video.js"></script>
    <script src="<?php echo base_url()?>assets/js/slick-slider.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom.js"></script>
    
</body>

</html>