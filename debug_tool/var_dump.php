<?php
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);

$a = 1;
var_dump( $a );
echo "<br>";
$b = 1.1;
var_dump( $b );
echo "<br>";
$c = "hello";
var_dump( $c );
echo "<br>";
$d = array( $a, $b );
var_dump( $d );
echo "<br>";
$e = true;
var_dump( $e );

echo "<br>";
var_dump( $a,  $b, $c, $d, $e);

?>