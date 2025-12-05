<?php
require "db.php";

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

echo "<h2>Database Test Result</h2>";

while ($row = mysqli_fetch_assoc($result)) {
    echo $row["id"] . " - " . $row["username"] . " (" . $row["email"] . ")<br>";
}