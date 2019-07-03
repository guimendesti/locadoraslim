<?php require_once __DIR__ . '/../../layout/header.php'; ?>

<div class="container">
    <h3>Profissionais</h3>
    <a class="btn btn-success btn-novo" href="/profissionais/criar">Novo</a>

    <table class="table">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Sexo</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
        <?php
        if($data['lista']){
            foreach($data['lista'] as $item){
            ?>
            <tr>
                <td><?=$item->idprofissional?></td>
                <td><?=$item->nome?></td>
                <td><?=$item->sexo?></td>
                <td class="acoes">
                    <a href="/profissionais/editar/1"><i class="fa fa-edit icon-blue"></i></a>
                    <a onclick="if(confirm('Tem certeza que deseja deletar?')){ return acaoDeletar('profissional', <?=$item->idprofissional?>); } return false;" href="#"><i class="fa fa-close icon-red"></i></a>
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
