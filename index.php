<!DOCTYPE html>
<?php
$con=mysqli_connect('localhost','jymaxjgd_anbar','Yusif1996','jymaxjgd_kinobaza');
$tarix=date('Y-m-d H:i:s');
?>
<html class="wide wow-animation" lang="en">
    <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,600,700,800%7CPoppins:600">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <<div class="preloader">
      
    </div>
    <div class="page">
      <!--Header Main Classic-->
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap header-main-classic">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-236x34.png" alt="" width="118" height="17"/><img class="brand-logo-light" src="images/logo-inverse-236x34.png" alt="" width="118" height="17"/></a>
                </div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="movies-2.php">Movies</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="blog.html">Blog</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-menu rd-navbar-dropdown">
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog post</a></li>
                    </ul>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                    <!-- RD Navbar Megamenu-->
                    <ul class="rd-menu rd-navbar-megamenu">
                      <li class="rd-megamenu-item">
                        <p class="rd-megamenu-title">Elements</p>
                        <div class="rd-megamenu-block">
                          <ul class="rd-megamenu-list">
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Buttons</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-system.html">Grid System</a></li>
                          </ul>
                          <ul class="rd-megamenu-list">
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icon-lists.html">Icon Lists</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tables.html">Tables</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="counters-and-accordions.html">Counters &amp; Accordions</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="rd-megamenu-item">
                        <p class="rd-megamenu-title">Pages</p>
                        <div class="rd-megamenu-block">
                          <ul class="rd-megamenu-list">
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="categories.php">Categories</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="about.php">About</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="our-team.php">Our Team</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="contact-us.php">Contact Us</a></li>
                          </ul>
                          <ul class="rd-megamenu-list">
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404-page.html">404 Page</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="coming-soon.html">Coming Soon</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy policy</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search results</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <!--RD Navbar Search-->
              <div class="rd-navbar-search">
                <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                <form class="rd-search rd-search-custom" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                  <div class="form-wrap">
                    <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                  </div>
                  <button class="rd-search-form-submit fa-search" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!-- FScreen-->
      <section class="section bg-custom-1 position-relative context-dark">
        <div class="swiper-container swiper-slider swiper-slider-1" data-loop="true" data-autoplay="50000" data-simulate-touch="false">
          <div class="swiper-wrapper">
    <?php 
        $sec = mysqli_query($con,"SELECT * FROM kinolar ORDER BY id DESC LIMIT 0,3");
        while($info=mysqli_fetch_array($sec))
            {?>
            <div class="swiper-slide">
              <div class="swiper-slide-caption main-section text-center text-md-start">
                <div class="container">
                  <div class="row row-40 flex-column-reverse flex-md-row justify-content justify-content-lg-between">
                    <div class="col-md-6 col-lg-5 col-xl-6">
                      <ul class="list-movie-info" data-caption-animate="fadeIn" data-caption-delay="50">
                        <li><?=$info['country']?></li>
                        <li><?=$info['release_date']?></li>
                        <li>imdb: <?=$info['vote_average']?>\10</li>
                      </ul>
                      <h1 class="block-8" data-caption-animate="fadeInUp" data-caption-delay="100"><?=$info['title']?></h1>
                      <p class="block-9" data-caption-animate="fadeInUp" data-caption-delay="250"><?=$info['overview']?></p>
                      <div class="text-center text-lg-start button-custom-offset"><a class="button button-custom" href="https://youtu.be/d5k9CILJivQ" data-lightgallery="item" data-caption-animate="fadeInUp" data-caption-delay="450"><span class="icon mdi mdi-play"></span>Watch now</a></div>
                    </div>
                    <div class="col-md-4 col-lg-7 col-xl-5 onset-1">
                      <div class="slider-image onset-left-2">
                      <img src="<?='https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$info['poster']?>" alt="" width="422" height="522"/>
                        <div class="slider-image-title"><span><?=$info['genre']?></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    <?php
                
            }
            
    ?>        
            
          </div>
          <!--Swiper Pagination-->
          <div class="swiper-pagination"></div>
          <!--Swiper Navigation-->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="figure-classic-pattern"></div>
        <div class="figure-classic-pattern v-2"></div>
        <div class="figure-classic-pattern v-3"></div>
      </section>
      <!--Popular Movies-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="text-center wow fadeIn" data-wow-delay="100">
            <h2>Popular Movies</h2>
            <p>Here are some of the most popular movies that our users & viewers enjoy.</p>
          </div>
          <div class="owl-carousel owl-theme-1 wow fadeIn" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-margin="15px" data-xxl-margin="40px" data-nav="true" data-dots="false" data-autoplay="true" data-wow-delay="100">
    <?php  
     $sec = mysqli_query($con,"SELECT * FROM kinolar WHERE vote_average > 7 ORDER BY id DESC LIMIT 0,4 ");
     while($info=mysqli_fetch_array($sec))
            {echo'
            <div class="item">
              <div class="box-nina">
                <div class="box-nina-media"><a class="link-white" href="movie-page.php?id='.$info['id'].'"><img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$info['poster'].'" alt="" width="356" height="412"/></a>
                </div>
                <div class="box-nina-text">
                  <h4><a class="link-white" href="movie-page.php?id='.$info['id'].'"></a></h4>
                  <div class="box-nina-info"><span class="icon mdi mdi-calendar-today"></span><span>'.$info['genre'].'</span></div>
                </div>
              </div>
            </div>';}
            
    ?>        
            
          </div>
        </div>
      </section>
      <!--Trending TV Shows-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="text-center wow fadeIn" data-wow-delay="300">
            <h2>New releases</h2>
            <p>Check out the highly rated TV shows, available at Flixena.</p>
          </div>
          <div class="owl-carousel owl-theme-1 wow fadeIn" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-margin="15px" data-xxl-margin="40px" data-nav="true" data-dots="false" data-autoplay="true" data-wow-delay="450">
              
    <?php  
        $sec = mysqli_query($con,"SELECT * FROM kinolar ORDER BY id DESC LIMIT 3,5 ");
        while($info=mysqli_fetch_array($sec))
            {echo'
            <div class="item">
              <div class="box-nina">
                <div class="box-nina-text">
                  <h4><a class="link-white" href="movie-page.php?id='.$info['id'].'"></a></h4>
                  <div class="box-nina-info"><span class="icon mdi mdi-calendar-today"></span><span>'.$info['genre'].'</span></div>
                </div>
                <div class="box-nina-media"><a class="link-white" href="movie-page.php?id='.$info['id'].'"><img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$info['poster'].'" alt="" width="356" height="412"/></a>
                </div>
                
              </div>
            </div>';}
            
    ?>      
          </div>
        </div>
      </section>
      <!--Popular Categories-->
      <section class="section section-lg bg-gray-900 context-dark">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse align-items-center justify-content-xl-between">
            <div class="col-lg-4 col-xl-5 col-xxl-4">
              <div class="block-7">
                <h2 class="wow fadeIn">Popular <br> Categories</h2>
                <p class="text-2 block-10 mt-md-20 mt-xxl-35 wow fadeIn" data-wow-delay=".025s">All content at Flixena is divided into several categories. It helps you to easily navigate between them and find what you like.</p><a class="button button-lg button-primary mt-md-20 mt-xxl-44 wow fadeIn" href="categories.php" data-wow-delay=".05s">view all</a>
              </div>
            </div>
            <div class="col-lg-8 col-xl-7">
              <div class="row row-30">
    <?php   
        $sec = mysqli_query($con, "SELECT * FROM kinolar WHERE genre IN ('Action','Drama','Horror','Comedy','Family','Romance') GROUP BY genre");
        while($info = mysqli_fetch_array($sec))
        {echo'
                <div class="col-sm-6 wow fadeIn"><a class="destination-1 context-dark" href="cat-page.php?genre='.$info['genre'].'">
                    <figure class="destination-1-figure">
                      <div class="destination-1-image bg-image" style="background-image: url(images/destinations-1-363x260.jpg);"></div>
                    </figure>
                    <div class="destination-1-caption">
                      <p class="heading-4 destination-1-title">'.$info['genre'].'</p>
                    </div></a>
                </div>';
         }       
                
    ?>            
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Watch Anywhere-->
      <section class="section section-custom-2 bg-default">
        <div class="container">
          <div class="row row-40 row-60 justify-content-between">
            <div class="col-lg-5">
              <h5 class="wow fadeInUp" data-wow-delay=".025s">Download Our App</h5>
              <h2 class="style-title-2 wow fadeInUp" data-wow-delay=".05s">Watch Anywhere</h2>
              <h6 class="text-gray-500 font-weight-regular ls-2 wow fadeInUp" data-wow-delay=".075s">Install Flixena app for your device and enjoy high-quality movies and TV shows anywhere.</h6>
              <div class="button-wrap wow fadeInUp" data-wow-delay="1s"><a href="#"><img src="images/button-img-01-151x49.png" alt="" width="151" height="49"/></a><a href="#"><img src="images/button-img-02-153x49.png" alt="" width="153" height="49"/></a></div>
            </div>
            <div class="col-lg-7 parallax-scene-js">
              <div class="section-image-1"><img src="images/section-image-1-546x33.png" alt="" width="546" height="33"/>
                <div class="section-image-decorative-1">
                  <div class="layer" data-depth="-.25">
                    <div class="item"></div>
                  </div>
                </div>
                <div class="section-image-decorative-2">
                  <div class="layer" data-depth="+.25">
                    <div class="item"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- News-->
      <section class="section section-lg bg-gray-900 context-dark">
        <div class="container">
          <div class="text-center wow fadeIn" data-wow-delay=".020s">
            <h3 class="font-sec font-weight-sbold">News</h3>
          </div>
          <div class="row row-30 offset-top-1">
            <div class="col-sm-6 col-lg-3 wow fadeIn">
              <!-- Post Creative-->
              <article class="post-creative"><a class="post-creative-image" href="blog-post.html" style="background-image: url(images/home-2-8.jpg);"></a>
                <div class="post-creative-main">
                  <p class="post-creative-title"><a href="blog-post.html">Top 10 Movies to Watch This Summer</a></p>
                  <time class="post-creative-time" datetime="2021">September 12, 2021</time>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay=".025s">
              <!-- Post Creative-->
              <article class="post-creative"><a class="post-creative-image" href="blog-post.html" style="background-image: url(images/home-2-9.jpg);"></a>
                <div class="post-creative-main">
                  <p class="post-creative-title"><a href="blog-post.html">TV Shows & Movies About Superheroes</a></p>
                  <time class="post-creative-time" datetime="2021">September 13, 2021</time>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay=".05s">
              <!-- Post Creative-->
              <article class="post-creative"><a class="post-creative-image" href="blog-post.html" style="background-image: url(images/home-2-10.jpg);"></a>
                <div class="post-creative-main">
                  <p class="post-creative-title"><a href="blog-post.html">Unknown  Locations from Popular Movies</a></p>
                  <time class="post-creative-time" datetime="2021">September 14, 2021</time>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay=".075s">
              <!-- Post Creative-->
              <article class="post-creative"><a class="post-creative-image" href="blog-post.html" style="background-image: url(images/home-2-11.jpg);"></a>
                <div class="post-creative-main">
                  <p class="post-creative-title"><a href="blog-post.html">Top 5 Popular Movie Stars to Watch for in 2021</a></p>
                  <time class="post-creative-time" datetime="2021">September 15, 2021</time>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      
 <?php include "footer.php"; ?>