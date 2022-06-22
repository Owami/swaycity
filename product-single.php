<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once('includes/meta.php'); ?>
  </head>
  <body>

    <?php include_once('includes/nav.php'); ?>
    <?php include_once('admin/core/connect.php'); ?>
    <?php 
    $table = $_GET['cat'];
    
    switch ($table) {
      case 'women':
        $tablereal = 'inventory_1';
        break;
      case 'men':
        $tablereal = 'inventory_2';
        break;
      case 'acc':
        $tablereal = 'inventory_3';
        break;
      
      default:
        # code...
        break;
    }
    $statement2 = $connect->prepare("SELECT * FROM $tablereal WHERE id = :id");
    $statement2->execute(array(':id' => $_GET['prid']));
    $statement2->execute();
    $data = $statement2->fetchAll(PDO::FETCH_OBJ);
    ?>
    <!-- END nav -->
		
		<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Product <?php print(ucwords($table)); ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index">Product</a></span> <span><?php print(ucwords($table)); ?></span></p>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/<?php print($data[0]->pic);?>" class="image-popup"><img src="images/<?php print($data[0]->pic);?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3 style="color: #fff !important;"><?php print($data[0]->p_name);?></h3>
    				<p class="price" ><span style="color: #fff !important;">R <?php print($data[0]->costper);?></span></p>
    				<p style="color: #fff !important;"><?php print($data[0]->cat);?></p>
					<input type="hidden" id="itemid" name="item" value="<?php print($data[0]->p_name);?>"></input>
					<input type="hidden" id="priceid" name="price"  value="<?php print($data[0]->costper);?>"></input>
					<input type="hidden" id="descriptionid" name="description" value="<?php print($data[0]->cat);?>"></input>
          <input type="hidden" id="productid" name="description" value="<?php print($data[0]->id);?>"></input>
					<input type="hidden" id="imageid" name="image" value="images/<?php print($data[0]->pic);?>"></input>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="size" id="sizeid" class="form-control">
	                  	<option value="small">Small</option>
	                    <option value="medium">Medium</option>
	                    <option value="large">Large</option>
	                    <option value="extra-large">Extra Large</option>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="<?php print($data[0]->quantity);?>">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
          	</div>
          	<p><button class="btn btn-primary py-3 px-5 add_to_cart"  >Add to Cart</button></p>
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