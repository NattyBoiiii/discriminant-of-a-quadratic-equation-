<?php
if(isset($_POST['submit'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    
    $discriminant = ($b * $b) - (4 * $a * $c);
    
    echo "<h3>The discriminant of the quadratic equation is: $discriminant</h3>";
}
?>