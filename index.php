<?php
$days = 'Wednesday';
$info = match($days){
    'Monday'=> 'We are open on Monday',
    'Tuesday'=> 'We are open on Tuesday',
    'Wednesday'=> 'We are open on Wednesday' ,
    'Thursday' => 'We are open on Thursday',
    'Friday' => 'We are open on Friday',

    default => 'We are open',
};
switch ($days){
    case 'Saturday':
        $info = 'We are closed on weekends (Sat - Sun)';
        break;
    case 'Sunday':
        $info = 'We are closed on weekends (Sat - Sun)';
        break;
    default:
        $info = 'We are open';
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Variables</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('includes/header.php'); ?>
    <div class="content-box">
        <h2><?= $days ?></h2>
        <p class="status">Status: <?= $info ?></p>
    </div>
</body>


<?php include('includes/footer.php'); ?>
</html>