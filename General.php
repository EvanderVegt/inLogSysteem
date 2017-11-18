<?php
function connectionDB(){
    
    $hostname = 'localhost';
    $databasename = 'inlog_scherm';
    $username = 'root';
    $password = '';
    
    $conn = new mysqli($hostname, $username, $password, $databasename);
    return $conn;
}