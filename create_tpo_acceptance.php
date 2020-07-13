<?php

$taskIdElement = $_REQUEST['taskIdElement'];
$tpoIdElement = $_REQUEST['tpoIdElement'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://123.108.43.251:8080/hapi-fhir-jpaserver/fhir/Task/".$taskIdElement,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PATCH",
  CURLOPT_POSTFIELDS =>"[ \r\n  { \r\n   \"op\": \"add\", \r\n   \"path\": \"/owner\", \r\n   \"value\": {\"reference\": \"Organization/$tpoIdElement\",\"display\":\"TPO - HospitalConnectathon\"}\r\n },\r\n  { \r\n   \"op\": \"replace\", \r\n   \"path\": \"/status\", \r\n   \"value\": \"accepted\"  \r\n }\r\n]",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json-patch+json"
  ),
));

$response = curl_exec($curl);
$http_code = curl_getinfo($curl,CURLINFO_HTTP_CODE);
$error_string = curl_error($curl);

$response_array = json_decode($response, true);

curl_close($curl);

//echo $response_array;


if($response === FALSE || $http_code >= 400)
{
	$status_msg =  "Error while accepting telehealth consult ".$error_string;
}
else
{
  //$tpoIDFromResponse = explode("/", .$response_array['owner/reference'])[1];
  //$patientIdFromResponse =  explode("/", .$response_array['for/reference'])[1];

  //$status_msg = "TPO Id ".$tpoIdElement." accepted Telehealth Consultation Id ".$response_array['id']." for Patient ".$patientIdFromResponse;
  $status_msg = "TPO Id ".$tpoIdElement." accepted Telehealth Consultation Id ".$response_array['id'];
}

//echo $status_msg;
include 'includes/show_response.php';
