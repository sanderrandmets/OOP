<?php

require_once 'models/Book.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$book = Book::findAll();


//var_dump($book);
foreach($book as $object) {?>

<h1><?php echo $object->title . " ". "(" . $object->release_date . ")"; ?></h1>

<?php }

?>