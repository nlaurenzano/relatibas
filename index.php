<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <?php require_once('./php/translations.php') ?>
    
    <title><?=get_Text('relatibas')?></title>
    <meta name="description" content="Red Latinoamericana de Investigación Básica de Sueño." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    
    <link rel="icon" href="relatibas.ico">

    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />

    <script src='https://www.google.com/recaptcha/api.js'></script>
    

  </head>

  <body>
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- http://ionicons.com/ -->
                <!-- ion-ios-pulse / ion-ios-pulse-strong / ion-ios-analytics-outline -->
                <a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-pulse-strong"></i> <?=get_Text('relatibas')?></a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#info"><?=get_Text('information')?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contacto"><?=get_Text('contact')?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#registrar"><?=get_Text('register')?></a>
                    </li>
                </ul>
                <!--
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="#aboutModal">About</a>
                    </li>
                </ul>
                -->
            </div>
        </div>
    </nav>

    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive"><?=get_Text('relatibas')?></h1>
                <h4><?=get_Text('relatibasDesc')?></h4>
                <br />
                <hr>
                <br />
                <h3><?=get_Text('underConstruction')?></h4>
                <br />
                <hr>
                <br />

                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="row">
                            <div class="col-sm-4 col-xs-4 text-center">
                                <a class="page-scroll" href="#info" style="color:#fff;">
                                    <i class="btn icon-lg ion-ios-information-outline" title="<?=get_Text('information')?>"></i>
                                </a>
                            </div>
                            <div class="col-sm-4 col-xs-4 text-center">
                                <a class="page-scroll" href="#contacto" style="color:#fff;">
                                    <i class="btn icon-lg ion-android-mail" title="<?=get_Text('contact')?>"></i>
                                </a>
                            </div>
                            <div class="col-sm-4 col-xs-4 text-center">
                                <a class="page-scroll" href="#registrar" style="color:#fff;">
                                    <i class="btn icon-lg ion-paper-airplane" title="<?=get_Text('register')?>"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </header>

    <!-- <script type="text/javascript">Mostrar('SeccionUno');</script> -->

    <section id="info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary"><?=get_Text('relatibasDesc')?></h2>
                    <br>
                    <p class="text-faded">
                        <?=get_Text('infoContent')?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary" id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn"><?=get_Text('contactUs')?></h2>
                    <hr class="primary">
                    <p><?=get_Text('contactUsContent')?></p>
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <form class="contact-form row">
                        <div class="col-md-6">
                            <label></label>
                            <input type="text" class="form-control" placeholder="<?=get_Text('nameLabel')?>" name="name" id="name">
                        </div>
                        <div class="col-md-6">
                            <label></label>
                            <input type="text" class="form-control" placeholder="<?=get_Text('emailLabel')?>" name="email" id="email">
                        </div>
                        <div class="col-md-12">
                            <label></label>
                            <textarea class="form-control" rows="5" placeholder="<?=get_Text('messageLabel')?>" name="message" id="message"></textarea>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <!--
                            public:  6LfTGBMUAAAAAIHhb_jQ06BxdTL72zLNFSrZtira
                            local:   6LfTDhMUAAAAAPK-0Qwjlehd9tTR4ssWb0dUWSFv
                            -->
                            <label></label>
                            <div class="g-recaptcha" data-sitekey="6LfTGBMUAAAAAIHhb_jQ06BxdTL72zLNFSrZtira" data-theme="dark"></div>


                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <button type="button" onclick="SendContactEmail()" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg"><?=get_Text('sendButtonLabel')?> <i class="ion-android-arrow-forward"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="registrar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn"><?=get_Text('registerTitle')?></h2>
                    <hr class="primary">
                    <p><?=get_Text('registerContent')?></p>
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <form class="contact-form row">
                        <div class="col-md-6">
                            <label></label>
                            <input type="text" class="form-control" placeholder="<?=get_Text('nameLabel')?>">
                        </div>
                        <div class="col-md-6">
                            <label></label>
                            <input type="text" class="form-control" placeholder="<?=get_Text('emailLabel')?>">
                        </div>
                        <div class="col-md-12">
                            <label></label>
                            <textarea class="form-control" rows="9" placeholder="<?=get_Text('messageLabel')?>"></textarea>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <button type="button" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg"><?=get_Text('sendButtonLabel')?> <i class="ion-android-arrow-forward"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Information</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Products</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Benefits</a></li>
                        <li><a href="">Developers</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 column">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 column">
                    <h4>Stay Posted</h4>
                    <form>
                        <div class="form-group">
                          <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-3 text-right">
                    <h4>Follow</h4>
                    <ul class="list-inline">
                      <li><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Dribble"><i class="icon-lg ion-social-dribbble-outline"></i></a></li>
                    </ul>
                </div>
            </div>
            <br/>
            <span class="pull-right text-muted small"><a href="http://www.bootstrapzero.com">Landing Zero by BootstrapZero</a> ©2015 Company</span>
        </div>
    </footer>

    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="modal-body">
        		<img src="" id="galleryImage" class="img-responsive" />
        		<p>
        		    <br/>
        		    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
        		</p>
        	</div>
        </div>
        </div>
    </div>

    <div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">Landing Zero Theme</h2>
        		<h5 class="text-center">
        		    A free, responsive landing page theme built by BootstrapZero.
        		</h5>
        		<p class="text-justify">
        		    This is a single-page Bootstrap template with a sleek dark/grey color scheme, accent color and smooth scrolling.
        		    There are vertical content sections with subtle animations that are activated when scrolled into view using the jQuery WOW plugin. There is also a gallery with modals
        		    that work nicely to showcase your work portfolio. Other features include a contact form, email subscribe form, multi-column footer. Uses Questrial Google Font and Ionicons.
        		</p>
        		<p class="text-center"><a href="http://www.bootstrapzero.com">Download at BootstrapZero</a></p>
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
        	</div>
        </div>
        </div>
    </div>

    <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center" id="contactResponseTitle">Nice Job!</h2>
        		<p class="text-center" id="contactResponse"></p>
        		
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
        	</div>
        </div>
        </div>
    </div>
    
    <!--scripts loaded here -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/scripts.js"></script>
    <script src="./js/ajax.js"></script>

    <sc
  </body>
</html>