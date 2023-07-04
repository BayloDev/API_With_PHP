<?php
include '../connect.php';

$notes_id = filterRequest('notes_id');
$notes_content = filterRequest('notes_content');
$notes_title = filterRequest('notes_title');
$notes_image = filterRequest('notes_image');

$edit = $connect->prepare(
    'UPDATE `notes` 
     SET `notes_title`=? , `notes_content`=? , `notes_image`=? 
     WHERE `notes_id`=?'
);
$edit->execute(array($notes_title, $notes_content, $notes_image, $notes_id));
$count = $edit->rowCount();
if ($count > 0) {
    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'fail'));
}
