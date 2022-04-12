<?php
    // Includo il file PHP contenente l'array dei dischi
    include __DIR__ . './data_dischi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>
</head>
<body>
    
    <main>
        <div class="container">
            <?php
                // Con un ciclo FOREACH genero una card per ogni disco contenente immagine, nome, autore e anno d'uscita
                foreach ($array_dischi as $disco) { ?>
                    <div class="card">
                        <img src="<?= $disco['poster'] ?>" alt="<?= $disco['title'] ?>">
                        <h2><?= $disco['title'] ?></h2>
                        <p><?= $disco['author'] ?></p>
                        <p><?= $disco['year'] ?></p>
                    </div> <?php
                } ?>
        </div>
    </main>
    
</body>
</html>