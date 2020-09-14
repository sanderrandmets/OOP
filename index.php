<?php

require_once 'autoload.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$book = Book::findAll();
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
    <?php

foreach($book as $object) {?>


    <li><a href="book.php?id=<?php echo $object->id; ?>"><?php echo $object->title . " ". "(" . $object->release_date . ")"; ?></a></li>

<?php } ?>

    </ul>
</body>
</html>
