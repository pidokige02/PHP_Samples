<?php
    $filename = 'writeme.txt';
    if (is_writable($filename)) {
        echo 'The file is writable';
    } else {
        echo 'The file is not writable';
    }
?>