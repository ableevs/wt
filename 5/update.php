<?php
$link = mysqli_connect('localhost', 'a0669467_tab', 'tab');
mysqli_select_db($link,'a0669467_tab');

$tableName = $_POST['table'];
$fieldName = $_POST['field'];
$value = $_POST['value'];
$id = $_POST['id'];

$query = "UPDATE tab SET $fieldName = '$value' WHERE id = $id";
$result = mysqli_query($link,$query);
?>