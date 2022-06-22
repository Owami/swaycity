<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once('includes/meta.php'); ?>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index"><img class="img imgchange" src="images/logo2.png" alt=""></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
			  
	        <ul class="navbar-nav ml-auto">
				
	          <li class="nav-item active"><a href="index" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="men">Men</a>
				  <a class="dropdown-item" href="women">Women</a>
				  <a class="dropdown-item" href="accessories">Accessories</a>
              </div>
            </li>
	          
	          <li class="nav-item cta cta-colored"><a  class="nav-link"><span onclick="openNav()" class="icon-shopping_cart itemnumbers" style="cursor: pointer;"></span></a></li>

	        </ul>
	      </div>

	    </div>
	  </nav>
    <!-- END nav -->
		
		<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Checkout</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
          </div>
        </div>
      </div>
    </div>
	<section class="ftco-section">
		  <div>
			<!--  -->
				<header id="site-header">
				<a class="navbar-brand" href="index"><img class="img " style="float: right;max-width: 13%" src="images/logo2.png" alt=""></a>
					<div class="container">
					
						<h1>Shopping cart <span></span></h1>
						
					</div>
				</header>

				<div class="container" id="cart_details">

					 
						

					

				</div>
			<!--  -->
			</div>
    </section>		
	<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 ftco-animate">
						<form action="#" class="billing-form bg-light p-3 p-md-5">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>

		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
                
	            </div>
	          </form><!-- END -->



	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		<div class="cart-detail cart-total bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span class="total_price"></span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Delivery</span>
		    						<span class="shippingcart"></span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Tax</span>
		    						<span class="taxcart"></span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span class="supertotal_price"></span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="cart-detail bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
											</div>
										</div>
									</div>
									<p><a href="#"class="btn btn-primary py-3 px-4">Place an order</a></p>
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

    <footer class="ftco-footer ftco-section" style="background-color: black;">
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
<script>  
  $(document).ready(function(){

    load_product();

    load_cart_data();
      
    function load_product()
    {
      $.ajax({
        url:"fetch_item.php",
        method:"POST",
        success:function(data)
        {
          $('#display_item').html(data);
        }
      });
    }

    function load_cart_data()
    {
      $.ajax({
        url:"fetch_cart.php",
        method:"POST",
        dataType:"json",
        success:function(data)
        {
          $('#cart_details').html(data.cart_details);
          $('.total_price').text(data.total_price);
          $('.taxcart').text(data.tax);
          $('.itemnumbers').text(data.total_item);
          $('.shippingcart').text(data.shipping);
          $('.supertotal_price').text(data.grandTotal);
        }
      });
    }

    $('#cart-popover').popover({
      html : true,
          container: 'body',
          content:function(){
            return $('#popover_content_wrapper').html();
          }
    });

    $(document).on('click', '.add_to_cart', function(){
      var product_id = $('#productid').val();
      var product_name = $('#itemid').val();
      var product_price = $('#priceid').val();
      var product_size = $('#sizeid').val();
      var product_image = $('#imageid').val();
      var product_quantity = $('#quantity').val();
      var action = "add";
      if(product_quantity > 0)
      {
        $.ajax({
          url:"action.php",
          method:"POST",
          data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity,product_size:product_size,product_image:product_image, action:action},
          success:function(data)
          {
            load_cart_data();
            alert("Item has been Added into Cart");
          }
        });
      }
      else
      {
        alert("lease Enter Number of Quantity");
      }
    });

    $(document).on('click', '.delete', function(){
      var product_id = $(this).attr("id");
      var action = 'remove';
      if(confirm("Are you sure you want to remove this product?"))
      {
        $.ajax({
          url:"action.php",
          method:"POST",
          data:{product_id:product_id, action:action},
          success:function()
          {
            load_cart_data();
            $('#cart-popover').popover('hide');
            alert("Item has been removed from Cart");
          }
        })
      }
      else
      {
        return false;
      }
    });

    $(document).on('click', '#clear_cart', function(){
      var action = 'empty';
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{action:action},
        success:function()
        {
          load_cart_data();
          $('#cart-popover').popover('hide');
          alert("Your Cart has been clear");
        }
      });
    });
      
  });

</script>
  </body>
</html>