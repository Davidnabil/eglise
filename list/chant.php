<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<header>
<div class="title">
    <a href="../index.html"><img src="../img/Top-cross.png" alt="cross" style="width:46px;height:46px;"></a>
    <div class="top-right">
        <ul>
        <li><a href="chant.php">ترنيم و الحان</a></li>
        <li><a href="https://www.instagram.com/david.nabel/">معرفه المزيد</a></li>
        <li><a href="https://www.instagram.com/david.nabel/">الأجبية | كتاب السبع صلوات</a></li>
        <li><a href="index.html"><img src="img/sd.png" alt="cross" ></a></li>
        <li><a href="fr/index.php"><img src="img/fr.png" alt="cross" ></a></li>
    </ul>
    </div>
</div>
</header>

<main>
<div class="middle">
<div class="search-wrapper">
    <div class="input-holder">
        <input type="text" class="search-input" placeholder="Type to search" />
        <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
    </div>
    <span class="close" onclick="searchToggle(this, event);"></span>
    
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script  src="./search-bar.js"></script>
    <?php
        include '../livres/php.php';
    ?>
</div>


</main>

<footer>
    <div class="adresse">
        <div>
            <p>6 Chemin Des Plates</p>
            <p>69120 Vaulx-En-Velin</p>
            <p>Rhône France</p>
            <p>01-23-45-67-89</p>
            <p> 0123456789@test.fr</p>
        </div>
        <div>
            <p>Messages us !</p>
            <p>give us your opinian</p>
            <input type="text" placeholder="Tell us !" /><input type="button" value="Submit" />

        </div>

</div>
    <div  class="down">
    <ul>
        <li><a href="https://www.instagram.com/eglisedelaviergemarie/"><img src="../img/instgram.png" alt="cross"></a></li>
        <li><a href="https://www.facebook.com/viergemarie.stantoine"><img src="../img/face.png" alt="cross"></a></li>
        <li><a href="https://www.facebook.com/viergemarie.stantoine"><img src="../img/whats.png" alt="cross"></a></li>
    </ul>
    <p>Copyright ©2023. All Rights Reserved to David</p>
</div>
</footer>
</body>
</html>