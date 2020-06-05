<?php
include('db_conn.php');
$title = $_POST['Cartitle'];

echo $title;

$sql = "SELECT * FROM `Car` WHERE `title` = '$title';";
$result = mysqli_query($link, $sql);
$row_nums = mysqli_num_rows($result);

echo $row_nums;
if( $row_nums > 0 ){
    echo "
    <table border=1>
        <tr>
            <th>name</th>
            <th>c.c</th>
            <th>color</th>
            <th>door</th>
            <th>people</th>
        </tr>";
    for($i = 0;$i<$row_nums;$i++){
        $row = $result->fetch_row();
        echo "<tr>
                <td>". $i."</td>
                <td>". row[1]."</td>
                <td>". row[2]."</td>
                <td>". row[3]."</td>
                <td>". row[4]."</td>
                </tr>";
    }
    echo "</table>";
}