<?php

require "../bx24appcore/run.php";

$aHTTP['http']['header'] = "User-Agent: PHP-SOAP/5.5.11\r\n";
$context = stream_context_create($aHTTP);
$client = new SoapClient($armsoft->soapUrl, array('trace' => 1, "stream_context" => $context));



$materials = $armsoft->getProducts($client);

$materialsAll = json_decode(json_encode($materials), true);
// $materials = $materialsAll['GetMaterialsListResult']['Rows']['MaterialInfo'];

// echo 'AllMaterials ARMSOFT <pre>';
// print_r($materialsAll);

file_put_contents('allMaterials.json', json_encode($materialsAll, JSON_UNESCAPED_UNICODE));



$resProductList = $crm->getProductList(
    array(
        'order' => ["SORT" => "ASC"],
        // 'filter' => ["CATALOG_ID" => 1], //["CATALOG_ID" => $catalogId],
        // 'select' => ["ID", "NAME", "CURRENCY_ID", "PRICE"]
    )
);

echo '<pre>';
print_r($resProductList);
foreach ($resProductList['result'] as $product) {
    //stugum enq xml id nery hly vor chisht a ashxatum
    echo '<br>';
    echo $product['XML_ID'];
}
$resProductList = $crm->getProductList(
    array(
        'order' => ["SORT" => "ASC"],
        'filter' => ["XML_ID" => $material['Code']], //["CATALOG_ID" => $catalogId],
        // 'select' => ["ID", "NAME", "CURRENCY_ID", "PRICE"]
    )
);
//hcic stacvac tvyalneri mej cikl enq frum
foreach ($materialsAll as $keychunk => $materialsChunk) {
    foreach ($materialsChunk as $material) {
        # code...



        $productUpdateId = $resProductList['result'][0]['ID'];
        // echo '<br> id in bitrix <br> ';
        // print_r($productUpdateId);

        echo '<br>';
        echo 'Name is --->' . $material['Name'];
        // print_r($material);
        foreach ($resProductList['result'] as $product) {
            //stugum enq xml id nery hly vor chisht a ashxatum


            if ($product['XML_ID'] == $material['Code']) {
                sleep(2);
                $resProductUpdate = $crm->ProductUpdate(
                    $productUpdateId, //id of updated product
                    array(
                        "NAME" => $material['Name'],
                        "PRICE" => $material['RetailPrice'], //$productUpdatePrice
                        "DETAIL_TEXT" => $material['Description'], //$productUpdatePrice
                        "PREVIEW_TEXT" => $material['Description'], //$productUpdatePrice
                        "PRICE" => $material['Price'], //$productUpdatePrice
                        "PRICE" => $material['Price'], //$productUpdatePrice
                    )
                );

                echo '<pre>';
                print_r($resProductUpdate);
            } else if ($product['XML_ID'] != $material['Code']) {
                sleep(2);
                $resProductAdd = $crm->ProductAdd(array(
                    'fields' => [
                        "NAME" => $material['Name'], //
                        "CURRENCY_ID" => "AMD", //$currencyId
                        "PRICE" => (int) $material['RetailPrice'], //$productNewPrice
                        "DETAIL_TEXT" => $material['Description'], //$productUpdatePrice
                        "PREVIEW_TEXT" => $material['Description'], //$productUpdatePrice
                        "SORT" =>  500,
                        "XML_ID" => $material['Code']
                    ],
                ));
                echo '<pre>';
                print_r($resProductAdd);
            }
        }
    }
}
