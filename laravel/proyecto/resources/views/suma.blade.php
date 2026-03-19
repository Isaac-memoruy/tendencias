@extends('layouts.app')
@section('content')

        <h1 class="text-center">Sumar dos números</h1>
        <form action="/suma" method="POST">
            @csrf
            <label>Número 1:</label>
            <input type="number" name="num1" required>
            <br><br>
            <label>Número 2:</label>
            <input type="number" name="num2" required>
            <br><br>
            <button type="submit">Sumar</button>
        </form>
    <br>
        @if(isset($resultado))
            <h2>Resultado: {{$resultado}}</h2>
        @endif
@endsection
