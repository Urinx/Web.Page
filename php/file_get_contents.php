<meta charset="utf-8">
<?php
$map_api_url='http://api.map.baidu.com/geocoder?coord_type=wgs84&location=30.1332,104.2342';
$output=file_get_contents($map_api_url);

$xml=simplexml_load_string($output);
echo($xml->result->addressComponent->city);
?>