<?php

$app->group('/api', function () use ($app){

    require_once './../routes/api/categoria.php';
    require_once './../routes/api/config.php';
    require_once './../routes/api/filme.php';
    require_once './../routes/api/profissional.php';
    require_once './../routes/api/locacao.php';

});