<?php
include '../connect.php';

$notes_title = filterRequest('notes_title');
$notes_content = filterRequest('notes_content');
$notes_image = filterRequest('notes_image');
$notes_users = filterRequest('notes_users');

$sign_up = $connect->prepare(
    "INSERT INTO `notes`(`notes_title`, `notes_content`, `notes_image` , `notes_users`) 
                 VALUES (?,?,?,?)"
);
$sign_up->execute(array($notes_title, $notes_content, $notes_image,$notes_users));

$count = $sign_up->rowCount();
if ($count > 0) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));

}
