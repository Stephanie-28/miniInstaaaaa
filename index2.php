<pre>
    <?php 
        // var_dump($_FILES);
        $chemin = $_FILES["fichier"]["tmp_name"];
        $fichier = $_FILES["fichier"]["name"];
        move_uploaded_file($chemin, "photos/" . $fichier);
?>
<?php 
// $file_names =[];
//     $photos_dir = opendir("photos");
//     do {
//         $file_name = readdir($photos_dir);
//         if ($file_name && $file_name != "." && $file_name != ".." && $file_name != "/"){
//             array_push($file_names,$file_name);
//             sort($file_names);
//         }
//     } 
//     while ($file_name);
?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <section class="the one">
            <h1>MINI INSTA</h1>
            <p>Upload réussi !</p>
        <div class="fichiers">
            <?php foreach ($file_names as $file_name): ?>
                <img src="photos/<?= $file_name; ?>">
            <?php endforeach; ?>
        </div>
        <div>
            <a href="index.php">retour d'accueille</a>
        </div>
    </section>
</body>
</html>