@extends('layout')

@section('content')
    <main>
        <div class="cointainer">
            <ul>
                @foreach ($todos as $todo)
                    <li>{{ $todo->name }} - {{ $todo->qty }} - {{ $todo->price }}€ </li>
                    {{ date('d/m/Y H:i:s', strtotime($todo->created_at)) }}
                    <a href="/todo/edit/{{$todo->id}}">Editer</a>
                    <form action="/todo/delete/{{$todo->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="btnDelete">Supprimer</button>
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
