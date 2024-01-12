<?php
$server="localhost";
$database="botique2";
$user="root";
$password=""

$con= <mysqli-connect>($server,$user,$password,$database);

if(!$con){

    die("not connected".mysqli-error($con));
}
echo "connected successifully";









?>