<?php
$con = mysqli_connect("localhost", "ID201801567", "PW201801567", "ecommerce") or die("MySQL 접속 실패!!");

$address =$_POST["address"];

$sql ="
UPDATE CustomerTBL SET address='".$address."'
";

$ret = mysqli_query($con, $sql);

if($ret) {
    echo "수정 완료";
}

else {
    echo "CustomerTBL 데이터 수정 실패!!!"."<BR>";
    echo "실패 원인 :".mysqli_error($con);
    echo "<BR> <A HREF='main.html'> < 초기 화면 </A> ";
    exit();
}

mysqli_close($con);
?>