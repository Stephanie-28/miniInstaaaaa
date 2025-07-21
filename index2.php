<pre>
    <?php 
        // var_dump($_FILES);
        $chemin = $_FILES["fichier"]["tmp_name"];
        $fichier = $_FILES["fichier"]["name"];
        move_uploaded_file($chemin, $fichier);
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
        <div>
            <!-- <img src="photos/chateau.jpg" alt="chateau"> -->
            <?php 
                $photos_dir = opendir("photos");
                do {
                    $file_name = readdir($photos_dir);
                    
                    echo "<img src='photos/$file_name'>";
                } 
                while ($file_name);
            ?>
        </div>
            <a href="index.php">retour d'accueille</a>
    </section>
</body>
</html>