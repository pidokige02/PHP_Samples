<?php
    require 'vendor/autoload.php';
///    use Michelf\Markdown;
//    $my_html = Markdown::defaultTransform("#Hello World.");
//    echo $my_html;    
$Parsedown = new Parsedown();

echo $Parsedown->text('Hello _Parsedown_!');
?>