<?php
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $db = new mysqli('localhost', 'root', '', 'book_catalog');
    $sql = "DELETE FROM book WHERE id = $id";
    $db->query($sql);
    //header przekierowuje na inną stronę
    header('Location: index.php');
}

?>