<?php
require('dbconnect.php');

$stmt = $db->prepare('delete from memos where id=?');
if (!$stmt) {
  die($db->error);
}
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (!$id) {
  echo 'メモが正しく指定されていません';
  exit();
}
$stmt->bind_param('i', $id);

header('Location: index.php');
?>