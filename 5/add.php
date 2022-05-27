<?php
$link = mysqli_connect('localhost', 'a0669467_tab', 'tab');
mysqli_select_db($link,'a0669467_tab');
$query = "INSERT INTO `tab` (`id`, `proiz`, `name`, `art`, `price`) VALUES (NULL, NULL, NULL, NULL, NULL)";
$result = mysqli_query($link,$query);
?>