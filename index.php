<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/User.php";
?>


<?php
// ISTANZE OGGETTI
$user1 = new user('Paolo', 'Duzioni', 254, 420, 'iPhone',1 , 412);
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
<p>User: <?php echo $user1->GET_fullName() ?></p>
<p>Price: <?php echo $user1->GET_discount()?>$</p>
	<hr>

</body>

</html>


<?php

