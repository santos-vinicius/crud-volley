<?php 
require 'db_connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $age = $_POST['age'];
  $position = $_POST['position'];

  $sql = "UPDATE players SET name = :name, age = :age, position = :position WHERE id = :id";
  $stmt = $connection->prepare($sql);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':age', $age);
  $stmt->bindParam(':position', $position);
  $stmt->bindParam(':id', $id);

  if($stmt->execute()){
    echo "Jogador atualizado com sucesso!";
  } else {
    echo "ERROR: " . $sql . "<br>" , $connection->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>Atualizar Jogador</title>
</head>
<body>
  <div class="container">
    <h1>Atualizar Cadastro de Jogador</h1>
    <form method="post" action="">
      ID: <input type="text" name="id" required><br><br>
      NOME: <input type="text" name="name" required><br><br>
      IDADE: <input type="text" name="age" required><br><br>
      POSIÇÃO: <input type="text" name="position" required><br><br>
      <input type="submit" value="Atualizar Jogador">
    </form>
    <br>
    <a href="index.php">Voltar ao Início</a>
  </div>
</body>
</html>