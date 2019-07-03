<?php require_once __DIR__ . '/../../layout/header.php'; ?>

<div class="container">
    <h3>Configurações</h3>

    <form name="dados" class="formAlignVertical" action="">

        <div>
            <label>Valor Pgto na Locação</label>
            <input class="form-control preco" type="text" name="valorpgtolocacao" id="valorpgtolocacao" value="4,00" />
        </div>

        <div>
            <label>Valor Pgto na Devolução</label>
            <input class="form-control preco" type="text" name="valorpgtodevolucao" id="valorpgtodevolucao" value="4,50" />
        </div>

        <div>
            <label>Valor da Renovação</label>
            <input class="form-control preco" type="text" name="valorrenovacao" id="valorrenovacao" value="2,50" />
        </div>

        <div>
            <label>Valor Por Dia Atrasado</label>
            <input class="form-control preco" type="text" name="valordiaatraso" id="valordiaatraso" value="3,50" />
        </div>

        <hr />

        <div>
            <label>Prazo da Locação</label>
            <input class="form-control preco" type="text" name="prazolocacao" id="prazolocacao" value="2" />
        </div>

        <div>
            <label>Prazo da Renovação</label>
            <input class="form-control preco" type="text" name="prazorenovacao" id="prazorenovacao" value="1" />
        </div>

        <hr />

        <div class="margin-top:30px;">
            <button type="submit">Salvar</button>
        </div>

    </form>
</div>


<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
