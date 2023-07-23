<?php
$server="localhost";
$username="root";
$password="";
$db="reg";
$conn=mysqli_connect($server,$username,$password,$db);
$sql="SELECT * FROM `register` WHERE 1";
$row=mysqli_query($conn,$sql);
echo '<table border=1px solid cellspacing=2>
        <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Phone num</th>
        <th>Gender</th>
        <th>Faculty</th>
        <th>Remarks</th>
        </tr>';
while($result=mysqli_fetch_assoc($row)){
    echo '<tr>
                <td>'.$result['Name'].'</td>
                <td>'.$result['Address'].'</td>
                <td>'.$result['Phone Num'].'</td>
                <td>'.$result['Gender'].'</td>
                <td>'.$result['Faculty'].'</td>
                <td>'.$result['Remarks'];
    echo '<br>';
}
echo '</table>';
?>

}