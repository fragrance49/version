
<?php

// $fp = fopen (  "assets/upload/number.csv" , "r" );
// while (( $data = fgetcsv ( $fp , 1000 , "," )) !== FALSE ) {
//     $data1[] =$data;
 
// }
// fclose ( $fp );
       
$number = $_GET['QueryPage'];
$form   = $_GET['form'];
$qjson = $_GET['qjson'];

// $data = [
//     ['User IP', $_SERVER['REMOTE_ADDR']],
//     ['Current time', date('Y-m-d H:i')],
//     ['Number ', $number],
// ];
// $dataList = array_merge($data, $data1);


// $filename ='number.csv';

// // open csv file for writing
// $f = fopen('assets/upload/'.$filename, 'w');

// if ($f === false) {
//   die('Error opening the file ' . $filename);
// }

// // write each row at a time to a file
// foreach ($dataList as $row) {
//   fputcsv($f, $row);
// }

// // close the file
// fclose($f);
header("Location: index.php?from=".$form."&qjson=".$qjson);
exit();