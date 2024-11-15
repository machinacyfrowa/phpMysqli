<?php
//najpierw sprawdzamy czy w ogóle dostaliśmy jakieś dane
if(isset($_POST['submit'])) {
    //przepisujemy dane z formularza do zmiennych
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    //łączymy się z bazą danych
    $db = new mysqli('localhost','root','','db');
    //tworzymy kwerendę do bazy danych
    $sql = "INSERT INTO person (firstName, lastName) 
                VALUES ('$firstName', '$lastName')";
    //wysyłamy kwerendę do bazy danych
    //jeśli query zwraca true to znaczy, że zapytanie się udało
    if($db->query($sql)) {
        echo "Dodano rekord do bazy danych";
    } else {
        //jeśli query zwraca false to znaczy, że zapytanie się nie udało
        echo "Błąd podczas dodawania rekordu do bazy danych";
    }
}
?>

<form action="insert.php" method="post">
    <input type="text" name="firstName" placeholder="Imię">
    <input type="text" name="lastName" placeholder="Nazwisko">
    <input type="submit" name="submit" value="Wyślij">
</form>