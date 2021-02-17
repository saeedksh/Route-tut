<?php
/**
 * Created by PhpStorm.
 * User: Saeed-pc
 * Date: 8/16/2019
 * Time: 11:45 PM
 */

$host = 'localhost';
$database='route-tut';
$username='root';
$password='';


$conn = new mysqli ($host,$username,$password,$database);

if($conn->connect_error)
{
    die("die". $conn->connect_error);
}

$query = "INSERT INTO tbl_users (name, family, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($query);
print_r($stmt);
$stmt->bind_param("sss",$name,$family,$email);

$name = 'mehrad';
$family = 'yarijany';
$email = 'M.yari@gmail.com';

$stmt->execute();