<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once('includes/meta.php'); ?>
  </head>
  <body>

    <?php include_once('includes/nav.php'); ?>
	<?php include_once('admin/core/connect.php'); ?>
<?php 
$statement2 = $connect->prepare("SELECT * FROM inventory_1");
$statement2->execute();
$data = $statement2->fetchAll(PDO::FETCH_OBJ);
?>
    <!-- END nav -->
		
		<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Collection</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Product</span></p>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row">
			<?php 
				foreach ($data as $key => $value) {
					print_r('
						<div class="col-sm col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="">
									<span class="status">30%</span>
								</a>
								<div class="text py-3 px-3">
									<h3><a href="#">'.$value->p_name.'</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span class="price-sale">R'.$value->costper.'.00</span></p>
										</div>
										
									</div>
									<hr>
									<p class="bottom-area d-flex">
										<a href="product-single?prid='.$value->id.'" class="add-to-cart"><span>View</span></a>
									</p>
								</div>
							</div>
						</div>
					');
				}
			?>
    			
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
            	<h1 class="big">Subscribe</h1>
              <h2>Subcribe to our Newsletter</h2>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer bg-light ftco-section">
      <?php include_once('includes/footer.php'); ?>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><img class="img" src="images/logo1.png" alt="" style="max-width: 22%;display: block;margin-left: auto;margin-right: auto;width: 50%;margin-top: 15%;"></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>