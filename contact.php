<?php
  session_start();
  include 'tpl/header.php';
  include 'tpl/navbar.php';
?>
<section class="row touch">
        <div class="sectpad touch_bg">
            <div class="container">
                <div class="row m0 touch_top">
                    <ul class="nav">
                        <li class="item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <i class="fa fa-map-marker"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    254 El3kkad street <br> Egypt - Nasr city
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <i class="fa fa-envelope-o"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    info@handyman&amp;repairing.com <br> support@handyman&amp;repairing.com
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <i class="fa fa-phone"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    +020-1022-554-417 <br> +020-1206-414-515
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row touch_middle">
                    <div class="col-md-8 input_form">
                        <form action="http://galaxyanalytics.net/demos/handyman/contact_process.php" method="post" id="contactForm">
                            <input type="text" class="form-control" id="name" name="name" placeholder="First">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-default">Submit Now<i class="fa fa-angle-double-right"></i></button>
                        </form>
                        <div id="success">
                            <p>Your message sent successfully.</p>
                        </div>
                        <div id="error">
                            <p>Something is wrong. Message cant be sent!</p>
                        </div>
                    </div>
                    <!-- <div class="col-md-4 open_hours">
                    <div class="hours">
                        <h2>Opening Hours</h2>
                        <ul class="nav">
                            <li>monday<span>8:00-16:00</span></li>
                            <li>tuesday<span>8:00-16:00</span></li>
                            <li>wednesday<span>8:00-16:00</span></li>
                            <li>thursday<span>8:00-16:00</span></li>
                            <li>friday<span>8:00-16:00</span></li>
                            <li>saturday<span>8:00-16:00</span></li>
                            <li>sunday<span>closed</span></li>
                        </ul>
                    </div>
                </div> -->
                </div>

                <!--MapBox-->
                <!-- <div id="mapBox" class="row m0" data-lat="37.3818288" data-lon="-122.0636325" data-zoom="15"></div> -->
            </div>
        </div>
    </section>

     <?php
       include 'tpl/footer.php';
     ?>
