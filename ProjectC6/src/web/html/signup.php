<?php 
require('connect.php');
$con = mysqli_connect($server , $db_username , $db_password);
mysqli_select_db($con,$db_name);
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['submit'])){
exit("錯誤執行");
}//判斷是否有submit操作
$name=$_POST['email'];//post獲取表單裡的name
$password=$_POST['pwd'];//post獲取表單裡的password
$q="insert into 帳號資料 values ('$name','$password')";//向資料庫插入表單傳來的值的sql
$reslut=mysqli_query($con,$q);//執行sql
if (!$reslut){
die('Error: ' . mysqli_error());//如果sql執行失敗輸出錯誤
}else{
echo "註冊成功";//成功輸出註冊成功
}
?>