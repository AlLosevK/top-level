<?php
  $queryUrl = 'https://toplevel.bitrix24.com/rest/533/7pplq2vppgsf7upj/crm.lead.add.json';

  $queryData = http_build_query(array(
    'fields' => array(
      'TITLE' => 'SiteForm',
      'NAME' => $_POST["name"],
      'EMAIL' => array(
        array(
          "VALUE" => $_POST["email"],
          "VALUE_TYPE" => "WORK"
        )
      ),
      'PHONE' => array(
        array(
          "VALUE" => $_POST["hiden"],
          "VALUE_TYPE" => "WORK"
        )
      ),
      'UF_CRM_630DBC5E7AF83' => $_POST["propName"],
      'UTM_SOURCE' => $_POST['utm-source'],
      'UTM_MEDIUM' => $_POST['utm-medium'],
      'UTM_CONTENT' => $_POST['utm-content'],
      'UTM_TERM' => $_POST['utm-term']
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

  header('location: https://offplan-toplevel.com/thanks/');
  exit();
?>