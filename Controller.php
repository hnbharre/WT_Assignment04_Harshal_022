<?php
header("Content-type: application/json");
require 'Data.php';
// include 'Data.php';

$req = $_GET['req'] ?? null;

if ($req) {
    $jsonData = file_get_contents("restaurant.json");
    $dataList = json_decode($jsonData, true)['menu_items'];
    try {
        $menuData = new RestaurantData($dataList);
    } catch (Exception $th) {
        echo json_encode([$th->getMessage()]);
        return;
    }
}

switch ($req) {
    case 'name_list':
        echo $menuData->getMenuName();
        break;

    case "menu_data":   
        $id = $_GET['id'] ?? null;
        echo $menuData->getMenuById($id);
        break;
    
    default:
        echo json_encode(["In-valid request"]);
        break;
}

?>