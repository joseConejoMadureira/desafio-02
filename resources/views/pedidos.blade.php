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
                </tr>
            </tbody>
        @endforeach
    </table>
</body>

</html>
