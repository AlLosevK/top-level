<?php
  $queryUrl = 'https://b24-gmf02g.bitrix24.ru/rest/1/ca5111v14812ihl1/crm.lead.add.json';
  $queryData = http_build_query(array(
    'fields' => array(
      'TITLE' => 'Закрытая',
      'NAME' => $_POST["name"],
      'EMAIL' => array(
      array(
        "VALUE" => $_POST["email"],
        "VALUE_TYPE" => "WORK"
      )
      )
    ),
    'params' => array("REGISTER_SONET_EVENT" => "Y")
  ));
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => FALSE,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $queryUrl,
    CURLOPT_POSTFIELDS => $queryData,
  ));
  $result = curl_exec($curl);
  curl_close($curl);
?>
