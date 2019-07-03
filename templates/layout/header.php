<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Locadora ETEG</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/058382c82c.js"></script>

    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href='/assets/css/jquery-ui.css' rel='stylesheet' type='text/css'>
    <style>
        body {
            margin: 20px 0;
            padding: 0;
            width: 100%;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-align: center;
            color: #aaa;
            font-size: 14px;
        }

        h1 {
            color: #719e40;
            letter-spacing: -3px;
            font-family: 'Lato', sans-serif;
            font-size: 38px;
            font-weight: 200;
            margin-bottom: 0;
        }

        .slim{
            padding-bottom:10px;
        }

        label{
            font-weight: 400;
        }

        ul {
            list-style: none;
        }

        ul li{
            display: inline-block;
            padding:5px 10px;
        }

        a{
            color: #666;
            font-size:14px;
            text-decoration: none;
        }

        a:hover{
            color: #666;
            text-decoration: underline;
        }

        ul.menu {
            border: 1px solid #ddd;
            margin-bottom:30px;
        }

        .form-control{
            display: inline-block;
            margin:2px;
            max-width: 300px;
        }

        .btn-novo{
            float: right;
            margin: -30px 10px 5px 0px;
        }

        .formAlignVertical label{
            padding-right: 4px;
            text-align: right;
            width: 180px;
        }
        .formAlignVertical input{
            display: inline-block;
            margin:2px;
        }
        .formAlignVertical input.preco{
            width: 90px;
        }

        .acoes .fa{
            margin:2px 4px;
        }
        .fa.icon-blue{
            color:#069;
        }
        .fa.icon-red{
            color:#c00;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Locadora ETEG</h1>
        <div class="slim">com Slim Framework</div>

        <?php if (isset($name)) : ?>
            <h2>Não encontramos /<?= htmlspecialchars($name); ?>!</h2>
        <?php else: ?>
            <ul class="menu">
                <li>
                    <a href="/locacoes">Locações</a>
                </li>

                <li>|</li>

                <li>
                    <a href="/categorias">Categorias</a>
                </li>
                <li>
                    <a href="/profissionais">Diretores/Atores</a>
                </li>
                <li>
                    <a href="/filmes">Filmes</a>
                </li>

                <li>|</li>

                <li>
                    <a href="/configs">Configurações</a>
                </li>
            </ul>
        <?php endif; ?>
    </div>
