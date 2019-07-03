<?php require_once __DIR__ . '/../../layout/header.php'; ?>

<div class="container">
    <h3>Locações</h3>
    <a class="btn btn-success btn-novo" href="/locacoes/criar">Registrar Locação</a>

    <table class="table">
        <thead>
            <tr>
                <th class="text-center" rowspan="2">ID</th>
                <th class="text-center" rowspan="2">Cliente</th>

                <th class="text-center" colspan="2" style="border-left: 1px solid #ccc;">Datas</th>

                <th class="text-center" colspan="5" style="border-left: 1px solid #ccc;">Valores</th>

                <th class="text-center" rowspan="2" style="border-left: 1px solid #ccc;"></th>
            </tr>
            <tr>
                <th class="text-center" style="border-left: 1px solid #ccc;">Locação</th>
                <th class="text-center">Devolução</th>

                <th class="text-center" style="border-left: 1px solid #ccc;">Locação</th>
                <th class="text-center">Renovação</th>
                <th class="text-center">Atraso</th>
                <th class="text-center">Total</th>
                <th class="text-center">Pago</th>
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

                <td>10/06/2019 20:30</td>
                <td>12/06/2019</td>

                <td>R$ 12,50</td>
                <td>-</td>
                <td>-</td>
                <td>R$ 12,50</td>
                <td>-</td>

                <td class="acoes">
                    <a onclick="checaValorPagar()" href="/locacoes/devolucao/<?=$item->idlocacao?>"><i class="fa fa-exchange icon-blue"></i></a>
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
