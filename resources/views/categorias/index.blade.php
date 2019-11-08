<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>data de Cadastro</th>
            <th>data da Ultima atualização</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->nome}}</td>
                <td>{{$value->create_at}}</td>
                <td>{{$value->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>