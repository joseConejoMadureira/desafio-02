<html>

<body>
    <table>
        <thead>
            <tr>
                <th>Produto Grupo</th>

            </tr>
        </thead>
        @foreach ($maiorVenda as $value)
            <tbody>

                <td>{{ $value->dt_pedido }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
</body>

</html>
