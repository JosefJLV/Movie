<?php include "header.php"?>
<html class="wide wow-animation" lang="en">
  
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse">
            <div class="col-lg-4">
              <h4>Movies by Genre</h4>
              <div class="box-right">
                <div class="box-tina">
                  <ul class="box-tina-list">
<?php 
    $sec = mysqli_query($con, "SELECT genre FROM kinolar WHERE genre IN ('Action','Drama','Horror','Comedy','Family','Romance') GROUP BY genre");
        while($info = mysqli_fetch_array($sec))
                    {echo'
                        <li><a href="cat-page.php?genre='.$info['genre'].'">'.$info['genre'].'</a></li>';}
?>                  
                  </ul>
                </div>
                <h4>Trending Movies</h4>
                <div class="group-post-minimal">
                  <article class="post-minimal"><a class="post-minimal-media" href="blog-post.html"><img class="post-minimal-image" src="images/blog-post-5-79x78.jpg" alt="" width="79" height="78"/></a>
                    <div class="post-minimal-main">
                      <p class="post-minimal-title"><a class="link-black" href="blog-post.html">Top 10 Movies to Watch This Summer</a></p>
                      <time class="post-minimal-time" datetime="2021">May 12, 2021</time>
                    </div>
                  </article>
                  <article class="post-minimal"><a class="post-minimal-media" href="blog-post.html"><img class="post-minimal-image" src="images/blog-post-6-79x78.jpg" alt="" width="79" height="78"/></a>
                    <div class="post-minimal-main">
                      <p class="post-minimal-title"><a class="link-black" href="blog-post.html">TV Shows & Movies About Superheroes</a></p>
                      <time class="post-minimal-time" datetime="2021">June 19, 2021</time>
                    </div>
                  </article>
                  <article class="post-minimal"><a class="post-minimal-media" href="blog-post.html"><img class="post-minimal-image" src="images/blog-post-7-79x78.jpg" alt="" width="79" height="78"/></a>
                    <div class="post-minimal-main">
                      <p class="post-minimal-title"><a class="link-black" href="blog-post.html">Unknown  Locations from Popular Movies</a></p>
                      <time class="post-minimal-time" datetime="2021">July 25, 2021</time>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <h4>Featured Movies</h4>
<?php  
    $sec = mysqli_query($con,"SELECT * FROM kinolar WHERE genre='".$_GET['genre']."' ORDER BY id DESC LIMIT 0,55");
    while($info = mysqli_fetch_array($sec))
            {echo' 
                <article class="tour-modern">
                <div class="tour-modern-media"><a class="tour-modern-figure" href="movie-page.html"><img class="tour-modern-image" src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$info['poster'].'" alt="" width="210" height="264"/></a></div>
                <div class="tour-modern-main">
                  <h5 class="tour-modern-title"><a href="movie-page.php?id='.$info['id'].'">'.$info['title'].'</a></h5>
                  <div class="tour-modern-info">'.$info['release_date'].', '.$info['genre'].'</div>
                  <p>'.$info['overview'].'</p>
                </div>
              </article>';
              }
?>             
              <nav class="pagination-outer text-center">
                <ul class="pagination">
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <?php include "footer.php"?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>