<?php 
require_once 'model/database.php';
require_once 'model/client.php';
require_once 'model/showType.php';
$clientObj = new Clients;
$clientArray = $clientObj->getClient();
$client20Array = $clientObj->get20Client();
$clientCardArray = $clientObj->getCardClient(1);
$clientAllArray = $clientObj->getAllCLient();
$showType = new showType;
$clientmArray = $clientObj->getMCLient();
$showTypeArray = $showType->getShowType();