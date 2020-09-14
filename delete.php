<?php

require_once 'autoload.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$book = Book::findbyId($id);





