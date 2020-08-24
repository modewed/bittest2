<?php
$wsdl = 'http://ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl';
if ($_POST['ipAddress'] == 'none'){
    $ipAddress = $_SERVER['REMOTE_ADDR'];
}else{
    $ipAddress = $_POST['ipAddress'];
}
$licenseKey = '0';
$client = new SoapClient($wsdl);

$parameters = array('ipAddress' => $ipAddress, 'licenseKey' => $licenseKey);
$resClient = $client->ResolveIP($parameters)->ResolveIPResult;





$ret = array('Error' => false, 'City' => '', 'Country' => '' );
if ($resClient->City == '' and $resClient->Country == ''){
    $ret['Error'] = true;
} elseif ($resClient->City == ''){
    $ret['City'] = 'Failed to define city';
    $ret['Country'] = 'Country - ' . $resClient->Country;
} elseif ($resClient->Country == ''){
    $ret['City'] = 'City - ' . $resClient->City;
    $ret['Country'] = 'Failed to define country';
} else{
    $ret['City'] = 'City - ' . $resClient->City;
    $ret['Country'] = 'Country - ' . $resClient->Country;
}
echo json_encode($ret);