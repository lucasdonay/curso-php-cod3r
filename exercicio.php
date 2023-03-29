<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Exercício</title>
</head>

<body class="exercicio">
<header>
    <div class="container">
        <h1>ESTUDOS DONAY PHP</h1>
        <h2>Visualização dos Exercicios</h2>
    </div>
</header>

  <nav class="navegacao">
    <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?>>Sem formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>
  </nav>

  <main class="container">
    <div class="conteudo">
      <?php
    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
    ?>
    </div>
  </main>

  <footer class="rodape">
    COD3R & ALUNOS © <?= date('Y'); ?>
  </footer>
</body>

</html>