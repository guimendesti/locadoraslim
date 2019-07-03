<form name="dados" action="" method="post">

    <div class="formAlignVertical">
        <label>Nome</label>
        <input type="text" name="nome" id="nome" value="" class="form-control" />
    </div>

    <div class="formAlignVertical">
        <label style="vertical-align: top; margin-top: 6px;">Categoria</label>
        <select name="categoria[]" id="categoria" multiple="multiple" class="form-control">
            <option value="">Selecione</option>
        </select>
    </div>

    <hr />

    <div>
        <label>Autor(es)</label>
        <div class="dadosator">
            <input type="text" name="autor[]" id="autor1" value="" class="form-control" />
        </div>
        <div class="dadosator">
            <input type="text" name="autor[]" id="autor2" value="" class="form-control" />
        </div>
    </div>

    <hr />

    <div>
        <label>Diretor(es)</label>
        <div class="dadosdiretor">
            <input type="text" name="diretor[]" id="diretor1" value="" class="form-control" />
        </div>
        <div class="dadosdiretor">
            <input type="text" name="diretor[]" id="diretor2" value="" class="form-control" />
        </div>
    </div>

    <hr />

    <div>
        <label>Atores/Personagens</label>
        <div class="dadosator">
            <input type="text" name="ator[]" id="atores1" value="" class="form-control" />
            <input type="text" name="personagem[]" id="personagem1" value="" class="form-control" />
        </div>
        <div class="dadosator">
            <input type="text" name="ator[]" id="atores2" value="" class="form-control" />
            <input type="text" name="personagem[]" id="personagem2" value="" class="form-control" />
        </div>
        <div class="dadosator">
            <input type="text" name="ator[]" id="atores3" value="" class="form-control" />
            <input type="text" name="personagem[]" id="personagem3" value="" class="form-control" />
        </div>
        <div class="dadosator">
            <input type="text" name="ator[]" id="atores3" value="" class="form-control" />
            <input type="text" name="personagem[]" id="personagem4" value="" class="form-control" />
        </div>
        <div class="dadosator">
            <input type="text" name="ator[]" id="atores3" value="" class="form-control" />
            <input type="text" name="personagem[]" id="personagem5" value="" class="form-control" />
        </div>
    </div>

    <hr />

    <div class="margin-top:30px;">
        <button type="submit">Salvar</button>
    </div>

</form>
