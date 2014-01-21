<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roy Tours - Sri Lanka</title>
    <link href="assets/css/template.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="page">
      
	  <?php include_once "inc.header.php" ?>

      <main id="main" class="site-main">

        <section id="carousel-1" class="carousel slide section-slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active" style="background: url(images/bg-1.jpg);">
              <div class="container"><img src="images/typo-2.png" alt="First slide"></div>
            </div>
            <div class="item" style="background: url(images/bg-2.jpg);">
              <div class="container"><img src="images/typo-3.png" alt="First slide"></div>
            </div>
            <div class="item" style="background: url(images/bg-3.jpg);">
              <div class="container"><img src="images/typo-4.png" alt="First slide"></div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-1" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
          <a class="right carousel-control" href="#carousel-1" data-slide="next"><span class="fa fa-chevron-right"></span></a>
        </section>

        <section class="section section-center cta">
          <div class="container">
            <h2 class="section-title"><span>Donec id elit non mi porta gravida at eget metus.</span></h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <div class="main-action">
              <a href="#" class="btn btn-lg btn-danger">Request Quote</a>&nbsp;&nbsp;&nbsp;
              <a href="#" class="btn btn-lg btn-default">View Portfolio</a>
            </div>
          </div>
        </section>

        <section id="features" class="section section-center section-hilite section-features">
          <div class="container">
            <h2 class="section-title"><span>How it works?</span></h2>
            <div class="row">

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="images/icon-easel-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="images/icon-comments-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="images/icon-book-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="images/icon-bag-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="images/icon-photo-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="images/icon-calculator-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

            </div>
          </div>
        </section>

        <section id="portfolio" class="section section-portfolio">
          <div class="container">
            <h2 class="section-title"><span>Recent Works.</span></h2>
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <article class="hentry post portfolio simple-effect">
                  <div class="entry-thumbnail">
                    <a href="#" data-toggle="modal" data-target="#project-modal">
                      <img src="images/project-1.jpg" alt="" />
                      <span class="overlay"><i class="fa fa-plus"></i></span>
                    </a>
                  </div>
                  <h4><a href="#" data-toggle="modal" data-target="#project-modal">Project Title</a></h4>
                  <span class="text-muted">Application Design</span>
                </article>
              </div>
              <div class="col-md-3 col-sm-6">
                <article class="hentry post portfolio simple-effect">
                  <div class="entry-thumbnail">
                    <a href="#" data-toggle="modal" data-target="#project-modal">
                      <img src="images/project-2.jpg" alt="" />
                      <span class="overlay"><i class="fa fa-plus"></i></span>
                    </a>
                  </div>
                  <h4><a href="#" data-toggle="modal" data-target="#project-modal">Project Title</a></h4>
                  <span class="text-muted">Web Design</span>
                </article>
              </div>
              <div class="col-md-3 col-sm-6">
                <article class="hentry post portfolio simple-effect">
                  <div class="entry-thumbnail">
                    <a href="#" data-toggle="modal" data-target="#project-modal">
                      <img src="images/project-3.png" alt="" />
                      <span class="overlay"><i class="fa fa-plus"></i></span>
                    </a>
                  </div>
                  <h4><a href="#" data-toggle="modal" data-target="#project-modal">Project Title</a></h4>
                  <span class="text-muted">Icon Design</span>
                </article>
              </div>
              <div class="col-md-3 col-sm-6">
                <article class="hentry post portfolio simple-effect">
                  <div class="entry-thumbnail">
                    <a href="#" data-toggle="modal" data-target="#project-modal">
                      <img src="images/project-4.png" alt="" />
                      <span class="overlay"><i class="fa fa-plus"></i></span>
                    </a>
                  </div>
                  <h4><a href="#" data-toggle="modal" data-target="#project-modal">Project Title</a></h4>
                  <span class="text-muted">UI Design</span>
                </article>
              </div>
            </div>
          </div>
        </section>

        <!-- Project Modal -->
        <div class="modal fade" id="project-modal" tabindex="-1" role="dialog" aria-labelledby="project-modal-label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="project-modal-label">Project title</h4>
              </div>
              <div class="modal-body">
                <article class="single-project">
                  <div class="project-thumbnail">
                    <div id="project-thumbnail-carousel-1" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="item active"><img src="images/single-project-1.jpg" /></div>
                        <div class="item"><img src="images/single-project-2.png" /></div>
                        <div class="item"><img src="images/single-project-3.jpg" /></div>
                      </div>
                      <ol class="carousel-indicators">
                        <li data-target="#project-thumbnail-carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#project-thumbnail-carousel-1" data-slide-to="1"></li>
                        <li data-target="#project-thumbnail-carousel-1" data-slide-to="2"></li>
                      </ol>
                      <a class="left carousel-control" href="#project-thumbnail-carousel-1" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
                      <a class="right carousel-control" href="#project-thumbnail-carousel-1" data-slide="next"><span class="fa fa-chevron-right"></span></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <button type="button" class="btn btn-block btn-primary">Launch Project</button>
                      <ul class="list-unstyled project-info">
                        <li><strong>Type</strong> <span class="pull-right">Web Design</span></li>
                        <li><strong>Client</strong> <span class="pull-right">Google</span></li>
                        <li><strong>Year</strong> <span class="pull-right">2014</span></li>
                      </ul>
                      
                    </div>
                    <div class="col-md-8">
                      <p>Suspendisse varius nisl nunc. Aenean in dictum nibh. Nullam congue facilisis purus porta ullamcorper. Aenean in consequat sapien. Cras orci augue, ultricies at luctus congue, dapibus sed magna. Vivamus consequat commodo pharetra. Maecenas sed tincidunt mi, quis accumsan nisi. Praesent ac porttitor massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur in bibendum tellus, vitae imperdiet mauris.</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section id="testimonials" class="section section-center section-hilite section-testimonial">
          <div class="container">
            <h2 class="section-title"><span>What our clients say?</span></h2>
            <i class="fa fa-quote-left fa-3x"></i>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>
                </div>
                <div class="item">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>
                </div>
                <div class="item">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>
                </div>
              </div>

              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><img src="images/avatar-1.png" width="64" height="64" alt="" class="img-circle"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"><img src="images/avatar-2.png" width="64" height="64" alt="" class="img-circle"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"><img src="images/avatar-3.png" width="64" height="64" alt="" class="img-circle"></li>
              </ol>
            </div>
          </div>
        </section>

        <section id="pricing" class="section section-center section-pricing">
            <div class="container">
                <h3 class="section-title"><span>Pricing Table Made Easy</span></h3>
                <div class="pricing-table">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-default">
                                <header class="panel-heading">
                                    <h1>Bronze</h1>
                                    <div class="the-price">$5 <span class="subscript">/ month</span></div>
                                </header>
                                <div class="panel-body">
                                    <table class="table">
                                        <tbody>
                                            <tr><td>1 Account</td></tr>
                                            <tr class="active"><td>1 Project</td></tr>
                                            <tr><td>50K API Access</td></tr>
                                            <tr class="active"><td>50MB Storage</td></tr>
                                            <tr><td>Custom Cloud Services</td></tr>
                                            <tr class="active"><td>Weekly Reports</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <footer class="panel-footer"><a href="#" class="btn btn-default">Sign up now</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-default">
                                <header class="panel-heading">
                                    <h1>Silver</h1>
                                    <div class="the-price">$10 <span class="subscript">/ month</span></div>
                                </header>
                                <div class="panel-body">
                                    <table class="table">
                                        <tbody>
                                            <tr><td>1 Account</td></tr>
                                            <tr class="active"><td>3 Project</td></tr>
                                            <tr><td>100K API Access</td></tr>
                                            <tr class="active"><td>100MB Storage</td></tr>
                                            <tr><td>Custom Cloud Services</td></tr>
                                            <tr class="active"><td>Weekly Reports</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <footer class="panel-footer"><a href="#" class="btn btn-default">Sign up now</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-primary">
                                <header class="panel-heading">
                                    <h1>Gold</h1>
                                    <div class="the-price">$20 <span class="subscript">/ month</span></div>
                                </header>
                                <div class="panel-body">
                                    <table class="table">
                                        <tbody>
                                            <tr><td>2 Account</td></tr>
                                            <tr class="active"><td>5 Project</td></tr>
                                            <tr><td>100K API Access</td></tr>
                                            <tr class="active"><td>200MB Storage</td></tr>
                                            <tr><td>Custom Cloud Services</td></tr>
                                            <tr class="active"><td>Weekly Reports</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <footer class="panel-footer"><a href="#" class="btn btn-primary">Sign up now</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="panel panel-default">
                                <header class="panel-heading">
                                    <h1>Diamond</h1>
                                    <div class="the-price">$35 <span class="subscript">/ month</span></div>
                                </header>
                                <div class="panel-body">
                                    
                                    <table class="table">
                                        <tbody>
                                            <tr><td>5 Account</td></tr>
                                            <tr class="active"><td>20 Project</td></tr>
                                            <tr><td>300K API Access</td></tr>
                                            <tr class="active"><td>500MB Storage</td></tr>
                                            <tr><td>Custom Cloud Services</td></tr>
                                            <tr class="active"><td>Weekly Reports</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <footer class="panel-footer"><a href="#" class="btn btn-default">Sign up now</a></footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="section section-center section-hilite section-team">
            <div class="container">
                <h3 class="section-title"><span>Our Funny Team</span></h3>
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="../../distilleryimage4.s3.amazonaws.com/78f166dc77a011e3a3ef0e7d4056843c_6.jpg">
                        <h5>Rihanna</h5>
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="../../distilleryimage5.s3.amazonaws.com/7cd1ed40766411e3b2c112112ffff7c9_6.jpg">
                        <h5>Marry</h5>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="../../distilleryimage8.s3.amazonaws.com/f43436ca180b11e39a4922000a1fb37b_6.jpg">
                        <h5>Ronaldo</h5>
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="../../distilleryimage11.s3.amazonaws.com/532c6464798b11e3855a126610d3d793_6.jpg">
                        <h5>Jackie Lord</h5>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="../../distilleryimage0.s3.amazonaws.com/4ed0bf8a742e11e3bb680ee50d64ca74_6.jpg">
                        <h5>David Beckham</h5>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="../../distilleryimage0.s3.amazonaws.com/b8adbd6677f511e3b8cd1227d7fa1b14_6.jpg">
                        <h5>John Doe</h5>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog" class="section section-blog">
          <div class="container">
            <h2 class="section-title"><span>From Our Blog</span></h2>
            <div class="row">
              <div class="col-md-6">
                <article class="hentry post">
                  <a href="#" class="entry-thumbnail">
                    <img src="images/blog-1.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                  <header class="entry-header">
                    <h2 class="entry-title"><a href="#">Sample blog title</a></h2>
                    <div class="entry-meta">By <a href="#">Jackie Lord</a> in <a href="#">Category</a></div>
                  </header>
                  <div class="entry-content"><p>Pellentesque eleifend enim sit amet scelerisque convallis. Aenean eget metus non erat suscipit accumsan.</p> <a href="#" class="more"><span class="btn btn-primary">Continue Reading</span></a></div>
                </article>
              </div>
              <div class="col-md-6">
                <article class="hentry post">
                  <a href="#" class="entry-thumbnail">
                    <img src="images/blog-2.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                  <header class="entry-header">
                    <h2 class="entry-title"><a href="#">Sample blog title</a></h2>
                    <div class="entry-meta">By <a href="#">Jackie Lord</a> in <a href="#">Category</a></div>
                  </header>
                  <div class="entry-content"><p>Pellentesque eleifend enim sit amet scelerisque convallis. Duis sed tortor condimentum placeraterat.</p> <a href="#" class="more"><span class="btn btn-primary">Continue Reading</span></a></div>
                </article>
              </div>
            </div>
          </div>
        </section>

        <section id="clients" class="section section-hilite section-our-clients">
          <div class="container">
            <h2 class="section-title"><span>Our Clients</span></h2>
            <div class="row">
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="images/client-1.png" alt="" /></a>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="images/client-2.png" alt="" /></a>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="images/client-3.png" alt="" /></a>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="images/client-4.png" alt="" /></a>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="images/client-5.png" alt="" /></a>
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="#"><img src="images/client-6.png" alt="" /></a>
              </div>
            </div>
          </div>
        </section>

        <section id="contact" class="section section-center section-cta">
          <div class="container">
            <h2 class="section-title"><span>Stop Wasting Your Website's Potential</span></h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <div class="main-action">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <form class="form-inline" role="form">
                    <div class="form-group">
                      <label class="sr-only">Your Name</label>
                      <input type="text" class="form-control input-lg input-circle" placeholder="Your name">
                    </div>
                    <div class="form-group">
                      <label class="sr-only">Your Email</label>
                      <input type="email" class="form-control input-lg input-circle" placeholder="Your email">
                    </div>
                    <button type="submit" class="btn btn-default btn-lg">Request Quote</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

      </main>
	  
	  <?php include_once "inc.footer.php" ?>
      
    </div>
  
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap-3.0.3.min.js"></script>
    <script src="assets/js/jquery.singlePageNav.min.js"></script>
    <script src="assets/js/main.js"></script>

  </body>
</html>