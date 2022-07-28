<?php
$dbcon= mysqli_connect('localhost','root','','nur_ecom')or die('connection Failed') ;

$sql = "SELECT * FROM `user` ";
$result = mysqli_query($dbcon,$sql)or die('sql query failed');
$outPut = "";
if(mysqli_num_rows($result) > 0){
    $outPut = '<table>
                <tr>
                    <th>Frist Name</th>
                    <th>last Name</th>
                </tr> ';
                while($row = mysqli_fetch_assoc($result)){
                    $outPut .="<tr><td>{$row['frist_name']}</td><td>{$row['last_name']}</td></tr>";
                }
                $outPut .="</table>";
                mysqli_close($dbcon);
                echo $outPut;
}else{
    echo "<h2>no data found</h2>";
}

?>