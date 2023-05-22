<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
</head>
<body>
 <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
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
                          <li><a href="<?php echo base_url().'index.php/welcome/dashboard'?>" class="active">Home</a></li>
                          <li><a href="<?php echo base_url().'index.php/welcome/dashboard'?>">Upload</a></li>
						  <li><a href="<?php echo base_url().'index.php/welcome/message'?>">Inbox</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Books</a>
                              <ul class="sub-menu">
                                  <li><a href="<?php echo base_url().'index.php/welcome/books'?>">My Books</a></li>
                                  <li><a href="<?php echo base_url().'index.php/welcome/books_a'?>">Books</a></li>  
                              </ul>
                          </li> 
						  <li><a href="<?php echo base_url().'index.php/welcome/logout'?>">Logout</a></li>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  
  <!-- ***** Header Area End ***** -->
   <div class="container my-5">
<style>
.enjoy-css {
  width: 250px;
  height: 40px;
  cursor: pointer;
  margin: 0 auto;
  border: .5px solid rgb(232, 238, 241);
  border-radius: 20px;
  font: normal 14px/28px "Advent Pro", Helvetica, sans-serif;
  color: rgb(119, 126, 128);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  letter-spacing: 1px;
  background: rgba(0,0,0,0);
}
.enjoy-cssx {
  width: 250px;
  height: 40px;
  border-radius: 20px;
  font: normal 14px/28px "Advent Pro", Helvetica, sans-serif;
  background: rgb(255, 255, 255);
}
.inner-addon { 
    position: relative; 
}
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }

.border-top {
  border-top: 5px solid #33b5e5 !important;
  border-top-left-radius: .25rem!important;
	border-top-right-radius: .25rem!important;
}	
body{
	color: #6F8BA4;
	margin-top:20px;
}
.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}

  </style>
 <section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
				<?php 
				$tcode=$this->uri->segment(3);
				foreach ($rd as $row): ?>
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color"><?php echo $row->name?></h3><br>
                            <h6 class="theme-color lead">by-<mark><?php echo $row->author?></mark></h6><br>
                            <h6 class="theme-color lead">Rs.<mark><?php echo $row->price?></mark></h6><br>
							<h6><?php echo $row->description?></h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="../../../uploads/<?php echo $row->code?>.jpg" style="width:420px;height:420px">
						</div>
                    </div>
					<?php endforeach; ?>
              </div>
        </div>
 </section>

  <!--Section: Content-->
  <section class="text-center dark-grey-text mb-5">
    <div class="card border-primary">
      <div class="card-body rounded-top border-top p-3">
        <!-- Section heading -->
        <h3 class="font-weight-bold my-4">Enquiry</h3>
         <?php
		 $tcode=$this->uri->segment(3);
		 echo form_open_multipart("welcome/enquiry/".$tcode);
		?>
		<div class="row">
			<div class="col-md-12">
			 <div class="form-group mb-4">
				<?php
				$attr=array("type"=>"text","name"=>"contact","class"=>"form-control","placeholder"=>"Contact No.");
				echo form_input($attr);
				?>
			</div>
		</div>
		</div>
		<div class="row">
            <div class="col-md-12">
              <div class="form-group mb-4">
				  <?php
				  $data = array(
				  'name' =>'message',
				  'value' =>set_value('message'),
				  'rows' =>'3',
				  'cols'=>'3',
				  'style' =>'width:100%',
				  'class' =>'form-control',
				  'placeholder'=>'Enter Message'
				  );
				  echo form_textarea($data);
				  ?>
			 </div>
			</div>
	  </div>
		<?php
		  echo form_submit("submit","send","class='btn btn-primary'");
				echo form_close();
		 
		 ?>
      </div>
    </div>
  </section>
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
   <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url()?>assets/js/isotope.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/owl-carousel.js"></script>
    <script src="<?php echo base_url()?>assets/js/lightbox.js"></script>
    <script src="<?php echo base_url()?>assets/js/tabs.js"></script>
    <script src="<?php echo base_url()?>assets/js/video.js"></script>
    <script src="<?php echo base_url()?>assets/js/slick-slider.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>