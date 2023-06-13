<?php


/*


POST /v2/translate HTTP/2
Host: api-free.deepl.com
Authorization: DeepL-Auth-Key b072f290-01de-7c5a-ac53-20177592e51d:fx
User-Agent: YourApp/1.2.3
Content-Length: 37
Content-Type: application/x-www-form-urlencoded

text=Hello%2C%20world!&target_lang=DE


*/

?>







<html>

<head>


<script>


function httpGet(req_text, req_lang)
{
  alert(req_text + " / " + req_lang);
    var xmlHttp = new XMLHttpRequest();
    // theUrl = "api-free.deepl.com";
    theUrl = "api.deepl.com";
    var theRequest = "https://" + theUrl + "?text=" + req_text + "&target_lang=" + req_lang;
    //alert(theRequest);
    xmlHttp.open( "GET", theRequest, false ); // false for synchronous request
    xmlHttp.send( null );
    alert(xmlHttp.responseText);
    return xmlHttp.responseText;
}


</script>

</head>

<body>


<a href="javascript:void(0);" onclick="httpGet('Eingangsspannung und Netzfrequenz', 'FR')">Klick hier</a>

</body>

</html>
