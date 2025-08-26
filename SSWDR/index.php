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
<p>Fill in the fields below to save a contact!</p>

  <form method="POST" action="add_contacts.php">
    <input type="text"  name="name"  placeholder="Name"  required />
    <input type="email" name="email" placeholder="Email" required />
    <div class="btn-wrapper">
      <button type="submit">Save</button>
    </div>
  </form>

  <p>
    <a href="index.php" class="button">View All Contacts</a>  
  </p>
</body>
</html>
