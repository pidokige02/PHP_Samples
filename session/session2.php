<?php
ini_set("display_errors", "1");
session_save_path('./session');
session_start();  // logic의 초입에 호출되야 하는 함수.
echo $_SESSION['title']; // ㄴ
echo "<br>";
echo file_get_contents('./session/sess_'.session_id());  // session id는 cookie 형태로 browser에 저장이 된다
?>