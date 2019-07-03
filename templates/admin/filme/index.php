<?php require_once __DIR__ . '/../../layout/header.php'; ?>

<div class="container">
    <h3>Filmes</h3>
    <a class="btn btn-success btn-novo" href="/filmes/criar">Novo</a>

    <table class="table">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Estoque</th>
                <th class="text-center">Disponível</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
            if($data['lista']){
                foreach($data['lista'] as $item){
                ?>
                <tr>
                    <td><?=$item->idfilme?></td>
                    <td><?=$item->nome?></td>
                    <td><?=$item->estoque?></td>
                    <td><?=$item->disponivel?></td>
                    <td class="acoes">
                        <a href="/filmes/editar/1"><i class="fa fa-edit icon-blue"></i></a>
                        <a onclick="if(confirm('Tem certeza que deseja deletar?')){ return acaoDeletar('filme', <?=$item->idfilme?>); } return false;" href="#"><i class="fa fa-close icon-red"></i></a>
                    </td>
                </tr>
                <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
