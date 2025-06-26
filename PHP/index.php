<?php
<?php
require_once __DIR__ . '/vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Imagens DeepAI</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f8fa; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 60px auto; background: #fff; border-radius: 10px; box-shadow: 0 2px 12px #0001; padding: 2rem; text-align: center; }
        .btn { background: #7033a5; color: #fff; border: none; border-radius: 6px; padding: 1rem 2.5rem; font-size: 1.2rem; cursor: pointer; }
        .btn:hover { background: #4d2373; }
        .msg { margin-top: 2rem; color: #7033a5; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerador de Imagens DeepAI</h1>
        <form action="process.php" method="post">
            <button class="btn" type="submit">Gerar Imagens dos HTMLs</button>
        </form>
        <?php if (isset($_GET['done'])): ?>
            <div class="msg">Processamento concluído!</div>
        <?php endif; ?>
    </div>
</body>