<?php
 $initialParagraphe = "Ciao a tutti, questo è il mio primo file php!";

 $paragrapheLength = strlen($initialParagraphe);

 $badWord = $_GET['badWord'];

 $updatedParagraphe = str_replace($badWord, "***", $initialParagraphe);

 $updatedParagrapheLength = strlen($updatedParagraphe);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Hello PHP!</h1>

    <p><?php echo $initialParagraphe ?></p>

    <p>Il paragrafo che ho scritto è composto da <?php echo $paragrapheLength ?> caratteri.</p>

    <form action="" method="GET">
        <input type="text" name="badWord" placeholder="Scrivi la parola da censurare">
        <button>Send</button>
    </form>

    <p>Il nuovo paragrafo è: "<?php echo $updatedParagraphe ?>", ed è composto da <?php echo $updatedParagrapheLength ?> caratteri.</p>
</body>
</html>