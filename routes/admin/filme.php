<?php

/**
 * Listar com ação de deletar
 */
$app->get('/filmes', function ($request, $response, array $args) {

    $url =  $_SERVER["HTTP_HOST"]."/api/filme";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    $returnJson = json_decode($return);
    $args["lista"] = $returnJson;

    return $this->renderer->render($response, 'admin/filme/index.php', $args);
});


/**
 * Cadastar
 */
$app->get('/filmes/criar', function ($request, $response, array $args) use ($container) {


    return $this->renderer->render($response, 'admin/filme/criar.php', $args);
});

$app->post('/filmes/criar', function ($request, $response) {

    $url = $_SERVER["HTTP_HOST"] . "/api/filme";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getParsedBody());
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    if ($return != ""){
        return $response->withRedirect('/filmes');
    }

    return $response->withRedirect('/filmes/criar');
});


/**
 * Editar
 */
$app->get('/filmes/editar/[{id}]', function ($request, $response, array $args) use ($container) {

    $url = $_SERVER["HTTP_HOST"] . "/api/filme/".$args['id'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_PUT, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getParsedBody());
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    if ($return != ""){
        return $response->withRedirect('/categorias');
    }

    return $response->withRedirect('/categorias/criar');


    return $this->renderer->render($response, 'admin/filme/editar.php', $args);
});