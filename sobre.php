<style>
    /* imagem */
    .principal {
        width: 100%;
        height: 100%;
        background-image: url(img/background-pizza.jpg);
        background-repeat: no-repeat;
    };

    /* texto */
    h1 {
        font-size: 5em;
        color: white;    
    };
</style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
    <!-- CSS/ JS -->
    <?php
    include_once('inc/css.php');
    include_once('inc/js.php');
    ?>
    <!-- /CSS/ JS -->
</head>
<body>
<div class="container">
<!-- topo -->
    <?php include_once('inc/topo.php') ?>
<!-- /topo -->
<!-- principal -->
<div class="principal">     
    <h1>Sobre Nós</h1>
</div>
<!-- /principal -->
<!-- rodape -->
<div>
    <?php include_once('inc/rodape.php')?>
</div>
<!-- /rodape -->
</div>

</body>
</html>