<!DOCTYPE html>
<html>
<head>
    <title>Prices</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include('includes/header.php'); ?>

<div class="content-box">

    <h2>Medicine Prices</h2>

    <p>
        <?php
        $mycracof = 50;
        $decolgen = 55;
        $allerta = 55;
        $packs = 5;

        echo "<strong>Mycracof (₱{$mycracof})</strong><br>";
        $counter = 1;
        while ($counter <= $packs) {
            echo "{$counter} pc(s): ₱" . ($mycracof * $counter) . "<br>";
            $counter++;
        }

        echo "<br>";


        echo "<strong>Decolgen (₱{$decolgen})</strong><br>";
        $counter = 1;
        while ($counter <= $packs) {
            echo "{$counter} pc(s): ₱" . ($decolgen * $counter) . "<br>";
            $counter++;
        }

        echo "<br>";

        echo "<strong>Allerta (₱{$allerta})</strong><br>";
        $counter = 1;
        while ($counter <= $packs) {
            echo "{$counter} pc(s): ₱" . ($allerta * $counter) . "<br>";
            $counter++;
        }
        ?>
    </p>

</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
