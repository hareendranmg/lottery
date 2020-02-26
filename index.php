<?php
require 'vendor/autoload.php';
include_once('lottery_connection.php');
use Symfony\Component\DomCrawler\Crawler;

$client = new \GuzzleHttp\Client();

$url = "http://103.251.43.52/lottery/weblotteryresult.php";
$result_url = 'http://103.251.43.52/lottery/reports/draw/tmp';
$res = $client->request('GET', $url);

$html = ''.$res->getBody();
$crawler = new Crawler($html);

$crawler = $crawler->filter('.stats > tr')->siblings();
$nodeValues = $crawler->each(
	function (Crawler $node, $i) {
		$first = $node->children()->first()->text();
		$last = $node->children()->last()->filter('a')->attr('href');
                return [$first, $last];
	}
);

foreach ($nodeValues as $node) {
        $lottery_name = $node[0];
	preg_match('#\((.*?)\)#', $node[1], $match);
	$lottery_link = $result_url.$match[1].'.pdf';
	
	print_r($lottery_name.' - '.$lottery_link);
	// $sql = "INSERT INTO lottery_details (lottery_name, lottery_link) VALUES ('$lottery_name', '$lottery_link')";
	// $result = $conn->query($sql);
}


