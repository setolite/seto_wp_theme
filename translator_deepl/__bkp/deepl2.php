<?php


namespace DeepL;

$authKey = "b072f290-01de-7c5a-ac53-20177592e51d:fx"; // Replace with your key

require 'vendor/autoload.php';

$translator = new \DeepL\Translator($authKey);








$entries = GlossaryEntries::fromEntries(['artist' => 'Maler', 'prize' => 'Gewinn']);



$myGlossary = $translator->createGlossary('My glossary', 'en', 'de', $entries);
echo "Created '$myGlossary->name' ($myGlossary->glossaryId) " .
    "$myGlossary->sourceLang to $myGlossary->targetLang " .
    "containing $myGlossary->entryCount entries";





    echo "<hr>";




    $text = 'The artist was awarded a prize.';
    $withGlossary = $translator->translateText($text, 'en', 'de', ['glossary' => $myGlossary]);
    echo $withGlossary->text; // "Der Maler wurde mit einem Gewinn ausgezeichnet."

    // For comparison, the result without a glossary:
    $withoutGlossary = $translator->translateText($text, null, 'de');
    echo $withoutGlossary->text; // "Der Künstler wurde mit einem Preis ausgezeichnet."




    /*


$result = $translator->translateText('ZUGBEGLEITERLEUCHTE Maler 4CLED', null, 'fr');
echo $result->text; // Bonjour, le monde!
echo "<hr>";
var_dump($result); // Bonjour, le monde!

*/





?>
</pre>
