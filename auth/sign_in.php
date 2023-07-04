<?php
include '../connect.php';

$email = filterRequest('email');
$password = filterRequest('password');

$sign_in = $connect->prepare("SELECT * FROM `users` WHERE `email` = ? AND `password`=? ");
$sign_in->execute(array($email, $password));
$data = $sign_in->fetch(PDO::FETCH_ASSOC);
$count = $sign_in->rowCount();
if ($count > 0) {
    echo json_encode(array('status' => 'success', 'data' => $data));
} else {
    echo json_encode(array('status' => 'fail'));
}
