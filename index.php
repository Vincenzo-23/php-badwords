<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <form action="./server.php" method="POST">
        <p>
            <label for="paragraph">Frase</label>
            <input type="text" name="paragraph" id="paragraph" placeholder="Scrivi una frase">
        </p>
        <p>
            <label for="word">Parola da censurare</label>
            <input type="text" name="word" id="word" placeholder="Scrivi una parola">
        </p>
        <button>Invia</button>
    </form>
</body>
</html>