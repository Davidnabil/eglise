<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<header>
<div class="title">
    <img class="fit-picture" src="img/Top-cross.png" alt="cross" >
    <h1> chant/ترانيمٌ وألحانٌ</h1>
    <div class="top-right">
        <ul><li><a href="https://www.instagram.com/david.nabel/">h</a></li>
        <li><a href="https://www.instagram.com/david.nabel/">h</a></li>
        <li><a href="https://www.instagram.com/david.nabel/">h</a></li></ul>
    </div>
</div>
</header>

<main>
<div class="middle">
    <p>تجربه تجربه</p>
    <?php
        include 'mysql_connect.php';
        $sql = "SELECT * FROM pdf";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo ($row["nom"] . "<br>") ;
            }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    ?>
</div>


</main>

<footer>
<div class="down">
    <ul>
        <li><a href="https://www.instagram.com/david.nabel/"><img class="fit-picture" src="img/insta.png" alt="cross"></a></li>
        <li><a href="twitter.com"><img class="fit-picture" src="img/Top-cross.png" alt="cross"></a></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <p>Copyright ©2023. All Rights Reserved to David</p>
</div>
</footer>
</body>
</html>