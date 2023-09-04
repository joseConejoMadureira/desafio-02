<html>

<body>
{{$produto_grupo}}

<form  action="/cadastroProduto">

        <label>Nome  Produto</label>
        <input  type="text" name="nm_produto">
        <label>Valor compra</label><input  type="number" name="vl_compra">
        <label>Valor venda</label><input  type="number" name="vl_venda">
        <label>Produto</label> <input name="produto" type="text">
        <select name="produto_grupo">
            <option value="id_produto_grupo">produto_grupo.nm_produto</option>

          </select>
    <button  type="submit">Salvar</button>
</form>

</body>

</html>
