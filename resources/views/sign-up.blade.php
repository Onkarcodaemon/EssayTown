<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  
   

  
    <title>Sign Up - EssayTown</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    
	<link href="{{asset('css/styles.css')}}" rel="stylesheet">
	<script type="text/javascript" src="{{URL::asset('assets/js/index.js')}}"></script>
	
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
  
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">HOME </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Subject</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">Search results</a>
                    </li>


                    
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="log-in.html">LOG IN</a>
                </span>
            </div>
        </div> 
    </nav> 
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Sign Up</h1>
                   <p>Fill out the form below to sign up for EssayTown. Already signed up? Then just <a class="white" href="log-in.html">Log In</a></p> 
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form id="signUpForm" data-toggle="validator" data-focus="false" action="sign" method="post">
                            @csrf
                            
                            <div class="form-group">
                                
                                <input type="email" class="form-control-input" id="semail" name="email" placeholder="Enter Email" required>
                                
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="sname" name="name" placeholder="Enter Your Name" required>
                                
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" id="spassword" name="password" placeholder="Enter Password" required>
                                
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="message-el" id="sterms" value="Agreed-to-Terms" required>I agree with EssayTown <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" onclick="startGame()"  class="form-control-submit-button">SIGN UP</button>
                            </div>
                            <div class="form-message">
                                <div id="smsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> 

                </div> 
            </div> 
        </div> 
    </header> 


    <!-- Scripts -->
   
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    
</body>
</html>