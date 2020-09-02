<?php

class Plugin {

    public $title;

    function __construct($t) {
        $this->title = $t;
    }

}

$plugin = new Plugin('Sylenth1');
$plugin2 = new Plugin('Serum');

var_dump($plugin->title);
var_dump($plugin2->title);

echo "\n";