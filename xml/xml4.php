<?php
$xml = simplexml_load_file('./rss2.xml');

//simplexml转数组
function XmlToArray($element)
{
    if($element instanceof SimpleXMLElement){
        $element = (array)$element;
    }
    foreach ($element as &$v){
        if($v instanceof SimpleXMLElement || is_array($v)){
            $v = XmlToArray($v);
        }
    }
    return $element;
}
$xml = XmlToArray($xml);

//数组转xml
function arrayToXml($arr,$xml = null,$parentNode = null)
{
    if ($xml === null) {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8" ?><root></root>');
    }
    foreach ($arr as $key=>$val) {
        if ($key === '@attributes') {
            foreach ($val as $k => $v) {
                $xml->addAttribute($k, $v);
            }
        }elseif (ctype_digit((string)$key)){
            if (is_array($val)) {
                arrayToXml($val, $parentNode->addChild($xml->getName()), $parentNode);
            }else{
                $parentNode->addChild($xml->getName(), $val);
            }
        }else {
            if (is_array($val)) {
                $valKeys = implode('',array_keys($val));
                if(ctype_digit($valKeys)){
                    arrayToXml($val, new SimpleXMLElement("<{$key}></{$key}>"), $xml);
                }else {
                    arrayToXml($val, $xml->addChild($key), $xml);
                }
            } else {
                $xml->addChild($key, $val);
            }
        }
    }
    return $xml->saveXML();
}

$xml = arrayToXml($xml);
header('Content-Type:text/xml');
echo $xml;
