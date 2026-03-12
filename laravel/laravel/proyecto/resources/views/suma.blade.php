<!DOCTYPE html>
<html>
<head>
    <title>Suma</title>
</head>
<body>

<h1>Sumar dos numeros</h1>

<form action="/suma" method="POST">
    @csrf

    <label>Numero 1:</label>
    <input type="number" name="num1" required>

    <br><br>

    <label>Numero 2:</label>
    <input type="number" name="num2" required>

    <br><br>

    <button type="submit">Sumar</button>

</form>

<br>

Resultado:

@if(isset($resultado))
    <strong>{{ $resultado }}</strong>
@endif

</body>
</html>