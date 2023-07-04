<?php
include '../connect.php';

$notes_users = filterRequest('notes_users');
$password = filterRequest('password');

$sign_in = $connect->prepare("SELECT * FROM `notes` WHERE `notes_users` = ?");
$sign_in->execute(array($notes_users));
$data = $sign_in->fetchAll(PDO::FETCH_ASSOC);
$count = $sign_in->rowCount();
if ($count > 0) {
    echo json_encode(array('status' => 'success', 'data' => $data));
} else {
    echo json_encode(array('status' => 'fail'));
}
