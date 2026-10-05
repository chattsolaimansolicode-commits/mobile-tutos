<?php
header("Content-type: application/json");
$categories = [
    ["id" => 1,"nom" => "Development" ],
    ["id"=>2,"nom" =>"Design"]
];

echo json_encode($categories);
?>


