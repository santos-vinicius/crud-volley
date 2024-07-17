<?php 
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"]== "POST") {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $position = $_POST['position']; 

  $sql = "INSERT INTO players (name, age, position) VALUES (:name, :age, :position)";
  $stmt = $connection->prepare($sql);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':age', $age);
  $stmt->bindParam(':position', $position);

  if ($stmt->execute()){
    echo "Novo jogador cadastrado com sucesso!";
  } else {
    echo "ERROR: " . $sql . "<br>" . $connection->error; 
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>Cadastrar Jogador</title>
</head>
<body>
  <div class="container">
    <form method="post" action="">
      NOME: <input type="text" name="name" required><br>
      IDADE: <input type="text" name="age" required><br>
      POSIÇÃO: <input type="text" name="position" required><br>
      <input type="submit" value="Cadastrar Jogador">
    </form>
    <br>
    <a href="index.php">Voltar ao início</a>
  </div>
</body>
</html>