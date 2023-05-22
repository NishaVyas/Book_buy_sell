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
							<input type="text" placeholder="Search" class="form-control enjoy-css" />
						</div>
						 </li>
                          <li><a href="<?php echo base_url().'index.php/welcome/dashboard'?>" class="active">Home</a></li>
                          <li><a href="<?php echo base_url().'index.php/welcome/dashboard'?>">Upload</a></li>
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
	
  </style>
  <!--Section: Content-->
  <section class="text-center dark-grey-text mb-5">
    <div class="card border-primary">
      <div class="card-body rounded-top border-top p-3">
        <!-- Section heading -->
        <h3 class="font-weight-bold my-4">Edit Book</h3>
         <?php
		 foreach($rd as $row){
		 echo form_open_multipart("welcome/update/".$row->sn);
		?>
		<div class="row">
            <div class="col-md-6 mb-4">
				<?php
					$attr=array("type"=>"text","name"=>"name","class"=>"form-control","placeholder"=>"Name","value"=>$row->name);
					echo form_input($attr);
				?>
		     </div>
			<div class="col-md-6 mb-4">
				<?php
				$attr=array("type"=>"text","name"=>"author","class"=>"form-control","placeholder"=>"Author Name","value"=>$row->author);
				echo form_input($attr);
				?>
			</div>
		</div>
		<div class="row">
            <div class="col-md-6 mb-4">
				<?php
					$attr=array("type"=>"text","name"=>"price","class"=>"form-control","placeholder"=>"Price","value"=>$row->price);
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
				  $attr=array("type"=>"text","name"=>"description","class"=>"form-control","Placeholder"=>"Description","value"=>$row->description);
					echo form_input($attr);
				  ?>
			 </div>
			</div>
	  </div>
		
		<?php
		  echo form_submit("submit","submit","class='btn btn-primary'");
				echo form_close();
		 }
		 ?>
      </div>
    </div>
  </section>
</div>
