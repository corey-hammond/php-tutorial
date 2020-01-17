<?php
$f_name = "John";
$l_name = "Doe";
$age = 34;
$height = 6.3;
$can_vote = true;
$address = array('street'=> '123 Main St',
'city'=> 'Pittsburgh');
$state = NULL;
define('PI', 3.1415);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tutorial</title>
</head>
<body>
    
    <p>Name: <?php echo $f_name . ' ' . $l_name; ?></p>

</body>
</html>