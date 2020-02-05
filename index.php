<?php

class Smartphone
{
    public $ram;
    public $processore;
    public $memoria;
    public $fotocamera;
    public $prezzo;

    public function __construct($_ram, $_processore, $_memoria, $_fotocamera, $_prezzo)
    {
        $this->ram = $_ram;
        $this->processore = $_processore;
        $this->memoria = $_memoria;
        $this->fotocamera = $_fotocamera;
        $this->prezzo = $_prezzo;
    }
}
$OnePlus7Pro = new Smartphone(12, 2.96, 256, 48, 800);
$Iphone_5 = new Smartphone(1, 1.3, 16, 8, 300);

class Tablet extends Smartphone
{
    public $display;
    public function __construct($_display)
    {
        parent::__construct();
        $this->display = $_display;
    }
}
include 'Iphone_5.php';
echo '<pre>';
var_dump($OnePlus7Pro);
var_dump($Iphone_5);
echo '</pre>';
