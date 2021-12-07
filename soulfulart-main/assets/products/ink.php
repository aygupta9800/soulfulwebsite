<?php require "products-header.php" ?>
<?php
if(isset($_COOKIE['userid']))
$id=$_COOKIE['userid'];
else{
  setcookie("userid","", time() - 3600);
  header("location: error.php");
  exit();
  }
  $sql="SELECT * from marketplace.userstatus where userid=$id and status='active';";
  $res=$conn->query($sql);     
  if($res->num_rows <= 0)
  {
    $user=$res->fetch_assoc();   
    setcookie("userid","", time() - 3600);
    header("location: ../../error.php");
    exit();
  }
 $conn->close();
?>
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products - Ink paintings</h2>
          <p>Ink paintings are made with a liquid that consists of pigments or dyes and is used to color a surface to create illustrations and artworks.Ink is used for drawing with a pen, brush, or quill.Ink paintings feel like magic when they’re made.It has a rich texture in the paintings that are worth it.</p>
        </div>
        <?php
              if(isset($id) && $id!="")
              {?>
                <?php require "ratingreview.php" ?>
                <?php
              }
              ?>   
             <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ink/ink-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Landscape</h4>
                <p>Ink paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ink/ink-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tiger"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ink/ink-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Flower</h4>
                <p>Ink paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ink/ink-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Together"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ink/ink-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Landscape</h4>
                <p>Ink paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ink/ink-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bulb"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ink/ink-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature</h4>
                <p>Ink paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ink/ink-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Water Drops"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ink/ink-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature</h4>
                <p>Ink paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ink/ink-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lock"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-service">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ink/ink-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Landscape</h4>
                <p>Ink paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ink/ink-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landscape"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ink/ink-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mahal</h4>
                <p>Ink paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ink/ink-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Raw Peanut"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <img src="../../assets/img/ink/ink-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Birds</h4>
                <p>Ink paintings</p>
              </div>
              <div class="portfolio-links">
                <a href="../../assets/img/ink/ink-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Girl portrait"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        

      </div>
    </section><!-- End Portfolio Section -->
<?php require "products-footer.php" ?>