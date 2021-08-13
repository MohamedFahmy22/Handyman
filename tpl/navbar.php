
    <header class="row" id="header">
        <div class="row m0 header_top">
            <div class="container">
                <div class="row">
                    <div class="logo_part col-md-3">
                        <a href="index.php" class="logo">
                            <div class="media">
                                <div class="media-left">
                                    <img src="images/header/logo.png" alt="logo image">
                                </div>
                                <div class="media-body media-middle">
                                    <h3>HANDYMAN</h3>
                                    <h4>&amp; REPAIRING</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="contact_info col-md-9 col-lg-7">
                        <!-- <div class="c_info service_time">
                        <div class="row">
                            <div class="line_1">Mon - Sat 9.00 - 19.00</div>
                            <div class="line_2">Sunday Closed</div>
                        </div>
                    </div> -->
                        <div class="c_info tel_email">
                            <div class="row">
                                <div class="line_1"><a href="tel:+02-01022554417">+20-1022554417</a></div>
                                <div class="line_2"><a href="onehand10@handyman.com">onehand10@handyman.com</a></div>
                            </div>
                        </div>
                        <div class="c_info location">
                            <div class="row">
                                <div class="line_1"> 254 El3kkad street </div>
                                <div class="line_2">Egypt - Nasr city</div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-static-top" id="main_navbar">
            <div class="container p0">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse smooth_scroll" id="main_nav">
                    <ul class="nav navbar-nav">
                        <li><a href="#header">Home</a></li>
                        <li><a href="#services">services</a></li>
                        <li><a href="#whyus">why us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li  <?php if(!isset($_SESSION['login_user'])){?>style="display: none;"<?php } ?> >
                          <a href="profile.php?id=<?php echo $_SESSION['userID']; ?>">
                            <?php echo $_SESSION['user'] ?>
                          </a>
                          <span class="symbol-input100" style="padding:7%;">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </span>
                        </li>

                        <li  <?php if(!isset($_SESSION['login_user'])){?>style="display: none;"<?php } ?> ><a href="func/logout.php">LOGOUT</a></li>

                        <li  <?php if(isset($_SESSION['login_user'])){?>style="display: none;"<?php } ?> >
                          <a  href="login.php">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 ">LOGIN</span>
                          </a>
                        </li>
                        <li class="nav-item dropdown no-arrow"  <?php if(isset($_SESSION['login_user'])){?>style="display: none;"<?php } ?> >
                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 ">Registration</span>
                          </a>
                          <!-- Dropdown - User Information -->
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="worker/register.php" >
                              As Worker</a>
                              <a class="dropdown-item" href="signup.php" >
                              As User</a>
                          </div>
                        </li>




                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="search-form"><i class="icon icon-Search"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form action="#" method="get" class="search-form">
                                        <input type="search" class="form-control" placeholder="Type and Enter">
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


    </header>
