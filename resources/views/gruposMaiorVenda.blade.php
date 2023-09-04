<html>

<body>

    <table class="ui celled table">
        <thead>
            <tr>
                <th>Produto Grupo</th>

            </tr>
        </thead>
        @foreach ($listaProdutoGrupo as $key => $value)
            <tbody>

                <td>{{ $key }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
</body>

</html>
