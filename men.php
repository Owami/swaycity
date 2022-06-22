<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once('includes/meta.php'); ?>
  </head>
  <body>

    <?php include_once('includes/nav.php'); ?>
	<?php include_once('admin/core/connect.php'); ?>
<?php 
$statement2 = $connect->prepare("SELECT * FROM inventory_2");
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
		
		<section class="ftco-section " style="background-color: black;">
    	<div class="container-fluid">
    		<div class="row">
			<?php 
				foreach ($data as $key => $value) {
					print_r('
						<div class="col-sm col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="images/men-'.$value->id.'.jpg" alt="">
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
										<a href="product-single?prid='.$value->id.'&cat=men" class="add-to-cart"><span>View</span></a>
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

    <footer class="ftco-footer  ftco-section" style="background-color: black;">
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
<script>
  $(document).ready(function(){

  var quantitiy=0;
      $('.quantity-right-plus').click(function(e){
          
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($('#quantity').val());
          
          // If is not undefined
              
              $('#quantity').val(quantity + 1);

            
              // Increment
          
      });

        $('.quantity-left-minus').click(function(e){
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($('#quantity').val());
          
          // If is not undefined
        
              // Increment
              if(quantity>0){
              $('#quantity').val(quantity - 1);
              }
      });
      
  });
</script>
<script>
	/* Open the sidenav */
	function openNav() {
	document.getElementById("mySidenav").style.width = "100%";
	}

	/* Close/hide the sidenav */
	function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	} 
  </script>
  <script>
	  var check = false;

  function changeVal(el) {
    var qt = parseFloat(el.parent().children(".qt").html());
    var price = parseFloat(el.parent().children(".price").html());
    var eq = Math.round(price * qt * 100) / 100;
    
    el.parent().children(".full-price").html( eq + " Rands" );
    
    changeTotal();			
  }

  function changeTotal() {
    
    var price = 0;
    
    $(".full-price").each(function(index){
      price += parseFloat($(".full-price").eq(index).html());
    });
    
    price = Math.round(price * 100) / 100;
    var tax = Math.round(price * 0.05 * 100) / 100
    var shipping = parseFloat($(".shipping span").html());
    var fullPrice = Math.round((price + tax + shipping) *100) / 100;
    
    if(price == 0) {
      fullPrice = 0;
    }
    
    $(".subtotal span").html(price);
    $(".tax span").html(tax);
    $(".total span").html(fullPrice);
  }

  $(document).ready(function(){
    
    $(".remove").click(function(){
      var el = $(this);
      el.parent().parent().addClass("removed");
      window.setTimeout(
        function(){
          el.parent().parent().slideUp('fast', function() { 
            el.parent().parent().remove(); 
            if($(".product2").length == 0) {
              if(check) {
                $("#cart").html("<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, please take a second and heart this Pen on <a href='https://codepen.io/ziga-miklic/pen/xhpob'>CodePen</a>. Thank you!</p>");
              } else {
                $("#cart").html("<h1>No products!</h1>");
              }
            }
            changeTotal(); 
          });
        }, 200);
    });
    
    $(".qt-plus").click(function(){
      $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
      
      $(this).parent().children(".full-price").addClass("added");
      
      var el = $(this);
      window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
    });
    
    $(".qt-minus").click(function(){
      
      child = $(this).parent().children(".qt");
      
      if(parseInt(child.html()) > 1) {
        child.html(parseInt(child.html()) - 1);
      }
      
      $(this).parent().children(".full-price").addClass("minused");
      
      var el = $(this);
      window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
    });
    
    window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);
    
    $(".btn2").click(function(){
      check = true;
      $(".remove").click();
    });
  });
</script>
<?php include_once('includes/cartscript.php'); ?>
  </body>
</html>