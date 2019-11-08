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
                <td><a href="/categorias/{{$value->id}}">{{$value->nome}}</a></td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>