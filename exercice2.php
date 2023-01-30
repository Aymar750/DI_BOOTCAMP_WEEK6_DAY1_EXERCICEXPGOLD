<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>
    <h1 style="text-align: center;">
        <?php
        $message = "Bonjour a tous, nous debuttons en PHP";
        echo "<< ".$message." >>"." : contient ".str_word_count($message)." mots"
        ?>
    </h1>
</body>

</html>