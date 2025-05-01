<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydatabase';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT iId, Iname, Sprice FROM item_1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo 
    "<table border='1'>
    <tr>
        <th>iId</th>
        <th>Iname</th>
        <th>Sprice</th>
    </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo 
        "<tr>
            <td>" . $row["iId"] . "</td>
            <td>" . $row["Iname"] . "</td>
            <td>" . $row["Sprice"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>