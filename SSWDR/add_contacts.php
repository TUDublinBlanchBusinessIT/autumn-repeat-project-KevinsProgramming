
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 24px;
  text-align: center;
}
h1 {
  margin-bottom: 12px;
}
form {
  margin: 20px auto;
  display: inline-block;
  text-align: left;
}
input {
  padding: 8px;
  margin: 6px 0;
  width: 250px;
  display: block;
}
button {
  padding: 8px 16px;
  background: #f0f0f0;
  border: 1px solid #ccc;
  border-radius: 4px;
  cursor: pointer;
  font-family: inherit;
  font-size: inherit;
  display: block;      
  margin: 10px auto;   
}
button:hover {
  background: #e0e0e0;
}
a.button {
  display: inline-block;
  padding: 8px 16px;
  margin-top: 15px;
  background: #f0f0f0;
  border: 1px solid #ccc;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
  color: black;
  font-family: inherit;
  font-size: inherit;
}
a.button:hover {
  background: #e0e0e0;
}

  </style>
</head>
<body>
  <h1>Add Contact</h1>
  <p>Fill in the fields below to save a contact!</p>

  <form method="POST" action="add_contacts.php">
    <input type="text"  name="name"  placeholder="Name"  required />
    <input type="email" name="email" placeholder="Email" required />
    <button type="submit">Save</button>
  </form>

  <p>
    <a href="index.php" class="button">View All Contacts</a>
  </p>
</body>
</html>
