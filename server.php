<?php
$conn = mysqli_connect("sql100.byetcluster.com", "b22_34503113", "Sairam@11", "b22_34503113_noticeboard");
if ($conn-> connect_error){
    die("Connection faild:". $conn-> connect_error);
}
$sql ="SELECT text, date from noticeboard";
$result= $conn-> query($sql);
if ($result-> num_rows > 0) {
    while($row = $result-> fetch_assoc()){
        while ($row = $result-> fetch_assoc()){
            echo "<marquee><td>".$row["text"]. "</td><td>". $row["date"]."</td><marquee>";
        }
        echo "</table>";
}
else{
    echo "0 result";
}
$conn-> close();
}
?>