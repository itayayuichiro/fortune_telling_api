<?php 
require_once("./phpQuery-onefile.php");
error_reporting(E_ALL);

/*yahoo*/
$HTMLData = file_get_contents('https://fortune.yahoo.co.jp/12astro/scorpio');
$phpQueryObj = phpQuery::newDocumentHTML($HTMLData);
$ranking = $phpQueryObj['#jumpdtl strong'];
$ranking = mb_convert_encoding($ranking, 'UTF-8', 'CP51932');
$table_tag = $phpQueryObj['#jumpdtl img'];

/*i無料占い*/
$HTMLData2 = file_get_contents('http://uranaitv.jp/rank_fortune/scorpio');
$phpQueryObj2 = phpQuery::newDocumentHTML($HTMLData2);
$ranking2 = $phpQueryObj2["meta[property='og:description']"];
$ranking2 = explode("……", pq($ranking2)[0]->attr('content'))[1];
$table_tag2 = $phpQueryObj2['#rankAll span'];


/*i無料占い*/
$HTMLData3 = file_get_contents('https://uranai.nifty.com/f12seiza/sasori/');
$phpQueryObj3 = phpQuery::newDocumentHTML($HTMLData3);
$h2_tag = $phpQueryObj3["h2"];
foreach($h2_tag as $val) {
	if (strpos(pq($val)->text(),'位')) {
		$ranking3 = explode("さそり座 ", pq($val)->text())[1];
	}
}

//echo $ranking3;
$table_tag3 = $phpQueryObj3['#re_main img'];


$json_array = array(
	'result' => [
		array('name' => 'yahoo占い','ranking' => $ranking),
		array('name' => 'i無料占い','ranking' => $ranking2)
		]
);
# ↑ JSON 形式にする
 
header("Content-Type: text/javascript; charset=utf-8");
# ↑ 半分おまじない。JSONで送りますよという合図
 
echo json_encode($json_array);
 ?>