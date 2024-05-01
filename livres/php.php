<?php
include '../mysql_connect.php';
function livres ($id,$nom,$pages,$description,$img){
    $sql = "SELECT * FROM livres";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo ($row["nom"] . "<br>") ;
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
}
?>