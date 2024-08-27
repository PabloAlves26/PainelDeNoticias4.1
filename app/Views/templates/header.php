<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painél de Notícias</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <link href="/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container cabecalho">
        <div class="row">
            <div class="col-md-9"><br>
                <h1><?= $title; ?></h1>
            </div>
            <div class="col-md-3">
            <?php if($session->get('logged_in')): ?>
                <br>
                <p>Bém Vindo ao sistema, <?= $session->get('user') ?> ! <a href="/usuarios/logout" id="sair"><b>sair</b></a></p>
                <?php else: ?><br>
                    <a href="/login" class="btn btn-primary">Entrar no Sistema</a>
                <?php endif; ?>
            </div>
        </div>
        
    </div>
    