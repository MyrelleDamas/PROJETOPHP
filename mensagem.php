
<?php
// ===== Testes SkyWalking =====
if (isset($_POST['teste'])) {

    // Gera lentidão proposital
    if ($_POST['teste'] === 'lentidao') {
        sleep(5); // 5 segundos de delay
        echo "<h3>Lentidão gerada para teste SkyWalking</h3>";
        echo '<a href="index.php">Voltar</a>';
        exit;
    }

    // Gera erro proposital
    if ($_POST['teste'] === 'erro') {
        http_response_code(500);
        echo "<h3>Erro 500 gerado para teste SkyWalking</h3>";
        echo '<a href="index.php">Voltar</a>';
        exit;
    }
}

// ===== Fluxo normal do formulário =====
$nome = $_POST['nome'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

if ($nome && $mensagem) {

    echo "<h3>Mensagem enviada!</h3>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
    echo "<p><strong>Mensagem:</strong> " . htmlspecialchars($mensagem) . "</p>";
    echo '<a href="index.php">Voltar</a>';

} else {
    echo "<p>Por favor, preencha todos os campos.</p>";
    echo '<a href="index.php">Voltar</a>';
}
?>
