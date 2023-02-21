<?php
session_start();

$db_host = "lamp-db-service";
$db_user = "lamp";
$db_password = "lamp";
$db_name = "lamp";
$db_port = "3306";

$pdo = new PDO("mysql:host=$db_host;dbname=$db_name;port=$db_port", $db_user, $db_password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Make a query to get all entries in the users table
// Display them into a table
$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<a href="index.php">Retour à l'accueil</a>
<!-- Display the table -->
<table>
  <thead>
    <tr>
      <th>Username</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user) { ?>
      <tr>
        <td><?php echo $user["username"]; ?></td>
        <td><?php echo $user["password"]; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>