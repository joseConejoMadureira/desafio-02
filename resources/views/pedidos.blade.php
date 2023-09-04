<html>

<body>
    <table class="ui celled table">
        <thead>
            <tr>
                <th>Pedidos</th>

            </tr>
        </thead>
        @foreach ($pedidos as $value)
            <tbody>

                <td>{{ $value }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
</body>

</html>
