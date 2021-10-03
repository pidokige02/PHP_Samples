<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>   
<body>
<?php
// var_dump($_FILES);
// exit;

ini_set("display_errors", "1");  // 설정을 run time 에 변경함.
//$uploaddir = 'C:\BitNami\wampstack-5.4.20-0\apache2\htdocs\upload\file\\';
$uploaddir = './file/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);  // determine the target destination for file upload.
// basename 은 file 로서의 의미먼울 갖기 위함임.
echo $uploadfile;

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {  // 임시저장소 source ==> destination로 move 가 됨
    echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
} else {
    print "파일 업로드 공격의 가능성이 있습니다!\n";  // move_uploaded_file 안에 보안관련 logic 이 포함되어 있다.
}
echo '자세한 디버깅 정보입니다:';
print_r($_FILES);

print "</pre>";
?>

<!-- 
아래 위가 서로 같은 것임
<img src="file/<?php echo $_FILES['userfile']['name']; ?>"/>
<img src="file/<?=$_FILES['userfile']['name']?>"/>
-->

<img src="file/<?php echo $_FILES['userfile']['name']; ?>"/>
<img src="file/<?=$_FILES['userfile']['name']?>"/>

</body>
</html>