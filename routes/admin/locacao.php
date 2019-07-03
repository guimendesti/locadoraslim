<?php

/**
 * Listar com ação de deletar
 */
$app->get('/locacoes', function ($request, $response, array $args) {


    return $this->renderer->render($response, 'admin/locacao/index.php', $args);
});


/**
 * Cadastar
 */
$app->get('/locacoes/criar', function ($request, $response, array $args) use ($container) {


    return $this->renderer->render($response, 'admin/locacao/criar.php', $args);
});


/**
 * Editar
 */
$app->get('/locacoes/editar/[{id}]', function ($request, $response, array $args) use ($container) {


    return $this->renderer->render($response, 'admin/locacao/editar.php', $args);
});