
<?php
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$faculty=$_POST['faculty'];
$remarks=$_POST['remarks'];
$server="localhost";
$username="root";
$password="";
$db="reg";
$conn=mysqli_connect($server,$username,$password,$db);
/*if(isset($conn)){
    echo 'connection success "localhost/bca/index.php"';
}else{
    echo 'connectuon no';
}*/
$sql="INSERT INTO `register` (`Name`, `Address`, `Phone Num`, `Gender`, `Faculty`, `Remarks`) VALUES ('$name', '$address', '$phone', '$gender', '$faculty', '$remarks')";
$result=mysqli_query($conn,$sql);
if(isset($result)){
    echo "Data Inserted successfully";
}


?>