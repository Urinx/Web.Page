<meta charset="utf-8">
<?php
$map_api_url='http://api.map.baidu.com/geocoder?coord_type=wgs84&location=30.1332,104.2342';

//1.初始化
$ch = curl_init();
//2.设置选项，包括URL
curl_setopt($ch, CURLOPT_URL, $map_api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
//3.执行并获取HTML文档内容
$output = curl_exec($ch);
//4.释放curl句柄
curl_close($ch);

/*
SimpleXML是PHP5后提供的一套简单易用的xml工具集，可以把xml转换成方便处理的对象，也可以组织生成xml数据。不过它不适用于包含namespace的xml，而且要保证xml格式完整(well-formed)。它提供了三个方法：simplexml_import_dom、simplexml_load_file、simplexml_load_string，函数名很直观地说明了函数的作用。三个函数都返回SimpleXMLElement对象，数据的读取/添加都是通过SimpleXMLElement操作。
SimpleXML的优点是开发简单，缺点是它会将整个xml载入内存后再进行处理，所以在解析超多内容的xml文档时可能会力不从心。如果是读取小文件，而且xml中也不包含namespace，那SimpleXML是很好的选择。
*/
$xml=simplexml_load_string($output);
echo($xml->result->addressComponent->city);
?>