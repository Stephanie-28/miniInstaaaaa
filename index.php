<?php 
            $photos_dir = opendir("photos");
            $file_name = readdir($photos_dir);
            // echo "<img src='photos/$file_name'>";

$file_names =[];
    $photos_dir = opendir("photos");
    do {
        $file_name = readdir($photos_dir);
        if ($file_name && $file_name != "." && $file_name != ".." && $file_name != "/"){
            array_push($file_names,$file_name);
            sort($file_names);
        }
    } 
    while ($file_name);
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
        <p>venez loué nos aibnb médiéval !!!</p>
        <div>
            <form action="/index2.php" method="post" enctype="multipart/form-data">
                <input type="text" name="author" placeholder="Auteur"><br/>
                <input type="file" name="fichier" placeholder="Parcourir ...">
                <button>envoyer</button>
            </form>
        </div>
        <div class="fichiers">
            <?php foreach ($file_names as $file_name): ?>
                <img src="photos/<?= $file_name; ?>">
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>