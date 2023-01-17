<?php

$ch=curl_init();
// curl_setopt($ch,CURLOPT_URL,"https://www.google.com/");
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

//extra line
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

//using array instead of defining all functions seperately
curl_setopt_array($ch,[
    CURLOPT_URL=> "https://api.openweathermap.org/data/2.5/weather?q=India&appid=b9a0c7b5462d1803313a19111a803101",
    CURLOPT_RETURNTRANSFER=> true
]);

$response= curl_exec($ch);

//checking status code
$status_code=curl_getinfo($ch,CURLINFO_HTTP_CODE);

curl_close($ch);
echo $status_code, "\n";
echo "<br>";
echo $response,"\n";
?>