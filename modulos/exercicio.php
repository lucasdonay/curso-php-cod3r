<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body class="exercicio">
<header>
    <div class="container">
        <h1>ESTUDOS DONAY PHP</h1>
        <h2>Visualização dos conteúdos</h2>
    </div>
</header>

  <nav class="navegacao">
    <h1 style="color: black;text-transform: uppercase">Resolução</h1>
      <div class="buttons">
          <a href=<?="{$_GET['dir']}/{$_GET['file']}.php"?>>Sem formatação</a>
          <a href="../index.php" class="vermelho">Voltar</a>
      </div>

  </nav>

  <main class="container">
    <div class="conteudo">
      <?php
    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
    ?>
    </div>
  </main>
</body>

</html>