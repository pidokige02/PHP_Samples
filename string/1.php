<?php
echo "hello world\n";  // 쌍타옴표안의 \n은 줄바꿈이 됨 (source ode 보기를 하면 나타남)  
echo 'hello world\n';  // 단타옴표안의 \n은 그대로 해석이됨 


//escapig
echo '<br>';
echo '<h3> escaping </h3>';
echo 'hello \'world\'';
echo "hello \"world\"";


echo '<br>';
echo '<h3> 문자열 안에서 변수를 사용 </h3>';
$a = array('hello', 'world');
echo "생활코딩의 공식인사는 {$a[0]} {$a[1]}입니다";
echo '생활코딩의 공식인사는 {$a[0]} {$a[1]}입니다';      // 딘따옴표의 경우 문자를 그대로 해석함
echo '생활코딩의 공식인사는 '.$a[0].' '.$a[1].'입니다';  // 딘따옴표의 경우 문자열 안에서 변수를 사용할 경우.

echo '<br>';
echo '<h3> 문자와 문자를 더 할 때는 '.'(마침표)를 사용 </h3>';
$a = "생활";
$b = "코딩";
echo $a.$b;
?>