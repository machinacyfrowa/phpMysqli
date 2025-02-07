<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="add.php" method="post">
    <label for="title">Tutuł:</label>
    <input type="text" name="title" id="title">
    <select name="author" id="author">
        <!-- option value to id autora w jego tabeli
            i jednocześnie klucz obcy w tabeli z książkami -->
        <option value="1">Adam Mickiewicz</option>
        <option value="2">Juliusz Słowacki</option>
        <option value="3">Henryk Sienkiewicz</option>
        <option value="4">Stanisław Wyspiański</option>
        <option value="5">Jan Brzechwa</option>
    </select>
    <input type="submit" value="Dodaj">
</form>


</body>
</html>