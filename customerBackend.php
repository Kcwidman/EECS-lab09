<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$password = $_POST["password"];
$wraithQuant = $_POST["wraithQuant"];
$firebirdQuant = $_POST["firebirdQuant"];
$aviarQuant = $_POST["aviarQuant"];
$shipping = $_POST["shipping"];

$wraithCost = $wraithQuant * 16;
$firebirdCost = $firebirdQuant * 15;
$aviarCost = $aviarQuant * 12;
$shippingCost = 0;

if($shipping == "Free 7 day") $shippingCost = 0;
if($shipping == "$50 over night") $shippingCost = 50;
if($shipping == "$5 three day") $shippingCost = 5;

$totalCost = $wraithCost + $firebirdCost + $aviarCost + $shippingCost;
?>

<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css"/>
<body>

<p>
    Thank you for your purchase! Below is your reciept.<br>
    Password: <?php echo "$password";?>
<p>
<table align="center">
    <tr>
        <th></th>
        <th>Quantity</th>
        <th>Cost per item</th>
        <th>Sub-total</th>
    </tr>
    <tr>
        <th>Star Wraith</th>
        <td><?php echo "$wraithQuant";?></td>
        <td>$16.00</td>
        <td><?php echo "$$wraithCost.00";?> </td>
    </tr>
    <tr>
    <th>Champion Firebird</th>
        <td><?php echo "$firebirdQuant";?></td>
        <td>$15.00</td>
        <td><?php echo "$$firebirdCost.00";?> </td>
    </tr>
    <tr>
        <th>Aviar X3</th>
        <td><?php echo "$aviarQuant";?></td>
        <td>$12.00</td>
        <td><?php echo "$$aviarCost.00";?> </td>
    </tr>
    <tr>
        <th>Shipping</th>
        <td colspan="2"><?php echo "$shipping";?></td>
        <td><?php echo "$$shippingCost.00";?> </td>
    </tr>
    <tr>
        <th colspan="3">Total Cost</th>
        <td><?php echo "$$totalCost.00";?> </td>
    </tr>
</table>
</body>
</head>
</html>