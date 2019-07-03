<?php

/**
 * GET (list all)
 */
$app->get('/config', function ($request, $response) {
    // log message
    $this->logger->info("listando ...");
    $data = Config::all();
    return $this->response->withJson($data, 200);
});

/**
 * GET (from primary key)
 */
$app->get('/config/[{id}]', function($request, $response, $args){
    // log message
    $this->logger->info("detalhes ...");
    $data = Config::find($args['id']);
    return $this->response->withJson($data, 200);
});

/**
 * POST (insert)
 */
$app->post('/config', function ($request, $response) {
    // log message
    $this->logger->info("cadastrando ...");
    $dados = $request->getParsedBody();
    $data = Config::create([
        'nome' => $dados['nome'],
        'estoque' => $dados['estoque'],
        'disponivel' => $dados['disponivel']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * PUT (update)
 */
$app->put('/config/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("atualizando ...");
    $dados = $request->getParsedBody();
    $data = Config::where('idconfig', $args['id'])->update([
        'nome' => $dados['nome'],
        'estoque' => $dados['estoque'],
        'disponivel' => $dados['disponivel']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * DELETE
 */
$app->delete('/config/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("deletando ...");
    $data = Config::destroy($args['id']);
    return $this->response->withJson($data, 200);
});