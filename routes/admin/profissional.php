<?php

/**
 * Listar com ação de deletar
 */
$app->get('/profissionais', function ($request, $response, array $args) {

    $url =  $_SERVER["HTTP_HOST"]."/api/profissional";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    $returnJson = json_decode($return);
    $args["lista"] = $returnJson;

    return $this->renderer->render($response, 'admin/profissional/index.php', $args);
});


/**
 * Cadastar
 */
$app->get('/profissionais/criar', function ($request, $response, array $args) {

    return $this->renderer->render($response, 'admin/profissional/criar.php', $args);
});

$app->post('/profissionais/criar', function ($request, $response) {

    $url = $_SERVER["HTTP_HOST"] . "/api/profissional";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getParsedBody());
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    if ($return != ""){
        return $response->withRedirect('/profissionais');
    }

    return $response->withRedirect('/profissionais/criar');
});


/**
 * Editar
 */
$app->get('/profissionais/editar/[{id}]', function ($request, $response, array $args){

    $url = $_SERVER["HTTP_HOST"] . "/api/profissional/".$args['id'];
    echo $url;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_PUT, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getParsedBody());
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    if ($return != ""){
        return $response->withRedirect('/profissionais');
    }

    return $response->withRedirect('/profissionais/criar');

    return $this->renderer->render($response, 'admin/profissional/editar.php', $args);
});