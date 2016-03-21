<?php require('blog/wp-blog-header.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>
      Brian Emory | Web Developer
  </title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,900italic,700italic,700' rel='stylesheet' type='text/css'>
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet prefetch'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css' rel='stylesheet prefetch'>
  <link href="css/style.css" rel="stylesheet"><!-- Favicons -->
  <link href="img/icons/apple-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
  <link href="img/icons/apple-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
  <link href="img/icons/apple-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="img/icons/apple-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
  <link href="img/icons/apple-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href="img/icons/apple-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
  <link href="img/icons/apple-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
  <link href="img/icons/apple-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
  <link href="img/icons/apple-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
  <link href="img/icons/android-icon-192x192.png" rel="icon" sizes="192x192" type="image/png">
  <link href="img/icons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
  <link href="img/icons/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
  <link href="img/icons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
  <link href="img/icons/manifest.json" rel="manifest">
  <meta content="#ffffff" name="msapplication-TileColor">
  <meta content="img/icons/ms-icon-144x144.png" name="msapplication-TileImage">
  <meta content="#ffffff" name="theme-color">
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top" id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-code"></i> Brian Emory</a>
      </div><!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden">
              <a class="page-scroll" href="#page-top"></a>
          </li>
          <li>
              <a class="page-scroll" href="http://www.brianemory.com/blog">BLOG</a>
          </li>
          <li>
              <a class="page-scroll" href="#projects">PROJECTS</a>
          </li>
          <li>
              <a class="page-scroll" href="#about">ABOUT</a>
          </li>
          <li>
              <a class="page-scroll" href="#connect">CONNECT</a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- Intro Section -->
<section class="intro-section" id="intro">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="text-left header-h1">
          Brian Emory
        </h1>
        <h2 class="text-left header-h2">
          Web Developer
        </h2>
      </div>
    </div>
  </div>
</section><!-- Blog Section -->
    <section class="blog-section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr-section">
                        <h1 class="section-header">
                            <i class="fa fa-wordpress fa2x"></i> BLOG
                        </h1>
                    </div>
                </div><!-- <div class="col-md-4">
      <h2 class="text-left"><a href="#">Part One of the Blog</a></h2>
      <p class="text-left">Bacon ipsum dolor amet venison ham prosciutto, landjaeger pork belly frankfurter pork loin filet mignon chuck sausage jerky boudin andouille. Tri-tip ham hock porchetta short ribs drumstick, turkey pancetta capicola cow kielbasa brisket doner
        hamburger shoulder tongue. Salami meatball sausage pancetta capicola ball tip shoulder... <a href="#"><i class="fa fa-arrow-circle-right"></i> Read More</a></p> -->
                <?php
                $args = array( 'numberposts' => 3, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
                $postslist = get_posts( $args );
                echo '<div id="latest_posts">';
                 foreach ($postslist as $post) :  setup_postdata($post); ?>
                <div class="col-md-4 text-left">
                    <h3>
                        <a class="blog-title" href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?></a>
                    </h3>
                    <div class="blog-text">
                        <p>
                            Posted on <a class="blog-date" href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_date(); ?></a> by <a href="http://www.brianemory.com/blog/author/thebrianemory"><?php the_author(); ?></a>
                        </p>
                        <p>
                            <?php the_excerpt();?>
                        </p>
                    </div>
                </div><?php endforeach; ?>
            </div>
        </div>
    </section><!-- Projects Section -->
<section class="projects-section" id="projects">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="hr-section">
          <h1 class="section-header">
              PROJECTS
          </h1>
        </div>
          <div class="well">
            <div class="row">
              <div class="col-md-4">
                  <h3>Personal Portfolio <a href="https://github.com/thebrianemory/mysite" target="_blank"><div class="btn btn-xs btn-info gh-btn">GitHub</div></a></h3>
                  <img src="img/html.png" height="40px" class="fw-icons"><img src="img/bootstrap.png" height="40px" class="fw-icons"><img src="img/php.png" height="40px" class="fw-icons">
                  <a href="http://www.brianemory.com"><img class="img-responsive project-image" src="img/port-portfolio.jpg"></a>
                  <p class="text-left">My personal portfolio project for Free Code Camp went from a basic site to a complete, obsessive makeover complete with learning some PHP. You can read all about it on <a href="http://www.brianemory.com/blog/how-my-personal-portfolio-project-became-an-obsession/">my blog</a>.</p>
              </div>
              <div class="col-md-4">
                  <h3>Alpha Blog <a href="https://github.com/thebrianemory/alpha-blog" target="_blank"><div class="btn btn-xs btn-info gh-btn">GitHub</div></a></h3>
                  <img src="img/ruby-rails.png" height="40px" class="fw-icons"><img src="img/bootstrap.png" height="40px" class="fw-icons"><img src="img/jquery.png" height="40px" class="fw-icons">
                  <a href="https://alpha-blog-thebrianemory.herokuapp.com/" target="_blank"><img class="img-responsive project-image" src="img/port-alphablog.png"></a>
                  <p class="text-left">Alpha Blog is the first app I made during the <a href="https://www.udemy.com/the-complete-ruby-on-rails-developer-course" target="_blank">Complete Ruby on Rails Developer Course</a>. It allows users to sign up, create blog posts, and browse users and blog categories.</p>
              </div>
              <div class="col-md-4">
                  <h3>Finance Tracker <a href="https://github.com/thebrianemory/finance-tracker" target="_blank"><div class="btn btn-xs btn-info gh-btn">GitHub</div></a></h3>
                  <img src="img/ruby-rails.png" height="40px" class="fw-icons"><img src="img/bootstrap.png" height="40px" class="fw-icons"><img src="img/javascript.png" height="40px" class="fw-icons">
                  <a href="https://finance-tracker-thebrianemory.herokuapp.com/" target="_blank"><img class="img-responsive project-image" src="img/port-financetracker.jpg"></a>
                  <p class="text-left">Finance Tracker is the second app I made during the <a href="https://www.udemy.com/the-complete-ruby-on-rails-developer-course" target="_blank">Complete Ruby on Rails Developer Course</a>. You can search and add stocks to track as well as search and add friends.</p>
              </div>
            </div>
            <div class="row">
              <!-- For second row of projects -->
              <div class="col-md-4">
                <h3>Dev Match <a href="https://github.com/thebrianemory/simplecodecasts_saas" target="_blank"><div class="btn btn-xs btn-info gh-btn">GitHub</div></a></h3>
                <img src="img/ruby-rails.png" height="40px" class="fw-icons"><img src="img/bootstrap.png" height="40px" class="fw-icons"><img src="img/jquery.png" height="40px" class="fw-icons">
                <a href="https://gentle-fjord-87483.herokuapp.com/" target="_blank"><img class="img-responsive project-image" src="img/port-devmatch.png"></a>
                  <p class="text-left">Dev Match was a project built while doing <a href="https://codermanual.com/">Coder Manual's Web Developer Boot Camp with Rails</a>. It is a SaaS app and includes Stripe integration for taking payments.</p>
              </div>
              <div class="col-md-4">
                <h3>Random Quote Machine <a href="https://github.com/thebrianemory/quote-machine" target="_blank"><div class="btn btn-xs btn-info gh-btn">GitHub</div></a></h3>
                <img src="img/javascript.png" height="40px" class="fw-icons"><img src="img/bootstrap.png" height="40px" class="fw-icons"><img src="img/jquery.png" height="40px" class="fw-icons">
                  <a href="http://brianemory.com/quote-machine/" target="_blank"><img class="img-responsive project-image" src="img/port-qm.jpg"></a>
                  <p class="text-left">Another Free Code Camp project, I was able to learn about the Twitter API and incorporating it into a site. This generator will tweet the generated quote to @TheXFiles with #TheXFiles.</p>
              </div>
              <div class="col-md-4">
                <h3>Local Weather App <a href="https://github.com/thebrianemory/local-weather-app" target="_blank"><div class="btn btn-xs btn-info gh-btn">GitHub</div></a></h3>
                <img src="img/javascript.png" height="40px" class="fw-icons"><img src="img/bootstrap.png" height="40px" class="fw-icons"><img src="img/jquery.png" height="40px" class="fw-icons">
                  <a href="http://brianemory.com/local-weather-app/" target="_blank"><img class="img-responsive project-image" src="img/port-weather.png"></a>
                  <p class="text-left">This fun Free Code Camp project allows you to see your local weather. Depending on the temperature, the background image will change.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section><!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr-section">
                        <h1 class="section-header">
                            ABOUT
                        </h1>
                    </div>
                    <div>
                        <img class="about-pic img-responsive" src="img/me_at_beach.jpg">
                    </div>
                    <div class="text-left about-text">
                        <p>
                            I am a web developer with a focus on Ruby on Rails currently living in Los Angeles, CA. My wife and I moved out here last year from the blistering desert of Las Vegas. I've always wanted to live in southern California but ultimately it was about keeping the Mrs. happy. Wise man once said, "Happy wife, happy life."</p>
                            <p>I'm a bit of a romantic. I'm also a bit of a goofball. My wife can attest to both. I love hard ciders (can't stand the taste of beer though as much as I try). I find great enjoyment in terrible movies. There's just something fantastic about a movie based on a silly premise, a bad plot, and not so good acting. I enjoy wasting time and getting lost in a video game. Much to the disappoint of my friends, I once again won our fantasy football league. I'm also taller than over 99% of people. Yes, I use to play basketball.</p>
                            <p>I decided to embark on this journey of being a web developer after buying a StackSocial deal. Its name was Coder Manual's Web Developer Bootcamp with Rails. The deal showed up on my Facebook feed one day and piqued my interest. I've always had a bit of a fascination with coding but never thought much of making it a career. Back when my family first got a computer in the mid 90s, I learned some basic HTML but CSS was too foreign of a concept. I played around with one of the Cs (either C# or C++) but that lasted all of five minutes.</p>
                            <p>The Web Developer Bootcamp took me through the basics of Rails and branched off to learning some JavaScript. It had me do a couple Codecademy courses which were helpful starting out. Next up was reading Eloquent JavaScript and I hit a learning wall. At this point, I took a step back and tried to figure out what I could do to learn JavaScript. Enter in Free Code Camp.</p>
                            <p>Free Code Camp has been a wonderful learning experience. I recommend it to anyone wanting to start a career in JavaScript or just learn about it. I have an increased confidence in JavaScript and have enjoyed the challenges and projects. I feel like I can go back to Eloquent JavaScript and understand what I’m reading. But that will have to wait.</p>
                            <p>Now that I feel like I have a grasp of JavaScript, it’s time to get back to learning Ruby on Rails. I have an aggressive plan to land a web developer job in June of 2016. Four months does not give me a lot of time, but working a full-time job doesn’t encompass my entire day. There is still plenty of day left after work to be dedicated, focused, and all-out determined to reach my goal.</p>
                            <p>Follow my journey on my blog and feel free to reach out through the connect form to get in touch. I look forward to hearing from you!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Connect Section -->
    <section class="connect-section" id="connect">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hr-section">
                        <h1 class="section-header">
                            CONNECT
                        </h1>
                    </div><a class="btn btn-default social-icons" href="https://twitter.com/thebrianemory" target="_blank"><i class="fa fa-twitter-square fa-lg"></i> Twitter</a> <a class="btn btn-default social-icons" href="https://www.linkedin.com/in/thebrianemory" target="_blank"><i class="fa fa-linkedin-square fa-lg"></i> LinkedIn</a> <a class="btn btn-default social-icons" href="https://github.com/thebrianemory" target="_blank"><i class="fa fa-github-square fa-lg"></i> GitHub</a><br>
                    <br>
                    <br>
                    <!-- Connect Form Start -->
          <div class="container">
            <div id="contact_form" class="row">
              <div class="col-md-12">
                <form role="form" id="feedbackForm" data-toggle="validator" data-disable="false">
                  <div class="form-group text-left">
                    <label class="control-label" for="name">Name *</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required/>
                      <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
                    </div>
                    <span class="help-block" style="display: none;">*Please enter your name.</span>
                  </div>
                  <div class="form-group text-left">
                    <label class="control-label" for="email">Email Address *</label>
                    <div class="input-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required/>
                      <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
                    </div>
                    <span class="help-block" style="display: none;">*Please enter a valid e-mail address.</span>
                  </div>
                  <div class="form-group text-left">
                    <label class="control-label" for="email">Subject *</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your subject" required/>
                      <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
                    </div>
                    <span class="help-block" style="display: none;">*Please enter a valid subject.</span>
                  </div>
                  <div class="form-group text-left">
                    <label class="control-label" for="message">Message *</label>
                    <div class="input-group">
                      <textarea rows="5" cols="30" class="form-control" id="message" name="message" placeholder="Enter your message" style="resize:none" required></textarea>
                      <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
                    </div>
                    <span class="help-block" style="display: none;">*Please enter a message.</span>
                  </div>
                  <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LdkCwwTAAAAAFxv10xzE1NZo--npFFK5sA6rGe_"></div>
                    <span class="help-block text-left" style="display: none;">*Please check that you are not a robot.</span>
                  </div>
                  <span class="help-block text-left" style="display: none;">*Please enter the security code.</span>
                  <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg connect-button" data-loading-text="Sending..." style="display: block; margin-top: 10px;">Send Message</button>
                </form>
              </div>
            </div>
            <hr>
          </div>
          <!-- Connect Form End -->
                </div>
            </div>
        </div>
    </section><!-- Footer -->
    <div class="container">
        <footer class="footer">
            <p>
                &copy; Brian Emory 2016
            </p>
        </footer>
    </div><!-- Back To Top Button -->
    <div id="back-top">
        <a class="page-scroll btn btn-primary" href="#page-top"><i class="fa fa-angle-double-up"></i></a>
    </div><!-- End Back To Top Button -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
    </script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'>
    </script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'>
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.7/jqBootstrapValidation.min.js'>
    </script>
    <script src='https://www.google.com/recaptcha/api.js'>
    </script>
    <script src='assets/js/contact-form.js'>
    </script>
    <script src="js/index.js">
    </script>
    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-66456128-2', 'auto');
          ga('send', 'pageview');
    </script>
</body>
</html>
