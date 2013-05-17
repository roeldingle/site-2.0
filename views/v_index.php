<!DOCTYPE>
<html>
<head>
	<title><?php echo $aData['title'];?></title>
	<!-- Bootstrap -->
    <link href="css/libs/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/libs/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/libs/animate.css" rel="stylesheet">
	<link href="css/apps/style.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	
</head>
<body style="font-family:Michroma, Tahoma;>

	<!--wrap -->
    <div id="wrap">
    
        <!-- container -->
        <div class="container">
		
            <div class="row-fluid">
                
				<div class="span12" >
					<div class="span12" ></div>
					<div class="span12" >
						<!--web icons -->
						<?php foreach($aData['social'] as $social){ ?>
							<a href="<?php echo $social['link'];?>" target="_blank" >
								<span class="web-icons <?php echo $social['image'];?>"></span>
							</a>
						 <?php } ?>
						<!--end web icons -->
					</div>
				</div>
				<div class="span12" style="text-align:right;">
					<a href="javascript:void(0);" class="menu-list-back" style="text-align:right;display:none">&#172; Menu</a>
				</div>
				
				<!--menu list-->
				<div class="span3" id="menu-content">
					<ul class="nav nav-stacked" id="menu-list">
					  <li class="current"><a href="javascript:void(0);" alt="home" class="active" >HOME</a></li>
					  <li><a href="javascript:void(0);" alt="skills">SKILLS</a></li>
					  <li><a href="javascript:void(0);" alt="works">WORKS</a></li>
					  <li><a href="javascript:void(0);" alt="blog">BLOG</a></li>
					  <li><a href="javascript:void(0);" alt="about" >ABOUT</a></li>
					  <li><a href="javascript:void(0);" alt="contact">CONTACT</a></li>
					</ul>
				</div>
				<!--end menu list-->
				
				<div class="span8" id="real-content">
					
					<!--home-->
					<div class="menu-content" id="home-content">
						<h1>Code</h1>
						<h1>Passion</h1>
						<h1>Fun</h1>
						<br /><br />
						
						<p>Hi there, My name is <strong>Roel M. Dingle</strong> </p>
						<p>a <strong>Filipino</strong> Web Developer based in Manila, Philippines</p>
						<p>I create dynamic and highly efficient <strong>Websites</strong> and Web Based Systems.</p>
					</div>
					<!--end home-->
					
					<!--skills-->
					<div class="menu-content" id="skills-content">
						<h1>Resource</h1>
						<h1>Equipt</h1>
						<h1>Artillery</h1>
						<br /><br />
						
						 <!--loop skills-->
						 <?php foreach($aData['skills'] as $skills){ ?>
							<p>
								<a href="#">
									<strong><?php echo $skills['label'];?></strong>
								</a>
								<span> -> <?php echo $skills['desc'];?></span>
								<img src="images/icon_checked.png"  />
							</p>
						<?php } ?>
					</div>	
					<!--end skills-->
					
					<!--works-->
					<div class="menu-content" id="works-content">
						<h1>Develop</h1>
						<h1>Proud</h1>
						<h1>Create</h1>
						<br /><br />
						<div>
							<p><strong>Mini Apps</strong></p>
							
							<div class="row-fluid">
								<ul class="thumbnails">
								  <?php $iCounter = 0; foreach($aData['works'] as $index=>$works){ ?>
									<?php if($works['category'] === "Mini Apps"){ ?>
										<li class="span3">
											<div class="thumbnail">
											  <img style="width: 180px; height: 200px;" src="images/my_work/<?php echo $works['image2']['src']; ?>" title="<?php echo $works['desc']; ?>" class="mylightbox">
											  <div class="caption">
												<h5><?php echo $works['title']; ?></h5>
											  </div>
											</div>
										</li>
									<?php $iCounter++; } ?>
									
									<?php echo ($iCounter % 4 == 0) ? "</ul><ul class='thumbnails'>": ""; ?>
								  
								 <?php } ?>
								</ul>
						    </div>						
							
							
						</div>
						<div>
							<p><strong>Web Systems</strong></p>
							
							<div class="row-fluid">
								
								<ul class="thumbnails">
								<?php $iCounter = 0; foreach($aData['works'] as $index=>$works){ ?>
									<?php if($works['category'] === "Web Systems"){ ?>
										<li class="span3">
											<div class="thumbnail" >
											  <img style="width: 180px; height: 200px;" src="images/my_work/<?php echo $works['image2']['src']; ?>" title="<?php echo $works['desc']; ?>" class="mylightbox">
											  <div class="caption">
												<h5><?php echo $works['title']; ?></h5>
											  </div>
											</div>
										  </li>
									<?php $iCounter++; } ?>
									
									<?php echo ($iCounter % 4 == 0) ? "</ul><ul class='thumbnails'>": ""; ?>
								  
								 <?php } ?>
								</ul>
						    </div>	
						</div>
						
						<div>
							<p><strong>Uncategories</strong></p>
							
							<div class="row-fluid">
								<ul class="thumbnails">
								<?php $iCounter = 0; foreach($aData['works'] as $index=>$works){ ?>
									<?php if($works['category'] === "Uncategories"){ ?>
										<li class="span3">
											<div class="thumbnail" >
													<img style="width: 180px; height: 200px;" src="images/my_work/<?php echo $works['image2']['src']; ?>" title="<?php echo $works['desc']; ?>" class="mylightbox">
											  <div class="caption">
												<h5><?php echo $works['title']; ?></h5>
											  </div>
											</div>
										  </li>
									<?php $iCounter++; } ?>
									
									<?php echo ($iCounter % 4 == 0) ? "</ul><ul class='thumbnails'>": ""; ?>
								  
								 <?php } ?>
								</ul>
						    </div>	
						</div>
					</div>				
					<!--end works-->
					
					<!--about-->
					<div class="menu-content" id="blog-content">
						<h1>Inform</h1>
						<h1>News</h1>
						<h1>Technology</h1>
						<br /><br />
						<p><img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRWuctFD2av-MaSuYufC202IH-4FUESUDQWD27T-8Oc-sejdtNF" class="img-circle" /></p>
					</div>
					<!--end about-->
					
					<!--about-->
					<div class="menu-content" id="about-content">
						<h1>Portfolio</h1>
						<h1>Site</h1>
						<h1>Reference</h1>
						<br /><br />
						<p>Clean, <strong>Minimalistic</strong> and Simple</p>
						<p>This <strong>Site</strong> tends to give people a piece of my mind.</p>
						<p>Just one of my creation develop during my freetime...My <strong>Fun</strong> time.</p>
					</div>
					<!--end about-->
					
					<!--contact-->
					<div class="menu-content" id="contact-content">
						<h1>Message</h1>
						<h1>Send</h1>
						<h1>E-mail</h1>
						<br /><br />
						
						<form>
						  <fieldset>
							<input type="text" id="name" name="name" class="input-block-level" placeholder="Name">
							<input type="text" id="email" name="email" class="input-block-level" placeholder="Email">
							<textarea rows="3" id="description" name="description" class="input-block-level" placeholder="Description"></textarea>
							<button type="submit" class="btn btn-warning pull-right">Submit</button>
						  </fieldset>
						</form>
					</div>
					<!--end contact-->
					
					
				</div>
				
				<div class="spacer span12" ></div>
				
            </div> <!--/menu-->
   
            <!--header-->
            <div class="row-fluid">
				<div class="span6">
					<a href="<?php echo $aData['resume-dl-url']; ?>" target="_black" >Download My Resume (pdf)</a>
				</div>
				<div class="span6" id="header" style="text-align:right;">
				
					<a href="javascript:location.reload();" ><h1><?php echo $aData['title']; ?></h1></a>
					<h3 alt="<?php echo $aData['sub-header']; ?>" ></h3>
					
				</div>
				<div class="spacer span12" ></div>
            </div> <!--/header-->
			
			
		</div><!--end container -->
	</div><!--end wrap -->
	
	<script  src="js/libs/jquery.min.js" type="text/javascript"></script>
	<script src="js/libs/jquery.shuffleLetters.js" type="text/javascript"></script>
	<script src="js/apps/index.js" type="text/javascript"></script>

	<div id="preloader">
		<div id="status" style="text-align:center">Loading</div>
		
	</div>
</body>
</html>