<?php

$var1 = 10;
$var2 = 100.25;
$var3 = "Alaa";
$var4 = false;
$var5 = NULL;
$var6 = array(
    "A" => "Alaa",
    "B" => "Bassem"
);

class Book {
    function book() {
        $this -> bookname = "PHP BOOK";
    }
}

$varObkectFromBook = new Book();

echo gettype($var1) . "<br>";
echo gettype($var2) . "<br>";
echo gettype($var3) . "<br>";
echo gettype($var4) . "<br>";
echo gettype($var5) . "<br>";
echo gettype($var6) . "<br>";
echo gettype($varObkectFromBook) . "<br>";

echo "<br>-----------------------------------------------------------<br>";

echo var_dump($var1) . "<br>";
echo var_dump($var2) . "<br>";
echo var_dump($var3) . "<br>";
echo var_dump($var4) . "<br>";
echo var_dump($var5) . "<br>";
echo var_dump($var6) . "<br>";
echo var_dump($varObkectFromBook) . "<br>";
?>