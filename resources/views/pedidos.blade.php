<html>

<body>
    <table class="ui celled table">
        <thead>
            <tr>
                <th>id_pedido</th>

            </tr>
        </thead>
        @foreach ($pedidos as $value)
            <tbody>

                <td>{{ $value->id_pedido }}</td>
                <td><a href="/excluirPedido/{{ $value->id_pedido }}">Excluir pedido e seus respectivos itens</a></td>
                </tr>
            </tbody>
        @endforeach
    </table>
</body>

</html>
