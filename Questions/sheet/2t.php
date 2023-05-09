<?php
error_reporting(E_ERROR | E_PARSE);
$data = array(); 

$data[] = $datetime = date('m/d/Y H:i:s');

$data[] = @$_SERVER['REMOTE_ADDR'];

$paramdata = @$_GET;

if(!empty($paramdata)){
	foreach($paramdata as $pdata){
		$data[] = $pdata;
	}
}

require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();

$client->setApplicationName('URL Database');

$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);

$client->setAccessType('offline');

$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$spreadsheetId = "1LEDSeS8AqAukzsLVa9hg44hCjr0xadYnbO0WQ5xaD4w"; 

$range = 'Sheet1!A1';

$params = array('valueInputOption' => 'RAW' );

$values = array('values'=>array($data));

$body = new Google_Service_Sheets_ValueRange($values);

$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

// Feedback caller
//echo '<pre>';print_r('OK-'.$datetime);die;
http_response_code(200);
echo 'OK';
?>