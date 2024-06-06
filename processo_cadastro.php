<?php
if (["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    // Processamento dos dados do formulário
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Idade: " . $idade . "<br>";
}
?>
