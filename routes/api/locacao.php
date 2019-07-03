<?php

/**
 * GET (list all)
 */
$app->get('/locacao', function ($request, $response) {
    // log message
    $this->logger->info("listando ...");
    $data = Locacao::all();
    return $this->response->withJson($data, 200);
});

/**
 * GET (from primary key)
 */
$app->get('/locacao/[{id}]', function($request, $response, $args){
    // log message
    $this->logger->info("detalhes ...");
    $data = Locacao::find($args['id']);
    return $this->response->withJson($data, 200);
});

/**
 * POST (insert)
 */
$app->post('/locacao', function ($request, $response) {
    // log message
    $this->logger->info("cadastrando ...");
    $dados = $request->getParsedBody();
    $data = Locacao::create([
        'nome' => $dados['nome'],
        'estoque' => $dados['estoque'],
        'disponivel' => $dados['disponivel']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * PUT (update)
 */
$app->put('/locacao/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("atualizando ...");
    $dados = $request->getParsedBody();
    $data = Locacao::where('idlocacao', $args['id'])->update([
        'nome' => $dados['nome'],
        'estoque' => $dados['estoque'],
        'disponivel' => $dados['disponivel']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * DELETE
 */
$app->delete('/locacao/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("deletando ...");
    $data = Locacao::destroy($args['id']);
    return $this->response->withJson($data, 200);
});