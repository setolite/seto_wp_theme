<table border="1" cellpadding="5" cellspacing="5">
<?php

$c = 0;
$de = 0;
$en = 0;
$fr = 0;
$ro = 0;
$nn = 0;

$c = 0;

require_once 'Art_export_Sprachen.json.php';

foreach($myProductData as $itemNo => $aProduct){
if($c<=0){
  // echo $itemNo->en->shortname . PHP_EOL;
  echo "<tr>";
  echo "<td valign='top' width='5%'>" . $itemNo . "</td>";
  echo "<td valign='top' width='15%'>" . print_lang('de') . "</td>";
  echo "<td valign='top' width='15%'>" . print_lang('en') . "</td>";
  echo "<td valign='top' width='15%'>" . print_lang('fr') . "</td>";
  echo "<td valign='top' width='15%'>" . print_lang('ro') . "</td>";
  echo "<td valign='top' width='15%'>" . print_lang('fi') . "</td>";
  echo "<td valign='top' width='15%'>" . print_lang('da') . "</td>";
  echo "<td valign='top' width='15%'>" . print_lang('ko') . "</td>";
  echo "<td valign='top' width='15%'>" . print_lang('ru') . "</td>";
  echo "<td valign='top' width='15%'>" . print_lang('es') . "</td>";
  echo "<td valign='top' width='15%'>" . print_lang('pl') . "</td>";
  echo "<td valign='top' width='15%'>" . print_lang('sv') . "</td>";
  echo "</tr>";
  // if(isset($aProduct->de->shortname) && strlen($aProduct->de->shortname) > 0){ $de++; }
  // if(isset($aProduct->en->shortname) && strlen($aProduct->en->shortname) > 0){ $en++; }
  // if(isset($aProduct->fr->shortname) && strlen($aProduct->fr->shortname) > 0){ $fr++; }
  // if(isset($aProduct->ro->shortname) && strlen($aProduct->ro->shortname) > 0){ $ro++; }
  // if(isset($aProduct->fi->shortname) && strlen($aProduct->fi->shortname) > 0){ $fi++; }


  $c++;
}
else {
  echo "</table>";
  die("reicht...");
}

}


/* ----------------------- FUNCTIONS ----------------------- */

function print_lang($theLang){
  global $aProduct;
  if(isset($aProduct->$theLang) && strlen($aProduct->$theLang->shorttext) > 0){
  $r = $aProduct->$theLang->shorttext;
  $r .= " >".strlen($aProduct->$theLang->shorttext)."<";
  if(strlen($r)>0){
    return $r;
  }
  } else {
// echo "---";
$r = false;
    $text = $aProduct->de->shorttext;
    #$r = $theLang;
    // $request = 'http://localhost/translator_deepl/deepl2.php?text=';
    if(!file_exists('translations/translation_'.$theLang.".txt")){
    $request = 'http://localhost/translator_deepl/deepl2.php?text='.urlencode($text).'&leLang='.$theLang;
    // $start = time();
    $r .= file_get_contents('http://localhost/translator_deepl/deepl2.php?text='.urlencode($text).'&leLang='.$theLang);

       file_put_contents('translations/translation_'.$theLang.".txt", $r);
     } else {
       $r .= "Übersetzung gab's schon ;-)<hr>" . file_get_contents('translations/translation_'.$theLang.".txt", $r);

     }
    // $end = time();
    // echo $end - $start;
    // echo "-> " . strlen($r);
    // echo "### " . $request;
    // die("!!!!! " . $request);
    return $r;
    // return "Hier müsste eine Übersetzung stehen [" . $theLang . "]";
  }
  // $r = "----";
}




/* ----------------------- FUNCTIONS ----------------------- */

// echo $c . " / " . count((array)$myProductData);;


// echo "<pre>";
//
// echo "<hr>";
// var_dump($myProductData);
// echo "</pre>";


 ?>


<?php

echo "DE: " . $de . "<br>";
echo "EN: " . $en . "<br>";
echo "FR: " . $fr . "<br>";
echo "RO: " . $ro . "<br>";
echo "NN: " . $nn . "<br>";

 ?>
