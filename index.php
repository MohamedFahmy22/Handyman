<?php
    session_start();
    include 'tpl/header.php';
    include 'tpl/navbar.php';
    include 'tpl/slider.php';
?>
        <section class="row service_slide" id="about_us">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>

    <section class="row sectpad we_do" id="services">
        <div class="container">

            <div class="row tab">
                <ul class="nav nav-tabs menu" role="tablist">
                    <li role="presentation" class="active"><a href="#electrician" aria-controls="roofing" role="tab" data-toggle="tab"><span>Electricity</span></a></li>
                    <li role="presentation"><a href="#renovation" aria-controls="renovation" role="tab" data-toggle="tab"><span>Construction</span></a></li>
                    <li role="presentation"><a href="#carpentery" aria-controls="carpentery" role="tab" data-toggle="tab"><span>Carpentery</span></a></li>
                    <li role="presentation"><a href="#painting" aria-controls="painting" role="tab" data-toggle="tab"><span>Painting</span></a></li>
                    <li role="presentation"><a href="#plumbing" aria-controls="plumbing" role="tab" data-toggle="tab"><span>Plumbing </span></a></li>
                    <li role="presentation"><a href="#electrician" aria-controls="electrician" role="tab" data-toggle="tab"><span>Marbling</span></a></li>
                    <li role="presentation"><a href="#doors" aria-controls="doors" role="tab" data-toggle="tab"><span>Cementer</span></a></li>
                    <li role="presentation"><a href="services.php"><span>More</span></a></li>

                </ul>
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="roofing">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/we_do/electrical.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Electrician</h4>
                                <p>An electrician is a tradesman specializing in electrical wiring of buildings, transmission
                                    lines, stationary machines, and related equipment. Electricians may be employed in the
                                    installation of new electrical components or the maintenance and repair of existing electrical
                                    infrastructure.Electricians may also specialize in wiring ships, airplanes, and other
                                    mobile platforms, as well as data and cable lines.</p>
                                <p>Service electricians are tasked to respond to requests for isolated repairs and upgrades.
                                    They have skills troubleshooting wiring problems, installing wiring in existing buildings,
                                    and making repairs. Construction electricians primarily focus on larger projects</p>
                                <ul class="nav nav-tabs menu" role="tablist">
                                    <li role="presentation"><a href="workeres.php?id=2" aria-controls="roofing"><span>Hire Worker</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="renovation">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/we_do/construction.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Construction </h4>
                                <p>A construction is part of a crew of laborers who perform a broad range of tasks on job sites.
                                    Tasks range in difficulty from relatively easy to potentially hazardous, and may include
                                    include preparing construction sites for new projects by removing debris from the area,
                                    backfilling holes, and, when necessary, digging trenches. Once a project is underway,
                                    construction workers build scaffolding, barricades, bracing, and other temporary structures.
                                    Following construction and completion, they take apart these structures as they are no
                                    longer needed. Construction workers operate and maintain equipment and machines, like
                                    concrete mixers, jackhammers, saws, drills, and more.</p>
                                <ul class="nav nav-tabs menu" role="tablist">
                                    <li role="presentation"><a href="workeres.php?id=3" aria-controls="roofing"><span>Hire Worker</span></a></li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="carpentery">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/we_do/carpentery2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Carpentery</h4>
                                <p>Carpentry is a skilled trade and a craft in which the primary work performed is the cutting,
                                    shaping and installation of building materials during the construction of buildings,
                                    ships, timber bridges, concrete formwork, etc. Carpenters traditionally worked with natural
                                    wood and did the rougher work such as framing, but today many other materials are also
                                    used and sometimes the finer trades of cabinetmaking and furniture building are considered
                                    carpentry. In the United States, 98.5% of carpenters are male</p>
                                <p>Carpentry requires training which involves both acquiring knowledge and physical practice.
                                    In formal training a carpenter begins as an apprentice, then becomes a journeyman, and
                                    with enough experience and competency can eventually attain the status of a master carpenter.</p>
                                <ul class="nav nav-tabs menu" role="tablist">
                                    <li role="presentation"><a href="workeres.php?id=4" aria-controls="roofing" ><span>Hire Worker</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="painting">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/we_do/paint.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Painting &amp; Staining</h4>
                                <p>Applying paint to interior walls makes surfaces attractive and vibrant. In addition, paints
                                    and other sealers protect exterior surfaces from erosion caused by exposure to the weather.
                                    Because there are several ways to apply paint, workers must be able to choose the proper
                                    tool for each job, such as the correct roller, power sprayer, or brush. Choosing the
                                    right tool typically depends on the surface to be covered and the characteristics of
                                    the finish.</p>
                                <p>Painters typically have an interest in the Building and Organizing interest areas, according
                                    to the Holland Code framework. The Building interest area indicates a focus on working
                                    with tools and machines, and making or fixing practical things.</p>
                                <ul class="nav nav-tabs menu" role="tablist">
                                    <li role="presentation"><a href="workeres.php?id=1" aria-controls="roofing" ><span>Hire Worker</span></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="plumbing">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/we_do/plumping2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Plumber</h4>
                                <p>A plumber is tradesperson who specializes in installing and maintaining systems used for
                                    potable (drinking) water, sewage and drainage in plumbing systems. waste removal, and
                                    potable water delivery are among the most common uses for plumbing, but it is not limited
                                    to these applications. In the developed world, plumbing infrastructure is critical to
                                    public health and sanitation.</p>
                                <p>We Afford you high skilled plumbers with their Rating and you can choose who ever you want
                                    accordting to availability.</p>
                                <ul class="nav nav-tabs menu" role="tablist">
                                    <li role="presentation"><a href="workeres.php?id=5" aria-controls="roofing" ><span>Hire Worker</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="electrician">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/we_do/marbling.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Marbling</h4>
                                <p>Marlber a guy who uses a technical tools to do house work furniture with some arts on it
                                    to gives the furniture the touch of beauty on it ,And in our website we afford you most
                                    rated and good marblers in the country depends on your state to help you on your house
                                    Work furniture you need to do</p>
                                <p>We Working to improve our workers the next few years with your rate and tools they may using
                                    while working so your feedback help us improving it.</p>
                                <ul class="nav nav-tabs menu" role="tablist">
                                    <li role="presentation"><a href="workeres.php?id=6" aria-controls="roofing" ><span>Hire Worker</span></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="doors">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/we_do/cement.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Cement factor</h4>
                                <p>Doors and windows worker is a guy who have his own tools and painting with size tool to manage
                                    the size of window or door to reach the idol size and you get the great exprience of
                                    the worker after job is done also feedback us how was the worker depend on your opinion</p>
                                <p>You can find your windows and doors worker depend on rating and nearest worker to your state.</p>
                                <ul class="nav nav-tabs menu" role="tablist">
                                    <li role="presentation"><a href="workeres.php?id=7"><span>Hire Worker</span></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <!-- <section class="row latest_projects sectpad" id="projects_row">
    <div class="container">
        <div class="row m0 section_header">
            <h2>Our Latest Projects</h2>
            <h5>We build Amazing Websites</h5>
        </div>
        <div class="row project_type1">
            <div class="col-sm-4 project">
                <div class="item">
                   <img src="images/protfolio/protfolio1.jpg" alt="">
                    <div class="inner">
                       <div class="search-icon">
                            <a class="test-popup-link" href="images/protfolio/protfolio1.jpg"><i class="icon icon-Search"></i></a>
                            <a href="single-project.html"><i class="fa fa-link"></i></a>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                    <div class="item-txt">
                        <a href="single-project.html">Door and Windows</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 project">
                <div class="item">
                   <img src="images/protfolio/protfolio2.jpg" alt="">
                    <div class="inner">
                        <div class="search-icon">
                            <a class="test-popup-link" href="images/protfolio/protfolio1.jpg"><i class="icon icon-Search"></i></a>
                            <a href="single-project.html"><i class="fa fa-link"></i></a>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                    <div class="item-txt">
                        <a href="single-project.html">Flooring</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 project">
                <div class="item">
                   <img src="images/protfolio/protfolio3.jpg" alt="">
                    <div class="inner">
                        <div class="search-icon">
                            <a class="test-popup-link" href="images/protfolio/protfolio1.jpg"><i class="icon icon-Search"></i></a>
                            <a href="single-project.html"><i class="fa fa-link"></i></a>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                    <div class="item-txt">
                        <a href="single-project.html">roofing</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 project">
                <div class="item">
                   <img src="images/protfolio/protfolio4.jpg" alt="">
                    <div class="inner">
                        <div class="search-icon">
                            <a class="test-popup-link" href="images/protfolio/protfolio1.jpg"><i class="icon icon-Search"></i></a>
                            <a href="single-project.html"><i class="fa fa-link"></i></a>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                    <div class="item-txt">
                        <a href="single-project.html">Handyman Services</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 project">
                <div class="item">
                   <img src="images/protfolio/protfolio5.jpg" alt="">
                    <div class="inner">
                        <div class="search-icon">
                            <a class="test-popup-link" href="images/protfolio/protfolio1.jpg"><i class="icon icon-Search"></i></a>
                            <a href="single-project.html"><i class="fa fa-link"></i></a>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                    <div class="item-txt">
                        <a href="single-project.html">INterior Renovation</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 project">
                <div class="item">
                   <img src="images/protfolio/protfolio6.jpg" alt="">
                    <div class="inner">
                        <div class="search-icon">
                            <a class="test-popup-link" href="images/protfolio/protfolio1.jpg"><i class="icon icon-Search"></i></a>
                            <a href="single-project.html"><i class="fa fa-link"></i></a>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                    <div class="item-txt">
                        <a href="single-project.html">Painting</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 project">
                <div class="item">
                   <img src="images/protfolio/protfolio7.jpg" alt="">
                    <div class="inner">
                        <div class="search-icon">
                            <a class="test-popup-link" href="images/protfolio/protfolio1.jpg"><i class="icon icon-Search"></i></a>
                            <a href="single-project.html"><i class="fa fa-link"></i></a>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                    <div class="item-txt">
                        <a href="single-project.html">Remodeling</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 project">
                <div class="item">
                   <img src="images/protfolio/protfolio8.jpg" alt="">
                    <div class="inner">
                        <div class="search-icon">
                            <a class="test-popup-link" href="images/protfolio/protfolio1.jpg"><i class="icon icon-Search"></i></a>
                            <a href="single-project.html"><i class="fa fa-link"></i></a>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                    <div class="item-txt">
                        <a href="single-project.html">Carpentry</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 project">
                <div class="item">
                   <img src="images/protfolio/protfolio9.jpg" alt="">
                    <div class="inner">
                        <div class="search-icon">
                            <a class="test-popup-link" href="images/protfolio/protfolio1.jpg"><i class="icon icon-Search"></i></a>
                            <a href="single-project.html"><i class="fa fa-link"></i></a>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                    <div class="item-txt">
                        <a href="single-project.html">Electrical Repairing</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m0 load-button">
            <a href="#">Load more +</a>
        </div>
    </div>
</section> -->

    <!--Why Choos Us-->
    <section class="row maintenance v2" id="whyus">
        <div class="maintenance_left">
            <div class="row features_inner">
                <div class="feature media">
                    <div class="media-left">
                        <a href="#">
                            <img src="images/maintenance/1.png" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">installation</h4>
                        <p>The simplest answer is this: if your windows are installed improperly, they won’t perform the way
                            they are supposed to. So we offer you professional workers</p>
                    </div>
                </div>
                <div class="feature media">
                    <div class="media-left">
                        <a href="#">
                            <img src="images/maintenance/2.png" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Maintanance</h4>
                        <p>The main purpose of regular maintenance is to ensure that all equipment required for production are
                            operating at 100% efficiency at all times. so we afford you all services in 1 website </p>
                    </div>
                </div>
                <div class="feature media">
                    <div class="media-left">
                        <a href="#">
                            <img src="images/maintenance/3.png" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Rating</h4>
                        <p>Our Craftsman are rated by clients who used to hire them from website and wrote a feedback on them
                            and their exprience with that Craftsman.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="maintenance_right ttup">
            <img src="images/maintenance/bg3.jpg" alt="">
            <a href="#">Why choose us</a>
        </div>
    </section>

    <!-- Section Our team  <section class="row team sectpad" id="team">
    <div class="container">
        <div class="row m0 section_header">
            <h2>our team</h2>
            <h5>We build Amazing Websites</h5>
            <div class="team_carousel_nav"></div>
        </div>
        <div class="row">
            <div class="team_members team_members_carousel">
                <div class="item team_member">
                    <div class="row m0 team_inner">
                        <img src="images/our_team/2.png" alt="">
                        <div class="back"></div>
                        <div class="content">
                            <a href="single-team-member.html"><h4>Maristopher Jopy</h4></a>
                            <h5>Buildcon Electrician</h5>
                        </div>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                                <div class="item team_member">
                    <div class="row m0 team_inner">
                        <img src="images/our_team/1.png" alt="">
                        <div class="back"></div>
                        <div class="content">
                            <a href="single-team-member.html"><h4>Maristopher Jopy</h4></a>
                            <h5>Buildcon Electrician</h5>
                        </div>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item team_member">
                    <div class="row m0 team_inner">
                        <img src="images/our_team/3.png" alt="">
                        <div class="back"></div>
                        <div class="content">
                            <a href="single-team-member.html"><h4>Maristopher Jopy</h4></a>
                            <h5>Buildcon Electrician</h5>
                        </div>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item team_member">
                    <div class="row m0 team_inner">
                        <img src="images/our_team/4.png" alt="">
                        <div class="back"></div>
                        <div class="content">
                            <a href="single-team-member.html"><h4>Maristopher Jopy</h4></a>
                            <h5>Buildcon Electrician</h5>
                        </div>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-
            </div>
        </div>
    </div>
</section> -->

    <!-- Testimonial -->
    <!-- <section class=" row sectpad testimonials-area v2" id="testimonial">
    <div class="container">
        <div class="row testimonials testimonials2">
            <div class="row m0 testimonial_header v2">
                <h2>Testimonials</h2>
            </div>
             <div class="testimonial">
                  <div id="testimonials_carousel" class="carousel slide" data-ride="carousel" data-interval="100000000"> -->
    <!-- Wrapper for slides -->
    <!-- <div class="carousel-inner testimonial-slider" role="listbox">
                        <div class="item active">
                            <div class="carousel-caption testimonial-text">
                                <h5>I am very happy with their work</h5>
                                <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisno strud exercitation ullamco laboris nisi ut aliquip ex ea commodo Ut enim ad minim veniam, quisno strud exercitation ullamco laboris nisi ut aliqui.</p>
                                <h6><a href="#">- Michale John</a></h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-caption testimonial-text">
                                <h5>I am very happy with their work</h5>
                                <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisno strud exercitation ullamco laboris nisi ut aliquip ex ea commodo Ut enim ad minim veniam, quisno strud exercitation ullamco laboris nisi ut aliqui.</p>

                                <h6><a href="#">- Michale John</a></h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-caption testimonial-text">
                                <h5>I am very happy with their work</h5>
                                <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisno strud exercitation ullamco laboris nisi ut aliquip ex ea commodo Ut enim ad minim veniam, quisno strud exercitation ullamco laboris nisi ut aliqui.</p>
                                <h6><a href="#">- Michale John</a></h6>
                            </div>
                        </div>
                    </div> -->
    <!-- Indicators -->
    <!-- <ol class="carousel-indicators testimonial-image">
                        <li data-target="#testimonials_carousel" data-slide-to="0" class="active">
                            <img src="images/testimonial1.jpg" alt="">
                        </li>
                        <li data-target="#testimonials_carousel" data-slide-to="1">
                            <img src="images/testimonial2.jpg" alt="">
                        </li>
                        <li data-target="#testimonials_carousel" data-slide-to="2">
                            <img src="images/testimonial3.jpg" alt="">
                        </li>
                    </ol>
                </div>
           </div>
        </div>
    </div>
</section> -->

<?php
    include 'tpl/footer.php';
?>
