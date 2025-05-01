<?php

require './Service.php';

$service = new Service();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $result = $service->addNewItem();
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Add New Item </title>
    </head>
    <body>
        <form method="post">
        <fieldset>
            <legend> Add New Item</legend>

            <input type="text" name="name" placeholder="Item Name" ></br>

            <input type="text" name="price" placeholder="Price" ></br>

            <input id="button" type="submit" name="submit">
        </fieldset>
        <!-- <?= htmlspecialchars($result); ?> -->
    </body>

</html>