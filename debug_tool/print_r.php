<pre>
<?php
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);

echo "<br>";

$b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('l', 'm', 'n'));
$results = print_r($b, true); // $results now contains output from print_r
echo $results;

?>
</pre>