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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
  border-radius: 40px;
  font: normal 14px/28px "Advent Pro", Helvetica, sans-serif;
  background: rgb(255, 255, 255);
}
.inner-addon { 
    position: relative; 
}
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }


body{
    background:white;
}
.email .btn.search {
	font-size: 0.9em;
}
.email h2 {
	margin-top: 0;
	padding-bottom: 8px;
}

.email .nav.nav-pills > li > a {
	border-top: 3px solid transparent;
}

.email .nav.nav-pills > li > a > .fa {
	margin-right: 5px;
}

.email .nav.nav-pills > li.active > a,
.email .nav.nav-pills > li.active > a:hover {
	background-color: #f6f6f6;
	border-top-color: #3c8dbc;
}

.email .nav.nav-pills > li.active > a {
	font-weight: 600;
}

.email .nav.nav-pills > li > a:hover {
	background-color: #f6f6f6;
}
.email table {
	font-weight: 600;
}
.email table a {
	color: #666;
}
.email table tr.read > td {
	background-color: #f6f6f6;
}
.email table tr.read > td {
	font-weight: 400;
}
.email table tr td > i.fa {
	font-size: 1.2em;
	line-height: 1.5em;
	text-align: center;
}
.email table tr > td.action {
	padding-left: 0px;
	padding-right: 2px;
}
.grid {
    position: relative;
    width: 100%;
    background: #fff;
    color: #666666;
    border-radius: 2px;
    margin-bottom: 25px;
    box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
}
.grid .grid-header:after {
    clear: both;
}
.grid .grid-header span,
.grid .grid-header > .fa {
    display: inline-block;
    margin: 0;
    font-weight: 300;
    font-size: 1.5em;
    float: left;
}
.grid .grid-header span {
    padding: 0 5px;
}
.grid .grid-header > .fa {
    padding: 5px 10px 0 0;
}
.grid .grid-header > .grid-tools {
    padding: 4px 10px;
}
.grid .grid-header > .grid-tools a {
    color: #999999;
    padding-left: 10px;
    cursor: pointer;
}
.grid .grid-header > .grid-tools a:hover {
    color: #666666;
}
.grid .grid-body {
    padding: 15px 20px 15px 20px;
    font-size: 0.9em;
    line-height: 1.9em;
}
.grid .full {
    padding: 0 !important;
}
.grid .transparent {
    box-shadow: none !important;
    margin: 0px !important;
    border-radius: 0px !important;
}
.grid.top.black > .grid-header {
    border-top-color: #000000 !important;
}
.grid.bottom.black > .grid-body {
    border-bottom-color: #000000 !important;
}
.grid.no-border > .grid-header {
    border-bottom: 0px !important;
}
.grid.top > .grid-header {
    border-top-width: 4px !important;
    border-top-style: solid !important;
}
.grid.bottom > .grid-body {
    border-bottom-width: 4px !important;
    border-bottom-style: solid !important;
}
	</style>
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
<section class="main-banner" id="top">
<div class="container">
 <div class="row">
	<div class="col-md-12">
		<div class="grid email">
			<div class="grid-body">
				<div class="row">
					<div class="col-md-3">
						<h2 class="grid-title"><i class="fa fa-inbox"></i> Inbox</h2>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-sm-6">
								<label style="margin-right: 8px;" class="">
									<div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="check-all" class="icheck" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
								</label>
							</div>
							<div class="col-md-6 search-form">
	                          <?php echo form_open_multipart("welcome/search1")?>
                                   	<input type="text" placeholder="Search" name="search" class="form-control enjoy-css" />			 
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
					 <div class="row">
					  <?php foreach ($rd as $row): ?>
					   <div class="col-md-12">
						 <div class="padding"></div><br>
						  <div class="table-responsive">
							<table class="table">
								<tbody><tr>
									<td class="action"><input type="checkbox" /></td>
									<td class="name"><?php echo $row->from_email?></td>
									<td class="subject"><?php echo $row->message?> </td>
									<td class="time"><?php echo $row->date?></td>
								</tr>
							</tbody></table>
						</div>						
					</div>
					<?php endforeach; ?>
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