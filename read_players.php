<?php
require 'db_connection.php';

$sql = "SELECT id, name, age, position FROM players";
$stmt = $connection->prepare($sql);
$stmt->execute();
$players = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exibir Jogadores</title>
  <link rel="stylesheet" href="./style/style.css">
</head>
<body>
  <div clas="container">
    <h1>Lista de Jogadores de Vôlei</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>IDADE</th>
        <th>POSIÇÃO</th>
      </tr>
      <?php foreach ($players as $player): ?>
        <tr>
          <td><?php echo htmlspecialchars($player['id']); ?></td>
          <td><?php echo htmlspecialchars($player['name']); ?></td>
          <td><?php echo htmlspecialchars($player['age']); ?></td>
          <td><?php echo htmlspecialchars($player['position']); ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <br>
    <a href="index.php">Voltar ao início</a>
  </div>
</body>
</html>