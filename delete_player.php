<?php 
  require 'db_connection.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];

    $sql = "DELETE FROM players WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()){
      echo "Jogador deletado com sucesso!";
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
  <title>Deletar Jogador</title>
  <link rel="stylesheet" href="./style/style.css">
</head>
<body>
  <div class="container">
    <h1>Deletar Jogador</h1>
    <form method="post" action="">
      ID: <input type="text" name="id" required><br><br>
      <input type="submit" value="Deletar Jogador">
    </form>
    <br>
    <a href="index.php">Voltar ao Início</a>
  </div>
</body>
</html>