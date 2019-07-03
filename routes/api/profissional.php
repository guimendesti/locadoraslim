<?php

/**
 * GET (list all)
 */
$app->get('/profissional', function ($request, $response) {
    // log message
    $this->logger->info("listando ...");
    $data = Profissional::all();
    return $this->response->withJson($data, 200);
});

/**
 * GET (from primary key)
 */
$app->get('/profissional/[{id}]', function($request, $response, $args){
    // log message
    $this->logger->info("detalhes ...");
    $data = Profissional::find($args['id']);
    return $this->response->withJson($data, 200);
});

/**
 * POST (insert)
 */
$app->post('/profissional', function ($request, $response) {
    // log message
    $this->logger->info("cadastrando ...");
    $dados = $request->getParsedBody();
    $data = Profissional::create([
        'nome' => $dados['nome'],
        'estoque' => $dados['estoque'],
        'disponivel' => $dados['disponivel']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * PUT (update)
 */
$app->put('/profissional/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("atualizando ...");
    $dados = $request->getParsedBody();
    $data = Profissional::where('idprofissional', $args['id'])->update([
        'nome' => $dados['nome'],
        'estoque' => $dados['estoque'],
        'disponivel' => $dados['disponivel']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * DELETE
 */
$app->delete('/profissional/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("deletando ...");
    $data = Profissional::destroy($args['id']);
    return $this->response->withJson($data, 200);
});