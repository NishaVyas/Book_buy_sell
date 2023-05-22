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
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/1.css">

</head>
<body>
<!-- ***** Header Area Start ***** -->
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
  <!--Section: Content-->
  <section class="text-center dark-grey-text mb-5">
    <div class="card border-primary">
      <div class="card-body rounded-top border-top p-3">
        <!-- Section heading -->
        <h3 class="font-weight-bold my-4">Upload Book&nbsp;<i class="fa fa-book"></i></h3>
         <?php
		 echo form_open_multipart("welcome/do_upload");
		?>
		<div class="row">
            <div class="col-md-6 mb-4">
				<?php
					$attr=array("type"=>"text","name"=>"name","class"=>"form-control","placeholder"=>"Name");
					echo form_input($attr);
				?>
		     </div>
			<div class="col-md-6 mb-4">
				<?php
				$attr=array("type"=>"text","name"=>"author","class"=>"form-control","placeholder"=>"Author Name");
				echo form_input($attr);
				?>
			</div>
		</div>
		<div class="row">
            <div class="col-md-6 mb-4">
				<?php
					$attr=array("type"=>"text","name"=>"price","class"=>"form-control","placeholder"=>"Price");
					echo form_input($attr);
				?>
		     </div>
			<div class="col-md-6 mb-4">
				<?php
					$options = array(
						'English' => 'English Novel',
						'Programming' => 'Programming',
						'Fashion' => 'Fashion',
						'Horror' => 'Horror',
						'Cookbook' => 'Cookbook',
						'History' => 'History',
						'Kids' => 'Kids',
						'Travel' => 'Travel',
						'Poetry' => 'Poetry',
						'Sports' => 'Sports',
						'Biographic' => 'Biographic',
						'Fantasy' => 'Fantasy',
						'Crime' => 'Crime & Mystery',
						'Hindi' => 'Hindi Novel',
						'Thrillers' => 'Suspense & Thrillers',
						'Comic' => 'Comic Book',
					);

					$category= array('English', 'Comic');
					echo form_dropdown('category', $options, 'Programming','class="form-control"');
			   ?>
			</div>
		</div>
		<div class="row">
            <div class="col-md-12">
              <div class="form-group mb-4">
				  <?php
				  $attr=array("type"=>"text","name"=>"description","class"=>"form-control","Placeholder"=>"Description");
					echo form_input($attr);
				  ?>
			 </div>
			</div>
	  </div>
		<div class="row">
            <div class="col-md-12">
              <div class="form-group mb-4">
				  <?php
				  $attr=array("type"=>"file","name"=>"image","class"=>"form-control");
					echo form_input($attr);
				  ?>
			 </div>
			</div>
	  </div>
		<?php
		  echo form_submit("submit","submit","class='btn btn-primary'");
				echo form_close();
		    
		 ?>
      </div>
    </div>
  </section>
</div>
  
 <div class="section-heading">
   <h4>Books <em>For Sale</em></h4>
</div>
<div class="container-fluid">
 <div class="row">
 <?php foreach ($rd as $row): ?>
  <div class="col-sm-3"> 
   <div class="card-1">
      <div class="card-body">
        <div class="row">
            <div class="col-md-12">
				<img src="../../uploads/<?php echo $row->code ?>.jpg" style="width:280px;height:240px;cursor:pointer"><br>  
				   <div class="category">
                     <span><?php echo $row->category?></span>
                   </div>
			   </div>
			   <div class="col-md-12">
				<h6><?php echo $row->name?></h6><br>
				<h6>by-<?php echo $row->author?></h6><br>
				<h6>Rs.<?php echo $row->price?></h6><br>
			   </div>
			   <a href="<?php echo base_url().'index.php/welcome/buy/'.$row->code; ?>"><button class="btn btn-primary" >Buy</button></a>
               		   		 
			 </div>
		  </div>
	   </div>
    </div>
		<?php endforeach; ?>
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
</body>
</html>