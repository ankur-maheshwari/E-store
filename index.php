<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>E-Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/css.css" type="text/css">

    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <h1>E-store welcomes you</h1>
                    <h3>to the fresh arrival of unlimited fun and guaranteed valuable price</h3>
                    <h2>Join us and get your iphone at lowest price<br>Right here!</h2>
                    <a class="btn btn-success" href="login.php">Shop now!</a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <img src="img/s6.jpg" style="max-height: 600px;max-width: 500px">
                </div>
            </div>
            
            <div class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <br>
                    <img src="img/sale4.png" style="width:100% ">
                </div>
                 
            </div>
        </div>
        <br>
        <div class="container">
            <p  style="font-size:40px;text-align: center;color:#707070;text-decoration: underline double;">Popular Views on Apple</p>
            <div class="row">
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 style="text-decoration: underline grey;">On Apple future and competitors </h1>
                    <h3>This Tidal/Apple beef is fucking up the music game.</h3>
                    <h4 style="color: grey">Kanye West opening salvo in a tweetstorm, in which the singer attempted to goad Apple into buying JayZ Tidal music service. </h4>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 style="text-decoration: underline grey;">On courage and killing jacks </h1>
                    <h3> The courage to move on and do something new that betters all of us.</h3>
                    <h4 style="color: grey">Phil Schiller, Apple senior vice president of worldwide marketing, gives a much-ridiculed reason for dropping the headphone jack in the iPhone 7.</h4>
                </div>
            </div>
            <hr><hr>
            <div class="row">
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 style="text-decoration: underline grey;">On Apple security and international affairs</h1>
                    <h3>We are sympathetic with Apple on this one. We believe in encryption.</h3>
                    <h4 style="color: grey">Mark Zuckerberg, CEO of Facebook, offers support for Apple in its fight with the FBI.</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 style="text-decoration: underline grey;">On Apple core values</h1>
                    <h3>The store is now the biggest product we produce.</h3>
                    <h4 style="color: grey">Most important, have the courage to follow your heart and intuition. Remembering Steve and the many ways he changed our world.</h4>
                </div>
            </div>
        </div>
        
        <div class="container-fluid"><br><br><br><br>
			<div class="row">
                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 1</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/1.jpg">
                                        <div class="caption">
											<p>Apple iPhone X 64GB. Rs.70,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 2</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/2.jpg">
                                        <div class="caption">
											<p>Apple iPhone XS 64 GB. Rs.88,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                         <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 3</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/3.jpg">
                                        <div class="caption">
											<p>Apple iPhone XR 64 GB. Rs.53,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
                    </div>
				</div>
					
				<div class="container-fluid">
					<div class="row">
                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 4</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/4.jpg">
                                        <div class="caption">
											<p>Apple iPhone 11 64 GB. Rs.70,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 5</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/5.jpg">
                                        <div class="caption">
											<p>Apple iPhone 11 Pro 64 GB. Rs.1,10,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 6</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/6.jpg">
                                        <div class="caption">
											<p>Apple iPhone 11 Pro Max 64 GB. Rs.1,30,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
						
                    </div>
				</div>
                
        
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
