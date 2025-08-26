<?php
require 'dbcon.php';

// Coding here connects to dbcon.php - Retrieves entries
$result = $conn->query("SELECT * FROM contacts");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 24px;
      text-align: center;
    }
    h1 {
      margin-bottom: 8px;
    }
    form {
      margin: 16px 0;
    }
    input {
      padding: 8px;
      margin: 4px 8px 4px 0;
    }
    button, .btn {
      padding: 8px 16px;
      cursor: pointer;
      background: #f0f0f0;
      border: 1px solid #ccc;
      border-radius: 4px;
      text-decoration: none;
      color: black;
      font-size: inherit;
      font-family: inherit;
    }
    button:hover, .btn:hover {
      background: #e0e0e0;
    }
    table {
      border-collapse: collapse;
      width: 55%;
      margin: 20px auto; 
    }
     th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    a.delete {
      color: red;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
  </head>
<body>
<h1>Add Contact</h1>
  <p>
    <a href="add_contacts.php" class="btn">Add Contact</a>
  </p>

  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?php echo htmlspecialchars($row['name']); ?></td>
      <td><?php echo htmlspecialchars($row['email']); ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>