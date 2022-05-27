<?php
$link = mysqli_connect('localhost', 'a0669467_tab', 'tab');
mysqli_select_db($link,'a0669467_tab');
$query = 'SELECT * FROM tab';
$result = mysqli_query($link,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body align="center">
	<h1>Редактор табличных данных.<br>Запчасти для MITSUBISHI</h1>

		<table align="center" width="100%" cellspacing="0" cellpadding="0" border="5">

					<tr>
						 <th height="50" width="50px">№ П/п</th>
                         <th height="50" height="50" height="50" height="50" width="500px">Производитель</th>
                         <th height="50" height="50" height="50" width="200px">Название</th>
                         <th height="50" height="50" width="200px">Артикул</th>
                         <th height="50" width="300px">Цена</th>
					</tr>
					<?php
					while ($row = mysqli_fetch_array($result)) {?>
						<tr data-id="<?=$row['id']?>">
							<td height="25" class="id"><?=$row['id']?></td>
							<td height="25" class="edit proiz"><?=$row['proiz']?></td>
							<td height="25" class="edit name"><?=$row['name']?></td>
							<td height="25" class="edit art"><?=$row['art']?></td>
							<td height="25" class="edit price"><?=$row['price']?></td>
						</tr>
					<?php } ?>
			</table>
			<button class="new">Добавить строку!</button>

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
<?php
mysqli_free_result($result);
mysqli_close($link);
?>