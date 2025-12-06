<?php

$tax_rate = 0.12; 

function calculate_running_total($price, $quantity)
{
    global $tax_rate;       
    static $running_total = 0; 

    $total = $price * $quantity;
    $tax   = $total * $tax_rate;

    $running_total = $running_total + $total + $tax;
    return $running_total;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Total</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include('includes/header.php'); ?>

<div class="content-box">

    <h2>Medicine Total Summary</h2>

    <table style="margin: 0 auto; text-align: left; color: white;">
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Running Total</th>
        </tr>

        <tr>
            <td>Mycracof</td>
            <td>₱50</td>
            <td>5</td>
            <td>₱<?= calculate_running_total(50, 5) ?></td>
        </tr>

        <tr>
            <td>Decolgen</td>
            <td>₱55</td>
            <td>3</td>
            <td>₱<?= calculate_running_total(55, 3) ?></td>
        </tr>

        <tr>
            <td>Allerta</td>
            <td>₱55</td>
            <td>4</td>
            <td>₱<?= calculate_running_total(55, 4) ?></td>
        </tr>
    </table>

</div>

<?php include('includes/footer.php'); ?>
</body>
</html>
