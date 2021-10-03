<?php
    setCookie('cookie1', '생활코딩');
    setCookie('cookie2', time(), time()+60);  // time () 이 호출되는 시점부터 60초까지만 cookie data (time data) 가 유효하다.
?>