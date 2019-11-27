<?php

$newContactName = $_POST['newContactName'];
$newContactPhone = $_POST['newContactPhone'];
$newContactPassport = $_POST['newContactPassport'];
$newContactSocCard = $_POST['newContactSocCard'];
$newContactAddress = $_POST['newContactAddress'];
$newContactEmail = $_POST['newContactEmail'];
$newCarName = $_POST['newCarName'];
$newCarModel = $_POST['newCarModel'];
$newCarNumber = $_POST['newCarNumber'];
$newCarYear = $_POST['newCarYear'];
$newCarRunTime = $_POST['newCarRunTime'];
$newCarWINCode = $_POST['newCarWINCode'];
$newCarPlannedRunTime = $_POST['newCarPlannedRunTime'];
$newCarFile = $_FILES['newCarFile'];
require_once('bx24appcore/run.php');
echo $newContactName;
$resContactAdd = $crm->ContactAdd(array(
    'fields' => [
        "NAME" => $newContactName,
        // "LAST_NAME" => 'Valodyan', //$newContactSecondName,
        "ASSIGNED_BY_ID" => 1,
        "PHONE" =>  array(["VALUE" => "$newContactPhone", "VALUE_TYPE" => "WORK"]), //array(["VALUE" => $newContactPhone, "VALUE_TYPE" => "WORK"])
        "EMAIL" =>  array(["VALUE" => "$newContactEmail", "VALUE_TYPE" => "WORK"]), //array(["VALUE" => $newContactEmail, "VALUE_TYPE" => "WORK"])
        "UF_CRM_1574344533" => $newContactPassport,
        "UF_CRM_1574344596" => $newContactSocCard,
        "UF_CRM_1574344623" => $newContactAddress

    ],
    'params' => ['REGISTER_SONET_EVENT' => 'Y']
));
if (!empty($resContactAdd['result'])) {
    $contactId = $resContactAdd['result'];
    $resCarAdd = $crm->ListElementAdd(array(
        'IBLOCK_TYPE_ID' => 'lists',
        'IBLOCK_ID' => '37', //$iblockId,
        'ELEMENT_CODE' => $contactId,
        'FIELDS' => array(
            'NAME' => $newCarNumber,
            'PROPERTY_149' => $newCarName, // carName
            'PROPERTY_151' => $newCarModel, // carModel
            'PROPERTY_153' => $newCarRunTime, // carRunTime
            'PROPERTY_155' => $newCarYear, // carYear
            'PROPERTY_157' => $newCarWINCode, // carWINCOde
            'PROPERTY_159' => $newCarPlannedRunTime, // newCarPlannedRunTime
            // 'PROPERTY_161' => $companyId, // CompanyId
            'PROPERTY_163' => $contactId, // CompanyId
            'PROPERTY_165' => $newCarFile, // CompanyId
        )
    ));

    echo '<pre>';
    print_r($resCarAdd);
} else {
    echo 'Something goes wrong';
}
$resListElements = $crm->getListElementById(37);
echo '<pre>';
print_r($resListElements);
