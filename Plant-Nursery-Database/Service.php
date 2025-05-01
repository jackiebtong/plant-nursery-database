<?php

require './Database.php';
require './Item.php';

class Service {
    function addNewItem() {
        $name = $_POST['name'];
        $price = $_POST['price'];

        $dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

        $sql = "INSERT INTO item_1 (`Iname`,`Sprice`) VALUES (?,?)";

		$stmt = $dbConnection->prepare($sql);
        //var_dump($stmt);
        if ($stmt->execute([$name, $price])) {
            echo "Item added successfully";
            // The primary key value will be auto-incremented by the database
        } else {
            return 'Failed';  
        }
    }

    function deleteItem() {
        $id = $_POST['id'];

        $dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

        $sql = "DELETE FROM item_1 WHERE iId=?";

        if ($id != "") {
            $stmt = $dbConnection-> prepare($sql);
    
            if ($stmt->execute([$id])) {
                echo "Item deleted successfully";
            } else {
                return 'Failed';
            }
    
        } else {
            echo "Item ID is required";
        }
    }

    function updateItem() {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        $dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

        $sql = "UPDATE item_1 SET Iname=?, Sprice=? WHERE iId=?";
        echo $sql;
        $stmt = $dbConnection->prepare($sql); 
        if ($stmt->execute([$name, $price, $id])) {
            echo "Item updated successfully";
        } else {
            return 'Failed';  
        }
    }
}

