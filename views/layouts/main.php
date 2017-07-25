<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\Alert;

AppAsset::register($this);
$baseUrl = Url::base();
$homeUrl = Url::home();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->

    <!--<![endif]-->
    <!-- HEAD SECTION-->
    <head>
    <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <meta charset="utf-8">
        <title>Lehlohonolo Motsoeneng - Systems Developer</title>
        <meta name="description" content="Web Developer,Systems Developer, PHP Developer, Lehlohonolo Motsoeneng">
        <meta name="author" content="Lehlohonolo Motsoeneng">
        
         <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!-- MAIN STYLE SECTION-->
        <link href="<?= $baseUrl ?>/plugins/isotope/isotope.css" rel="stylesheet" media="screen" />
        <link href="<?= $baseUrl ?>/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" />
        <link href="<?= $baseUrl ?>/plugins/IconHoverEffects-master/css/component.css" rel="stylesheet" />
        <link href="<?= $baseUrl ?>/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="<?= $baseUrl ?>/css/about-achivements.css" rel="stylesheet" />
        <link id="mainStyle" href="<?= $baseUrl ?>/css/style.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <!-- END MAIN STYLE SECTION-->
    </head>
    <!-- END HEAD SECTION-->

    <!-- BODY SECTION-->
    <body>
        <!-- HEADER SECTION-->
        <div class="navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-bars mobile-bars" style=""></span>
                    </button>
<!--                    <a class="navbar-brand" href="<?= $homeUrl ?>" >
                        <img src="<?= $baseUrl ?>/img/logo.png" alt="" />  logo here
                    </a>-->
                </div>
                <div class="navbar-collapse collapse" data-scrollreveal="enter from the right 50px">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="#Homepage">Home</a></li> menu links
                        <li><a href="#section-about">About</a></li>
                        <li><a href="#section-works">Portfolio</a></li>
                        <li><a href="#section-services">Skills</a></li>
                        <li><a href="#section-contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
            <!-- END HEADER SECTION-->
         <!--PAGE CONTENT-->
     <!-- HOMEPAGE SECTION-->
        <section id="Homepage">
            <div class="container">
                
                <div class="row">
                    <div data-scrollreveal="wait 0.5s and then ease-in-out 50px" class="col-md-6 col-md-offset-3">

                        <div class="align-center">

                            <h2 class="main-text">Welcome</h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div data-scrollreveal="enter from the left 500px" class="col-md-6 col-md-offset-3">

                        <div class="align-center">
                            <div class="col-md-12 align-center">
                                <div class="hi-icon-effect-9 hi-icon-effect-9a">
                                    <a href="#Homepage" class="hi-icon  hi-icon-screen"></a>
                                    <a href="#section-about" class="hi-icon  hi-icon-user"></a>
                                    <a href="#section-works" class="hi-icon  hi-icon-images"></a>
                                    <a href="#section-services" class="hi-icon hi-icon-cog"></a>
                                    <a href="#section-contact" class="hi-icon hi-icon-location"></a>
                                </div>
                                <br />
                                <ul class="social-network social-circle">

                                    <li><a href="//www.facebook.com/lmotsoeneng1" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>

                                    <!-- <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li> -->
                                    <li><a href="https://www.linkedin.com/in/lehlohonolo-motsoeneng-87b23ba7" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END HOMEPAGE SECTION-->

        <!-- ABOUT SECTION-->
        <section id="section-about" class="section">
            <div class="container" data-scrollreveal='after 0.30s'>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div>
                            <h2 class="heading">About Me</h2>
                            <p class="heading-text">
                                I am a dedicated, passionate, analytic, innovative and results-driven developer that creates a creative environment and fresh ideas and innovations in the IT development industry. On a personal level I bring a sense of urgency to development projects and am willing to take on increasing responsibility in areas of analysis, design, implementation and deployment. With my present employer I am involved in solving challenging technical problems, new requirement and work prioritization. In addition to this I possess knowledge in programming languages such as C#,VB.NET,Java,and SQL. Right now I want to hone my expertise alongside fellow talented professionals and am therefore looking for an opportunity to work with like-minded people, who are passionate about the cutting edge technology they work with.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section  class="section bgcolor-whitesmoke">
            <div class="container" data-scrollreveal='wait 0.10s'>
                <div class="row ">
                    <div class="col-md-4">
                        <div class="team-member text-center">
                            <figure class="member-photo">
                                <img src="<?= $baseUrl ?>/img/team/me.jpg" alt="" height="400px" width="400px" />
                            </figure>
                            <div class="team-detail">
                                <h4>Lehlohonolo Motsoeneng</h4>
                                <span class="text-bold">Systems Developer <br> </span>
                                <q>
                                    If you can put it in words, then it's done.
                                </q>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-offset-1 col-md-6">
                        <div data-scrollreveal="enter right">
                            <ul class="timeline">
                                <li class="time-label">
                                    <span class="bg-orange">Career 
                                    </span>
                                    <br />
                                    <br />
                                </li>

                                <!-- <li class="time-label">
                                    <span class="bg-green"> To : September 2015
                                    </span>
                                </li> -->
                                <li>
                                    <i class="fa fa-building-o bg-blue"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 2017</span>
                                        <h3 class="timeline-header"><a href="#"></a>  Freelancer </h3>
                                        <div class="timeline-body">
                                            Responsible for writing new source code and maintain existing one, maintain and develop new database and provide support for everyday business processes.
                                        </div>
                                        <div class='timeline-footer'>
                                            <!-- <a class="btn btn-primary btn-xs">Share</a> -->
                                            <a class="btn btn-danger btn-xs">Read More</a>
                                        </div>
                                    </div>
                                </li>
                                <!--                                <li>
                                                                    <i class="fa fa-camera bg-purple"></i>
                                                                    <div class="timeline-item">
                                                                        <span class="time"><i class="fa fa-clock-o"></i>14 September 2015</span>
                                                                        <h3 class="timeline-header"><a href="#">Blandit</a> New Photo Show</h3>
                                                                        <div class="timeline-body">
                                                                            <img src="<?= $baseUrl ?>/img/about/imgTime.jpg" alt="" class='margin' />
                                                                            <img src="<?= $baseUrl ?>/img/about/imgTime.jpg" alt="" class='margin' />
                                                                        </div>
                                                                    </div>
                                                                </li>-->

                                <!--                                <li>
                                                                    <i class="fa fa-video-camera bg-maroon"></i>
                                                                    <div class="timeline-item">
                                                                        <span class="time"><i class="fa fa-clock-o"></i>15 June</span>
                                                                        <h3 class="timeline-header"><a href="#">Venenatis blandit</a> New Event</h3>
                                                                        <div class="timeline-body">
                                                                            <iframe width="300" height="169" src="//www.youtube.com/embed/Ycv5fNd4AeM"></iframe>
                                                                        </div>
                                                                    </div>
                                                                </li>-->

                                <li>
                                    <i class="fa fa-clock-o"></i>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- END ABOUT SECTION-->
        <!-- WORKS SECTION-->
        <section id="section-works" class="section" >
            <div class="container" data-scrollreveal="enter top move 50px">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div>
                            <h2 class="heading">Portfolio</h2>
                            <p class="heading-text">
                                An Overview Collection of Projects I have been in, individually and in teams.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section >
            <div class="container" data-scrollreveal="enter right and move 40px, over 0.8s">


                <div class="row">
                    <nav id="filter" class="col-md-12 text-center">
                        <ul>
                            <li><a href="#" class="current  btn btn-default" data-filter="*">All Items</a></li>
                            <li><a href="#" class="btn btn-default" data-filter=".html5">HMTL5 Sites</a></li>
                             <li><a href="#" class="btn btn-default" data-filter=".wordpress">WordPress</a></li>
                            <li><a href="#" class="btn btn-default" data-filter=".codeigniter">CodeIgniter</a></li>
                                                  </ul>
                    </nav>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="portfolio-items isotopeWrapper clearfix" id="3" >

                                 <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/mokobane.png" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.mokobaneinc.co.za">Mokobane Attorneys Inc</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/mokobane.png" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-md-4 isotopeItem wordpress">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img1.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.ethuta.com">Ethuta</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img1.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img2.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.shammahis.co.za">Shammah Innovative Solutions</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img2.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>


                                <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img3.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.batukacapital.co.za">Batuka Capital</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img3.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img4.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.phindanathi.co.za">Phindanathi Security Solutions</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img4.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img5.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.cedartax.co.za">Cedar Tax</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img5.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img6.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.xivitiattorneys.co.za">Xiviti Attorneys</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img6.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img7.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.theglamevents.co.za">The Glam Events</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img7.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img8.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.afilika.co.za">Afilika Consulting</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img8.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img9.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.dipitseng.co.za">Dipitseng Caters</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img9.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img10.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.mamazala.com">MamazalaCom</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img10.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img11.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.townshipbusinessads.co.za">Township Business Ads</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img11.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-md-4 isotopeItem html5">
                                    <div class="portfolio-item">
                                        <img src="<?= $baseUrl ?>/img/portfolio/img12.jpg" alt="" />
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="//www.matlakaconcretecreations.co.za">Mantlaka Concrete Creations</a></h5>
                                                <a href="<?= $baseUrl ?>/img/portfolio/img12.jpg" class="fancybox"><i class="fa fa-search-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </section>
        <!--END WORKS SECTION-->

        <!-- SERVICES SECTION-->
        <section id="section-services" class="section" >
            <div class="container" data-scrollreveal='after 0.30s'>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div>
                            <h2 class="heading">Development Skills</h2>
                            <p class="heading-text">
                                Expertise Skills and Tools
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section  class="section bgcolor-whitesmoke">
            <div class="container">

                <div class="row">

                 <div data-scrollreveal='over 0.8s' class="col-lg-2">
                        <div class="align-center">
                            <div class="hi-icon-effect-1 hi-icon-effect-1a">
                                <img src="<?= $baseUrl ?>/img/hicoins/php.png">
                                <!--<a href="#" class="hi-icon hi-icon-contract"></a>-->
                            </div>
                          
                        </div>
                    </div>
                <div data-scrollreveal='over 0.8s' class="col-lg-2">
                        <div class="align-center">

                            <div class="hi-icon-effect-1 hi-icon-effect-1a">
                                <img src="<?= $baseUrl ?>/img/hicoins/codeigniter.png">
                                                               <!--<a href="#" class="hi-icon hi-icon-contract" src="<?= $baseUrl ?>/img/icons/wordpress.png"></a>-->
                            </div>
                           
                        </div>
                    </div>
                    <div data-scrollreveal='over 0.8s' class="col-lg-2">
                        <div class="align-center">

                            <div class="hi-icon-effect-1 hi-icon-effect-1a">
                                <img src="<?= $baseUrl ?>/img/hicoins/wordpress.png">
                                                               <!--<a href="#" class="hi-icon hi-icon-contract" src="<?= $baseUrl ?>/img/icons/wordpress.png"></a>-->
                            </div>
                           
                        </div>
                    </div>
                    <div data-scrollreveal='over 0.8s' class="col-lg-2">
                        <div class="align-center">

                            <div class="hi-icon-effect-1 hi-icon-effect-1a">
                                <img src="<?= $baseUrl ?>/img/hicoins/java.png">
                                                               <!--<a href="#" class="hi-icon hi-icon-contract" src="<?= $baseUrl ?>/img/icons/wordpress.png"></a>-->
                            </div>
                            
                        </div>
                    </div>
                    <div data-scrollreveal='over 0.8s' class="col-lg-2">
                        <div class="align-center">
                            <div class="hi-icon-effect-1 hi-icon-effect-1a">
                                <img src="<?= $baseUrl ?>/img/hicoins/mysql.png">
                                <!--<a href="#" class="hi-icon hi-icon-contract"></a>-->
                            </div>
                           
                        </div>
                    </div>
                   
                    <div data-scrollreveal='over 0.8s' class="col-lg-2">
                        <div class="align-center">
                            <div class="hi-icon-effect-1 hi-icon-effect-1a">
                                <!--<a href="#" class="hi-icon hi-icon-contract"></a>-->
                                <img src="<?= $baseUrl ?>/img/hicoins/html5.png">
                            </div>
                           
                        </div>
                    </div>
                    <div data-scrollreveal='over 0.8s' class="col-lg-2">
                        <div class="align-center">
                            <div class="hi-icon-effect-1 hi-icon-effect-1a">
                                <img src="<?= $baseUrl ?>/img/hicoins/css3.png">
                                <!--<a href="#" class="hi-icon hi-icon-contract"></a>-->
                            </div>
                           
                        </div>
                    </div>
                      <div data-scrollreveal='over 0.8s' class="col-lg-2">
                        <div class="align-center">
                            <div class="hi-icon-effect-1 hi-icon-effect-1a">
                                <img src="<?= $baseUrl ?>/img/hicoins/jquery.png">
                                <!--<a href="#" class="hi-icon hi-icon-contract"></a>-->
                            </div>
                           
                        </div>
                    </div>
                    
                    <div data-scrollreveal='over 0.8s' class="col-lg-2">
                        <div class="align-center">

                            <div class="hi-icon-effect-1 hi-icon-effect-1a">
                                <img src="<?= $baseUrl ?>/img/hicoins/csharp.png">
                                                               <!--<a href="#" class="hi-icon hi-icon-contract" src="<?= $baseUrl ?>/img/icons/wordpress.png"></a>-->
                            </div>
                           
                        </div>
              
                    </div>
                       <div data-scrollreveal='over 0.8s' class="col-lg-2">
                        <div class="align-center">

                            <div class="hi-icon-effect-1 hi-icon-effect-1a">
                                <img src="<?= $baseUrl ?>/img/hicoins/javascript.png">
                                                               <!--<a href="#" class="hi-icon hi-icon-contract" src="<?= $baseUrl ?>/img/icons/wordpress.png"></a>-->
                            </div>
                           
                        </div>
              
                    </div>

            </div>
        </section>
        <!-- END SERVICES SECTION-->
        <!-- CONTACT SECTION-->
        <section id="section-contact" class="section">
            <div class="container" data-scrollreveal="enter left and move 40px over 0.8s">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div>
                            <h2 class="heading">Contact Me</h2>
                            <p class="heading-text">
                                For any queries please contact Me.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row" data-scrollreveal="enter right and move 40px, over 0.8s">
                    <div class="col-md-8">
                        <div  id="contact-form" >


                            <div class="col-md-6 form-group">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  />

                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  />

                            </div>
                            <div class="col-md-12 form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  />

                            </div>
                            <div class="col-md-12 form-group">
                                <label >Message</label>
                                <textarea class="form-control" name="message" rows="5" ></textarea>

                            </div>

                            <button type="submit" style="height: 40px; margin-bottom: 50px;" class="col-md-offset-4 col-md-4 btn btn-primary">SEND MESSAGE</button>


                        </div>
                    </div>
                    <div class="col-md-4">
                        <div data-scrollreveal='over 0.8s'>
                            <div class="align-center" style="margin-top: 100px;">

                                <i class="fa fa-map-marker fa-5x"></i>
                                <h4 class="text-bold" style="font-size: 30px;">Contact Details</h4>
                                <p>
                                    <i class="fa fa-home"></i> Johannesburg
                                </p>
                                <p>
                                    <i class="fa fa-phone"></i> +27 71 051 0968
                                </p>
                                <p>
                                    <i class="fa fa-envelope"></i>  joseleh@live.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- ./span12 -->
                </div>

            </div>
        </section>
        <!-- END CONTACT SECTION-->
        <!--END PAGE CONTENT-->
        <!-- FOOTER SECTION-->
        <section id="footer" class="section footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="social-network social-circle">

                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 align-center">
                        <div class="col-sm-12">
                            <p>Copyright &copy; FlatCode - Lehlohonolo Motsoeneng</p>
                            <p>2016 All Rights Reserved</p>
                        </div>
                    </div>
                </div>


            </div>

        </section>
        <!-- END FOOTER SECTION-->
        <!-- SCROLLUP LINK SECTION-->
        <a href="#Homepage" class="scrollup"><i class="fa fa-chevron-up"></i></a>
        <!--END SCROLLUP LINK SECTION-->
        <!-- STYLE SWITCHER SECTION-->
        <div  class="panel" style="color:white">
            <div id="styledemo"  style="left: 0px;">
                <span id="theme_blue" style="background-color:#37AFFF" ></span>
                <span id="theme_green" style="background-color:#469E66" ></span>
                <span id="theme_brown" style="background-color:#E69351" ></span>
                <span id="theme_red" style="background-color:#E7484E" ></span>
            </div>
        </div>
        <!--<a class="trigger" href="#"></a>-->
        <!-- END STYLE SWITCHER SECTION-->
        <!-- MAIN SCRIPTS SECTION-->
        <script src="<?= $baseUrl ?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?= $baseUrl ?>/js/jquery.js"></script>
        <script src="<?= $baseUrl ?>/js/scrollReveal.js"></script>
        <script>
            window.scrollReveal = new scrollReveal(); //please put this script here to show animation at the time of scroll
        </script>
        <script src="<?= $baseUrl ?>/js/jquery.easing.1.3.js"></script>
        <script src="<?= $baseUrl ?>/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="<?= $baseUrl ?>/plugins/isotope/jquery.isotope.min.js"></script>
        <script src="<?= $baseUrl ?>/plugins/fancybox/jquery.fancybox.pack.js"></script>
        <script src="<?= $baseUrl ?>/js/jquery.localscroll-1.2.7-min.js"></script>
        <script src="<?= $baseUrl ?>/js/jquery.appear.js"></script>
        <script src="<?= $baseUrl ?>/scripts/main.js"></script>

        <!--END MAIN SCRIPTS SECTION-->
    </body>

    <!--END  BODY SECTION-->
</html>

</html>
<?php $this->endPage() ?>
