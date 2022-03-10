<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    
    <title>Eassaytown</title>
</head>
<body>
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
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Log In</h1>
                   <p >You don't have a password? Then please <a class="white" href="sign-up.html">Sign Up</a></p> 
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form id="logInForm" data-toggle="validator" data-focus="false" action="logg" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control-input" placeholder="Email" id="lemail"name="email" required>
                                
                                <div class="help-block with-errors">
                                    @if(Session::get('email'))
                                    <br> 	
                                 <p style="color:red;">   {{Session::get('email')}}  </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" placeholder="Password" id="lpassword" name="password" required>
                                
                                <div class="help-block with-errors">
                                    @if(Session::get('login'))
                                    <br> 	
                                 <p style="color:red;">   {{Session::get('login')}}  </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">LOG IN</button>
                                
                            </div>
                            <div class="form-message">
                                <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> 
                </div> 
            </div> 
        </div> 
    </header> 


<script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->

</body>
</html>