<?php
header('Content-type: applicaton/json');
$categories = [
    ["id" =>1, "nom"=>"dev"],
    ["id"=>2, "nom"=>"des"]
];
echo json_encode($categories);