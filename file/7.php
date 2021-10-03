<?php
$file = 'readme.txt';
$newfile = 'example.txt.bak';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}else {
    echo "succeed to copy $newfile...\n";   
}
?>