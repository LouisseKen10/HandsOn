<?php
$medicines = ["Mycracof", "Decolgen", "Allerta"];

$coughMeds = "Mycracof";
$coldsMeds = "Decolgen";
$allergyMeds = "Allerta";

$needs = "Cough Meds";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Medicines</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include('includes/header.php'); ?>

<div class="content-box">

    <h2>Available Medicines</h2>
    <p>
        <?php
        foreach ($medicines as $med) {
            echo "Available medicine: $med<br>";
        }
        ?>
    </p>

    <h2>What are you looking for?</h2>
    <p class="status">
        <?php
        if ($needs == "Cough Meds") {
            echo "Here are the cough meds: $coughMeds";
        }
        elseif ($needs == "Cold Meds") {
            echo "Here are the cold meds: $coldsMeds";
        }
        elseif ($needs == "Allergy Meds") {
            echo "Here are the allergy meds: $allergyMeds";
        }
        else {
            echo "We dont have that kind of Meds";
        }
        ?>
    </p>

</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
