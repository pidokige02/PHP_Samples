<?php
session_save_path('./session');
session_start();  // logis 의 초입에 호출되야 하는 함수.
$_SESSION['title'] = '생활코딩2'; // server 단에 file 형태로 session directory 마래에 저장이 됨.
?>