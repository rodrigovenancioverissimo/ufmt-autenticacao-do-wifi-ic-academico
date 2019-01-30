<?php

ini_set("display_errors", 1);
ini_set("display_startup_erros", 1);
error_reporting(E_ALL);

if (isset($_POST['_method'])) {
  $m = strtoupper($_POST['_method']);
  if ($m == 'PUT') {
  } elseif ($m == 'PATCH') {
  } elseif ($m == 'DELETE') {
  } elseif ($m == 'POST') {
    require_once "class/noticia.php";
    include_once 'class/upload.php';
    $dao = DaoNoticia::getInstance();
    $dao->Inserir($dao->carregarNoticia());

  }
}


?>

<!doctype html>
<html lang="pt-BR">

<head>
  <title>IC_ACADEMICO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>
<div class="container-fluid">
  <a class="btn" href="index.php">
    <i class="fa fa-arrow-left"></i> Voltar</a>
</div>
<div class="container">
  <h2>Enviar nova postagem para o mural publico:</h2>
  <p>Atenção, ao enviar uma postagem temos o prazo de 24 horas para publicar. </p>
  <form method="post" action="#" enctype="multipart/form-data">
    <input name="_method" type="hidden" value="POST"/>
    <div class="input-group mb-3 mt-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Título:</span>
      </div>
      <input name="titulo" type="text" class="form-control">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Imagem:</span>
      </div>
      <div class="custom-file">
        <input type="file" id="imagem" name="imagem" class="custom-file-input">
        <label class="custom-file-label" for="imagem"></label>
      </div>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Texto:</span>
      </div>
      <textarea name="texto" class="form-control" style="min-height: 200px"></textarea>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Status:</span>
      </div>
      <select class="custom-select" name="status">
        <option value="publico" selected>Publico</option>
        <option value="rascunho">Rascunho</option>
      </select>
    </div>
    <input type="submit" class="btn btn-light mb-3">
  </form>
</div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script>
    $('#imagem').on('change', function () {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
</script>
</body>
</html>

