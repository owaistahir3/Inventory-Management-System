<?php
echo "sup bitch!";

include_once("database/db2.php");

$conn = connect();

$sql = "SELECT id, username, email FROM user";
$result = $conn->query($sql);

if($result ->num_rows >0){
    while($row = $result->fetch_assoc()){
        echo "id: " . $row["id"] . " - Name: " . $row["username"] . " " . $row["email"] . "<br>";
    }
} else{
    echo "0 results";
}
?>
