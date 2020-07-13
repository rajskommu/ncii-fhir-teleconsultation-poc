<?php

$taskIdElement = $_REQUEST['taskIdElement'];
$tpoIdElement = $_REQUEST['tpoIdElement'];
$tpoOutcomeElement = $_REQUEST['tpoOutcomeElement'];
$tpoIdtpoNotesElementElement = $_REQUEST['tpoNotesElement'];


$end_point_url = 'http://123.108.43.251:8080/hapi-fhir-jpaserver/fhir/Task/'.$taskIdElement;
$ch = curl_init($end_point_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/json;") //setting our mime type for make it work on $_FILE variable
);
curl_setopt($ch, CURLOPT_GET, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$responseFromGetTaskOperation = curl_exec($ch);
$http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
$error_string = curl_error($ch);

$responseFromGetTaskOperation_array = json_decode($responseFromGetTaskOperation, true);
$patient_ref = $responseFromGetTaskOperation_array['requester']['reference'];
$enc_ref = $responseFromGetTaskOperation_array['encounter']['reference'];
curl_close($curl);

if($responseFromGetTaskOperation === FALSE || $http_code >= 400)
{
  $status_msg =  "Error while fetching Task ".$error_string;
  echo $status_msg;
  return;
}

$riskAssessmentParam = '
{ "resourceType": "RiskAssessment",
  "identifier": [
    {
      "use": "official",
      "system": "http://example.org",
      "value": "RiskAssessment-Covid1-1"
    }
  ],
  "basedOn": {
    "reference": "Task/'.$taskIdElement.'"
  },
  "status": "preliminary",
  "code": {
    "coding": [
      {
        "system": "http://snomedct.org/",
        "code": "225338004",
        "display": "Risk assessment (procedure)"
      }
    ]
  },
  "subject": {
    "reference": "'.$patient_ref.'"
  },
  "encounter": {
    "reference": "'.$enc_ref.'"
  },
  "performer": {
    "reference": "Practitioner/f201"
  },
  "reasonCode": [
    {
      "coding": [
        {
          "system": "http://snomedct.org/",
          "code": "840533007",
          "display": "Severe acute respiratory syndrome coronavirus 2 (organism)"
        }
      ],
      "text": "Severe acute respiratory syndrome coronavirus 2 (organism)"
    }
  ],
  "prediction": [
    {
      "outcome": {
        "coding": [
          {
            "system": "http://snomedct.org/",
            "code": "78648007",
            "display": "At risk for infection"
          }
        ],
        "text": "At risk for infection"
      }
    }
  ],
  "note": [
    {
      "text": "This risk assessment is based on Covid-19"
    }
  ]
}
';

$end_point_url = 'http://123.108.43.251:8080/hapi-fhir-jpaserver/fhir/RiskAssessment';
$ch = curl_init($end_point_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/json;") //setting our mime type for make it work on $_FILE variable
);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $riskAssessmentParam);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$responseFromPostRiskAssessmentOperation = curl_exec($ch);
$http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
$error_string = curl_error($ch);


$responseFromPostRiskAssessmentOperation_array = json_decode($responseFromPostRiskAssessmentOperation, true);

curl_close($ch);

if($responseFromPostRiskAssessmentOperation === FALSE || $http_code >= 400)
{
	$status_msg =  "Error while completing telehealth consult / Risk Assessment ".$error_string;
}
else
{
  //$tpoIDFromResponse = explode("/", .$response_array['owner/reference'])[1];
  //$patientIdFromResponse =  explode("/", .$response_array['for/reference'])[1];

  //$status_msg = "TPO Id ".$tpoIdElement." accepted Telehealth Consultation Id ".$response_array['id']." for Patient ".$patientIdFromResponse;
  $status_msg = "TPO Id ".$tpoIdElement." completed Telehealth Consultation Id ".$tpoIdElement." with RiskAssement Id as ".$responseFromPostRiskAssessmentOperation_array['id'];
}

//echo $status_msg;
include 'includes/show_response.php';
