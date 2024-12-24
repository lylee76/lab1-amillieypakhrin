<?php
function cars_needed($n) {
    return ceil($n / 5); 
}

$n = 12; 
echo "Number of cars needed: " . cars_needed($n);
?>
