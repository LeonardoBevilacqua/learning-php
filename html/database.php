<?php
$servername = "db";
$username = "root";
$password = "test123";
$dbname = "lamp_db";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// verificar conexão
if ($conn->connect_error) {
  die("Falha ao conectar: " . $conn->connect_error);
}
echo "Conectado com sucesso <br>";



// criar tabela
$sql = "CREATE TABLE IF NOT EXISTS livros (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Tabela livros criada com sucesso <br>";
    } else {
      echo "Erro ao criar tabela: " . $conn->error;
    }



$sql = "SELECT id, nome FROM livros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nome: " . $row["nome"];
  }
} else {
  echo "Tabela vazia";
}
$conn->close();
?> 
