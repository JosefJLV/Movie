<?php
$con=mysqli_connect('localhost','jymaxjgd_anbar','Yusif1996','jymaxjgd_kinobaza');
$id = (int)$_GET['id'];
$tamsec = mysqli_query($con,"SELECT * FROM kinolar WHERE id='".$id."' ");
if(mysqli_num_rows($tamsec)>0)
{$taminfo = mysqli_fetch_array($tamsec);}
 
else
    {echo'<meta http-equiv="refresh" content="0; URL=index.php">';}

?>

<?php include "header.php";?>
<!DOCTYPE html>

<html class="wide wow-animation" lang="en">
  
      <section class="section section-lg">
        <div class="container">
          <div class="row row-30 flex-column-reverse flex-lg-row">
            <div class="col-lg-8">
              <article class="post-info inset-1">
                <h4 class="post-info-title"><?=$taminfo['title']?></h4>
                <div class="post-info-meta bg-gray-100">
                  <ul class="post-info-meta-list">
                    <li><span class="icon mdi mdi-calendar-blank"></span><span class="small-text font-weight-sbold"><?=$taminfo['release_date']?></span></li>
                    <li><span class="icon mdi mdi-star-outline"></span><span class="small-text font-weight-sbold">IMDB: <?=$taminfo['vote_average']?>\10</span></li>
                    <li><span class="icon mdi mdi-earth"></span><span class="small-text font-weight-sbold"><?=$taminfo['country']?></span></li>
                  </ul>
                </div>
                <p><?=$taminfo['overview']?></p>
                <table class="post-info-table">
                  <tr>
                    <td>Сountry</td>
                    <td><?=$taminfo['country']?></td>
                  </tr>
                  <tr>
                    <td>Cast</td>
                    <td>Leslie Alexander, Cameron Williamson, Brooklyn Simmons</td>
                  </tr>
                  <tr>
                    <td>Duration</td>
                    <td><?=$taminfo['runtime']?></td>
                  </tr>
                  <tr>
                    <td>Genre</td>
                    <td><?=$taminfo['genre']?></td>
                  </tr>
                </table>
                <h3 class="mt-40 mt-md-50 mt-lg-50 mt-xl-80">Trailer</h3><br>
                
                <iframe width="600" height="350" src="https://www.youtube.com/embed/<?=$taminfo['video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </article>
            </div>
            <div class="col-lg-4 text-center text-lg-start">
              <div class="movie-page-imageg"><img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2<?=$taminfo['poster']?>" alt="" width="375" height="491"/>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section footer-modern context-dark">
        <div class="footer-modern-main">
          <div class="container">
            <div class="row row-30 justify-content-lg-between">
              <div class="col-sm-5 col-md-3 col-lg-3">
                <p class="footer-modern-title">Useful Links</p>
                <div class="footer-modern-item-block">
                  <ul class="list list-1">
                    <li><a href="about.html">About</a></li>
                    <li><a href="blog.html">News</a></li>
                    <li><a href="our-team.html">Team</a></li>
                    <li><a href="#">Flixena App</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-7 col-md-5 col-lg-4">
                <p class="footer-modern-title">Categories</p>
                <div class="footer-modern-item-block" style="max-width: 300px;">
                  <div class="row row-13">
                    <div class="col-6">
                      <ul class="list list-1">
                        <li><a href="categories.html">Movies</a></li>
                        <li><a href="categories.html">TV Shows</a></li>
                        <li><a href="categories.html">Comedy</a></li>
                        <li><a href="categories.html">Sci-Fi</a></li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="list list-1">
                        <li><a href="categories.html">Cartoons</a></li>
                        <li><a href="categories.html">Horror</a></li>
                        <li><a href="categories.html">Other</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-3">
                <p class="footer-modern-title">Get in Touch</p>
                <div class="footer-modern-item-block">
                  <ul class="list list-1">
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="#">Customer Support</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-aside">
          <div class="container">
            <div class="footer-modern-aside-layout"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-236x34.png" alt="" width="118" height="17"/><img class="brand-logo-light" src="images/logo-inverse-236x34.png" alt="" width="118" height="17"/></a>
              <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>. All rights reserved.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
              <div>
                <div class="group group-sm"><a class="link-1 icon mdi mdi-instagram" href="#"></a><a class="link-1 icon mdi mdi-facebook" href="#"></a><a class="link-1 icon mdi mdi-youtube-play" href="#"></a></div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>