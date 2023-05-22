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
				<img src="../../uploads/<?php echo $row->code ?>.jpg" style="width:250px;height:240px;cursor:pointer"><br>  
				   <div class="category">
                     <span><?php echo $row->category?></span>
                   </div>
			   </div>
			   <div class="col-md-12">
				<h6><?php echo $row->name?></h6><br>
				<h6>by-<?php echo $row->author?></h6><br>
				<h6>Rs.<?php echo $row->price?></h6><br>
			   </div>
               <a href="<?php echo base_url().'index.php/welcome/buy/'.$row->code;?>" class="block" role="button">Buy</a>		   
			 
			 </div>
		  </div>
	   </div>
    </div>
		<?php endforeach; ?>
	</div>
 </div>

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