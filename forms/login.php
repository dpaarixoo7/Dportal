<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>  Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"  href="css/forms.css">
    <link rel="stylesheet" type="text/css"  href="css/green.css">    
    <link rel="stylesheet" type="text/css"  href="css/font-awesome.min.css">
    

    <!--[if lte IE 9]>
    	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>    
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
    <![endif]-->    
    
    <!--[if lte IE 8]>
        <link type="text/css" rel="stylesheet" href="css/smart-forms-ie8.css">
    <![endif]-->
       
</head>

<body >

	<div class="smart-wrap">
    	<div class="smart-forms smart-container wrap-3">
        
        	<div class="form-header header-green">
            	<h4><i class="fa fa-sign-in"></i>Login</h4>
          </div><!-- end .form-header section -->
            
            <form method="post" action="/" id="contact">
            	<div class="form-body theme-green">
                                 
                
       
                    
                    <div class="section">
                        <label for="username" class="field prepend-icon">
                            <input type="text" name="username" id="username" class="gui-input" placeholder="Enter Registration No.">
                            <label for="username" class="field-icon"><i class="fa fa-user"></i></label>  
                        </label>
                    </div><!-- end section -->                    
                    
                	<div class="section">
                    	<label for="password" class="field prepend-icon">
                        	<input type="text" name="password" id="password" class="gui-input" placeholder="Enter password">
                            <label for="password" class="field-icon"><i class="fa fa-lock"></i></label>  
                        </label>
                    </div><!-- end section -->  
                    
                	<div class="section">
                        <label class="switch switch-green block">
                            <input type="checkbox" name="remember" id="remember" checked>
                            <label for="remember" data-on="YES" data-off="NO"></label> 
                            <span> Keep me logged in ?</span>
                        </label>
                    </div><!-- end section -->                                                           
                    
                </div><!-- end .form-body section -->
                <div class="form-footer">
                	<button type="submit" class="button btn-green">Sign in</button>
                </div><!-- end .form-footer section -->
            </form>
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->
    
    <div></div><!-- end section -->

</body>
</html>
