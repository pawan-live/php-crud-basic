<?php

require 'config.php';

$sql = "SELECT id, name FROM user";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo '<table border=1>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr> <td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td> </tr>';
    }
    echo '</table>';
} else {
    echo 'no results';
}
