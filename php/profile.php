<?php


$client = new MongoDB\Client(
    'mongodb+srv://Poovizhi:<livi1511>@cluster0.yvys7bu.mongodb.net/test?retryWrites=true&w=majority'
);
echo $client;
echo 'Success connection';
$db = $client->test;
$collection = $client->test->users;

$name=$_POST['name'];
$email=$_POST['email'];
$mobilenum=$_POST['mobilenum'];
$address=$_POST['address'];

$insertOneResult = $collection->insertOne([
    'name' => $name,
    'email' => $email,
    'mobilenum' => $mobilenum,
    'address' => $address,
 ]);

 echo 'success';
 


?>