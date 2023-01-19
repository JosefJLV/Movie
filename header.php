<?php
$con=mysqli_connect('localhost','jymaxjgd_anbar','Yusif1996','jymaxjgd_kinobaza');
$tarix=date('Y-m-d H:i:s');
$id = (int)$_GET['id'];
$tamsec = mysqli_query($con,"SELECT * FROM kinolar WHERE id='".$id."' ");
$taminfo = mysqli_fetch_array($tamsec)
?>
<head>
    <title>Movies</title>
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
    <div class="preloader">
      
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header page-header-1 context-dark">
        <div class="page-header-1-figure m-parallax">
          <div class="page-header-1-image m-parallax-image" style="background-image: url(<?='https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$taminfo['backdrop'] ?>);"></div>
        </div>
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="1px" data-xl-stick-up-offset="1px" data-xxl-stick-up-offset="1px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
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
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="movies-2.php">Movies</a>
                    </li>
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
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Formws</a></li>
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
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="about.html">About</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="our-team.html">Our Team</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="contact-us.html">Contact Us</a></li>
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
                
                        
                <div class="rd-navbar-collapse-outer context-light">
                  <button class="rd-navbar-collapse-toggle" data-multitoggle="#rd-navbar-collapse, #toggle-inner"><span class="rd-navbar-collapse-toggle-element" id="toggle-inner"><span></span></span><span class="rd-navbar-collapse-toggle-text">Menu</span></button>
                  <div class="rd-navbar-collapse" id="rd-navbar-collapse">
                    <button class="rd-navbar-collapse-close" data-multitoggle="#rd-navbar-collapse"><span class="rd-navbar-collapse-toggle-element active"><span></span></span></button>
                    <h5 class="font-weight-sbold">Address & Phone</h5>
                    <p class="ls-1 text-gray-500"> 9 Valley St. Brooklyn, NY 11203</p>
                    <p class="ls-1"><a class="link-gray-500" href="tel:#">1-800-346-6277</a></p>
                    <div class="divider divider-small"></div>
                    <h5 class="font-weight-sbold">Latest Movies</h5>
                    <!-- Swiper-->
                    <div class="swiper-container swiper-slider swiper-slider-pyramid" data-simulate-touch="false" data-direction="horizontal" data-slide-effect="coverflow">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <article class="tour-minimal context-dark">
                            <div class="tour-minimal-inner" style="background-image: url(images/movie-3-img-02-258x273.jpg);">
                              <div class="tour-minimal-header">
                                <div class="tour-minimal-badge">new</div>
                              </div>
                              <div class="tour-minimal-main">
                                <h6 class="tour-minimal-title"><a href="movie-page.html">Disconnected</a></h6>
                              </div>
                              <div class="tour-minimal-caption">
                                <p>A falsis, mortem festus acipenser.</p>
                              </div>
                            </div>
                          </article>
                        </div>
                        <div class="swiper-slide">
                          <article class="tour-minimal context-dark">
                            <div class="tour-minimal-inner" style="background-image: url(images/movie-3-img-03-258x273.jpg);">
                              <div class="tour-minimal-header">
                              </div>
                              <div class="tour-minimal-main">
                                <h6 class="tour-minimal-title"><a href="movie-page.html">Paradigm Lost</a></h6>
                              </div>
                              <div class="tour-minimal-caption">
                                <p>Fidelis exsul foris tractares bromium est.</p>
                              </div>
                            </div>
                          </article>
                        </div>
                        <div class="swiper-slide">
                          <article class="tour-minimal context-dark">
                            <div class="tour-minimal-inner" style="background-image: url(<?='https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$taminfo['backdrop'] ?>);">
                              <div class="tour-minimal-header">
                              </div>
                              <div class="tour-minimal-main">
                                <h6 class="tour-minimal-title"><a href="movie-page.html">Black Mirror</a></h6>
                              </div>
                              <div class="tour-minimal-caption">
                                <p>Rusticus, salvus scutums nunquam talem de.</p>
                              </div>
                            </div>
                          </article>
                        </div>
                      </div>
                      <!--Swiper Pagination-->
                      <div class="swiper-pagination"></div>
                    </div><a class="button button-default-outline" href="categories.php">View All Movies</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-placeholder"></div>
          </nav>
        </div>
        <section class="breadcrumbs-custom">
          <div class="breadcrumbs-custom-inner">
            <div class="container">
              <div class="breadcrumbs-custom-main m-parallax-content">
                <?php
                if(!isset($_GET['genre']))
                {echo'<h2 class="breadcrumbs-custom-title">Movies</h2>';}
                else
                {echo'<h2 class="breadcrumbs-custom-title">Categories</h2>';}
                
                ?>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit.</p>
<?php               if(isset($_GET['id']))
                   {echo '<div class="group group-sm group-middle"><a class="button button-sm button-icon button-icon-left button-light" data-lightgallery="item" href="https://youtu.be/d5k9CILJivQ"><span class="icon mdi mdi-play"></span>Watch Now</a></div>';}
?>
              </div>
              </div>
            </div>
            
          </div>
        </section>
       
      </header>
  