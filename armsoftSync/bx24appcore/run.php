<?php

require __DIR__ . "/vendor/autoload.php";



use Bitrix24\Crm;

$webhook = 'https://b24-5izd2o.bitrix24.ru/rest/1/bolibob925s2tfau/';
$crm = new Crm($webhook);


use Armsoft\Armsoft;

$soapUrl = 'http://37.186.119.194/AccountantService/AccountantService.svc?wsdl';
$username = 'ADMIN';
$password = '';
$dbname = 'Default_70';

$armsoft = new Armsoft($soapUrl, $username, $password, $dbname);
