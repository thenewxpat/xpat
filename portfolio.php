<!DOCTYPE html>
<html lang="en">


<body onload="load()">
	<?php include_once 'includes/header.php'; ?>
    <!-- header-section-->
    
    <!-- /. header-section-->
    <!-- page-header -->
    <div class="page-header" Style="background-image:url(./images/slider_1.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title">Portolio</h1>
                        <p class="mb40">All things bright and beautiful are created by God. Mine might be a litle ugly, please drop me a review.</P>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Portolio</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- contact us -->
    <div class="content">
        <div class="container">
        	<div class="row">
        		<div class="col-xs-12">
                    <h2>The Results of The Code All Day!!!</h2>
                    <p>Please Send Your Reviews And Opinions <a class="lead text-mute" href="contact.php">Here</a>.</p>
                </div>
            </div>
            <div class="row">
                <div id="resultNI">
                </div>
            </div>
            
        </div>
    </div>
        

    <!-- /.contact us -->
   <!-- footer -->
   <div class="footer">
        <!-- tiny-footer -->
        <div class="container">
            <div class="row">
                <div class="tiny-footer">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Copyright © All Rights Reserved <script> document.write(new Date().getFullYear())</script> - Tijani Mustapha Adekunle
                           </p>
                    </div>
                </div>
            </div>
            <!-- /. tiny-footer -->
        </div>
    </div>
    <!-- /.footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script type="text/javascript" src="js/push.min.js"></script>
    <script type="text/javascript" src="js/serviceWorker.min.js"></script>
    
    
    <script>
		function load(){

			$.ajax({
					type : "POST",
					url : "includes/fetch_portfolio.php",
					data : {
						name : "name"
					},
					success: function(response)
		            {
		            	console.log(response);
		            	alert(response);
		            	$('#resultNI').innerHTML = "<p>hdhd</p>";
		            }
				});
		}
    	
    </script>


</body>

</html>