<?php
$dbcon= mysqli_connect('localhost','root','','test')or die('connection Failed') ;

$sql = "SELECT * FROM `users` ";
$result = mysqli_query($dbcon,$sql)or die('sql query failed');
$outPut = "";
if(mysqli_num_rows($result) > 0){
    $outPut = '<table>
                <tr>
                    <th>SL</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Delete</th>
                </tr> ';
                foreach($result as $key=> $item){
                    $outPut .="<tr>
                    <td>{$key}</td>
                    <td>{$item['name']}</td>
                    <td>{$item['email']}</td>
                    <td><button type='button' class='btn btn-warning delete_btn' data-id='{$item['id']}'>Warning</button></td>
                    </tr>";
                }
                // while($row = mysqli_fetch_assoc($result)){
                //     $outPut .="<tr><td>{$row['name']}</td><td>{$row['email']}</td></tr>";
                // }
                // $outPut .="</table>";
                // mysqli_close($dbcon);
                echo $outPut;
}else{
    echo "<h2>no data found</h2>";
}

?>