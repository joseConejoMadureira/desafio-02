<html>

<body>
    <form action="/cadastroProduto">

        <label>Nome Produto</label>
        <input type="text" name="nm_produto">
        <label>Valor compra</label><input type="number" name="vl_compra">
        <label>Valor venda</label><input type="number" name="vl_venda">
        <label>Produto</label> <input name="produto" type="text">
        <select name="produto_grupo">
            @foreach ($produto_grupo as $value)
                <option value="{{ $value->id_produto_grupo }}">{{ $value->nm_produto_grupo }}</option>
            @endforeach
        </select>

        <button type="submit">Salvar</button>
    </form>

</body>

</html>
