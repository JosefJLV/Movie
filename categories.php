<?php include "header.php";?>
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-30">
<?php
    $sec = mysqli_query($con, "SELECT genre FROM kinolar GROUP BY genre");
        while($info = mysqli_fetch_array($sec))
        {echo'
            <div class="col-6 col-sm-4"><a class="destination-1 context-dark" href="cat-page.php?genre='.$info['genre'].'">
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
      </section>
      <!-- Page Footer-->
      <?php include "footer.php";?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>