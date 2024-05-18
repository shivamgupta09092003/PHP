<?php

$serverName = $_SERVER['SERVER_NAME'];
echo "Server Name: $serverName\n";


$serverIP = $_SERVER['SERVER_ADDR'];
echo "Server IP: $serverIP\n";


$serverSoftware = $_SERVER['SERVER_SOFTWARE'];
echo "Server Software: $serverSoftware\n";


$serverProtocol = $_SERVER['SERVER_PROTOCOL'];
echo "Server Protocol: $serverProtocol\n";


$httpMethod = $_SERVER['REQUEST_METHOD'];
echo "HTTP Method: $httpMethod\n";


$scriptName = $_SERVER['SCRIPT_NAME'];
echo "Script Name: $scriptName\n";


$scriptFilename = $_SERVER['SCRIPT_FILENAME'];
echo "Script Filename: $scriptFilename\n";


$phpSelf = $_SERVER['PHP_SELF'];
echo "PHP Self: $phpSelf\n";


$requestURI = $_SERVER['REQUEST_URI'];
echo "Request URI: $requestURI\n";


$queryString = $_SERVER['QUERY_STRING'];
echo "Query String: $queryString\n";


$serverPort = $_SERVER['SERVER_PORT'];
echo "Server Port: $serverPort\n";


$remoteAddress = $_SERVER['REMOTE_ADDR'];
echo "Remote Address: $remoteAddress\n";


$remotePort = $_SERVER['REMOTE_PORT'];
echo "Remote Port: $remotePort\n";
?>