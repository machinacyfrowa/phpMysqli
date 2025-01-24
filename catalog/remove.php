<?php
//$id to id książki do usunięcia
$id = $_REQUEST['id'];

$db = new mysqli('localhost', 'root', '', 'book_catalog');
$sql = "SELECT book.id, title.book_title AS title, 
        CONCAT(author.first_name, ' ', author.last_name) AS author
        FROM book 
        LEFT JOIN author ON author.ID = book.author 
        LEFT JOIN title ON title.ID = book.title
        WHERE book.id = $id
        LIMIT 1";
//pobranie danych o książce do usunięcia        
$result = $db->query($sql);
//wyciągnięcie pojedynczej książki
$book = $result->fetch_assoc();
?>

Czy jestes pewien, że chcesz usunąć poniższą książkę: <br>
<?php
echo $book['title'] . ' - ' . $book['author'];
?>
<br>
<a href="delete.php?id=<?php echo $id; ?>">Tak</a>
<a href="index.php">Nie</a>