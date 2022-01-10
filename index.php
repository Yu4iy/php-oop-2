<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/User.php";
?>


<?php
$testUser = new User('Paolo','Duzioni', 3);
var_dump($testUser);
$product = new Product('Zuchini', 25 , 999);
var_dump($product);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>


<body>
	<p><?php echo $testUser->GET_firstName() ?></p>
	<p><?php echo $testUser->GET_lastName() ?></p>
	<p><?php echo $product->GET_name() ?></p>
	<p><?php echo $product->GET_price()?>$</p>
</body>

</html>


