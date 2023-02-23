@extends('layout')

@section('content')
    <main>
        <div class="container">

            <form action="/todo/edit/{{$todo->id}}" method="POST" name="editTodo">
                @csrf
                @method('PUT')
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" value="{{old('name', $todo->name) }}" placeholder="Nom de la tache ">
                @error('name')
                    {{ $message }}
                @enderror
                <label for="qty">Quantité</label>
                <input type="text" name="qty" id="qty" value="{{ old('qty', $todo->qty) }}" placeholder="Quantité ">
                @error('qty')
                    {{ $message }}
                @enderror
                <label for="price">Prix</label>
                <input type="text" name="price" id="price" value="{{ old('price',$todo->price) }}" placeholder="Prix ">
                @error('price')
                    {{ $message }}
                @enderror
                <button type="submit" name="btnEdit">Modifier</button>
            </form>

        </div>
    </main>
@endsection
