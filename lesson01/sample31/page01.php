<?php
require('intax.php');

$price = 150;
$price_tax = inTax($price);
echo $price_tax;
?>
