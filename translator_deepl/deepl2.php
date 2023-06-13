<?php


namespace DeepL;

// $authKey = "b072f290-01de-7c5a-ac53-20177592e51d:fx"; // Replace with your key
$authKey = "c398a39f-2cf3-fc66-2ba4-fa4944742aa7"; // Replace with your key

require 'vendor/autoload.php';

$translator = new \DeepL\Translator($authKey);


$fromLangs = array("BG","CS","DA","DE","EL","EN","ES","ET","FI","FR","HU","ID","IT","JA","KO","LT","LV","NB","NL","PL","PT","RO","RU","SK","SL","SV","TR","UK","ZH");

$toLangs = array("EN-GB","EN-US","PT-BR","PT-PT","BG","CS","DA","DE","EL","EN","ES","ET","FI","FR","HU","ID","IT","JA","KO","LT","LV","NB","NL","PL","PT","RO","RU","SK","SL","SV","TR","UK","ZH");



if(isset($_GET['leLang']) && isset($_GET['text'])){
  // echo "-----";
  // $theText = "Hier könnte ein toller langer Text stehen,<br><br><br>&ndash;tut<br>er<br>aber<br>nicht.";
  // $theText = "- Aufzählungen\r\n- finde ich\r\n- toll";
  $theText = urldecode($_GET['text']);
  // echo "<hr>";
  // echo $theText;
  // echo "<hr>";



  $toLang = strtoupper($_GET['leLang']);
  // echo "to: " . $toLang;
  // echo in_array($toLang, $toLangs);
} else {
  die('nein');
}

/*

FROM

    BG - Bulgarian
    CS - Czech
    DA - Danish
    DE - German
    EL - Greek
    EN - English
    ES - Spanish
    ET - Estonian
    FI - Finnish
    FR - French
    HU - Hungarian
    ID - Indonesian
    IT - Italian
    JA - Japanese
    KO - Korean
    LT - Lithuanian
    LV - Latvian
    NB - Norwegian (Bokmål)
    NL - Dutch
    PL - Polish
    PT - Portuguese (all Portuguese varieties mixed)
    RO - Romanian
    RU - Russian
    SK - Slovak
    SL - Slovenian
    SV - Swedish
    TR - Turkish
    UK - Ukrainian
    ZH - Chinese


TO

    BG - Bulgarian
    CS - Czech
    DA - Danish
    DE - German
    EL - Greek
    EN - English (unspecified variant for backward compatibility; please select EN-GB or EN-US instead)
    EN-GB - English (British)
    EN-US - English (American)
    ES - Spanish
    ET - Estonian
    FI - Finnish
    FR - French
    HU - Hungarian
    ID - Indonesian
    IT - Italian
    JA - Japanese
    KO - Korean
    LT - Lithuanian
    LV - Latvian
    NB - Norwegian (Bokmål)
    NL - Dutch
    PL - Polish
    PT - Portuguese (unspecified variant for backward compatibility; please select PT-BR or PT-PT instead)
    PT-BR - Portuguese (Brazilian)
    PT-PT - Portuguese (all Portuguese varieties excluding Brazilian Portuguese)
    RO - Romanian
    RU - Russian
    SK - Slovak
    SL - Slovenian
    SV - Swedish
    TR - Turkish
    UK - Ukrainian
    ZH - Chinese (simplified)
*/

                          // $entries = GlossaryEntries::fromEntries(['artist' => 'Maler', 'prize' => 'Gewinn']);
                          //
                          //
                          //
                          // $myGlossary = $translator->createGlossary('My glossary', 'en', 'de', $entries);
                          // echo "Created '$myGlossary->name' ($myGlossary->glossaryId) " .
                          //     "$myGlossary->sourceLang to $myGlossary->targetLang " .
                          //     "containing $myGlossary->entryCount entries";
                          //




    // echo "<hr>";




    $text = 'The quick brown fox jumped over the lazy dog.';
    $text = $theText;
    // $withGlossary = $translator->translateText($text, 'en', 'de', ['glossary' => $myGlossary]);
    // echo $withGlossary->text; // "Der Maler wurde mit einem Gewinn ausgezeichnet."

    // For comparison, the result without a glossary:
    $withoutGlossary = $translator->translateText($text, null, $toLang);


echo $withoutGlossary;
    // echo $text;
    // echo "<hr>";
    // echo $withoutGlossary->text; // "Der Künstler wurde mit einem Preis ausgezeichnet."


    // echo "<hr>";
    //
    // echo str_replace("\r\n", "<br>", $withoutGlossary->text);

    // echo "<hr>";

    // $theList = explode("\r\n", $withoutGlossary->text);
    // echo "<ol>";
    // foreach($theList as $anItem){
    //   echo "<li>" . $anItem . "</li>";
    // }
    // echo "</ol>";


    /*


$result = $translator->translateText('ZUGBEGLEITERLEUCHTE Maler 4CLED', null, 'fr');
echo $result->text; // Bonjour, le monde!
echo "<hr>";
var_dump($result); // Bonjour, le monde!

*/





?>
