<?php
require 'dbcon.php';

// Since the above code is connected to my dbcon.php
// It connects up to my Db in laragon and gets all entries from there 
$result = $conn->query("SELECT * FROM contacts");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact List</title>
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
