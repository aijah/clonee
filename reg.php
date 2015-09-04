<html>
    <?php
    if (isset($_POST['reg'])) {
        require "connect.php";
        if (isset($_POST['user_name']) && isset($_POST['user_password'])) {
            $username = strip_tags($_POST['user_name']);
             $lastname = strip_tags($_POST['last_name']);
                $email = strip_tags($_POST['user_email']);
            $password = md5(strip_tags($_POST['user_password']));
         

            /* This insert command for username, password and email. if you need any other field you can insert it here */
            mysql_query("INSERT INTO `customers`.`users`(user_name,last_name,user_email,user_password) VALUES ('$username','$lastname','$email','$password')") or die("" . mysql_error());
            //Here you can write conformation or success message or use any redirect
            echo "Register success";
        }
    } 
    ?>
    <head>
        <title>Charity Center</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cape Kidney Association">
        <meta name="author" content="Group 3">
        <title>Donations: Cape Kidney Association</title>
        <link rel="favicon" href="images/favicon.png">
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top headroom" >
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="index.html"><img style="position:absolute; top:15px;" src="images/logo.png" alt="logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="index.php">home</a></li>
                        <li><a href="about.php">about</a></li>
                        <li><a href="kidney.html">kidney disease</a></li>
                        <li><a href="events.html">events</a></li>
                        <li><a href="gallery.html">gallery</a></li>
                        <li><a href="blog.html">blog</a></li>
                        <li> <a href="donations.html">Donations</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="#">Dummy Link1</a></li>
                                <li><a href="#">Dummy Link2</a></li>
                                <li><a href="#">Dummy Link3</a></li>
                            </ul>
                        </li>

                        <li><a href="register.php">register</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
        <!-- /.navbar -->

        <header id="head" class="secondary"></header>

        <!-- container -->
        <div class="container">

            <div class="row">

                <!-- Article main content -->
                <article class="col-sm-9 maincontent">
                    <header class="page-header">
                        <h1 class="page-title">Contact us</h1>
                    </header>

                    <p>
                        register with us.
                    </p>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="reg.php" name="Register Form" method="post">
                            <div class="top-margin">
                                <label>First Name</label>
                                <input type="text" name="user_name" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Email Address <span class="text-danger">*</span></label>
                                <input type="email" name="user_email" class="form-control">
                            </div>

                            <div class="row top-margin">
                                <div class="col-sm-6">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input type="password" name="user_password" class="form-control">
                                </div>

                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-8">
                                    <label class="checkbox">
                                        <input type="checkbox"> 
                                        I've read the <a href="page_terms.html">Terms and Conditions</a>
                                    </label>                        
                                </div>
                                <div class="col-lg-4 text-right">
                                    <input name="reg" type="submit" value="Register" class="btn btn-primary" />
                                </div>
                            </div>
                        </form>


                    </div>
            </div>

            <footer id="footer" class="top-space">

                <div class="footer1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 panel">
                                <h3 class="panel-title">Latest News</h3>
                                <div class="panel-body">
                                    <p>The Cape Kidney Association this year was invited to exhibit at the World Congress of Nephrology that was held for the first time in South Africa at the CTICC with approximately 3000 medical specialists attending the congress.
                                        At the congress our Executive Fund Manager, Molly Fabe was appointed as the ambassador for South Africa. We also had our first international booklet about the company published by our interns Sisonke and Pumela and it was distributed to every delegate during the congress.</p> 
                                </div>
                            </div>

                            <div class="col-md-4 panel contact"> 
                                <h3 class="panel-title">Contact Info</h4>
                                    <div class="panel-body">
                                        <p>The Cape Kidney Association is managed by Molly Fabe, Executive Manager, and assisted by Vanessa Hallet, Office Administrator.</p>
                                        <ul>
                                            <li><i class="fa fa-phone"></i>021 761 1326</li>
                                            <li><a href="mailto:capekidney@xsinet.co.za"><i class="fa fa-envelope-o"></i> capekidney@xsinet.co.za</a></li>
                                            <li><i class="fa fa-flag"></i>17 Torrens Road Golf Link Estate Wynberg 7800</li>
                                        </ul> 
                                    </div>
                            </div>

                            <div class="col-md-3 panel">
                                <h3 class="panel-title">Follow Us</h3>
                                <div class="panel-body">
                                    <p class="follow-me-icons">
                                        <a href=""><i class="fa fa-twitter fa-2"></i></a>


                                        <a href="https://www.facebook.com/CapeKidneyAssociation?fref=ts"><i class="fa fa-facebook fa-2"></i></a>

                                    </p>	
                                </div>
                            </div>

                        </div> <!-- /row of panels -->
                    </div>
                </div>
                <div class="footer2">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6 panel">
                                <div class="panel-body">
                                    <p class="simplenav">
                                        <a href="index.html">home</a> | <a href="about.html">about</a> | <a href="kidney.html">kidney</a> | <a href="events.html">gallery</a> | <a href="index.html">gallery</a> </p>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 panel">
                                <div class="panel-body">
                                    <p class="text-right">
                                        <a href="index2.html"><img src="img/images/f.png" alt="" width="100" height="25" /></a>                                                                                                                                                                                                                                                                                                                                                                                                                                  
                                        <a href="index2.html"><img src="img/images/g.png" alt="" width="100" height="25" /></a>                         
                                        <a href="index2.html"><img src="img/images/l.jpg" alt="" width="130" height="25" /></a>                        
                                        <a href="index2.html"><img src="img/images/m.png" alt="" width="100" height="25" /></a>               

                                    </p>
                                </div>

                            </div> <!-- /row of panels -->
                        </div>
                    </div>
                </div>

            </footer>	




            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
            <script src="js/headroom.min.js"></script>
            <script src="js/jQuery.headroom.min.js"></script>
            <script src="js/custom.js"></script>
    </body>
</html>