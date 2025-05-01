<?php

require './Service.php';

$service = new Service();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $result = $service->deleteItem();
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Delete Item </title>
    </head>
    <body>
        <form method="post">
        <fieldset>
            <legend> Delete Item</legend>

            <input type="text" name="id" placeholder="Item ID"></br> 

            <input id="button" type="submit" name="submit">
        </fieldset>
        <!-- <?= htmlspecialchars($result); ?> -->
    </body>

</html>