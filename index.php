<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Formulário PHP</title>
</head>
<body>

  <h2>Envie uma mensagem</h2>

  <form action="mensagem.php" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="mensagem">Mensagem:</label><br>
    <textarea id="mensagem" name="mensagem" rows="4" cols="40" required></textarea><br><br>

    <button type="submit">Enviar mensagem</button>
  </form>

  <hr>

  <h3>Testes SkyWalking</h3>

  <!-- Botão para gerar lentidão -->
  <form action="mensagem.php" method="post">
    <input type="hidden" name="teste" value="lentidao">
    <button type="submit">🔴 Gerar lentidão (sleep)</button>
  </form>

  <br>

  <!-- Botão para gerar erro -->
  <form action="mensagem.php" method="post">
    <input type="hidden" name="teste" value="erro">
    <button type="submit">⚠️ Gerar erro (HTTP 500)</button>
  </form>

</body>
