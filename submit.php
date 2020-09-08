<?php
$cars = filter_input(INPUT_POST, 'cars');
$spz = filter_input(INPUT_POST, 'spz');
?>

Auto: <?php echo $cars;?> <br>
spz: <?php echo $spz;?> <br>