<?php 
$paragraph = $_POST["paragraph"];
$paragraph_length = strlen($paragraph);
$badword = $_POST["word"];
$censored_paragraph = str_replace($badword, "***", $paragraph, $count);
$censored_paragraph_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazie</title>
</head>
<body>
    <div class="container">
        <div>
            Paragrafo originale: <?php echo $paragraph; ?>
        </div>
        <div>
            Lunghezza paragrafo originale: <?php echo $paragraph_length; ?>
        </div>
        <div>
            Paragrafo censurato: <?php echo $censored_paragraph; ?>
        </div>
        <div>
            Lunghezza paragrafo censurato: <?php echo $censored_paragraph_length; ?>
        </div>
        <div>
            Numero di censure effettuate: <?php echo $count; ?>
        </div>
    </div>

</body>
</html>