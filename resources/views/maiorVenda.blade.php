<html>

<body>
    <table class="ui celled table">
        <thead>
            <tr>
                <th>Produto Grupo</th>

            </tr>
        </thead>
        @foreach ($gruposMaiorVenda as $value)
            <tbody>

                <td>{{ $value->nm_produto_grupo }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
</body>

</html>
