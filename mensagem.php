<?php
// Captura os dados enviados pelo formulário
$nome = $_POST['nome'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

if ($nome && $mensagem) {
    // Salva em um arquivo (para testar persistência simples)
    $linha = "$nome: $mensagem\n";
    file_put_contents("mensagens.txt", $linha, FILE_APPEND);

    echo "<h3>Mensagem enviada!</h3>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
    echo "<p><strong>Mensagem:</strong> " . htmlspecialchars($mensagem) . "</p>";
    echo '<a href="index.php">Voltar</a>';
} else {
    echo "<p>Por favor, preencha todos os campos.</p>";
}
?>
