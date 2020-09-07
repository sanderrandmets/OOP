<?php

require_once 'models/Book.php';

$books = Book::findAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($books as $object) {?>
        <li><a href="book.php?id=<?php echo $object->id; ?>"><?php echo $object->title; ?></a></li>
      <?php } ?>
    </ul>
</body>
</html>