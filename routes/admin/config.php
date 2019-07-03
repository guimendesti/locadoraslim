<?php

/**
 * Atualiza Configurações
 */
$app->get('/configs', function ($request, $response, array $args) {


    return $this->renderer->render($response, 'admin/config/index.php', $args);
});