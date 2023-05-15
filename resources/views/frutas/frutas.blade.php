<h1>LISTADO DE FRUTAS</h1>
<ul>
    @foreach ($frutas as $f)
        <li>{{ $f->nombre }}</li>
    @endforeach
</ul>

<a href="{{ route('naranjas') }}">Ir a naranjas</a>
<a href="{{ url('fruteria/peras') }}">Ir a peras</a>

<br>
<br>
<br>

<form action="" method="POST">
    @csrf

    @if (session('status'))
        {{ session('status') }}
    @endif

    @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach

    Nombre:<input type="text" name="nombre" value="{{ old('nombre') }}"><br>
    Descripcion:
    <textarea name="descripcion">{{ old('descripcion') }}</textarea><br>
    <input type="submit" name="enviar" value="Enviar">
</form>
