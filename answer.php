<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do sistema</title>
    <style>
        .alert-success {
            background: green; color: white; width: 250px; height: 25px; text-align: center; line-height: 25px; font-family: Arial; font-weight: bolder; border-radius: 5px; font-size: 13px;
        }
        .alert-danger {
            background: red; color: white; width: 250px; height: 25px; text-align: center; line-height: 25px; font-family: Arial; font-weight: bolder; border-radius: 5px; font-size: 13px;
        }
    </style>
</head>
<body>
<?php
if(isset($_GET['idade']) && !empty ($_GET['idade']) && isset($_GET['peso']) && !empty($_GET['peso'])) {
    $idade = intval($_GET['idade']);
    $peso = floatval($_GET['peso']);

    if ($idade >= 18 && $idade <= 60 && $peso >= 50 && $peso <= 110) {
        ?>
        <div class="alert-success">Você está apto (a) a doar sangue!</div>
        <?php
    } else {
        ?>
        <div class="alert-danger">Você não está apto (a) a doar sangue!</div>
        <?php
    }
  
} else {
    ?>
    <div class="alert-danger">Você não enviou todos os dados!</div>
    <?php
}


?>
<br/><br/><br/>
<a href="./">Retornar no formulário</a>
</body>
</html>