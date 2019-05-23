<!DOCTYPE html>
<html lang="en">


<body>
	<?php include_once 'includes/header.php'; ?>
    <!-- header-section-->
    
    <!-- /. header-section-->
    <!-- page-header -->
    <div class="page-header" Style="background-image:url(./images/slider_1.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title">Contact</h1>
                        <p class="mb40">Curabitur et neque arcuullam sem doloriaculis sitamet orci utrum fringilla erat.</P>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Contact</li>
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
                <div class="col-lg-4 col-lg-4 col-sm-4 col-xs-12 mb60">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                            
                                        </div>
                    <h2>Drop Me a Message. I Am Eager To hear From You</h2>
                    <p>Contact me about anything, reviews, suggestions, observations and JOB OFFERS. I am always open and I would reply very soon.</p>
                </div>
                <div class="col-lg-8 col-lg-8 col-sm-8 col-xs-12">
                    <div class="box bg-light">
                        <h5 class="export-form-title">Fill The Below Form</h5>
                        <form method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopr">
                                    <div class="form-group">
                                        <label class="control-label sr-only "></label>
                                        <input id="name" name="fullName" type="text" placeholder="Name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopl">
                                    <div class="form-group">
                                        <label class="control-label sr-only"></label>
                                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopr">
                                    <div class="form-group">
                                        <label class="control-label sr-only "></label>
                                        <input id="phone" name="phone" type="tel" placeholder="Phone" onchange="verify()" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopl">
                                    <div class="form-group">
                                        <label class="control-label sr-only "></label>
                                        <input id="subject" name="subject" type="text" placeholder="subject" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only"></label>
                                        <textarea style="resize:none" class="form-control" name="message" id="message" name="message" rows="4" placeholder="Messages"></textarea>
                                    </div>
                                    <button type="button"  onclick="pus()" name="submit" class="btn btn-default btn-block ">Submit</button>
                                </div>
                                <!-- /.form-section -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="feature-left">
                        <div class="feature-icon">
                            <i class=" icon-speech-bubble-1"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Free Advice</h4>
                            <p>Expert guidance on personal finance questions for free. Yes, really.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="feature-left">
                        <div class="feature-icon">
                            <i class="icon-padlock-1"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Safe & Secure</h4>
                            <p>It's anonymous – and we never share your information without your permission.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="feature-left">
                        <div class="feature-icon">
                            <i class="icon-group"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Answers You Can Trust</h4>
                            <p>Our curated network of financial experts can help you with all of life’s financial decisions.</p>
                        </div>
                    </div>
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
    	function pus() {
    		var name;
    		var email;
    		var phone;
    		var subject;
    		var message;

    		$(document).ready(function(){
    			name = $('#name').val() ;
    			email = $('#email').val() ;
    			phone = $('#phone').val() ;
    			subject = $('#subject').val() ;
    			message = $('#message').val() ;

    			$.ajax({
    					type : "POST",
    					url : "include/send_message.php",
    					data : {
    						name : name,
    						email : email,
    						phone : phone,
    						subject : subject,
    						message : message
    					},
    					success: function(response)
			            {
			            	var message = $('.contact__msg');
			            	message.text(response);
			            	 message.fadeIn().removeClass('alert-success').addClass('alert-success');
			            }
    				});
    		});
    	}



    	function pu()
    	{
    		Push.create("Hello world!", {
			    body: "How's it hangin'?",
			    icon: 'images/favicon.png',
			    timeout: 4000,
			    onClick: function () {
			        window.focus();
			        this.close();
			    }
			});
    	}

    	function verify() {
    		var inp = document.getElementById("phone");
    		var inputValue = inp.value;
    		if (isNaN(inputValue)) {
    			alert("Please Enter Mobile Number Only");
    			inp.value = "";
    		}
    	}
    </script>


</body>

</html>