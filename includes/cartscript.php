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
            Swal.fire({
            
            icon: 'success',
            title: 'Added to cart',
            showConfirmButton: false,
            timer: 1500
            })
          }
        });
      }
      else
      {
        alert("Error");
      }
    });

    $(document).on('click', '.delete', function(){
      var product_id = $(this).attr("id");
      var action = 'remove';
      Swal.fire({
        title: 'Are you sure?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
        if (result.isConfirmed) {
                    $.ajax({
                url:"action.php",
                method:"POST",
                data:{product_id:product_id, action:action},
                success:function()
                {
                    load_cart_data();
                    
                }
                })
            Swal.fire(
            'Removed!',
            'The Item has been removed.',
            'success'
            )
        }
        })

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