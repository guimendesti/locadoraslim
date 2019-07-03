<form name="dados" action="" method="post" enctype="application/x-www-form-urlencoded">

    <div>
        <label>Nome</label>
        <input type="text" name="nome" id="nome" value="<?=(isset($data["dados"]->nome))?$data["dados"]->nome:""?>" class="form-control" />
    </div>

    <div class="margin-top:30px;">
        <button type="submit">Salvar</button>
    </div>

</form>
