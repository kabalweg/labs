<?php

//$arr = array("aaa", "bbb", "ccc");
//var_dump($arr);


$arr2 = array();
$arr2[] = array("label" => "test1", "id" => "111", "value" => "aaa");
$arr2[] = array("label" => "test2", "id" => "222", "value" => "bbb");
$arr2[] = array("label" => "test3", "id" => "333", "value" => "ccc");
//var_dump($arr2);

$arr = array();
$arr[] = '111' . '|' . 'aaa' . "\n";
$arr[] = '222' . '|' . 'bbb' . "\n";
$arr[] = '333' . '|' . 'ccc' . "\n";
$arr[] = '444' . '|' . 'ddd' . "\n";
$arr[] = '555' . '|' . 'eee' . "\n";
$arr[] = '666' . '|' . 'fff' . "\n";
$arr[] = '777' . '|' . 'ggg' . "\n";
$arr[] = '888' . '|' . 'hhh' . "\n";
$arr[] = '999' . '|' . 'iii' . "\n";


for($x = 0; $x < 500000; $x++)
{
    // do nothing...
}


//$arr = "['Coccari, Gregg (1-800-DENTIST)|49354|63487|283013|c\n','Coccari, Taylor (1-800-DENTIST)|49354|63487|285415|c\n','Coccia, Nick (Universal McCann Detroit)|58279|63769|288011|a\n','Cocco, Susan (Colangelo Synergy Marketing, Inc.)|19050|20666|123610|a\n','Coccodrilli, Christina (First Quality Enterprises)|49332|63444|282396|c\n','Cochran, Allen (Buffalo's Franchise Concepts, Inc.)|29886|34181|178028|c\n','Cochran, Bill (The Richards Group, Inc.)|5780|5970|193336|a\n','Cochran, Catherine (Dallas Symphony Orchestra)|30677|34972|276548|c\n','Cochran, Chan (Cochran Group, Inc.)|24686|27637|73922|a\n','Cochran, David (Manufacturing Jewelers & Suppliers of America)|47881|59561|240196|c\n','Cochran, Ellen (E-Z-Go)|2288|2346|273051|c\n','Cochran, Guyton (Southwire Company)|6355|6565|194817|c\n','Cochran, III, John (Bank of America Corporation)|702|4458|12198|c\n','Cochran, Jeff (Microsoft Corporation)|4359|4489|163000|c\n','Cochran, Jeremy (Iris)|11628|12166|295437|a\n','Cochran, John (Pabst Brewing Company)|5922|51282|101800|c\n','Cochran, John (Terrapin Beer Company, LLC)|45242|51323|178897|c\n','Cochran, Lauren (Philadelphia Flyers Hockey Club)|10549|11005|298709|c\n','Cochran, Mary (Catapult PR-IR)|9433|9802|19941|a\n','Cochran, Nicole (Brinker International, Inc.)|1077|1108|165706|c\n','Cochran, Sandra (CBRL Group, Inc.)|1815|1862|30827|c\n','Cochran, Steven (WideOpenWest, LLC)|9302|9642|53774|c\n','Cochran, Terri (Lee & Wyrsch Marketing Group)|7433|7682|146611|a\n','Cochrane, Bill (Saatchi & Saatchi)|5969|6167|14760|a\n','Cochrane, Charlotte (MindShare)|38240|21806|204038|a\n']";
//$arr = "[{'name':'Coccari, Gregg (1-800-DENTIST)|49354|63487|283013|c\n'},{'name':'Coccari, Taylor (1-800-DENTIST)|49354|63487|285415|c\n'},{'name':'Coccia, Nick (Universal McCann Detroit)|58279|63769|288011|a\n'},{'name':'Cocco, Susan (Colangelo Synergy Marketing, Inc.)|19050|20666|123610|a\n'},{'name':'Coccodrilli, Christina (First Quality Enterprises)|49332|63444|282396|c\n'},{'name':'Cochran, Allen (Buffalo's Franchise Concepts, Inc.)|29886|34181|178028|c\n'},{'name':'Cochran, Bill (The Richards Group, Inc.)|5780|5970|193336|a\n'},{'name':'Cochran, Catherine (Dallas Symphony Orchestra)|30677|34972|276548|c\n'},{'name':'Cochran, Chan (Cochran Group, Inc.)|24686|27637|73922|a\n'},{'name':'Cochran, David (Manufacturing Jewelers & Suppliers of America)|47881|59561|240196|c\n'},{'name':'Cochran, Ellen (E-Z-Go)|2288|2346|273051|c\n'},{'name':'Cochran, Guyton (Southwire Company)|6355|6565|194817|c\n'},{'name':'Cochran, III, John (Bank of America Corporation)|702|4458|12198|c\n'},{'name':'Cochran, Jeff (Microsoft Corporation)|4359|4489|163000|c\n'},{'name':'Cochran, Jeremy (Iris)|11628|12166|295437|a\n'},{'name':'Cochran, John (Pabst Brewing Company)|5922|51282|101800|c\n'},{'name':'Cochran, John (Terrapin Beer Company, LLC)|45242|51323|178897|c\n'},{'name':'Cochran, Lauren (Philadelphia Flyers Hockey Club)|10549|11005|298709|c\n'},{'name':'Cochran, Mary (Catapult PR-IR)|9433|9802|19941|a\n'},{'name':'Cochran, Nicole (Brinker International, Inc.)|1077|1108|165706|c\n'},{'name':'Cochran, Sandra (CBRL Group, Inc.)|1815|1862|30827|c\n'},{'name':'Cochran, Steven (WideOpenWest, LLC)|9302|9642|53774|c\n'},{'name':'Cochran, Terri (Lee & Wyrsch Marketing Group)|7433|7682|146611|a\n'},{'name':'Cochrane, Bill (Saatchi & Saatchi)|5969|6167|14760|a\n'},{'name':'Cochrane, Charlotte (MindShare)|38240|21806|204038|a\n'}]";
echo json_encode($arr2);

//echo $arr;

//echo json_decode('{ "id": "Caprimulgus europaeus", "label": "European Nightjar", "value": "European Nightjar" }, { "id": "Upupa epops", "label": "Eurasian Hoopoe", "value": "Eurasian Hoopoe" }, { "id": "Jynx torquilla", "label": "Eurasian Wryneck", "value": "Eurasian Wryneck" }, { "id": "Picus viridis", "label": "European Green Woodpecker", "value": "European Green Woodpecker" }, { "id": "Saxicola rubicola", "label": "European Stonechat", "value": "European Stonechat" }, { "id": "Ficedula hypoleuca", "label": "Eurasian Pied Flycatcher", "value": "Eurasian Pied Flycatcher" }, { "id": "Sitta europaea", "label": "Eurasian Nuthatch", "value": "Eurasian Nuthatch" }, { "id": "Falco subbuteo", "label": "Eurasian Hobby", "value": "Eurasian Hobby" }, { "id": "Pica pica", "label": "Eurasian Magpie", "value": "Eurasian Magpie" }, { "id": "Garrulus glandarius", "label": "Eurasian Jay", "value": "Eurasian Jay" }, { "id": "Pluvialis apricaria", "label": "European Golden Plover", "value": "European Golden Plover" }, { "id": "Pyrrhula pyrrhula", "label": "Eurasian Bullfinch", "value": "Eurasian Bullfinch" }');

?>
