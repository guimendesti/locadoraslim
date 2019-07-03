<?php

/**
 * GET (list all)
 */
$app->get('/filme', function ($request, $response) {
    // log message
    $this->logger->info("listando ...");
    $data = Filme::all();
    return $this->response->withJson($data, 200);
});

/**
 * GET (from primary key)
 */
$app->get('/filme/[{id}]', function($request, $response, $args){
    // log message
    $this->logger->info("detalhes ...");
    $data = Filme::find($args['id']);
    return $this->response->withJson($data, 200);
});

/**
 * POST (insert)
 */
$app->post('/filme', function ($request, $response) {
    // log message
    $this->logger->info("cadastrando ...");
    $dados = $request->getParsedBody();
    $data = Filme::create([
        'nome' => $dados['nome'],
        'estoque' => $dados['estoque'],
        'disponivel' => $dados['disponivel']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * PUT (update)
 */
$app->put('/filme/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("atualizando ...");
    $dados = $request->getParsedBody();
    $data = Filme::where('idfilme', $args['id'])->update([
        'nome' => $dados['nome'],
        'estoque' => $dados['estoque'],
        'disponivel' => $dados['disponivel']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * DELETE
 */
$app->delete('/filme/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("deletando ...");
    $data = Filme::destroy($args['id']);
    return $this->response->withJson($data, 200);
});