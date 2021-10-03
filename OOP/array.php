<h1>Function Style</h1>
<?php
$adata = array('a', 'b', 'c');
//$adata = ['a', 'b', 'c'];  //sam as above declaraton for array

array_push($adata, 'd');
foreach($adata as $item){
  echo $item.'<br>';    //fetch each item in adata
}
var_dump(count($adata));
?>
<h1>Object Style</h1>
<?php
$odata = new ArrayObject(array('a', 'b', 'c'));
$odata->append('d');
foreach($odata as $item){
  echo $item.'<br>';
}
var_dump($odata->count());
?>