<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
        //wyciągam id z treści linku
        $id = $_REQUEST['id'];
        //buduje kwerendę
        $sql = "SELECT 
        book.id,
        CONCAT(author.first_name, ' ', author.last_name) AS author, 
        title.book_title AS title FROM book 
        LEFT JOIN author ON author.ID = book.author 
        LEFT JOIN title ON title.ID = book.title 
        WHERE book.id = $id";
        //łączę się z bazą
        $db = new mysqli('localhost', 'root', '', 'book_catalog');
        //wysyłam zapytanie
        $result = $db->query($sql);
        //binduje sobie dane z bazy do lokalnych zmiennych
        $id = $_REQUEST['id'];
        $author = $row['author'];
        $title = $row['title'];
    ?>

    <form action="save.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="author">Autor:</label>
        <input type="text" name="author" id="author"value="<?php echo $author; ?>" readonly>

        <label for="title">Tytuł:</label>
        <input type="text" name="title" id="title" value="<?php echo $title; ?>">

        <input type="submit" value="Zapisz" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>