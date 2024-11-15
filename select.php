<?php
// stwórz nowe połączenie do bazy danych
// lokalny serwer, użytkownik root, bez hasła, baza o nazwie "db"
$db = new mysqli('localhost', 'root', '', 'db');
// kwerenda w języku SQL, którą chcemy wykonać na serwerze MySQL
$sql = "SELECT * FROM person";
// wykonaj kwerendę na serwerze MySQL i zapisz wynik do zmiennej $result
$result = $db->query($sql);
// wyciągamy pierwszą (jedyną) linijkę z wyniku zapytania do zmiennej $row
while ($row = $result->fetch_assoc()) {
    //wewnątrz tego while, w każdej iteracji $row będzie innym wierszem

    // przepisz zmienne z tablicy do lokalny zmiennych
    $id = $row['id'];
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    // wyświetl osobę z bazy
    echo "ID: $id, Imię: $firstName, Nazwisko: $lastName <br>";
}

$db->close();
