<?php

$org_name = $_REQUEST['element_6'];
$org_id = $_REQUEST['element_5'];
$param = '
{
  "resourceType": "Organization",
  "identifier": [
	{	
			"use":"official",
			"value":"'.$org_id.'"
	}
  ],
  "active":true,
  "name": "'.$org_name.'",
   "type": [
    {
      "coding": [
        {
          "system": "http://terminology.hl7.org/CodeSystem/organization-type",
          "code": "team",
          "display": "Teleservice Organization"
        }
      ]
    }
  ],
  "telecom": [
    {
      "system": "phone",
      "value": "080-431421",
      "use": "work"
    },
    {
      "system": "email",
      "value": "noone@noone.com",
      "use": "work"
    }
  ],
  "address": [
    {
	  "line":"TEST HOSPITAL",
      "city":"Visakhapatnam",
	  "state":"Andhra Pradesh",
	  "country": "India"
    }
  ]
}';

$end_point_url = 'http://123.108.43.251:8080/hapi-fhir-jpaserver/fhir/Organization';
$ch = curl_init($end_point_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/json;") //setting our mime type for make it work on $_FILE variable
);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLINFO_HEADER_OUT, true);

//uncomment below if you have to use basic auth
//curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

$response = curl_exec($ch);
$http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
$error_string = curl_error($ch);

$response_array = json_decode($response, true);
//$debug_data = curl_getinfo($ch);
//echo print_r($response, TRUE);
//echo print_r($error_string, TRUE);

curl_close($ch);

if($response === FALSE || $http_code >= 400)
{
	$status_msg =  "Error while creating Org. ".$error_string;
}
if($response != 'success')
{
	$status_msg = "Org id ".$response_array['id']." created successfully";
}

$returnVal['status_msg'] = $status_msg;
$returnVal['id'] = $response_array['id'];

//echo $status_msg;
//echo "<br/>"
include 'includes/show_response.php';
?>
