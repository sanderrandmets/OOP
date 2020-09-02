<?php

class Book {

    protected $title;
    protected $inStock = true;
    public $stockSaldo = 0;

    public function __construct($t) {
        $this->title = $t;
    }

    public function getStocksaldo() {
        return $this->stockSaldo;
    }

    public function setStocksaldo($v) {
        if ( $v < 0 ) {
            throw new Exeption('Value should not negative!');
        } else {
            $this->stockSaldo = $v;
    }
}

    public function soldOut() {
        $this->inStock = false;
    }

}

$book = new Book('Kalevipoeg');
$book2 = new Book('Rehepapp');

$book->stockSaldo = -5;
$book2->soldOut();


var_dump($book);
var_dump($book2);
var_dump($book->getStockSaldo());

//$book2->inStock = true;

//var_dump($book->title);
//var_dump($book2->title);

//echo "\n";


//$book->title = 'Kalevipoeg';
//$book2->title = 'Rehepapp';