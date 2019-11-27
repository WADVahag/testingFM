<?php

$newCompanyName = $_POST['newCompanyName'];
$newCompanyHVHH = $_POST['newCompanyHVHH'];
$newCompanyBank = $_POST['newCompanyBank'];
$newCompanyLegalAddress = $_POST['newCompanyLegalAddress'];
$newCompanyWorkPlaceAddress = $_POST['newCompanyWorkPlaceAddress'];
$newCompanyPhone = $_POST['newCompanyPhone'];
$newCompanyMail = $_POST['newCompanyMail'];
$newCarName = $_POST['newCarName'];
$newCarModel = $_POST['newCarModel'];
$newCarNumber = $_POST['newCarNumber'];
$newCarYear = $_POST['newCarYear'];
$newCarRunTime = $_POST['newCarRunTime'];
$newCarWINCode = $_POST['newCarWINCode'];
$newCarPlannedRunTime = $_POST['newCarPlannedRunTime'];
$newCarFile = $_FILES['newCarFile'];
require_once('bx24appcore/run.php');
echo $newCompanyName;
$resCompanyAdd = $crm->CompanieAdd(array(
    'fields' => [
        "TITLE" => $newCompanyName,
        "COMPANY_TYPE" => "CUSTOMER",
        "ASSIGNED_BY_ID" => 1,
        "PHONE" =>  array(["VALUE" => "$newCompanyPhone", "VALUE_TYPE" => "WORK"]), //array(["VALUE" => $newCompanyPhone, "VALUE_TYPE" => "WORK"])
        "EMAIL" =>  array(["VALUE" => "$newCompanyMail", "VALUE_TYPE" => "WORK"]), //array(["VALUE" => $newCompanyPhone, "VALUE_TYPE" => "WORK"])
        'UF_CRM_1574424451' => $newCompanyHVHH, // HVHH
        'UF_CRM_1574424468' => $newCompanyBank, // BankNumber
        'UF_CRM_1574424482' => $newCompanyLegalAddress, //LegalAddress
        'UF_CRM_1574424494' => $newCompanyWorkPlaceAddress, // WokPlace Address

    ],
    'params' => ['REGISTER_SONET_EVENT' => 'Y']
));
if (!empty($resCompanyAdd['result'])) {
    $CompanyId = $resCompanyAdd['result'];
    $resCarAdd = $crm->ListElementAdd(array(
        'IBLOCK_TYPE_ID' => 'lists',
        'IBLOCK_ID' => '37', //$iblockId,
        'ELEMENT_CODE' => $CompanyId,
        'FIELDS' => array(
            'NAME' => $newCarNumber,
            'PROPERTY_149' => $newCarName, // carName
            'PROPERTY_151' => $newCarModel, // carModel
            'PROPERTY_153' => $newCarRunTime, // carRunTime
            'PROPERTY_155' => $newCarYear, // carYear
            'PROPERTY_157' => $newCarWINCode, // carWINCOde
            'PROPERTY_159' => $newCarPlannedRunTime, // newCarPlannedRunTime
            'PROPERTY_161' => $CompanyId, // CompanyId
            //   'PROPERTY_163' => $ContactId // COntactId
            'PROPERTY_165' => $newCarFile, // CompanyId
        )
    ));

    echo '<pre>';
    print_r($resCarAdd);
} else {
    echo 'Something goes wrong';
}
$resListElements = $crm->getCompanyById(7);
echo '<pre>';
print_r($resListElements);
echo 'gfcgfcgfcdtf';
// $resProviderAdd = $crm->ProviderAdd('provider1', 'https/tes.com', 'testProvider');
// echo '<pre>';
// print_r($resProviderAdd);
