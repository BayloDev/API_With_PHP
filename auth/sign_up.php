<?php
include '../connect.php';

$username = filterRequest('username');
$email = filterRequest('email');
$password = filterRequest('password');

$sign_up = $connect->prepare(
    "INSERT INTO `users`(`username`, `email`, `password`) 
                 VALUES (?,?,?)"
);
$sign_up->execute(array($username, $email, $password));

$count = $sign_up->rowCount();
if ($count > 0) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));

}
