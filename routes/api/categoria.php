<?php

/**
 * GET (list all)
 */
$app->get('/categoria', function ($request, $response) {
    // log message
    $this->logger->info("listando ...");
    $data = Categoria::all();
    return $this->response->withJson($data, 200);
});

/**
 * GET (from primary key)
 */
$app->get('/categoria/[{id}]', function($request, $response, $args){
    // log message
    $this->logger->info("detalhes ...");
    $data = Categoria::find($args['id']);
    return $this->response->withJson($data, 200);
});

/**
 * POST (insert)
 */
$app->post('/categoria', function ($request, $response) {
    // log message
    $this->logger->info("cadastrando ...");
    $dados = $request->getParsedBody();
    $data = Categoria::create([
        'nome' => $dados['nome']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * PUT (update)
 */
$app->put('/categoria/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("atualizando ...");

    $dados = $request->getParsedBody();
    $data = Categoria::where('idcategoria', $args['id'])->update([
        'nome' => $dados['nome']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * DELETE
 */
$app->delete('/categoria/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("deletando ...");
    $data = Categoria::destroy($args['id']);
    return $this->response->withJson($data, 200);
});