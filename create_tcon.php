<?php

$time_stamp =  date('YmdHis', time());
$authored_on =  date('Y-m-d\TH:i:s', time()).'.963+00:00';
$pid = $_REQUEST['element_4'].$time_stamp;
$first_name = $_REQUEST['element_1_1'];
$last_name = $_REQUEST['element_1_2'];
$phone = $_REQUEST['element_2_1'].$_REQUEST['element_2_2'].$_REQUEST['element_2_3'];
$dob = $_REQUEST['element_3_3']."-".$_REQUEST['element_3_1']."-".$_REQUEST['element_3_2'];
$gender = $_REQUEST['element_14'];

$obs_id = "OBS".$time_stamp;
$symptom = $_REQUEST['element_6'];
$severity = $_REQUEST['element_16'];

$que_id = "QUESTIONRESPONSE".$time_stamp;
$qa1 = $_REQUEST['element_19'];
$qa2 = $_REQUEST['element_20'];
$qa3 = $_REQUEST['element_21'];

$enc_id = "ENCOUNTER".$time_stamp;
$enc_status = 'planned';

$condition_id =  "COMORBID".$time_stamp;
$condition_name = $_REQUEST['element_17'];
$condition_severity = $_REQUEST['element_18'];

$condition_json = '';
if($condition_name != '')
{
    $condition_json = '{

      "fullUrl": "Condition/'.$condition_id.'",

      "resource": {

        "resourceType": "Condition",

        "id": "'.$pid.'",
        "identifier": [

            {
                "use":"official",
                "value" :"'.$condition_id.'"
            }
  
          ],

        "clinicalStatus": {

          "coding": [

            {

              "system": "http://terminology.hl7.org/CodeSystem/condition-clinical",

              "code": "resolved"

            }

          ]

        },
        "severity": {
            "coding": [
              {
                "system": "http://snomed.info/sct",
                "code": "24484000",
                "display": "'.$condition_severity.'"
              }
            ]
          },

        "verificationStatus": {

          "coding": [

            {

              "system": "http://terminology.hl7.org/CodeSystem/condition-ver-status",

              "code": "confirmed" 

            }

          ]

        },

        "code": {

          "coding": [

            {

              "system": "http://snomed.info/sct",

              "code": "267102003",

              "display": "'.$condition_name.'"

            }

          ],

          "text": "'.$condition_name.'"

        },

        "subject": {

          "reference": "Patient?identifier='.$pid.'"

        },
        "encounter": {

            "reference": "Encounter?identifier='.$enc_id.'"
  
          },
        "onsetDateTime": "2020-02-19T05:32:27+05:30",

        "abatementDateTime": "2020-03-07T06:52:27+05:30",

        "recordedDate": "2020-02-19T05:32:27+05:30"

      },

      "request": {

        "method": "POST",

        "url": "Condition"

      }

    },';
}

$bundle_json = '
{

  "resourceType": "Bundle",
 

  "type": "transaction",

  "entry": [

    {

      "fullUrl": "Patient/'.$pid.'",

      "resource": {

        "resourceType": "Patient",

        "id": "'.$pid.'",

        "identifier": [

          {

            "system": "https://github.com/synthetichealth/synthea",

            "value": "'.$pid.'"

          },

          {

            "type": {

              "coding": [

                {

                  "system": "http://terminology.hl7.org/CodeSystem/v2-0203",

                  "code": "SS",

                  "display": "Aadhaar Number"

                }

              ],

              "text": "Aadhaar Number"

            },

            "system": "http://hl7.org/fhir/sid/us-ssn",

            "value": "'.$pid.'"

          }

        ],

        "name": [

          {

            "use": "official",

            "family": "'.$first_name.'",

            "given": [

              "'.$first_name.'"

            ]
          },

          {

            "use": "maiden",

            "family": "'.$last_name.'",

            "given": [

              "'.$last_name.'"

            ]

          }

        ],



        "telecom": [

          {

            "system": "phone",

            "value": "'.$phone.'",

            "use": "mobile"

          }

        ],

        "gender": "'.$gender.'",

        "birthDate": "'.$dob.'",

        "address": [

          {

              "line": [

              "123 Beach Road"

            ],

            "city": "Bangalore",

            "state": "Karnataka",

            "postalCode": "560001",

            "country": "IND"

          }

        ],

        "maritalStatus": {

          "coding": [

            {

              "system": "http://terminology.hl7.org/CodeSystem/v3-MaritalStatus",

              "code": "M",

              "display": "Married"

            }

          ]

        },

        "communication": [

          {

            "language": {

              "coding": [

                {

                  "system": "http://hl7.org/fhir/valueset-languages.html",

                  "code": "en-US",

                  "display": "English"

                }

              ]

            }

          }

        ]

      },

      "request": {

        "method": "POST",

        "url": "Patient"

      }

    },

 {

    "fullUrl": "Encounter/'.$enc_id.'",

    "resource": {

        "resourceType": "Encounter",

        "id": "'.$enc_id.'",

        "identifier": [

            {
                "use":"official",
                "value" :"'.$enc_id.'"
            }
  
          ],

        "status": "'.$enc_status.'",

        "class": {

            "system": "http://terminology.hl7.org/CodeSystem/v3-ActCode",

             "code": "IMP",

             "display": "inpatient encounter"

        },

        "subject": {

          "reference": "Patient?identifier='.$pid.'",

          "display": "'.$first_name." ".$last_name.'"

          },

        "period": {

          "start": "2020-06-27",

          "end" : "2020-06-29"

        },

        "reasonCode": {

          "coding": {

            "system": "http://snomed.info/sct",

            "code":  "840533007",

            "display": "Severe acute respiratory syndrome coronavirus 2 (organism)"

          }

        }

      },

    "request": {

      "method": "POST",

      "url":  "Encounter" 

    }

  },

'.$condition_json.'
    {

      "fullUrl": "Observation/'.$pid.'",

      "resource": {

        "resourceType": "Observation",

        "id": "'.$pid.'",
        "identifier": [

            {
                "use":"official",
                "value" :"'.$obs_id.'"
            }
  
          ],

        "status": "final",

        "category": [

          {

            "coding": [

              {

                "system": "http://terminology.hl7.org/CodeSystem/observation-category",

                "code": "vital-signs",

                "display": "vital-signs"

              }

            ]

          }

        ],

        "code": {

          "coding": [

            {

              "system": "http://loinc.org",

              "code": "8310-5",

              "display": "'.$symptom.'"

            }

          ],

          "text": "'.$symptom.'"

        },

        "subject": {

          "reference": "Patient?identifier='.$pid.'"

        },

	"encounter": {

          "reference": "Encounter?identifier='.$enc_id.'"

        },

        "effectiveDateTime": "2020-02-19T05:32:27+05:30",

        "issued": "2020-02-19T05:32:27.361+05:30",

        "valueQuantity": {

          "value": 40.604,

          "unit": "Cel",

          "system": "http://unitsofmeasure.org",

          "code": "Cel"

        },

	"interpretation": [

          {

            "coding": [

              {

                "system": "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",

                "code": "N",

                "display": "Normal"

              }

            ]

          }

        ]

      },

      "request": {

        "method": "POST",

        "url": "Observation"

      }

    },
    {
        "fullUrl": "QuestionnaireResponse/'.$que_id.'",
        "resource": {
            "resourceType": "QuestionnaireResponse",
            "id": "'.$que_id.'",
           
            "identifier": [
    
                {
                    "use":"official",
                    "value" :"'.$que_id.'"
                }
      
              ],
              "subject": {
    
                "reference": "Patient?identifier='.$pid.'"
      
              },
      
          "encounter": {
      
                "reference": "Encounter?identifier='.$enc_id.'"
      
              },
            "item": [
                {
                    "linkId": "1",
                    "item": [
                        {
                            "linkId": "1.1",
                            "text": "Contact with covid-19 patient in the last 14 days?",
                            "answer": [
                                {
                                    "valueCoding": {
                                        "code": "at0047",
                                        "display": "'.$qa1.'"
                                      }
                                }
                            ]
                        },
                        {
                            "linkId": "1.2",
                            "text": "Travel to COVID-19 hotspot in the last 14 days?",
                            "answer": [
                                {
                                    "valueCoding": {
                                        "code": "at0047",
                                        "display": "'.$qa2.'"
                                      }
                                }
                            ]
                        },
                        {
                            "linkId": "1.3",
                            "text": "Living in COVID-19 hotspot?",
                            "answer": [
                                {
                                    "valueCoding": {
                                        "code": "at0047",
                                        "display": "'.$qa3.'"
                                      }
                                }
                            ]
                        }
                    ]
                }
    
             
            ]
        },
        "request": {
    
            "method": "POST",
    
            "url": "QuestionnaireResponse"
    
          }
    }

  ]

}
';

$end_point_url = 'http://123.108.43.251:8080/hapi-fhir-jpaserver/fhir/';
$ch = curl_init($end_point_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/json;") 
);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $bundle_json);
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
//echo $bundle_json;
if($response === FALSE || $http_code >= 400)
{
	$status_msg =  "Error while executing bundle. ".print_r($response, TRUE);
	echo $status_msg;
	return;
}

$task_json = '
{
  "resourceType": "Task",
  "id": "'.$pid.'",
  "identifier": [
    {
      "system": "https://github.com/synthetichealth/synthea",
      "value": "'.$pid.'"
    }
  ],
  "status": "requested",
  "intent": "order",
  "priority": "stat",
  "for": {
    "reference": "Patient?identifier='.$pid.'"
  },
  "encounter": {
    "reference": "Encounter?identifier='.$pid.'"
  },
  "requester": {
    "reference": "Patient?identifier='.$pid.'"
  },
  "focus": {
    "reference": "Patient?identifier='.$pid.'"
  },
  "authoredOn": "'.$authored_on.'",
  "reasonCode": {
    "text": "The Task.reason should only be included if there is no Task.focus or if it differs from the reason indicated on the focus."
  },
  "note": [
    {
      "text": "This is an example to demonstrate using task for actioning a servicerequest . "
    }
  ]
}
';
//echo $task_json;
$end_point_url = 'http://123.108.43.251:8080/hapi-fhir-jpaserver/fhir/Task';
$ch = curl_init($end_point_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/json;") 
);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $task_json);
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
	$status_msg =  "Error while creating Task. ".$error_string;
}
if($response != 'success')
{
	$status_msg = "Patient created successfully. Patient identifier is $pid";
	$status_msg = "Task id ".$response_array['id']." created successfully. Task identifier is $pid";
	$status_msg = $status_msg. "<br/>Please suffix the time stamp $time_stamp for all identifiers to easily identify them.";
}

$returnVal['status_msg'] = $status_msg;
$returnVal['id'] = $response_array['id'];

include 'includes/show_response.php';
?>
