<?php
include 'db.php'; // Include the database connection file

$result = $conn->query("SELECT * FROM contacts");

if ($result->num_rows > 0) {
    echo "<h1>Contact Messages</h1>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Submitted At</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['message']}</td>
                <td>{$row['created_at']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No messages found.";
}

$conn->close();
?>
