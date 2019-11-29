@auth 
    <form action="/logout" method="POST" id="logout-form">
        {{ csrf_field() }}
        <button type="submit">Sair</button>
    </form>
@else
    <a href="/login">Login</a>
    <a href="/register">Register</a>
@endauth

<form method="POST" action="/categorias/search">
    {{ csrf_field() }}
    <input type="text" placeholder="buscar" name="text">
    <button type="submit">Buscar</button>
</form>