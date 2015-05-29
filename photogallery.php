<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GURDWARA GURU NANAK DARBAR</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" />
   
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <link href="css/bootstrap-lightbox.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" type="text/css" href="includes/slideshow/demo.css" />
		<link rel="stylesheet" type="text/css" href="includes/slideshow/style.css" />
		<link rel="stylesheet" type="text/css" href="includes/slideshow/elastislide.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
	
			<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
	
</head>

<body>

    <!-- Navigation -->
        <nav style="margin-top:4%; "class="navbar navbar-inverse container" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">GURDWARA GURU NANAK DARBAR</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  
					  <li>
                        <a href="howtoreach.html">How to Reach</a>
                    </li>
                 <li>
                                <a href="photogallery.php">Photo Gallery</a>
                            </li>
							   <li>
                                <a href="portfolio-3-col.html">Video Gallery</a>
                            </li>
							  <li>
                        <a href="event.php">Events</a>
                    </li>
							  <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
            
					
					       <li>
                             <a href="faq.html">FAQ</a>
                    </li>
            
  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h3 style="color:red" class="page-header">Photo Albums <i class="fa fa-camera"></i>
                    
                </h3>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Photo Gallery</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
		        <div class="row">
            <div class="col-lg-12">
           
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"> Kaarsewa</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"> Diwali</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab">Kirtan</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"> Nisaan Sahib Sewa</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        
                        		
		
<div class="container">
  <h2>Kaarsewa Photos</h2>
  <p>Kaarsewa of Surrounding Area of Gurunanak Darbar  2014:</p>            
		<div class="container">
		
			
			<div class="content">

				<div id="rg-gallery" class="rg-gallery">
				
							<?php 
mysql_connect("localhost","root","198017rms");
mysql_select_db("rudraveer"); 
$query=mysql_query("select  from slideshow ");
while($run= mysql_fetch_array($query)){
$id= $run['id'];
$url= $run['url'];
$description= $run['description'];



?>
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
						

						<ul>
			
									<li><a href="#"><img src="includes/slideshow/images/thumbs/<?php echo $url ?>" data-large="images/<?php echo $url ?>" alt="image01"  data-description="<?php echo $description ?>"/></a></li>
						</ul>
						</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
					
					

	
				</div><!-- rg-gallery -->

											<?php 
						}

?>
				</div><!-- content -->
		</div><!-- container -->
</div>
        <!-- /.row -->




        <hr>   </div>
                    <div class="tab-pane fade" id="service-two">
                      
                  		
		
  		
<div class="container">
  <h2>Diwali Photos</h2>
  <p>Bandi shor divas 2014:</p> <div class="row">
    <div class="col-md-3">
      <a  class="thumbnail">
         
        <img class= "img-circle" src="images/diwali/di1.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-3">
      <a  class="thumbnail">
       
        <img  class= "img-circle" src="images/diwali/d2.jpg"alt="Moustiers Sainte Marie" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-3">
      <a  class="thumbnail">
          
        <img  class= "img-circle" src="images/diwali/d3.jpg" alt="Cinque Terre" style="width:150px;height:150px">
      </a>
    </div>
	    <div class="col-md-3 img-circle">
      <a  class="thumbnail ">
       
        <img  class= "img-circle" src="images/karseWa/kar2.jpg"alt="Moustiers Sainte Marie" style="width:150px;height:150px">
      </a>
    </div>
  </div>
</div>
        <!-- /.row -->


        <hr>       </div>
                    <div class="tab-pane fade" id="service-three">
                       
                        		
		
		
<div class="container">
  <h2>Kiratn Photos</h2>
  <p>Hajuri raagi bhai harbans singh ji kirtan 2014:</p> <div class="row">
    <div class="col-md-3">
      <a  class="thumbnail">
         
        <img class= "img-circle" src="images/kirtan/kr1.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-3">
      <a  class="thumbnail">
       
        <img  class= "img-circle" src="images/kirtan/kir.jpg"alt="Moustiers Sainte Marie" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-3">
      <a  class="thumbnail">
          
        <img  class= "img-circle" src="images/kirtan/kr3.jpg" alt="Cinque Terre" style="width:150px;height:150px">
      </a>
    </div>
	    <div class="col-md-3 img-circle">
      <a  class="thumbnail ">
       
        <img  class= "img-circle" src="images/kirtan/kr2.jpg"alt="Moustiers Sainte Marie" style="width:150px;height:150px">
      </a>
    </div>
  </div>
</div>
        <!-- /.row -->


        <hr>     </div>
                    <div class="tab-pane fade" id="service-four">
                        
                  		
				
<div class="container">
  <h2>Nishaan Sahib Sewa Photos</h2>
  <p>Nishaan Sahib Sewa 2014:</p> <div class="row">
    <div class="col-md-3">
      <a  class="thumbnail">
         
        <img class= "img-circle" src="images/nishaan/n1.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-3">
      <a  class="thumbnail">
       
        <img  class= "img-circle" src="images/nishaan/n2.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-3">
      <a  class="thumbnail">
          
        <img  class= "img-circle" src="images/nishaan/n3.jpg" alt="Cinque Terre" style="width:150px;height:150px">
      </a>
    </div>
	    <div class="col-md-3 img-circle">
      <a  class="thumbnail ">
       
        <img  class= "img-circle" src="images/karseWa/kar4.jpg"alt="Moustiers Sainte Marie" style="width:150px;height:150px">
      </a>
    </div>
  </div>
</div>
        <!-- /.row -->


        <hr>       </div>
                </div>

            </div>
        </div>
		
		
		
		
		
		
		
		


        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; gurunanakdarbar.ie 2015</p>
                </div>
            </div>
        </footer>

    </div>
	
  <div     class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div  class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      
      </div>
      <div class="modal-body">
        <img  src="" class="imagepreview"  >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	
        <div class="row">
            <div class="col-md-8">
                <h3>You are logged in as ..</h3>
				
                <form  method="post" enctype="multipart/form-data" id="contactForm" novalidate>
				<?php
mysql_connect("localhost","root","198017rms");
mysql_select_db("rudraveer"); ?>
<?php
	if (isset($_POST['Upload'])){
$name=$_POST['name'];
$area=$_POST['area'];
$users=$_POST['userslogged'];
$file=$_FILES['file']['name'];
$file_type=$_FILES['file']['type'];
$file_size=$_FILES['file']['size'];
$file_tmp=$_FILES['file']['tmp_name'];
$random_name=rand();
		if(empty($name) or empty($file)){
			echo "Please fill all the fields";
		}
	else{
		move_uploaded_file($file_tmp,'includes/slideshow/images/'.$random_name.'.jpg');
		
	 mysql_query("insert into gurudwarafoto values('','$name','','$random_name.jpg','$area','$users')");
		echo "File Uploaded<br/><br/>";

		}
	echo "<script>window.open('donorthanks.php','_self')</script>";
	}


 ?>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Please enter your item name:</label>
                            <input type="text" class="form-control"  name="name" id="name" placeholder="enter item name"  required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
	
					    <div class="control-group form-group">
                        <div class="controls">
                            <label>Please enter your item name:</label>
							
							<select name="area">
<?php

$query = mysql_query("select * from area");
while($run = mysql_fetch_array($query)){

$area_name = $run['area'];
echo "<option value='$area_name'>$area_name</option>";
}
?>.


</select>
 <p class="help-block"></p>
                        </div>
                    </div>
					

				
              
				  <div class="control-group form-group">
                        <div class="controls">
					<label>select Photo :</label>
<input class="btn btn-primary" type="file" name="file" /> 

                     </div>
                    </div>
					
					
                    <div id="success"></div>
                 
                    <input type="submit" name="Upload" value="Upload" class="btn btn-primary" />
				
                </form>
            </div>

        </div>

    <!-- /.container -->
						<?php	
						include("includes/connect.php");




$query22=mysql_query("select  from slideshow");
while($run= mysql_fetch_array($query22)){

$url= $run['url'];

	 ?>
<div class="container">


								 <img src="includes/slideshow/images/thumbs/<?php echo $url ?>"  data-large="images/<?php echo $url ?>" >
								 
			<?php }  ?>		
			</div>
			
			
			
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    
  <script src="js/bootstrap-lightbox.js"></script>
	<script>
$(".img-circle").on("click", function() {
   $('.imagepreview').attr('src', $(this).attr('src'));
   $('#imagemodal').modal('show');
   
});</script>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="includes/slideshow/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="includes/slideshow/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="includes/slideshow/jquery.elastislide.js"></script>
		<script type="text/javascript" src="includes/slideshow/gallery.js"></script>

</body>

</html>
