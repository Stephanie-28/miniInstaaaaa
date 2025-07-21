<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <section class="the one">
        <h1>MINI INSTA</h1>
        <p>Ajouté une photo !</p>
        <div>
            <form action="/index2.php" method="post" enctype="multipart/form-data">
                <input type="text" name="author" placeholder="Auteur"><br/>
                <input type="file" name="fichier" placeholder="Parcourir ...">
                <!-- <label for="name">Fichier</label> -->
                <button>envoyer</button>
            </form>
        </div>
        <?php
            $photos_dir = opendir("photos");
        // <img src="/photos/chateau 2.jpg" alt="chateau">
            $file_name = readdir($photos_dir);
            echo "<img src='photos/$file_name'>";
        ?>
    </section>
</body>
</html>