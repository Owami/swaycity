<?php

//fetch_cart.php

session_start();

$total_price = 0;
$total_item = 0;

$output = '
<section>
';
if(!empty($_SESSION["shopping_cart"]))
{
    $supertotal = 0;
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
		$output .= '<article class="product2">
            <header>
                <a class="remove ">
                    <img src="'.$values["product_image"].'" alt="">

                    <h3> '.$values["product_name"].'</h3>
                </a>
            </header>

            <div class="content">

                <h1>'.$values["product_name"].'</h1>

                

                
                <div style="top: 75px" class="type small">'.$values["product_size"].'</div>
                <div style="top: 0px" class="type small"><button name="delete" class="btn btn-danger btn-xs delete" style="background-color: #000;border-color: #000;border-radius: 0px;" id="'. $values["product_id"].'">Remove</button></div>
            </div>

            <footer class="content">
                <span class="qt-minus">-</span>
                <span class="qt">'.$values["product_quantity"].'</span>
                <span class="qt-plus">+</span>

                <h2 class="full-price">
                    '.number_format($values["product_quantity"] * $values["product_price"], 2).'
                </h2>

                <h2 class="price">
                    '.$values["product_price"].'
                </h2>
            </footer>
        </article>';
		$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
        $total_item = $total_item + 1;
        // $supertotal =+ total_price;
	}
    $supertotal = number_format($total_price, 2);
    $tax = $total_price*15/100;
    $shipping = 400;
    $supertotal = $tax+$total_price+$shipping;
}
else
{
	$output .= '
    </section>
    ';
}
$output .= '</table></div>';
$data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	'R' . number_format($total_price, 2),
    'total_item'		=>	'['.$total_item .']',
    'shipping'          => 'R' . $shipping,
    'tax'               => 'R'.$tax,
    'grandTotal'        => 'R'.$supertotal,
);	

echo json_encode($data);


?>