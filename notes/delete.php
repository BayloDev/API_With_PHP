<?php
include '../connect.php';

$notes_id = filterRequest('notes_id');
$delete = $connect->prepare('DELETE FROM `notes` WHERE `notes_id`=?');
$delete->execute(array($notes_id));
$count = $delete->rowCount();
if ($count > 0) {
    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'fail'));
}
