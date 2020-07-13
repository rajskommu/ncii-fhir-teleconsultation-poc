<?php

$patientId = $_REQUEST['patientIdElement'];

$end_point_url = 'http://123.108.43.251:8080/hapi-fhir-jpaserver/fhir/Patient/'.$patientId.'/$everything';
$ch = curl_init($end_point_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/json;") //setting our mime type for make it work on $_FILE variable
);
curl_setopt($ch, CURLOPT_GET, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$patientResponse = curl_exec($ch);
$http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
$error_string = curl_error($ch);

curl_close($curl);

if($responseFromGetTaskOperation === FALSE || $http_code >= 400)
{
  $status_msg =  "Error while fetching Task ".$error_string;
  echo $status_msg;
  return;
}

//echo $status_msg;
header('Content-Type: application/json');
echo ($patientResponse);
