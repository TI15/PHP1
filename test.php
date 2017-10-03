<?php
// En variabel, deklarerad men den har inget värde, 
// det rekommenderas att alltid ge variabeln ett värde eller null.
$var;

// Heltal som läggs i en variabel.
$heltal1 = 42;
$heltal2 = 1337;

// Flyttal med punkt för decimalerna.
$flyttal1 = 3.141592654;
$flyttal2 = 1.4142;

// Strängvariabeler omsluts av enkelfnutt '' eller dubbelfnutt "".
$text1 = "Jag kan 10 decimaler på pi: "; 
$text2 = "Roten ur 2 är: ";
$text3 = "Svaret på frågan om allting och universum?";
$text4 = "Elit ";

// boolska variabler har värdet true eller false.
$sant = true;
$falskt = false;

// Värdet null är ett specialvärde som innebär null, ingenting.
$inget = null;

echo "<p>", $text1, $flyttal1, "</p>";    // Separated by ,
echo "<p>" . $text2 . $flyttal2 . "</p>"; // Concatinated with . 
echo "<p>$text3 $heltal1</p>";            // Print out variables within "
echo "<p>{$text4} {$heltal2}</p>";        // Separate variables within string with {}

// Notice that the values for false and null is not visible on the webpage.
echo "<p>Sant=$sant<br>falskt=$falskt<br>inget=$inget</p>";



echo "<pre>";
var_dump($heltal1);
var_dump($flyttal1);
var_dump($text1);
var_dump($sant);
var_dump($falskt);
var_dump($inget);
echo "</pre>";


echo "<p>Dagens datum och tid är nu " . date('r') . "</p>";
echo "<p>Så här många sekunder har det gått sedan 
den förste januari 1970: " . time() . "</p>";
?>