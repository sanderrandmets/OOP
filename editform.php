<?php

require_once
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$oBook = Book::findByid($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $oBook->title ?></h1>
    <form action="edit.php" method="post">
    <input type="text"></form>

</body>
</html>
